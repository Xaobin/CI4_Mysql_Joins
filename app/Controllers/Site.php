<?php

namespace App\Controllers;

class Site extends BaseController
{
    private $db;
//======================================
    public function __construct(){
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }
//======================================
    public function innerJoinMethod(){
        $builder = $this->db->table("tbl_users as user");
        $builder->select('user.*, course.name as course_name');
        $builder->join('tbl_courses as course', 'user.id = course.user_id');
        $data = $builder->get()->getResult();
      
        echo "<pre>";
        print_r($data);
        /*
        SELECT `user`.*, `course`.`name` as `course_name` FROM `tbl_users` as `user` JOIN `tbl_courses` as `course` ON `user`.`id` = `course`.`user_id` 
        */
    }
//======================================
    public function leftJoinMethod(){
        $builder = $this->db->table("tbl_users as user");
        $builder->select('user.*, course.name as course_name');
        $builder->join('tbl_courses as course', 'user.id = course.user_id', "left"); // added left here
        $data = $builder->get()->getResult();
      
        echo "<pre>";
        print_r($data);
        /*
        SELECT `user`.*, `course`.`name` as `course_name` FROM `tbl_users` as `user` LEFT JOIN `tbl_courses` as `course` ON `user`.`id` = `course`.`user_id`
        */
    }
//======================================
    public function rightJoinMethod(){
        
        $builder = $this->db->table("tbl_users as user");
  $builder->select('user.*, course.name as course_name');
  $builder->join('tbl_courses as course', 'user.id = course.user_id', "right");
  $data = $builder->get()->getResult();

  echo "<pre>";
  print_r($data);
        /*
        SELECT `user`.*, `course`.`name` as `course_name` FROM `tbl_users` as `user` RIGHT JOIN `tbl_courses` as `course` ON `user`.`id` = `course`.`user_id`
        */
    }
//======================================   
}
