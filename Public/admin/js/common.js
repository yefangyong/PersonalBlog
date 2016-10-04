/**
 *编辑模型
 */
$(".table-bordered #yfycms-edit").on('click',function(){
    var id = $(this).attr('attr-id');
    var url = SCOPE.edit_url+'&id='+id;
    window.location.href=url;
});

/**
 * 添加按钮操作
*/
$("#button-add").click(function(){
    var url = SCOPE.add_url;
    window.location.href=url;
});

/**
 * 删除操作采用了layer插件和异步加载方式
 */
$(".table-bordered  #yfycms-delete").on('click',function(){
    var id = $(this).attr('attr-id');
    var a = $(this).attr('attr-a');
    var message=$(this).attr('attr-message');
    var url = SCOPE.set_status_url;
    data={};
    data['id'] = id;
    data['status'] = -1;

    layer.open({
        type : 0,
        title : '是否提交？',
        btn : ['yes','no'],
        icon :3,
        closeBtn : 2,
        content : '是否确认'+message,
        scorllbar : true,
        yes: function(){
            todelete(data);
        },
    });
});

function todelete(data){
    var url = SCOPE.set_status_url;
    //ajax的异步操作，交互性好
    $.post(
        url,data,function(s){
            if(s.status == 1){
                return dialog.success(s.message,'');
            }else{
                return dialog.error(s.message);
            }
        },"JSON");
}

/**
 *提交form表单操作
 */
$("#yfycms-button-submit").click(function(){
    var data=$("#yfycms-form").serializeArray();
    postData = {};
    $(data).each(function(i){
        postData[this.name]=this.value;
    });
    console.log(postData);
    url = SCOPE.save_url;
    jump_url = SCOPE.jump_url;
    $.post(url,postData,function($result){
        if($result.status==1) {
           return  dialog.success($result.message,jump_url);
        }
        if($result.status==0) {
            return dialog.error($result.message);
        }
    },"JSON");
});