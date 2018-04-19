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
                <h4 class="">注册用户</h4> <hr>

                <div class="panel panel-default shadow" style="width:770px;">
                    <div class="panel-heading">
                        下面均为必填选项
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="">
                            <div class="form-group">
                                <span class="col-md-2 control-label">账号</span>
                                <div class="col-md-10"><input class="form-control" type=""></div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-2 control-label">密码</span>
                                <div class="col-md-10"><input class="form-control" type=""></div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-2 control-label">密码确认</span>
                                <div class="col-md-10"><input class="form-control" type=""></div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-2 control-label">邮箱</span>
                                <div class="col-md-10"><input class="form-control" type=""></div>
                            </div>
                            <div class="text-right">
                                <input class="btn btn-danger btn-sm" type="submit" value="注册">
                            </div>
                        </form>
                    </div>
                </div>

            </div> <!-- #mainbar -->
            <?php include("modal.html");?>

        </div> <!-- row -->
      </div><!-- .container-fluid -->


    <script src="js/layout.js"></script>
    <script>
        $("#leftbar li").each(  function(){
            $(this).removeClass('active');
            if($(this).index('#leftbar li') == 6){
                $(this).addClass('active');
            }
        })
    </script>

</body>
</html>
