<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2015-4-24
 * Time: 11:57
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('person_model');
    }
    public function add(){
        $data['name'] = '张三';
        $data['age'] = 15;
        $data['intro'] = '这是第一条数据';

        $this->person_model->add($data);
    }
}