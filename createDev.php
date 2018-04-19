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
                <span class="text-lg text-default"><b>创建设备：</b></span>
                <a href="showDev.php" class="btn btn-primary btn-xs">查看列表</a>  <hr>

                <div class="row">
                    <div class="col-sm-8" style="height:630px;">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">添加设备</div>
                            <div class="panel-body">
                                <form action="" method="POST" style="padding:8px">
                                    <div class="row" >
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label" for="">编号</label>
                                                <input class="form-control input-sm" type="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label" for="">密码</label>
                                                <input class="form-control input-sm" type="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label" for="">名称</label>
                                                <input class="form-control input-sm" type="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label" for="">效期</label>
                                                <input class="form-control input-sm" type="number">
                                            </div>
                                        </div>
                                    </div> <!-- row -->
                                    <div class="form-group">
                                        <label class="label-control" for="">描述</label>
                                        <textarea class="form-control input-sm" name="" cols="30" rows="10">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-control" for="">地理位置</label>
                                        <input class="form-control" type="">
                                    </div>
                                    <div class="form-group"> <!-- baidu map -->
                                    <img src="holder.js/710x280" alt="">
                                    </div>  <!-- baidu map -->
                                    <div class="text-right">
                                        <input class="btn btn-primary" type="submit" value="提交">
                                    </div>
                                </form>
                            </div> <!-- panel body -->
                        </div> <!-- panel -->
                    </div>  <!-- col-md-8 -->

                    <div class="col-sm-4 " style="">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">添加说明</div>
                            <div class="panel-body">
                                <p class="text-danger">编号: </p>
                                <div class="well">
                                设备编号全平台唯一，可使用平台自动生成的编号，也可以填写手动填写，编号长度为15或16个字符。
                                NB-IOT或GPRS模块请填写手动模块IMEI码，设备接入时需要上报含有设备编号和密码的注册包，
                                注册包格式为：ep=设备编号&pw=通信密码，ep和pw字段中间有个符号'&'，例如：ep=76ZKJ1R2AYHWHX9Y&pw=123456
                                </div>

                                <p class="text-danger">密码: </p>
                                <div class="well">
                                UDP和TCP协议接入时需要携带密码,密码长度固定6位
                                </div>

                                <p class="text-danger">名称: </p>
                                <div class="well">
                                名称更容易区分设备，方便记忆，分组管理，故障排除等
                                </div>

                                <p class="text-danger">效期: </p>
                                <div class="well">
                                由于公网的IP和端口资源有限，一定时间内未通信，NAT会回收这些资源（针对UDP协议，TCP协议自己决定），
                                所以会导致服务器端下发数据不成功。而且客户端再次上发数据恢复通信后的ip和port也可能会变化，
                                因此出于安全考虑，过期时间到达后，云平台会要求设备重新上发注册信息，否则消息会被平台忽略
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
            if($(this).index('#leftbar li') == 1){
                $(this).addClass('active');
            }
        })
    </script>

</body>
</html>
