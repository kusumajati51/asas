<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('templates/dashboard_header');
        $this->load->view("admin/overview");
        $this->load->view('templates/dashboard_footer');
	}

    public function table()
	{
        $this->load->view('templates/dashboard_header');
        $this->load->view("admin/table");
        $this->load->view('templates/dashboard_footer');
	}
}