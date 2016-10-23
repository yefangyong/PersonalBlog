<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 18:29
 */
namespace Common\Model;
use Think\Model;
use Think\Page;

class PhotoModel extends Model {
    private $_db = '';

    public function __construct() {
       $this->_db = M('photo');
    }

    public function getPhotoCount() {
      return  $this->_db->count();
    }

    public function getPhotoInfo($count) {
        $Page = new Page($count,5);
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function getPhotoById($id) {
        return $this->_db->where('id='.$id)->select();
    }

    public function insert($data) {
        return $this->_db->add($data);
    }

    public function delete($id) {
        return $this->_db->where('id='.$id)->delete();
    }

    public function updatePhotoById($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }


}