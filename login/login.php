<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>East African Explorer | Login</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <!-- <img src="assets/img/logo-invoice.png" /> -->
                <h2>East African Explorer</h2>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                <div class="panel-body">
                    <form role="form" action="../database/login_db.php" method="post">
                        <hr />
                        <h4>please Login to make reservation</h4>
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" name="email" required class="form-control" placeholder="Enter Email " />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" name="password" required class="form-control"  placeholder="Enter Password" />
                            </div>
                        <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Remember me
                                </label>
                                <span class="pull-right">
                                        <a href="../index.php" >Forget password ? </a> 
                                </span>
                            </div>
                            
                            <!-- <a href="reservation.php" class="btn btn-primary ">Login Now</a> -->
                            <button type="submit" name="subit" class="btn btn-primary">Login Now</button>
                        <hr />
                        Not register ? <a href="registration.php" >click here </a> or go to <a href="../index.php">Home</a> 
                        </form>
                </div>
                
            </div>
                
                
        </div>
    </div>

</body>
</html>
