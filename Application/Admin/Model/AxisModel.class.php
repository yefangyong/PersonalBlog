<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 10:06
 */
namespace Admin\Model;
use Think\Model;
use Think\Page;

class AxisModel extends Model {
    private $_db = '';
    public function __construct() {
        $this->_db = M('axis');
    }

    public function getCount() {
        return $this->_db->count();
    }

    public function getInfo($count) {
        $Page = new Page($count,5);
        return $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    }

    public function insert($data) {
        return $this->_db->add($data);
    }

    public function delete($id) {
        return $this->_db->where('id='.$id)->delete();
    }

    public function getInfoById($id) {
        return $this->_db->where('id='.$id)->select();
    }

    public function updateById($id,$data) {
        return $this->_db->where('id='.$id)->svae($data);
    }


}