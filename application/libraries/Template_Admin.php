<?php
	class Template_Admin{
		protected $_ci;
		function __construct(){
			$this->_ci =&get_instance();
		}

		function display($template, $data=null){
			$data['_content'] = $this->_ci->load->view($template, $data, true);
			$data['_head'] = $this->_ci->load->view('admin/_partials/head', $data, true);
			$data['_sidebar'] = $this->_ci->load->view('admin/_partials/sidebar', $data, true);
			$data['_navbar'] = $this->_ci->load->view('admin/_partials/navbar', $data, true);
			$data['_js'] = $this->_ci->load->view('admin/_partials/js', $data, true);
			$data['_search'] = $this->_ci->load->view('admin/_partials/search', $data, true);

			$this->_ci->load->view('/admin/overview.php', $data);

		}
	}

?>