<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <?php include './common/style.html' ?>
</head>
<body>
    <?php include './common/aside.html' ?>
    
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
        <?php include './common/header.html' ?>
           
            <!-- 客户列表 -->
            <div class="body goods-list">
                <!-- 面包屑 -->
                <ol class="breadcrumb">
                    <li><a href="javascript:;">商品管理</a></li>
                    <li class="active">商品列表</li>
                </ol>
                <div class="page-title">
                    <a href="./goods_add.html" class="btn btn-success btn-sm pull-right">添加商品</a>
                </div>
                <div class="goods">
                </div>
                <!-- 分页 -->
                <ul class="pagination pull-right">
                    <li><a href="#">上一页</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">下一页</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script type='text/template' id="tpl">
        {{each rows}}
        <div class="item">
            <div class="pic">
                <img src="./uploads/course_1.jpg" alt="">
            </div>
            <div class="info">
                <a href="javascript:;">{{$value.proName}}</a>
                <ul class="list-unstyled">
                    <li>
                        <span>商品原价：{{$value.oldPrice}}</span>
                    </li>
                    <li>
                        <span>优惠价：{{$value.price}}</span>
                    </li>
                    <li>
                        <span>商品库存：{{$value.num}}</span>
                    </li>
                </ul>
            </div>
        </div>
        {{/each}}
    </script>
    <?php include './common/script.html' ?>
    <script>
        require(['src/goodslist']);
    </script>
   
</body>
</html>