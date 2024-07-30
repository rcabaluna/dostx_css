<?php

class Home extends CI_Controller
{
    private $homeModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        redirect('login');
    }

    public function login()
    {
        $data = '';
        if ($_POST) {
            $pass = $this->input->post('password');
            $check = $this->homeModel->get_data('tblusers', array('username' => $this->input->post('username')));
            $quarterid = $this->homeModel->get_active_quarter();

            if (!$check) {
                $this->session->set_flashdata('invalid',true);
            } else {
                if (password_verify($pass, $check['password'])) {
                    $userdata = [
                        'userid'    => $check['userid'],
                        'username'  => $check['username'],
                        'office'    => $check['name'],
                        'officeid'  => $check['officeid'],
                        'logged_in' => true,
                        'usertype'  => $check['usertype']
                    ];
                    $this->session->set_userdata($userdata);

                    if ($check['usertype'] == 'admin') {
                      
                      $path = '?servicetype=all&year=' . date('Y') . '&quarterid=' . $quarterid['quarterid'] . '&officeid=all';
                        redirect(BASE.$path);
                    } else {
                        $path = '?servicetype=all&year=' . date('Y') . '&quarterid=' . $quarterid['quarterid'] . '&officeid=all';
                        redirect(BASE.$path);
                    }
                } else {
                    $this->session->set_flashdata('invalid',true);
                }
            }
        }
        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
