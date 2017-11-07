define(['jquery','template'], function ($, template) {
  $.ajax({
    url:'/api/product/queryProductDetailList',
    type:'get',
    data:{page:1,pageSize:2},
    success:function(info){
      console.log(info);
    }
  })

});