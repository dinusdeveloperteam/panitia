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

    public function delete($pengiriman_id)
    {
        $this->Panitia->deletePengiriman($pengiriman_id);
        redirect('panitia/suratpengiriman');
    }
    
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
    public function VerifyEmail(){
        if ($this->Panitia->sendEmail($this->input->post('email')))
        {
            // successfully sent mail
            $this->session->set_flashdata('msg','<script>alert("Success terkirim")</script>');
            
            redirect('panitia/surat'); 
           
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<script>alert("Gagal Terkirim")</script>');
            
            redirect('panitia/surat');

            
        }
    }

    // public function suratPerintah($pengiriman_id)
    // {
    //     $this->load->library('pdf');
    //     $this->load->model('panitia/Panitia', 'lelang_pengiriman');
    //     $beli = $this->Panitia->get_orders_by_id($pengiriman_id);
    //     $detail_beli = $this->orders_model->get_detail_by_id($pengiriman_id);
    //     $customer = $this->customer->getProfile();
    //     $ongkirs =  $this->shipping->getOngkirInfo($beli->kota_kirim, $beli->kurir);
    //     $ongkir = json_decode($ongkirs, true);

    //     $pdf = new fpdf('P', 'mm', 'Letter');
    //     $pdf->AddPage();
    //     $image = "assets/img/logo.png";
    //     $pdf->SetFont('Arial', 'B', 16);
    //     $pdf->Cell(40, 40, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false);
    //     $pdf->Cell(0, 4, '', 0, 1, 'C');
    //     $pdf->Cell(0, 7, 'Nota Pembelian', 0, 1, 'C');
    //     $pdf->SetFont('Arial', 'B', 8);
    //     $pdf->Cell(0, 4, 'Jl. Imam Bonjol No.207, Kota Semarang, Semarang, Jawa Tengah 50949, Indonesia', 0, 1, 'C');
    //     $pdf->Cell(0, 4, 'HP: +62 889-3319-886, EMAIL: lapakikan@gmail.com', 0, 1, 'C');
    //     $pdf->Cell(10, 7, '', 0, 1);

    //     $pdf->SetFont('Arial', 'B', 10);
    //     $pdf->Cell(30, 6, 'Order Id', 0, 0, 'L');
    //     $pdf->Cell(69, 6, $pengiriman_id, 0, 0, 'L');
    //     $pdf->Cell(69, 6, 'Tanggal', 0, 0, 'R');
    //     $pdf->Cell(30, 6, date('Y-m-d', mktime(date('m'), date('d'), date('Y'))), 0, 1, 'R');
    //     $pdf->Cell(30, 6, 'Konsumen', 0, 0, 'L');
    //     $pdf->Cell(69, 6, $customer->username, 0, 0, 'L');
    //     $pdf->Cell(69, 6, 'Waktu', 0, 0, 'R');
    //     $pdf->Cell(30, 6, date('H:i:s', mktime(date('H'), date('i'), date('s'))), 0, 1, 'R');
    //     $pdf->Cell(10, 3, '', 0, 1);

    //     $pdf->Cell(8, 6, 'No', 1, 0, 'C');
    //     $pdf->Cell(100, 6, 'Nama Barang', 1, 0, 'C');
    //     $pdf->Cell(30, 6, 'Harga Beli', 1, 0, 'R');
    //     $pdf->Cell(30, 6, 'Jumlah Barang', 1, 0, 'R');
    //     $pdf->Cell(30, 6, 'SubTotal', 1, 1, 'R');
    //     $pdf->SetFont('Arial', '', 10);

    //     $pdf->SetFont('Arial', 'B', 10);
    //     $pdf->Cell(168, 6, "Total Pembelian", 1, 0, 'R');
    //     $pdf->SetFont('Arial', '', 10);
    //     $pdf->Cell(30, 6, "Rp " . number_format($beli->subtotal, 0, ".", "."), 1, 1, 'R');
    //     $pdf->SetFont('Arial', 'B', 10);
    //     $pdf->Cell(168, 6, "Biaya Pengiriman", 1, 0, 'R');
    //     $pdf->SetFont('Arial', '', 10);
    //     $pdf->Cell(30, 6, "Rp " . number_format($beli->ongkir, 0, ".", "."), 1, 1, 'R');
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(163, 6, "Total Biaya", 0, 0, 'R');
    //     $pdf->Cell(35, 6, "Rp " . number_format($beli->total_bayar, 0, ".", "."), 0, 1, 'R');

    //     $pdf->Cell(35, 20, "", 0, 1, 'R');

    //     $pdf->SetFont('Arial', 'B', 11);
    //     $pdf->Cell(99, 6, "Alamat Pengiriman : ", 0, 0, 'L');
    //     $pdf->Cell(99, 6, "Jasa Pengiriman : ", 0, 1, 'R');
    //     $pdf->SetFont('Arial', '', 10);
    //     $pdf->Cell(99, 6, $customer->nama, 0, 0, 'L');
    //     $pdf->Cell(99, 6, $beli->expedisi, 0, 1, 'R');
    //     $pdf->Cell(99, 6, $customer->telp, 0, 0, 'L');
    //     $pdf->Cell(99, 6, $beli->wkt_pengiriman, 0, 1, 'R');
    //     $pdf->Cell(99, 6, $beli->alamat_kirim, 0, 1, 'L');
    //     $pdf->Cell(99, 6, $ongkir['rajaongkir']['destination_details']['city_name'] . ' - ' . $ongkir['rajaongkir']['destination_details']['province'], 0, 1, 'L');

    //     $pdf->Cell(35, 15, "", 0, 1, 'R');
    //     $pdf->SetFont('Arial', '', 12);
    //     $pdf->Cell(198, 6, "Status Pembayaran", 0, 1, 'C');
    //     $pdf->SetFont('Arial', 'B', 14);
    //     if ($beli->status_bayar == 0) {
    //         $hasil = "Belum Bayar";
    //     } else {
    //         $hasil = "Lunas";
    //     }
    //     $pdf->Cell(198, 6, "" . $hasil, 0, 1, 'C');

    //     $pdf->Output();
    // }
}