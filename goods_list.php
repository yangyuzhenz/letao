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
                    <div class="item">
                        <div class="pic">
                            <img src="./uploads/course_1.jpg" alt="">
                        </div>
                        <div class="info">
                            <a href="javascript:;">匡威三星标1970s converse复刻 142334c 144757c三星标黑色高帮</a>
                            <ul class="list-unstyled">
                                <li>
                                    <span>商品原价：888.1</span>
                                </li>
                                <li>
                                    <span>优惠价：499.1</span>
                                </li>
                                <li>
                                    <span>商品库存：32</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pic">
                            <img src="./uploads/course_2.jpg" alt="">
                        </div>
                        <div class="info">
                            <a href="javascript:;">李宁闪击篮球鞋驭帅10镭射队尚4男韦德之道空袭中高帮队尚3.5球鞋</a>
                            <ul class="list-unstyled">
                                <li>
                                    <span>商品原价：888.1</span>
                                </li>
                                <li>
                                    <span>优惠价：499.1</span>
                                </li>
                                <li>
                                    <span>商品库存：32</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pic">
                            <img src="./uploads/course_3.jpg" alt="">
                        </div>
                        <div class="info">
                            <a href="javascript:;">Sport飓风 Nike Kwazi 休闲运动鞋男 844839-002-001-100-400</a>
                            <ul class="list-unstyled">
                                <li>
                                    <span>商品原价：888.1</span>
                                </li>
                                <li>
                                    <span>优惠价：499.1</span>
                                </li>
                                <li>
                                    <span>商品库存：32</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pic">
                            <img src="./uploads/course_4.jpg" alt="">
                        </div>
                        <div class="info">
                            <a href="javascript:;">指南针运动 NIKE HYPERSHIFT篮球鞋 844392-010-607-164-017现货</a>
                            <ul class="list-unstyled">
                                <li>
                                    <span>商品原价：888.1</span>
                                </li>
                                <li>
                                    <span>优惠价：499.1</span>
                                </li>
                                <li>
                                    <span>商品库存：32</span>
                                </li>
                            </ul>
                        </div>
                    </div>
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

    <?php include './common/script.html' ?>
    <script>
        require([' src/goodslist']);
    </script>
   
</body>
</html>