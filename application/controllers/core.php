<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Core extends CI_Controller {
 
  function __construct()
  {
    parent::__construct();
  }
 

  public function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->home_main();
    }
    else
    {
      redirect('login', 'refresh');
    }
  }

  public function logout(){
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('../Main', 'refresh');
  }

  public function home_main(){
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    //$this->load->model('main_model');
    //$data2['result2'] = $this->main_model->active_quest($data['username']);

    $this->load->model('main_model');
    $data1['result'] = $this->main_model->last_quest($data['username']);

    //$this->load->model('main_model');
    //$data3['result3'] = $this->main_model->yourquestlist($data['username']);

    $this->load->view('userpage/dummy',$data);
    $this->load->view('userpage/user_head');
    $this->load->view('userpage/user_nav');
    $this->load->view('userpage/user_home_body',$data1);
    $this->load->view('userpage/user_footer');
  }

  public function create_quest(){
    $this->load->view('userpage/user_head');
    $this->load->view('userpage/user_nav');
    $this->load->view('questpage/quest_create');
    $this->load->view('userpage/user_footer');
  }

  public function user_profil(){
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    $this->load->model('main_model');
    $data2['result'] = $this->main_model->user_data($data['username']);

    $this->load->view('userpage/user_head',$data2);
    $this->load->view('userpage/user_nav',$data);
    $this->load->view('userpage/user_profil');
    $this->load->view('userpage/user_footer');
  }

  public function edit_profil(){
    $this->load->view('userpage/user_head');
    $this->load->view('userpage/user_nav');
    $this->load->view('userpage/user_edit_profil');
    $this->load->view('userpage/user_footer');
  }

  public function cari_quest(){

    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    $this->load->model('main_model');
    $data2['result'] = $this->main_model->last_quest($data['username']);


    $this->load->view('userpage/user_head',$data2);
    $this->load->view('userpage/user_nav');
    $this->load->view('questpage/look_quest');
    $this->load->view('userpage/user_footer');
  }

  public function aktif_quest(){
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    $this->load->model('main_model');
    $data3['hasil'] = $this->main_model->jumlah_quest_active($data['username']);
    $data2['result'] = $this->main_model->active_quest($data['username']);
    

    $this->load->view('userpage/user_head',$data);
    $this->load->view('userpage/user_nav',$data2);
    $this->load->view('questpage/active_quest',$data3);
    $this->load->view('userpage/user_footer');
  }

  public function owning_quest(){

    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    $this->load->model('main_model');
    //$data2['result'] = $this->main_model->user_data($data['username']);
    $data2['count'] = $this->main_model->jumlah_quest_own($data['username']);
    $data3['result'] = $this->main_model->yourquestlist($data['username']);


    $this->load->view('userpage/user_head',$data);
    $this->load->view('userpage/user_nav',$data2);
    $this->load->view('questpage/self_user_quest',$data3);
    $this->load->view('userpage/user_footer');
  }

  public function detail_general(){

    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $q_id = $this->input->post('page');

    $this->load->model('main_model');
    $data['result'] = $this->main_model->my_quest_detail($q_id);

    $this->load->view('userpage/user_head',$data);
    $this->load->view('userpage/user_nav');
    $this->load->view('questpage/quest_umum_detail');
    $this->load->view('userpage/user_footer');
  }

  public function detail_active(){

    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $q_id = $this->input->post('page');

    $this->load->model('main_model');
    $data['result'] = $this->main_model->my_quest_detail($q_id);

    $data2['username2'] = $session_data['username'];
    $data2['result2'] = $this->main_model->q_status($data['username'],$q_id);

    $this->load->view('userpage/user_head',$data);
    $this->load->view('userpage/user_nav',$data2);
    $this->load->view('questpage/quest_taken_detail');
    $this->load->view('userpage/user_footer');
  }

  public function detail_own(){

    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $q_id = $this->input->post('page');

    $this->load->model('main_model');
    $data['result'] = $this->main_model->my_quest_detail($q_id);

    $data2['username2'] = $session_data['username'];
    $data2['result2'] = $this->main_model->list_get($q_id);

    $this->load->view('userpage/user_head',$data);
    $this->load->view('userpage/user_nav',$data2);
    $this->load->view('questpage/quest_owning_detail');
    $this->load->view('userpage/user_footer');
  }

  public function q_create()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $q_name = $this->input->post('q_name');
    $q_desc = $this->input->post('q_desc');
    $q_syarat = $this->input->post('q_syarat');
    $q_cpt = $this->input->post('q_kapasitas');
    $q_reward = $this->input->post('q_reward');
    $q_owner = $data['username'];

    $this->load->model('main_model');
    $this->main_model->new_quest($q_name,$q_desc,$q_syarat,$q_cpt,$q_reward,$q_owner);
    redirect('../core','refresh');
  }

  public function request()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $q_id = $this->input->post('q_id');

    $this->load->model('main_model');
    $this->main_model->request_quest($data['username'],$q_id);
    redirect('../core','refresh');
  }

  public function quest_drop()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    

    $q_id = $this->input->post('q_id');

    $this->load->model('main_model');
    $this->main_model->dropped_quest($data['username'],$q_id);
    redirect('../core','refresh');
  }

  public function quest_complete()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $rq_id = $this->input->post('complete');

    $this->load->model('main_model');
    $this->main_model->complete_quest($rq_id);
    redirect('../core','refresh');
  }

  public function quest_accept()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $rq_id = $this->input->post('accept');

    $this->load->model('main_model');
    $this->main_model->accept_quest($rq_id);
    redirect('../core','refresh');
  }

  public function quest_failed()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $rq_id = $this->input->post('failed');

    $this->load->model('main_model');
    $this->main_model->failed_quest($rq_id);
    redirect('../core','refresh');
  }

  public function quest_deleting()
  {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    
    $q_id = $this->input->post('q_id');

    $this->load->model('main_model');
    $this->main_model->delete_quest($q_id);
    redirect('../core','refresh');
  }


}
 
?>