<?php
    
class Container extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Container_model");
    }

    public function index()
    {
        $data['title'] = 'Data Container';
        $data['datas'] = $this->Container_model->read();
        $this->load->view('container/index', $data);
    }

    public function detail($containerNumber)
    {
        $data['title'] = "Detail Container";
        $data['data'] = $this->Container_model->getContainerByContainerNumber($containerNumber);
        $this->load->view('container/detail', $data);
    }

    public function create()
    {
        $container = $this->Container_model;
        $validator = $this->form_validation;
        $validator->set_rules($container->rules());

        if($validator->run() == false)
        {
            $data['title'] = "Add Container";
            $this->load->view('container/add', $data);
        }
        else{
            $container->save();
            $this->session->set_flashData('addNewContainer', "Success add new container!");
            redirect('container');
        }

        
    }

    public function update($containerNumber)
    {
        $container = $this->Container_model;
        $validator = $this->form_validation;
        $validator->set_rules($container->rules());

        if($validator->run() == false)
        {
            $data['title'] = "Edit Container";
            $data['data'] = $this->Container_model->getContainerByContainerNumber($containerNumber);
            $this->load->view('container/edit', $data);
        }
        else{
            $container->update();
            $this->session->set_flashData('editContainer', "Success edit container!");
            redirect('container');
        }
    }

    public function delete($containerNumber)
    {
        $this->Container_model->delete($containerNumber);
        $this->session->set_flashData('deleteContainer', "Success delete container!");
        redirect('container');
    }
}
