<?php
namespace Admin\Model;
use Think\Model;
use Think\Page;

class EssaysModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('essay');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getEssaysList() {
        $res = $this->_db->select();
        return $res;
    }

    public function getEssaysById($id) {
        $res = $this->_db->where('id='.$id)->select();
        return $res;
    }
    public function insert($data) {
        return $this->_db->add($data);
    }

    public function updataEssaysById($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

    public function dropEssaysById($id) {
        return $this->_db->where('id='.$id)->delete();
    }


}