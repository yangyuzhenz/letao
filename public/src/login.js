define(['jquery'],function($){
  //提交表单
  $('form').on('submit', function () {
    var _this=$(this);
    $.ajax({

        url: '/api/employee/employeeLogin',
        type: 'post',
        data:_this.serialize(),
        success:function(info){
          //失败
            if(info.error){
                alert(info.message);
                return;
            }
            location.href='/';
        }

    })
    return false;
  })  
})