<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Main_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function new_user($username,$password,$email,$first_name,$last_name)
  {
    $query = $this->db->query("call sp_register('$username','$password','$email','$first_name','$last_name')");
	  return $query->result();
  }

  public function new_quest($q_name,$q_desc,$q_syarat,$q_cpt,$q_reward,$q_owner)
  {
    $query = $this->db->query("call sp_q_make('$q_name','$q_desc','$q_syarat','$q_cpt','$q_reward','$q_owner')");
	  return $query->result();
  }

  public  function user_data($usr_name)
  {
    $query = $this->db->query("SELECT username, usr_Email, usr_First_name, usr_Last_name,usr_exp FROM usr_data WHERE username = '$usr_name'");
    return $query->result();
  } 

  public  function jumlah_quest_own($usr_name)
  {
    $query = $this->db->query("SELECT count(*) as jumlah FROM quest WHERE quest_owner = '$usr_name'");
    return $query->result();
  } 

  public  function jumlah_quest_active($usr_name)
  {
    $query = $this->db->query("SELECT count(*) as jumlah FROM request WHERE rq_user_username = '$usr_name'");
    return $query->result();
  } 

  public function yourquestlist($username)
  {
    $query = $this->db->query("call sp_yourquest('$username')");
    return $query->result();
  }

  public function allquestlist()
  {
    $query = $this->db->query("SELECT quest_name,quest_description FROM quest");
    return $query->result();
  }

   public function last_quest($username)
  {
    $query = $this->db->query("call sp_latest('$username')");
    return $query->result();
  }

  public function active_quest($username)
  {
    $query = $this->db->query("call sp_active('$username')");
    return $query->result();
  }

  public function my_quest_detail($q_id)
  {
    $query = $this->db->query("SELECT * FROM quest WHERE $q_id=quest_id");
    return $query->result();
  }

  public function request_quest($username,$q_id)
  {
    $query = $this->db->query("call sp_q_request('$username',$q_id)");
  }

  public function dropped_quest($username,$q_id)
  {
    $query = $this->db->query("call sp_q_drop('$username',$q_id)");
    return $query->result();
  }

  public function q_status($username,$q_id)
  {
    $query = $this->db->query("call sp_status('$username',$q_id)");
    return $query->result();
  }

  public function list_get($q_id)
  {
    $query = $this->db->query("call sp_name_taken($q_id)");
    return $query->result();
  }
  
  public function delete_quest($q_id)
  {
    $query = $this->db->query("call sp_q_delete('$q_id')");
  }

  public function accept_quest($rq_id)
  {
    $query = $this->db->query("call sp_rq_accept('$rq_id')");
  }

  public function complete_quest($rq_id)
  {
    $query = $this->db->query("call sp_rq_sukses('$rq_id')");
  }

  public function failed_quest($rq_id)
  {
    $query = $this->db->query("call sp_rq_failed('$rq_id')");
  }



}


?>
