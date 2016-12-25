<?php

/*SETTING ZONA WAKTU*/

date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");

//SET MARGIN mulai dari kiri,atas,kanan

$this->fpdf->SetMargins(1,1,1);

/*AliasNbPages() menampilkan total halaman di footer*/

$this->fpdf->AliasNbPages();

//AddPage : fungsi u/ membuat halaman baru
$this->fpdf->AddPage();

//Setting Font : String family, String Style, FOnt Size
$this->fpdf->SetFont('Times','B',12);

/*Membuat halaman header */

$this->fpdf->Cell(19,0.7,'Surat Rujukan',0,0,'C');

//fungsi Ln untuk membuat baris baru
$this->fpdf->Ln();

$this->fpdf->Ln();

/*Setting ulang font agar tidak mengikuti settingan sebelumnya jika format font akan dibedakan*/

$this->fpdf->SetFont('helvetica','',10);
$this->fpdf->Cell(19,0.5,'Klinik Tanimulya Medika',0,0,'C');

$this->fpdf->Ln();
$this->fpdf->Cell(19,0.5,'subtittle',0,0,'C');

/*Fungsi line u/ membuat garis */
$this->fpdf->Line(1,3.5,20,3.5);
$this->fpdf->Line(1,3.55,20,3.55);

/*--------------header halaman selesai-----------------*/

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19,1,'Header',0,0,'C');
/*setting header table*/
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(5,0.0,'Kode Rujukan',0,0,'C');
//$this->fpdf->Cell(5,1,'Tanggal',1,'LR','L');
//$this->fpdf->Cell(5,1,'Alamat Tujuan',1,'LR','L');
//$this->fpdf->Cell(5,1,'Nama',1,'LR','L');
//$this->fpdf->Cell(5,1,'Umur',1,'LR','L');
//$this->fpdf->Cell(5,1,'Alamat',1,'LR','L');
//$this->fpdf->Cell(5,1,'Keluhan',1,'LR','L');
//$this->fpdf->Cell(5,1,'Nama Dokter',1,'LR','L');
/*generate hasil query disini */

foreach($hasil as $data)
{
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(6,0.7,$data->kode_rujukan,1,'LR','L');
$this->fpdf->Cell(5,0.7,$data->tanggal,1,'LR','L');
$this->fpdf->Cell(5,0.7,$data->kepada,1,'LR','L');
//$this->fpdf->Cell(5,0.7,$data->nama,1,'LR','L');
//$this->fpdf->Cell(5,0.7,$data->alamat,1,'LR','L');
//$this->fpdf->Cell(5,0.7,$data->keluhan,1,'LR','L');
//$this->fpdf->Cell(5,0.7,$data->nama_dokter,1,'LR','L');

}
//Setting footer 3cm
$this->fpdf->SetY(-3);

//setting font u/ footer
$this->fpdf->SetFont('Times','',10);

//setting cell u/ waktu pencetakan
$this->fpdf->Cell(9.5,0.5,'Printed on :'.date('d/m/Y H : i').' | Created by : Proyek IT I',0,'LR','L');

//setting cell u/ page number
$this->fpdf->Cell(9.5,0.5,'Page'.$this->fpdf->PageNo().'/{nb}',0,0,'R');
/*generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai*/
$this->fpdf->output("surat_rujukan.pdf","I");
?>

