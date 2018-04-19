<!DOCTYPE html>
<html lang="zh_CN">
<head>
<?php include("head.html"); ?>
</head>
<body>
<?php include("nav.html"); ?>
      <div class="container-fluid">
          <div class="row ">
            <div id="leftbar" class="col-md-2 bg-info" style="border-right:1px solid #c3c3c3;height:750px">
                <?php include("leftbar.html")?>
            </div> <!-- #leftbar -->


            <div class="col-md-10 col-md-offset-2 " style="height:750px" > <br>
                <span class="text-lg text-default"><b>设备详情：</b></span>
                <a href="showDev.php" class="btn btn-primary btn-xs">查看列表</a><hr>

                <div class="row ">
                    <div class="col-sm-12">
                    <div class="well workorder-info">
                        <div class="row">
                            <div class="col-sm-2"><span class="title">设备名称：</span>King </div> 
                            <div class="col-sm-6"><span class="title">设备编号：</span>ECG5LXS38Y2DXYWN</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"><span class="title">设备密码：</span>489421</div>
                            <div class="col-sm-3"><span class="title">过期时间：</span>300秒</div>
                            <div class="col-sm-3 col-xs-7"><span class="title">地理位置：</span>龙翔大道2188号</div>
                            <div class="col-sm-2 col-xs-5 text-right">
                                <a href="createGrp.php">编辑</a>|
                                <a href="">删除</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-8" style="height:600px;">
                        <div class="panel panel-primary shadow">
                           <div class="panel-heading">地图查看</div>
                            <img src="holder.js/758x330" alt="">
                            <div class="panel-body">
                            </div> <!-- panel body -->
                        </div> <!-- panel -->
                    </div>  <!-- col-md-8 -->

                    <div class="col-sm-4 " style="">
                        <div class="panel panel-primary shadow">
                            <div class="panel-heading">所在分组</div>
                            <div class="panel-body">
                                <ul>
                                    <li> 龙岗大道（多对多）</li>
                                    <li> 深圳路灯（多对多）</li>
                                    <li> 深信路灯（多对多）</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>  <!-- row -->
            
            </div> <!-- #mainbar -->
            <?php include("modal.html");?>
          </div> <!-- row -->
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
    <script>
        $("#leftbar li").each(  function(){
            $(this).removeClass('active');
            if($(this).index('#leftbar li') == 1){
                $(this).addClass('active');
            }
        })
    </script>

</body>
</html>
