<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('Admin_model');
        $this->load->library('Template_Login','template_login');
    }

    public function index()
    {

            if($this->Admin_model->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("admin/chart");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('nama_admin', 'Username', 'required');
                $this->form_validation->set_rules('pass_admin', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $nama_admin = $this->input->post("nama_admin", TRUE);
                $pass_admin = MD5($this->input->post('pass_admin', TRUE));

                //checking data via model
                $checking = $this->Admin_model->check_login('admin', array('nama_admin' => $nama_admin), array('pass_admin' => $pass_admin));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_admin'   => $apps->id_admin,
                            'nama_admin' => $apps->nama_admin,
                            'pass_admin' => $apps->pass_admin,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('admin/chart');

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username atau Password salah!</div></div>';
                    $this->template_login->display('admin/content/viewlogin_user', $data);
                }

            }else{

                $this->template_login->display('admin/content/viewlogin_user');
            }

        }

    }
    public function logout()
    {

        $this->session->sess_destroy();
        redirect('user/index');
    
    }
}