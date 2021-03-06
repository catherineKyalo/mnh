<?php
class C_Front extends MY_Controller {
	var $data;
	var $instructions;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}
	public function analysis(){
		
	}

	public function index() {
		$data['title']='MoH::Data Management Tool';
		$this -> load -> view('pages/v_home', $data); //landing page
		#$this -> load -> view('home_view', $data); //landing page
	   
	}//End of index file
	
	
	public function active_survey() {
		if(!$this -> session -> userdata('fCode')){
	    
		 $data['facility']=$this ->selectFacility;
		$data['title']='MoH Data Management Tool::Authentication';
		$data['form'] = '<p>User Login<p>';
		$data['login_message']='Login to Take Survey';
		//$this -> load -> view('index', $data); //login view
		$this -> load -> view('pages/v_login', $data); //login view
	    }else{
			$this->inventory();
		}
		//dashboard
		
		//$this->inventory();
		//redirect(base_url() . 'c_auth/index', 'refresh');
		
	}//End of index file
	

	public function inventory() {
		//print 'sess val: '.var_dump($this->session->all_userdata()); die;
		if($this -> session -> userdata('fCode')){
			
		$data['hidden']="display:none";
		$data['status']="";
		$data['response']="";
		$data['form'] = '<div class="error ui-autocomplete-loading" style="width:200px;height:76px"><br/><br/>Loading...please wait.<br/><br/></div>';
		$data['title']='MNH::Commodity Assessment';
		$data['form_id']='';
		$this -> load -> view('survey/v_survey_main', $data);
		}else{
			redirect(base_url() . 'home', 'refresh');
		}
		//echo 'inventory';
	}
	
	

	public function formviewer() {
		$data['form'] = '<p class="error"><br/><br/>Click on any of the tabs to continue<br/><br/><p>';
		$this -> load -> view('form', $data);
	}
	
	public function reports() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No report has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('reports', $data);
		//echo 'Vehicles';
	}
	
}