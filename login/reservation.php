<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>East African Explorer | Reservation</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        /* header */
.tm-mt-0 { margin-top: 0; }
.tm-mb-15 { margin-bottom: 15px; }
.tm-color-primary { color: #309AFD; }
.tm-color-gray-2 { color: #98999A; }
.tm-color-light-gray { color: #9E9FA0; }

/* header ends */

.tm-footer {
  display: flex;
  justify-content: space-between;
  padding: 25px;
  font-size: 0.9em;
  background-color: #309AFD;
}

.busitema-header {
  padding: 60px 70px 30px;
}
    </style>
</head>
<body>
    <header class="busitema-header" ;class="header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">East African</span> <span class="tm-color-gray-2">Explorer</span></h1>
        <em class="tm-tagline tm-color-light-gray">Travel with the best, be a prime traveler!</em>
      
    </header>
    <!-- <div id="page-wrapper"> -->
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Make your reservation</h1>

                    <div class="container">
                        <h2 style="text-align: center;">seat arrangement</h2>
                    <h1 class="page-subhead-line" style="text-align: center;"> </h1>

                    <img src="img/Seat-layout.png" alt="seat arrangement" class="page-subhead-line" style="max-width: 100%; height: auto;">
                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
                    <div class="panel-heading">
                       RESERVATION FORM
                    </div>
                    <div class="panel-body">

                        <form role="form" action="../database/reservation_db.php" method="post">
                                    <div class="form-group">
                                        <label for="class">Class:<span class="req">*</span> </label>
                                        <select id="class" class="form-control" name="class">
                                            <option >--select--</option>

                                          <option value="first">First Class</option>
                                          <option value="second">Second Class</option>
                                          <option value="third">Third Class</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                                           
                            <label for="ticket_number">Enter Seat Number:<span class="req">*</span> </label>
                            <input type="text" class="form-control" placeholder="seat number" required name="seat_number">
                            </div> 

                             <div class="form-group">
                                <label for="stage">Stage:<span class="req">*</span> </label>
                                <select id="stage" class="form-control" name="stage">
                                    <option >--select--</option>

                                  <option value="Tororo">Tororo bus park</option>
                                  <option value="Nabyiba">Nabyiba bus park</option>
                                  <option value="Mbarara">Mbarara bus park</option>
                                  <option value="Gulu">Gulu bus park</option>
                                  <option value="Arua">Arua bus park</option>
                                </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="destination">Destination - Region:<span class="req">*</span> </label>
                                          <select id="destination" class="form-control" name="destination">
                                            <option >--select--</option>

                                            <option value="Eastern">Eastern</option>
                                            <option value="Western">Western</option>
                                            <option value="Southern">Southern</option>
                                            <option value="Central">Central</option>                      
                                          </select>
                                            </div>

                                        <div class="form-group">
                                            <label for="period">Travel Period:<span class="req">*</span> </label>
                                        <select id="period" class="form-control" name="period">
                                            <option >--select--</option>

                                          <option value="morning">Morning</option>
                                          <option value="afternoon">Afternoon</option>
                                          <option value="evening">Evening</option>
                                        </select>
                                        </div> 

                                        <!-- <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div> -->
                              
                             
                                    <button type="submit" name="submit" class="btn btn-info">Book Now</button>

                                </form>
                                   
                        </div>
                                                
                    </div>
                    
                        </div>

                        

<div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-danger">
                    <div class="panel-heading">
                        Cancel Reservation
                    </div>
                    <div class="panel-body">

                        <form action="cancel_ticket.php" method="post">
                            <div class="form-group">
                                                           
                            <label for="ticket_number">Enter Ticket Number:</label>
                            <input type="text" class="form-control" autocomplete="off" required name="ticket_number">
                            </div> 
                            <button type="submit" class="btn btn-danger">Cancel</button>
    
                        </form>

                        
                        </div>
                    </div>
                        </div>
            </div>
            <!-- form -->
           <div class = "container">
           <a href="../index.php">Go to home</a><br>
           <button type="submit" class="btn btn-danger"><a href="../index.php">Log out</a></button>
           
           </div>


           <footer class="tm-footer" >
            <span>Copyright &copy; <script>document.write(new Date().getFullYear()) </script> East African Explorer</span>
            <span>Web Designed by Munta101 </span>
           
        </footer>
</body>
</html>