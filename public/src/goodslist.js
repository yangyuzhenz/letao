define(['jquery','template'], function ($, template) {
  $.ajax({
    url:'/api/product/queryProductDetailList',
    type:'get',
    data:{page:1,pageSize:6},
    success:function(info){
      console.log(info);

      var html=template('tpl',info);
      $('.goods').html(html);
    }
  })

});