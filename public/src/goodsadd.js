define(['jquery','./utils'],function($){
  //表单提交
  $('form').on('submit',function(){
    var _this=$(this);
    console.log($(this));
    $.ajax({
      url:'/api/product/addProduct',
      type:'post',
      data:_this.serialize(),
      success:function(info){
        console.log(info);
      }
    })
    return false;
  })
  
})