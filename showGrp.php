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

            <span class="text-lg text-default"><b>分组列表：</b></span>
            <a href="createGrp.php" class="btn btn-primary btn-xs">添加分组</a>
            <hr>
            <form class="form-inline" action="">
                <div class="form-group">
                    <label for="">分组编号： </label>
                    <input class="form-control" type="text">
                </div> &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <label for="">分组名称：</label>
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
                     <th>分组编号</th>
                     <th>分组名称</th>
                     <th>透传模式</th>
                     <th>绑定数量</th>
                     <th>分组描述</th>
                     <th>操作</th>
                 </tr>
                <tr>
                    <td> 91100366 </td>
                    <td> 龙岗大道 </td>
                    <td> 多对多   </td>
                    <td> 3        </td>
                    <td> 龙翔大道2188号 </td>
                    <td>
                        <a href='detailGrp.php' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                        <a href='createGrp.php' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                        <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                    </td>
                </tr>
                <tr>
                    <td> 91100366 </td>
                    <td> 龙岗大道 </td>
                    <td> 多对多   </td>
                    <td> 3        </td>
                    <td> 龙翔大道2188号 </td>
                    <td>
                        <a href='detailGrp.php' title='详情'><i class="fa fa-search-plus fa-fw fa-lg"></i></a>
                        <a href='createGrp.php' title='编辑'><i class="fa fa-edit fa-fw fa-lg"></i></a>
                        <a href='' title='删除'><i class="fa fa-trash-o fa-fw fa-lg"></i></a>
                    </td>
                </tr>
             </table>
          </div> <!-- mainbar -->
            <?php include("modal.html");?>

        </div> <!-- row -->
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
    <script>
        $("#leftbar li").each(  function(){
            $(this).removeClass('active');
            if($(this).index('#leftbar li') == 4){
                $(this).addClass('active');
            }               
        })
    </script>
</body>
</html>
