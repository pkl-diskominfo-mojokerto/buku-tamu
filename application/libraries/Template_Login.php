<?php
	class Template_Login{
		protected $_ci;
		function __construct(){
			$this->_ci =&get_instance();
		}

		function display($template, $data=null){
			$data['_content'] = $this->_ci->load->view($template, $data, true);
			$data['_head'] = $this->_ci->load->view('admin/_partialslogin/head', $data, true);
			$data['_js'] = $this->_ci->load->view('admin/_partialslogin/js', $data, true);

			$this->_ci->load->view('/admin/login_overview.php', $data);

		}
	}

?>