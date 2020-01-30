<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeluas extends CI_Model {

    public function save($firstname,$lastname,$gender,$birth,$category,$membership){
        $data=array(
           'firstname'=> $firstname,
           'lastname'=> $lastname,
           'gender'=> $gender,
           'birth'=> $birth,
           'category'=> $category,
           'membership'=> $membership
        );
        $this->db->insert('person',$data);
    }

    public function select_data(){
        return $this->db->get('person');
    }
    public function delete_data($firstname,$lastname,$gender,$birth,$category,$membership){
        $this->db->where('firstname','lastname','gender','birth','category','membership', $firstname,$lastname,$gender,$birth,$category,$membership);
        return $this->db->delete('person');
    }
}