<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
       /* $pdf=new FPDF();*/
        $pdf->AddPage();
        $start_x=$pdf->GetX(); //initial x (start of column position)
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();

        $cell_width = 30;  //define cell width
        $cell_height=7;    //define cell height
        // setting jenis font yang akan digunakan
        // mencetak string 
        // $pdf->Cell(270,7,'DAFTAR TAMU',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(270,7,'DINAS KOMUNIKASI DAN INFORMATIKA KAB. MOJOKERTO',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        /*$pdf->cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->cell(30,6,'Nama',1,0);
        $pdf->cell(30,6,'Jabatan',1,0);
        $pdf->cell(30,6,'Instansi',1,0);
        $pdf->cell(30,6,'Tujuan',1,0);
        $pdf->Cell(50,6,'Waktu',1,1);*/
        $pdf->SetFont('Arial','',10);
        $pdf->MultiCell($cell_width,$cell_height,'Nama',1); //print one cell value
        $current_x+=$cell_width;                           //calculate position for next cell
        $pdf->SetXY($current_x, $current_y);               //set position for next cell to print

        $pdf->MultiCell($cell_width,$cell_height,'Jabatan',1); //printing next cell
        $current_x+=$cell_width;                           //re-calculate position for next cell
        $pdf->SetXY($current_x, $current_y);               //set position for next cell


        $pdf->MultiCell($cell_width,$cell_height,'Instansi',1); //printing next cell
        $current_x+=$cell_width;                           //re-calculate position for next cell
        $pdf->SetXY($current_x, $current_y);               //set position for next cell


        $pdf->MultiCell($cell_width,$cell_height,'Tujuan',1); //printing next cell
        $current_x+=$cell_width;                           //re-calculate position for next cell
        $pdf->SetXY($current_x, $current_y);               //set position for next cell


        $pdf->MultiCell($cell_width,$cell_height,'Waktu',1);
        $current_x+=$cell_width;



        $tamu = $this->db->get('tamu')->result();
       /* $pdf->SetWidths(array(30,30,30,30,50));
        srand(microtime()*1000000);*/
        $pdf->Ln();
        $current_x=$start_x;                       //set x to start_x (beginning of line)
            $current_y+=$cell_height;                  //increase y by cell_height to print on next line

            $pdf->SetXY($current_x, $current_y);
                foreach ($tamu as $row){
            $pdf->MultiCell($cell_width,$cell_height,$row->nama_tamu,1);
            $current_x+=$cell_width;
            $pdf->SetXY($current_x, $current_y);

            $pdf->MultiCell($cell_width,$cell_height,$row->jabatan_tamu,1);
            $current_x+=$cell_width;
            $pdf->SetXY($current_x, $current_y);

            $pdf->MultiCell($cell_width,$cell_height,$row->instansi_tamu,1);
            $current_x+=$cell_width;
            $pdf->SetXY($current_x, $current_y);

            $pdf->MultiCell($cell_width,$cell_height,$row->tujuan_tamu,1);
            $current_x+=$cell_width;
            $pdf->SetXY($current_x, $current_y);

            $pdf->MultiCell($cell_width,$cell_height,$row->tanggal,1);
            $current_x+=$cell_width;
            $pdf->SetXY($current_x, $current_y);

            // $pdf->MultiCell(30,7,$row->nama_tamu,1,0);
            // $pdf->MultiCell(30,7,$row->jabatan_tamu,1,0);
            // $pdf->MultiCell(30,7,$row->instansi_tamu,1,0);
            // $pdf->MultiCell(30,7,$row->tujuan_tamu,1,0);
            // $pdf->multiCell(50,7,$row->tanggal,1,1);
            // $current_x+=$cell_width;
            // $pdf->SetXY($current_x, $current_y);
            $pdf->Ln();        
        }
        $pdf->Output();
    }
}