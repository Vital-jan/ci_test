<?php
	class WithoutJoin extends CI_Controller {

	public function view($page = 'withoutjoin')
	{
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        show_404();
    }

    $data['title'] = "Without join";

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);	}
}