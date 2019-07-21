<?php
Class Print_Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
    }
    
    
/*
        public function index()
    {
        $data = $this->load->view('admin/content/pdf_v');
    }*/

    public function index()
    {
        if ($_POST['cetak']) {

                    $data = [
                            $tgl_a = $this->input->post('tgl_a', true),
                            $tgl_b = $this->input->post('tgl_b', true)
                    ];



                $datas['tamu'] = $this->Tamu_model->tampil_tgl($tgl_a, $tgl_b);
                $mpdf = new \Mpdf\Mpdf([
                    'default_font_size' => 12,
                    'default_font' => 'arial',
                    'format' => 'Legal'
                ]);
                // $mpdf->defaultheaderfontsize=15;
                // $mpdf->defaultheaderfontstyle='B';
                // $mpdf->defaultheaderline=0;
                // $mpdf->SetHeader('|Daftar Tamu|');
                $mpdf->AddPage('L', // L - landscape, P - portrait
                    '', '', '', '',
                    5, // margin_left
                    5, // margin right
                    7, // margin top
                    0, // margin bottom
                    5, // margin header
                    0); // margin footer
                $data = $this->load->view('admin/content/resultprintdata_user', $datas, TRUE);
                $mpdf->WriteHTML($data);
                // $mpdf->WriteCell(110, 5);
                /*$mpdf->default_font_size*/

                $mpdf->Output();
            
            }
        else {
        // $this->Tamu_model->tgl_indonesia($date)
        $datas['tamu'] = $this->Tamu_model->getAll();
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'arial',
            'format' => 'Legal'
        ]);
        // $mpdf->defaultheaderfontsize=15;
        // $mpdf->defaultheaderfontstyle='B';
        // $mpdf->defaultheaderline=0;
        // $mpdf->SetHeader('|Daftar Tamu|');
        $mpdf->AddPage('L', // L - landscape, P - portrait
            '', '', '', '',
            5, // margin_left
            5, // margin right
            7, // margin top
            5, // margin bottom
            5, // margin header
            0); // margin footer
        $data = $this->load->view('admin/content/resultprintdata_user', $datas, TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->WriteCell(110, 5);
        /*$mpdf->default_font_size*/

        $mpdf->Output();
    }
        }


    
                

    

       
       }
?>