<?php

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Mardira";
    }

    public function Hello_model()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->Hello_mardira();
        echo $data;
    }

    public function v_hello()
    {
        $this->load->view('v_hello');
    }

    public function hello_mvc()
    {
        $this->load->model('Hello_model');
        $data['mvc'] = $this->Hello_model->mardira_mvc();
        $this->load->view('v_hello', $data);
    }



}