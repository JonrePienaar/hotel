
<?php session_start();
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
    <!-- The Ajax fuction does not work for some reason. I have been trying for hours to fix it but -->
    <!-- I could not get it to work. I am sure I will fix it by tommorow(11 Desember). I have also tried a other ways but --> 
    <!-- then it is either the page not refreshing or php not grabbing the ingo ect. I apologize for it not working like it should.-->
    <!-- Please still do look at my code, I feel like it is supposed to be working. -->
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
    <script src="jquery-3.3.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="main.js"  type="text/javascript"> console.log(name);</script>
</head>

<body style="background-image: url('https://viral-a.com/wp-content/uploads/2018/10/vacation.jpg');">
<?php
    createDatabase();
?>
    <div class="container shadow">
        <div class=" container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>TRAVEL-MASTER</h1>
                        <p class="gotchu">Need a hotel? I gotchu!</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div style="width:100%;" class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="wideness" action="" method="POST" >
                                <label style="margin-left:40px;" class="text-monospace text-center nameAndEmail">Enter your name and e-mail adress below:</label>
                                <input name ="name" style="width: 500px; margin-left:50px;" id="nameEntered" type="text" class=" name wideness form-control"  placeholder="Enter name..." />
                                <input name="email" style="margin-left:50px; margin-top:15px;" id="emailEntered" type="email" class=" name wideness form-control" style="margin: 20px;" placeholder="Enter email..." />
                        
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 center" style="padding: 20px;">
                            <h3>Select a hotel:</h3>
                            <ul>
                                <li>Two Oceans Hotel: R365.00/night</li>
                                <li>Just a Hotel: R4 000.00/night</li>
                                <li>The really expensive Hotel: R190 000.00/night</li>
                            </ul>
                            <select cass="form-control inputstl" name="hotels" id="hotels">
                                <option value="two">Two Oceans</option>
                                <option value="random">Just a hotel</option>
                                <option value="another">The really expensive Hotel</option>
                            </select>
                        
                        </div>
                        <div class="col-md-6 center" style="padding: 20px;">
                            <h3>Select the amount of days you want to visit this hotel:</h3>
                            <input id="days" name="days" type="number">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class=" newButton col-md-12" style="padding: 20px;">
                            <button id="button" type="button" onclick="validate()"  name="button" >Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" white container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><span class="text"></span></h1>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-12">
                            <p><span class="text1"></span> <span class="hotelResult"></span> <span class="text2"></span><span class="daysResult"></span><span class="text3"></span><span class="totalCostResult"></span><span class="text4"></span><span class="perNightResult"></span><span class="text5"></span></p>
                            <p> <span class="text6"></span> <span class="email"></span></p>
                        </div>
                    </div>
            </div>
        </div>
    </form>
   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
