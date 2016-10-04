<?php
/**
 * 公用的方法
 */
 function show($status,$message,$data=array()) {
    $result = array(
        'status'=>$status,
        'message'=>$message,
        'data'=>$data,
    );
     exit(json_encode($result));
}

function showkind($status,$data){
    header('Content/type:application/json;charset=utf-8');
    if($status == 0){
        exit(json_encode(array('error'=>0,'url'=>$data)));
    }
    exit(json_encode(array('error'=>1,'message'=>'上传失败')));
}