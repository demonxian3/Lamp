<!DOCTYPE html>
<html lang="zh_CN">
<head>
<?php include("head.html"); ?>
</head>
<body>
<?php include("nav.html"); ?>
      <div class="container-fluid">
          <div class="row">
            <div id="leftbar" class="col-md-2 bg-info" style="border-right:1px solid #c3c3c3;height:750px">
                <?php include("leftbar.html")?>
            </div> <!-- #leftbar -->



            <div class="col-md-10 col-md-offset-2 " style="height:750px" > <br>
                <span class="text-lg text-default"><b>创建分组：</b></span>
                <a href="showGrp.php" class="btn btn-primary btn-xs">查看列表</a><hr>

                <div class="row">
                    <div class="col-sm-8" style="height:630px;">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">添加分组</div>
                            <div class="panel-body">
                                <form action="" method="POST" style="padding:8px">
                                    <div class="row" >
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="">分组名称</label>
                                                <input class="form-control input-sm" type="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="">透传模式</label>
                                                <select  class="form-control" name="">
                                                    <option value="o2o">一对一（单播）</option>
                                                    <option value="o2m">一对多（组播）</option>
                                                    <option value="m2m">多对多（多播）</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- row -->
                                    <div class="form-group">
                                        <label class="label-control" for="">分组描述</label>
                                        <textarea class="form-control input-sm" name="" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="text-right">
                                        <input class="btn btn-primary" type="submit" value="提交">
                                    </div>
                                </form>
                            </div> <!-- panel body -->
                        </div> <!-- panel -->


                        <div class="panel panel-default">
                            <div class="panel-heading">添加设备到分组</div>
                            <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-6">
                                    <label for="">已添加的设备</label>
                                    <div class="well " style="height:200px;border:1px solid #cccccc"></div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="">请选择设备</label>
                                    <div class="form-group">
                                    <select id="" class="form-control input-sm" name="">
                                        <option value="1843">3WGWT6HJA9GEC851-哈哈</option>
                                        <option value="2024">ECG5LXS38Y2DXYWN-King</option>
                                    </select>
                                    </div> <!-- form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-block btn-default btn-sm">添加</button>
                                    </div>

                                  </div> <!-- col-md-6 -->
                              </div>
                            </div> <!-- body -->
                        </div>


                    </div>  <!-- col-md-8 -->

                    <div class="col-sm-4 " style="">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">添加说明</div>
                            <div class="panel-body">
                                <p class="text-danger">透传模式: </p>
                                <div class="well">
                                <span class="bg-danger">一对一透传：</span>
                                是指两个节点之间相互透传数据，
                                一对一模式下，只能添加两个设备。<br><br>
                                <span class="bg-danger">一对多透传：</span>
                                该模式需要指定一个主设备，
                                然后主设备和多个从设备之间相互透传数据。
                                主设备发送的数据，每个从设备都能收到，
                                而从设备发送的数据，只能被主设备收到。<br><br>
                                <span class="bg-danger">多对多透传：</span>
                                该模式类似一个聊天群组，
                                群组内的所有设备均对等，所有设备都能接收到其他设备发送的消息。<br>
                                </div>

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
            if($(this).index('#leftbar li') == 3)   {
                $(this).addClass('active');
            }
        })
    </script>

</body>
</html>
