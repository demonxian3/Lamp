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
                <span class="text-lg text-default"><b>数据调试：</b></span>
                <button class="btn btn-primary btn-xs">查看列表</button>  <hr>

                <div class="row">
                    <div class="col-sm-8" >
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">串口数据调试 </div>
                            <div class="panel-body">
                                <div class="debug-data">
                                    <div class="debugScreen">

                                       <div class="media pull-left">
                                           <div class="media-left"> <span class="glyphicon glyphicon-cloud"></span> </div>
                                           <div class="media-body rep">&nbsp;&nbsp;这是设备上发到云服务器的消息: Device--&gt;Cloud </div>
                                       </div> <!-- media -->

                                       <div class="media  pull-right">
                                           <div class="media-body req "> &nbsp;&nbsp;这里是设备上发到云服务器的消息: Device--&gt;Cloud </div>
                                           <div class="media-right"> <span class="glyphicon glyphicon-blackboard"></span> </div>
                                       </div> <!-- media -->

                                       <div class="media pull-left">
                                           <div class="media-left"> <span class="glyphicon glyphicon-cloud"></span> </div>
                                           <div class="media-body rep">&nbsp;&nbsp;这是设备上发到云服务器的消息: Device--&gt;Cloud </div>
                                       </div> <!-- media -->

                                        
                                    </div> <!-- debugScreen -->

                                    <div class="checkbox">
                                      <label>
                                        <input id="ckb-rx-hex" type="checkbox"> 按十六进制接收
                                      </label>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" name="data" data-trigger="manual" data-toggle="txt-send-tips" data-placement="top" data-content="">
                                            <span class="input-group-btn">
                                                <button id="btnTxtSend" class="btn btn-primary">发送</button>
                                            </span>
                                    </div> <!-- checkbox -->

                                    <div class="checkbox">
                                      <label style="margin-right: 15px">
                                        <input id="ckb-tx-hex" type="checkbox">按十六进制发送
                                      </label>
                                      <label style="margin-right: 15px">
                                        <input id="ckb-tx-clear" type="checkbox">发送完成清空
                                      </label>
                                      <label>
                                        <input id="ckb-tx-newline" type="checkbox">发送回车换行符:\r\n
                                      </label>
                                    </div> <!-- checkbox -->

                                </div>
                            </div> <!-- panel body -->
                        </div> <!-- panel -->
                    </div>  <!-- col-md-8 -->

                    <div class="col-sm-4 " style="">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">状态信息</div>
                            <div class="panel-body">
                                <p>
                                <b>在线状态: </b> &nbsp;
                                <span class="glyphicon glyphicon-ok text-success"></span>
                                在线
                                </p>
                                <p>
                                <b>接入协议: </b> &nbsp;
                                </p>

                            </div> <!-- body -->
                        </div>

                        <div class="panel panel-default shadow">
                            <div class="panel-heading">设备信息</div>
                            <div class="panel-body">
                                <p>
                                <b>设备名称: </b> &nbsp;
                                King
                                </p>
                                <p>
                                <b>设备编号: </b> &nbsp;
                                ECG5LXS38Y2DXYWN
                                </p>
                                <p>
                                <b>设备密码: </b> &nbsp;
                                489421
                                </p>
                                <p>
                                <b>超时时间: </b> &nbsp;
                                300秒
                                </p>
                            </div> <!-- body -->
                        </div>

                        <div class="panel panel-default shadow">
                            <div class="panel-heading">其他信息</div>
                            <div class="panel-body">
                                <p>
                                <b>注册包: </b> &nbsp;
                                <small>复制即可，格式为ep=id&pw=pw</small>
                                </p>
                                <div class="form-group">
                                   <input class="form-control input-sm" value="ep=ECG5LXS38Y2DXYWN&amp;pw=489421" readonly="true" type="text">
                                </div> <!-- form-group -->

                                <p><b>含注册包的NB模块UDP发送指令：</b><small>需将index改为已创建的socket-id</small></p>
                                <div class="form-group">
                                    <textarea name="hex-reg" type="text" class="form-control input-sm" rows="4" style="max-width: 100%;" readonly="true"> AT+NSOST=index,115.29.240.46,6000,29,65703d454347354c585333385932445859574e2670773d343839343231 </textarea>
                                 </div>
                            </div> <!-- body -->
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
