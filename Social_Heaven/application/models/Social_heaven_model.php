<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_heaven_model extends CI_Model
{
    public function login( $mail , $password)
    {
        $this->db->select('*');
        $this->db->where('Email' , $mail);
        $this->db->where('Password', $password);
        $result= $this->db->get('login_table');
        
        return $result;
    }
    public function signUp($data)
    {
        
        $mail=$data['email'];


        $this->db->select('*');
        $this->db->where('Email' , $mail);
        $result= $this->db->get('login_table');
		
        $num_row=$result->num_rows();
		if($num_row > 0){
            echo "Email Id Already Taken ..";
            die;
        }

        $l_data=array(
			"Email"=>$data['email'],
			"Password"=>$data['password']
        );
        
        

		$rs=$this->db->insert('user' , $data);
		$rs2=$this->db->insert('login_table' , $l_data);
        if($rs && $rs2)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function validMail($v_mail)
    {
        $this->db->select('*');
        $this->db->where('Email' , $v_mail);
        $result= $this->db->get('login_table');
        return $result;
    }
	
}

?>