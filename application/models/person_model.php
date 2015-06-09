<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2015-4-24
 * Time: 11:21
 */

class Person_model extends CI_Model{

    const TABLE_NAME = 'person';

    public function __construct(){
        //调用父类构造方法
        parent::__construct();
        //手动载入数据库操作类
        $this->load->database();
    }

    /**
     * 添加person
     * @param $data 添加的数据
     * @return bool
     */
    public function add($data){

        $this->db->insert(self::TABLE_NAME,$data);

    }
}
