<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>East African Explorer | Registration Form</title>

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
                <h2>Registration Form</h2>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                             
                            <form role="form" action="../database/registration_db.php" method="post">
                                <div class="form-group">
                                    <label>First Name<span class="req">*</span> </label>
                                    <input class="form-control" id="first_name" autocomplete="off" required name="fname" type="text">
                                    <p class="help-block text-danger"></p>

                                    
                                </div>
                                <div class="form-group">
                                    <label>Last Name<span class="req">*</span> </label>
                                    <input class="form-control" id="last_name" autocomplete="off" required name="lname" type="text">
                                    <p class="help-block text-danger"></p>

                                
                                </div>
                                        <div class="form-group">
                                            <label>Enter Email<span class="req">*</span> </label>
                                            <input class="form-control" id="email" data-validation-required-message="Please enter your email address." autocomplete="off" required name="email" type="text">
                                            <p class="help-block text-danger"></p>

                                    
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Mobile<span class="req">*</span> </label>
                                            <input class="form-control" id="phone" autocomplete="off" required name="mobile" type="text">
                                            <p class="help-block text-danger"></p>

                                    
                                        </div>

                                            <div class="form-group">
                                            <label>Enter Password<span class="req">*</span> </label>
                                            <input class="form-control" id="password" autocomplete="off" required name="password" data-validation-required-message="Please enter your password" type="password">
                                            <p class="help-block text-danger"></p>

                                        </div>

                                <div class="form-group">
                                            <label>Re Type Password<span class="req">*</span> </label>
                                            <input class="form-control" id="password" autocomplete="off" required name="confirmpassword" data-validation-required-message="Please re-type your password" type="password">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-info">Register Now </button>

                                    </form>


                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
