	<?php 

	class Overview extends CI_Controller
	{
		
		public function __construct(){
            parent::__construct();
            $this->load->library('template_admin', 'template_admin');
   
        }

		public function index()
		{
			$this->template_admin->display('admin/indexadmin');
		}

	}
?>