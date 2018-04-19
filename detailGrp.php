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
                <span class="text-lg text-default"><b>分组详情：</b></span>
                <a href="showGrp.php" class="btn btn-primary btn-xs">查看列表</a>  <hr>

                <div class="row ">
                    <div class="col-sm-12">
                    <div class="well workorder-info">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="title">分组名称：</span>龙岗大道
                            </div> 
                            <hr>
                            <div class="col-sm-3"><span class="title">透传模式：</span>多对多</div>
                            <div class="col-sm-3"><span class="title">已绑设备：</span>2</div>
                            <div class="col-sm-4 col-xs-7"><span class="title">分组描述：</span>龙翔大道2188号</div>
                            <div class="col-sm-2 col-xs-5 text-right">
                                <a href="createGrp.php">编辑</a>|
                                <a href="">删除</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-8" style="height:630px;">
                        <div class="panel panel-primary shadow">
                            <div class="panel-heading">已绑定设备</div>
                               <table class="table  table-striped table-hover my-border ">
                                   <tr class="has-info">
                                       <th>设备编号</th>
                                       <th>设备名称</th>
                                       <th>操作</th>
                                   </tr>
                                  <tr>
                                      <td> 3WGWT6HJA9GEC851 </td>
                                      <td> sziit</td>
                                      <td>
                                          <a href='debug.php' title='调试'><i class="fa fa-cog fa-fw fa-lg"></i></a>
                                          <a href='detailDev.php' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                                          <a href='createDev.php' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                                          <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td> ECG5LXS38Y2DXYWN </td>
                                      <td> King </td>
                                      <td>
                                          <a href='debug.php' title='调试'><i class="fa fa-cog fa-fw fa-lg"></i></a>
                                          <a href='detailDev.php' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                                          <a href='createDev.php' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                                          <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                                      </td>
                                  </tr>
                               </table>

                            <div class="panel-body">
                            </div> <!-- panel body -->
                        </div> <!-- panel -->
                    </div>  <!-- col-md-8 -->

                    <div class="col-sm-4 " style="">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">其他说明</div>
                            <div class="panel-body">无
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
