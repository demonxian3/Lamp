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

            <div class="col-md-7 col-md-offset-2 bg-danger " style="height:750px" >
               <br>

               <!-- panel-manager -->
               <div class="panel panel-default shadow">

                   <div class="panel-heading">
                       <div class="panel-title">
                        管理面板
                       </div>
                   </div> <!-- head -->

                   <div class="panel-body">
                       <div class="row">
                           <div class="col-md-4">
                               <div id="showDev" class="thumbnail myThumnail">
                                   <center><i class="fa fa-microchip text-primary"></i></center>
                                   <div class="caption">
                                       <br>
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
                              <div id="showGrp" class="thumbnail myThumnail">
                                   <center><i class="fa fa-cubes text-success"></i></center>
                                   <div class="caption">
                                       <br>
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
                              <div id="showBad" class="thumbnail myThumnail">
                                   <center><i class="fa fa-gavel text-danger"></i></center>
                                   <div class="caption">
                                       <br>
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
                   </div>  <!-- body -->
               </div> <!-- panel -->



                
                <div class="panel panel-default shadow">
                    <div class="panel-heading">
                        <div class="panel-title">查看面板</div>
                    </div>
                    <div class="panel-body">
                       <div class="row">
                           <div class="col-md-4">
                              <div class="thumbnail myThumnail">
                                   <center><i class="fa fa-globe text-warning"></i></center>
                                   <div class="caption">
                                       <br>
                                       <br>
                                       <center>
                                           <h4 class="text-info"><b>地图查看</b></h4>
                                       </center>
                                   </div>
                               </div> <!-- thumbnail -->
                           </div>
                           <div class="col-md-4"></div>
                           <div class="col-md-4"></div>
                       </div> <!-- row -->
                    </div> <!-- body -->
                </div> <!-- panel2 -->


            </div> <!-- #mainbar -->





            <div class="col-md-3 bg-warning hidden-xs" style="height:750px">
               <br>

               <!-- panel 1 -->
               <div class="panel panel-default shadow">
                   <div class="panel-heading">
                       <div class="panel-title">
                           扇形统计
                       </div>
                   </div> <!-- head -->

                   <div class="panel-body">
                       <div class="well" style="height:160px">
                           This is test page data !!

                       </div>
                   </div>
               </div>
               <!-- panel 1 -->


               <div class="panel panel-default sh">
                   <div class="panel-heading">
                       <div class="panel-title">
                       条形统计
                       </div>
                   </div> <!-- head -->
                   <div class="panel-body">
                       <div class="well" style="height:300px">
                           This is test page data!!
                       </div>
                   </div>
               </div>

            </div> <!-- #rightbar -->

            <?php include("modal.html");?>

          </div> <!-- row -->
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
    <script>
        $("#leftbar li").each(  function(){
            $(this).removeClass('active');
            if($(this).index('#leftbar li') == 0)   {
                $(this).addClass('active');
            }
        })

        $('#showDev').click(function(){
            document.location = getRealPath() + "showDev.php";
        })

        $('#showGrp').click(function(){
            document.location = getRealPath() + "showGrp.php";
        })

        $('#showBad').click(function(){
            a("抱歉！功能尚未开发")
        })
    </script>
</body>
</html>
