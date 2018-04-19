<!DOCTYPE html>
<html lang="zh_CN">
<head>
<?php include("head.html"); ?>
</head>
<body>
<?php include("nav.html"); ?>
      <div class="container-fluid">
          <div class="row">
            <div id="leftbar" class="col-md-2 bg-info" style="border-right:1px solid #c3c3c3;height:700px">
                <?php include("leftbar.html")?>
            </div> <!-- #leftbar -->

            <div class="col-md-10" >


                <div class="row"> <!-- level 1 -->

                    <!-- mid board -->
                    <div class="col-md-8 bg-danger" style="height:400px"> 
                        <br>
                        
                        <!-- panel-manager -->
                        <div class="panel panel-default shadow">

                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h3>管理面板</h3>
                                </div> 
                            </div> <!-- head -->

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thumbnail myThumnail">
                                            <center><i class="fa fa-microchip text-primary"></i></center>
                                            <div class="caption">
                                                <br>
                                                <center> 
                                                    <h4 class="text-info"><b>管理设备</b></h4>
                                                </center>
                                            </div>
                                            <center>
                                                <b class="text">设备数</b> 
                                                <span class="label label-success">12</span>
                                            </center>
                                        </div> <!-- thumbnail -->
                                    </div>


                                    <div class="col-md-4">
                                       <div class="thumbnail myThumnail">
                                            <center><i class="fa fa-cubes text-success"></i></center>
                                            <div class="caption">
                                                <br>
                                                <center>
                                                    <h4 class="text-info"><b>管理分组</b></h4>
                                                </center>
                                            </div>
                                            <center>
                                                <b class="text">分组数</b>
                                                <span class="label label-success">12</span>
                                            </center>
                                        </div> <!-- thumbnail -->
                                    </div>


                                    <div class="col-md-4">
                                       <div class="thumbnail myThumnail">
                                            <center><i class="fa fa-gavel text-danger"></i></center>
                                            <div class="caption">
                                                <br>
                                                <center>
                                                    <h4 class="text-info"><b>管理故障</b></h4>
                                                </center>
                                            </div>
                                            <center>
                                                <b class="text">故障数</b>
                                                <span class="label label-success">12</span>
                                            </center>
                                        </div> <!-- thumbnail -->
                                    </div>

                                </div>  <!-- row1 -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- mid board -->
                    

                    <!-- rig board -->
                    <div class="col-md-4 bg-warning" style="height:400px">
                        <br>

                        <div class="panel panel-default shadow">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    扇形统计
                                </div>
                            </div> <!-- head -->
                        
                            <div class="panel-body">
                                <div class="well" style="height:260px">
                                    This is test page data !!
                                </div>
                            </div>
                        </div>

                    </div> <!-- rig board -->


                </div>  <!-- level 1 -->







            </div> <!-- col-md -->
          </div> <!-- big row -->
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
</body>
</html

