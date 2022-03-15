<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('NoSQLModel', 'NoSQLModel');
    }

    public function test()
    {

        // $data['users'] = $this->userModel->get_user_list();

        // $this->load->view('users', $data);
        // $this->output('test');
		$this->output('consent/v_test');
		
        // $this->output('consent/v_test');
    }

    public function output($view, $data=null)
	{
		$this->load->view('includes/template/header');
		$this->load->view('includes/template/sidebar');
		$this->load->view('includes/template/topbar');
		$this->load->view($view, $data);
		$this->load->view('includes/template/javascript');
		$this->load->view('includes/template/footer');
	}
    // // public function create()
    // // {
    // //     $this->load->view('user_create');
    // // }
    // function create()
    // {
    //     if ($this->input->post('submit')) {
    //         $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
    //         $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');

    //         if ($this->form_validation->run() !== FALSE) {
    //             $result = $this->userModel->create_user($this->input->post('name'), $this->input->post('email'));
    //             if ($result === TRUE) {
    //                 redirect('/');
    //             } else {
    //                 $data['error'] = 'Error occurred during updating data';
    //                 $this->load->view('user_create', $data);
    //             }
    //         } else {
    //             $data['error'] = 'เกิดข้อขัดข้องในการบันทึกข้อมูล กรุณาตรวจสอบ !!!';
    //             $this->load->view('user_create', $data);
    //         }
    //     } else {
    //         $this->load->view('user_create');
    //     }
    // }

    // function update($_id)
    // {
    //     if ($this->input->post('submit')) {
    //         $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
    //         $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');

    //         if ($this->form_validation->run() !== FALSE) {
    //             $result = $this->userModel->update_user($_id, $this->input->post('name'), $this->input->post('email'));
    //             if ($result === TRUE) {
    //                 redirect('/');
    //             } else {
    //                 $data['error'] = 'Error occurred during updating data';
    //                 $this->load->view('user_update', $data);
    //             }
    //         } else {
    //             $data['error'] = 'เกิดปัญหา กรุณาตรวจสอบข้อมูลที่บันทึก !!!';
    //             $this->load->view('user_update', $data);
    //         }
    //     } else {
    //         $data['user'] = $this->userModel->get_user($_id);
    //         $this->load->view('user_update', $data);
    //     }
    // }

    // function delete($_id)
    // {
    //     if ($_id) {
    //         $this->userModel->delete_user($_id);
    //     }
    //     redirect('/');
    // }
}
