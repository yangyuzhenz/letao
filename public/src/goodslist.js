define(['jquery','template'], function ($, template) {
  
  var size=2;
  // var page=1;

  //利用正则匹配页码
  var reg=/\?[a-z]+=(\d+)/;
  //处理请求参数
  var search=location.search || '';//有页数就输当前页，没有就为null
  // console.log(search);//?page=1
  // 有页数就输当前页，没有就为默认为1
  var page=reg.exec(search) && reg.exec(search)[1];

  page=page || 1;
  console.log(page);
  
  $.ajax({
    url:'/api/product/queryProductDetailList',
    type:'get',
    data:{page:page,pageSize:size},
    success:function(info){
      // console.log(info);


      //总的数据条数
      var total=info.total;
     
      //总的页数
      var pageLen=Math.ceil(total/size);
      //页数模板
      var pageHtml=template('page',{
        pageLen:pageLen,
        page:page
      })
      $('.pagination').html(pageHtml);
      var html=template('tpl',info);
      $('.goods').html(html);
    }
  })

});