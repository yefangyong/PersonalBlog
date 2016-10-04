var login = {
    check:function() {
        //获取页面中的登录名和密码
        var username=$('input[name="username"]').val();
        var password=$('input[name="password"]').val();
        if(!username) {
            dialog.error('用户名不得为空!');
        }
        if(!password) {
            dialog.error('密码不得为空!');
        }
        var url="admin.php?m=admin&c=login&a=check";
        var data={'username':username,'password':password};
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message,'admin.php');
            }
        },"JSON");
    }
}