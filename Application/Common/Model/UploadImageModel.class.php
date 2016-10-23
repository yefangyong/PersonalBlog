<?php
namespace Common\Model;
use Think\Model;

/**
 * 上传图片类
 * @author  yfy
 */
class UploadImageModel extends Model {
    private $_uploadObj = '';
    private $_uploadImageData = '';

    const UPLOAD = 'Uploads';

    public function __construct() {
        $this->_uploadObj = new  \Think\Upload();

        $this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->_uploadObj->maxSize =  3145728; //设置文件的大小
        $this->_uploadObj->exts = array('jpg','gif','png','jpeg'); //设置文件上传类型
    }

    public function upload($dir) {
        $this->_uploadObj->subName = $dir;
        $res = $this->_uploadObj->upload();
        if($res) {
            return  '/guest2/' .self::UPLOAD . '/' . $res['imgFile']['savepath'] . $res['imgFile']['savename'];
        }else{
            return $this->_uploadObj->getError();
        }
    }

    public function imageUpload($dir) {
        $this->_uploadObj->subName = $dir;
        $res = $this->_uploadObj->upload();
        if($res) {
            //注意这个不是一级目录，也就是根目录下面，所以要加上guest2
            return '/guest2/' .self::UPLOAD . '/' . $res['file']['savepath'] . $res['file']['savename'];
        }else{
            return $this->_uploadObj->getError();
        }
    }
}
