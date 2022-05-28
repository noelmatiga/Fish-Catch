<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Administrator extends CI_Controller {

    public function index()
	{
		$data['title'] = 'CFCMS - Mainpage';
		$this->load->view('pages/mainpage.php',$data);
	}


    public function login(){
		$data['title'] = 'CFCMS - Login';
		$this->load->view('pages/admin_login.php');
	}

    public function fisherman_login(){
        $this->load->view('fisherman/login.php');
    }

    public function check_login(){
		$this->db->where('uname', $this->input->post('login-user'));
     $this->db->where('pass', $this->input->post('login-password'));
     $res = $this->db->get('tbl_users');
     if($res->num_rows() != 0){
      $s = $res->row_array();
      $newdata = array(
            'uid'  => $s['user_id'] ,
            
            'fullname' => $s['fname']." ".$s['lname'],
            'type' => 'admin',

            'logged_in' => TRUE
                        );
        $this->session->set_userdata($newdata);
        $this->session->set_flashdata('success', 'Welcome Administrator!!');
        redirect('/dashboard');


    }else{
     $this->session->set_flashdata('error', 'Invalid Admin Details!!!');
      redirect('/admin_login');
    }
	}

    public function fcheck_login(){
		$this->db->where('uname', $this->input->post('login-user'));
     $this->db->where('pass', $this->input->post('login-password'));
     $res = $this->db->get('tbl_fisherman');
     if($res->num_rows() != 0){
      $s = $res->row_array();
      $newdata = array(
            'fid'  => $s['fisherman_id'] ,
            
            'fullname' => $s['fname']." ".$s['lname'],
            'type' => 'fisherman',

            'logged_in' => TRUE
                        );
        $this->session->set_userdata($newdata);
        $this->session->set_flashdata('success', 'Welcome Fisherman!!');
        redirect('/fdashboard');


    }else{
     $this->session->set_flashdata('error', 'Invalid Fisherman Details!!!');
      redirect('/fisherman_login');
    }
	}

    function admin_logout(){
        $array_items = array('uid','fullname','type','logged_in');
    
            $this->session->unset_userdata($array_items);
            redirect('/mainpage');
    }

    function fisherman_logout(){
        $array_items = array('fid','fullname','type','logged_in');
    
            $this->session->unset_userdata($array_items);
            redirect('/mainpage');
    }
    
    
        public function admin_dashboard(){
            $data['title'] = 'Dashboard';
            //count market
            $res = $this->db->get('tbl_market');
            $data['market_count'] = $res->num_rows(); 

            $data['fisherman_count'] = $this->db->get('tbl_fisherman')->num_rows();
            $this->db->select_sum('kilos');
            $data['total_catch'] = $this->db->get('tbl_fish_catch')->row()->kilos;  
           

           
            $this->load->view('admin/index',$data);
            
        }

        public function fdashboard(){
            $data['title'] = 'Fisherman Dashboard';
            //count market
           

            
            $data['fisherman_count'] = $this->db->get('tbl_fisherman')->num_rows();

            $res = $this->db
            ->query("Select SUM(kilos) as total from tbl_fish_catch  where fisherman_id=".$this->session->userdata('fid')."")
                ->row();
            $data['total_catch'] = $res->total;
           

           
            $this->load->view('fisherman/index',$data);
            
        }

        public function market(){
           $res =  $this->db->get('tbl_market');
            $data['markets'] = $res->result_array();

            $data['title'] = 'Market';
            $this->load->view('admin/market',$data);
        }

        public function fisherman(){
            $data['fisherman'] = $this->db->get('tbl_fisherman')->result_array();
            $data['title'] = 'Fisherman';
            $this->load->view('admin/fisherman',$data);
        }

        public function vessel(){
            $data['vessel'] = $this->db->get('tbl_vessel')->result_array();
            $data['fisherman'] = $this->db->get('tbl_fisherman')->result_array();
            $data['title'] = 'Vessel';
            $this->load->view('admin/vessel',$data);
        }

        public function users(){
            $data['title'] = 'Users';
            $this->load->view('admin/users',$data);
        }

        public function catch(){
            $data['fishermen'] = $this->db->get('tbl_fisherman')->result_array();
            $data['vessels'] = $this->db->get('tbl_vessel')->result_array();
            $data['market'] = $this->db->get('tbl_market')->result_array();
            $data['catch'] = $this->db->get('tbl_fish_catch')->result_array();


            $data['title'] = 'Catch Record';
            $this->load->view('admin/catch',$data);
        }

        public function monthly_report(){
            $data['title'] = 'Reports';
            $this->load->view('admin/monthly-report',$data);
        }

        public function catch_report(){
            $data['title'] = 'Reports';
            $this->load->view('admin/catch_report',$data);
        }


        public function addmarket(){
            $data_array = array(
                'name'=>$this->input->post('market_name'),
                'market_desc' =>$this->input->post('m_desc'),
                'date_registered'=> date('F j, Y')
            
            );

            $res = $this->db->insert('tbl_market',$data_array);
            if($res){
                $this->session->set_flashdata('message', 'Market Added Successfully!!');
                redirect('/market');
            }else{
                $this->session->set_flashdata('message', 'Error Adding Market!!');
                redirect('/market');
            }

        }

        public function addfisherman(){
            $data_array = array(
                'fname'=>$this->input->post('fname'),
                'lname' =>$this->input->post('lname'),
                'address'=>$this->input->post('address'),
                'contact_no'=>$this->input->post('contact'),
                'uname'=>   $this->input->post('uname'),
                'pass'=>   $this->input->post('pass'),
                'account_status'=>$this->input->post('status'),

                'date_registered'=> date('F j, Y')
            
            );

            $res = $this->db->insert('tbl_fisherman',$data_array);
            if($res){
                $this->session->set_flashdata('message', 'Fisherman Added Successfully!!');
                redirect('/fisherman');
            }else{
                $this->session->set_flashdata('message', 'Error Adding Fisherman!!');
                redirect('/fisherman');
            }

        }

        public function addvessel(){

            //upload profile pic
        $config['upload_path'] = './assets/uploads/vessels/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '5120';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('vpic')) {
            $error = array('error' => $this->upload->display_errors());
           echo $error['error'];
        } else {

            $data_array = array(
                'vessel_name'=>$this->input->post('vname'),
                'vessel_desc' =>$this->input->post('vdesc'),
                'vessel_type'=>$this->input->post('vtype'),
                'fisherman_id'=>$this->input->post('vfisherman'),
                'vessel_img'=>$this->upload->data('file_name'),
                'date_registered'=> date('F j, Y')
            
            );

            $res = $this->db->insert('tbl_vessel',$data_array);
            if($res){
                $this->session->set_flashdata('message', 'Vessel Added Successfully!!');
                redirect('/vessel');
            }else{
                $this->session->set_flashdata('message', 'Error Adding Vessel!!');
                redirect('/vessel');
            }

        }
    }

    public function addcatch(){
        $data_array = array(
            'fisherman_id'=>$this->input->post('cfisherman'),
            'vessel_id' =>$this->input->post('cvessel'),
            'catch_date'=>$this->input->post('cdate'),
            'catch_time'=>$this->input->post('ctime'),
            'kilos'=>$this->input->post('ckilos'),
            'price'=>$this->input->post('cprice'),
            'fish'=>$this->input->post('cfish'),
            'market_id'=>$this->input->post('cmarket')
          
        
        );

        $res = $this->db->insert('tbl_fish_catch',$data_array);
        if($res){
            $this->session->set_flashdata('message', 'Catch Record Added Successfully!!');
            redirect('/catch');
        }else{
            $this->session->set_flashdata('message', 'Error Adding Catch!!');
            redirect('/catch');
        }

    }


}











?>