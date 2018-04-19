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



            <div class="col-md-10 col-md-offset-2" style="height:750px" > <br>

            <span class="text-lg text-default"><b>设备列表：</b></span>
            <a href="createDev.php" class="btn btn-primary btn-xs">添加设备</a> 
            <hr>
            <form class="form-inline" action="">
                <div class="form-group">
                    <label for="">设备编号： </label>
                    <input class="form-control" type="text">
                </div> &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <label for="">设备名称：</label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-sm" value="查询">
                </div>
                &nbsp;
                <label class="small text-muted" for="">共1条记录，本页1条</label>
            </form>
            <br>
            <br>
            <table class="table table-striped table-hover my-border ">
                 <tr class="">
                     <th>
                        <a href="" data-toggle='tooltip' data-original-title="每5s刷新">状态</a>
                     </th>
                     <th>设备编号</th>
                     <th>设备密码</th>
                     <th>设备名称</th>
                     <th>超时时间</th>
                     <th>物理位置</th>
                     <th>操作</th>
                 </tr>
                <tr>
                    <td> <span class="glyphicon glyphicon-ok text-success"></span> 在线</td>
                    <td> 3WGWT6HJA9GEC851 </td>
                    <td> 123751</td>
                    <td> sziit</td>
                    <td> 0s (永不过期)</td>
                    <td> <i class="fa fa-map-marker fa-lg text-danger" aria-hidden="true"></i> 广东省深圳市罗湖区清水河一路10 </td>
                    <td>
                        <a href='debug.php' title='调试'><i class="fa fa-cog fa-fw fa-lg"></i></a>
                        <a href='detailDev.php' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                        <a href='createDev.php' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                        <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                    </td>
                </tr>
                <tr>
                    <td> <span class="glyphicon glyphicon-remove text-danger"></span> 离线 </td>
                    <td> ECG5LXS38Y2DXYWN </td>
                    <td> 489421</td>
                    <td> King </td>
                    <td> 300s </td>
                    <td> <i class="fa fa-map-marker fa-lg text-danger" aria-hidden="true"></i> 广东省深圳市龙岗区龙翔大道</td>
                    <td>
                        <a href='debug.php' title='调试'><i class="fa fa-cog fa-fw fa-lg"></i></a>
                        <a href='' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                        <a href='' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                        <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                    </td>
                </tr>
             </table>
          </div> <!-- mainbar -->

        </div> <!-- row -->
            <?php include("modal.html");?>
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
    <script>
        $("#leftbar li").each(  function(){
            $(this).removeClass('active');
            if($(this).index('#leftbar li') == 2){
                $(this).addClass('active');
            }
        })
    </script>

</body>
</html>
