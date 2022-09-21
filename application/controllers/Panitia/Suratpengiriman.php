<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratpengiriman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('panitia/Panitia');
        $this->load->helper('url');
    }
    public function index()
    {

        $TampilData = $this->Panitia->suratperintah();
        $page = 'Surat Perintah Pengiriman';
        $data = [
            'suratperintah' => $TampilData,
            'title' => $page,
            'breadcrumb' => $page
        ];

        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/surat', $data);
        $this->load->view('panitia/partials/end');
    }

    //Fungsi Delete
    public function delete($pengiriman_id)
    {
        $this->Panitia->deletePengiriman($pengiriman_id);
        redirect('panitia/suratpengiriman');
    }

    //Fungsi Edit
    public function edit($id)
    {
        $this->form_validation->set_rules('status_transaksi', 'Status Order', 'required');
        if ($this->form_validation->run() == false) {
            redirect('panitia/suratpengiriman/');
        } else {
            $this->db->set('status_transaksi', $this->input->post('status_transaksi', true));
            $this->db->where('lelang_id', $id);
            $this->db->update('lelang_pengiriman');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');
            redirect('panitia/suratpengiriman/');
        }
    }

    //Fungsi Kirim Email
    public function VerifyEmail()
    {
        if ($this->Panitia->sendEmail($this->input->post('email'))) {
            // successfully sent mail
            $this->session->set_flashdata('msg', '<script>alert("Success terkirim")</script>');

            redirect('panitia/suratpengiriman');
        } else {
            // error
            $this->session->set_flashdata('msg', '<script>alert("Gagal Terkirim")</script>');

            redirect('panitia/suratpengiriman');
        }
    }

    //  function upload_file(){

    //     $config['upload_path'] = 'assets/uploads/';
    
    //     $config['allowed_types'] = 'doc|docx|pdf'; //tipe file attach
    
    //     $this->load->library('upload', $config);
    
    //     if($this->upload->do_upload('resume')){
    
    //      return $this->upload->data();  
    
    //     }else{
    
    //      return $this->upload->display_errors();
    
    //     }
    
    //   }

    public function suratPerintah()
    {
        $this->load->library('pdf');
        // $this->load->model('Panitia/suratperintah');
        $data =  $this->Panitia->suratperintah();
        $pdf = new FPDF('l', 'mm', 'A5');
        $pdf = new FPDF('P', 'pt', array(500,233));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(190, 7, 'SURAT PERINTAH PENGIRIMAN KE PEMENANG LELANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, ' ID Lelang ', 1, 0);
        $pdf->Cell(85, 6, ' ID Peserta', 1, 0);
        $pdf->Cell(27, 6, 'Tanggal Diumumkan', 1, 0, 'R');
        $pdf->Cell(27, 6, date('Y-m-d', mktime(date('m'), date('d'), date('Y'))), 0, 1, 'R');
        $pdf->Cell(27, 6, 'Tanggal Pembayaran', 1, 0, 'R');
        $pdf->Cell(27, 6, date('Y-m-d', mktime(date('m'), date('d'), date('Y'))), 0, 1, 'R');
        $pdf->Cell(25, 6, 'Bukti Pembayaran', 1, 1);
        $pdf->Cell(25, 6, 'Konfirmasi Terima Produk', 1, 1);
        $pdf->Cell(25, 6, 'Provinsi', 1, 1);
        $pdf->Cell(25, 6, 'Kota', 1, 1);
        $pdf->Cell(25, 6, 'Kecamatan', 1, 1);
        $pdf->Cell(25, 6, 'Kelurahan', 1, 1);
        $pdf->Cell(25, 6, 'Alamat', 1, 1);
        $pdf->Cell(25, 6, 'Status Pembayaran', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        // $mahasiswa['mahasiswa'] =  $this->Panitia->suratperintah();
        foreach ($data as $row) {
            $pdf->Cell(20, 6, $row['lelang_id'], 1, 0);
            $pdf->Cell(85, 6, $row['peserta_id'], 1, 0);
            $pdf->Cell(25, 6, $row['tgl_diumumkan'], 1, 1);
            $pdf->Cell(25, 6, $row['tgl_bayar'], 1, 1);
            $pdf->Cell(25, 6, $row['bukti_bayar'], 1, 1);
            $pdf->Cell(25, 6, $row['konfirmasi_terimaproduk'], 1, 1);
            $pdf->Cell(25, 6, $row['provinsi_kirim'], 1, 1);
            $pdf->Cell(25, 6, $row['kota_kirim'], 1, 1);
            $pdf->Cell(25, 6, $row['kecamatan_kirim'], 1, 1);
            $pdf->Cell(25, 6, $row['kelurahan_kirim'], 1, 1);
            $pdf->Cell(25, 6, $row['alamat_kirim'], 1, 1);
            $pdf->Cell(25, 6, $row['tgl_diumumkan'], 1, 1);
            $pdf->Cell(25, 6, $row['status'], 1, 1);
        }
        // $pdf->Output('attachment.pdf', 'S');

// email stuff (change data below)
$to = "lelangikan222@gmail.com"; 
$from = "lelangikan222@gmail.com"; 
$subject = "send email with pdf attachment"; 
$message = "<p>Please see the attachment.</p>";

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "test.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = $pdfdoc;

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "This is a MIME encoded message.".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

//configure email settings
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com'; //smtp host name
$config['smtp_port'] = '465'; //smtp port number
$config['smtp_user'] = 'lelangikan222@gmail.com';
$config['smtp_pass'] = 'kbjidqivoreymhud'; //$from_email password
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; //use double quotes
$this->email->initialize($config);

//send mail
$this->email->from($from, 'Lelang Ikan');
$this->email->to($to);
$this->email->subject($headers);
$this->email->subject($subject);
$this->email->message($body);
return $this->email->send();
    }
}
