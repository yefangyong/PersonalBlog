<?php
namespace Admin\Model;
use Think\Model;
class YearModel extends  Model {
    private $_db = '';
    public function __construct() {
        $this->_db=M('year');
    }

    public function getYearInfo() {
        return $this->_db->select();
    }
}