<?php 
 
class login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('login/V_login');
	}
 
	function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
        'username' => $username,
        'password' => $password,
    );
    $user = $this->M_login->cekData("login",$where)->num_rows();
    if ($user > 0){
        $data_session = array(
        'username' => $username,
        'password' => $password,
        );
        $this->session->set_userdata($data_session);
        redirect(base_url("dashboard"));
        }else{
            echo"username dan Password Salah! harap kembali";
        }
    }

    function indexmanager()
    {
        $this->load->view('manager/V_login_manager');
    }

    function loginmanager(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password,
        );
        $user = $this->M_login->cekData("login",$where)->num_rows();
        if ($user > 0){
            $data_session = array(
            'username' => $username,
            'password' => $password,
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("manager/second"));
            }else{
                echo"username dan Password Salah!";
            }
        }
    function logout(){
        session_start();
        if(session_destroy()){
            redirect('login');
        }
    }

    function logoutManager(){
        session_start();
        if(session_destroy()){
            redirect('manager');
        }
    }
}