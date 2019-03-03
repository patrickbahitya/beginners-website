<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/bootstrap/js/npm.js">
    <link rel="stylesheet" href="bootstrap/bootsrap/fonts/glyphicons-halflings-regular.eot">
<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">

    <title>patrick site</title>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="#down">scroll bottom</a>

        </div>
    </div>


    <div class="row" id="header" >
        <div class="col-md-3">
            <img class="title-logo" src="images/celeb10.jpg" width="200" height="170" align="left" alt="my personal logo">
        </div>
        <div class="col-md-3">
            <img class="title-logo" src="images/celeb9.jpg"  alt=" my logo" align="right" width="200" height="170">
        </div>
        <div class="col-md-6  text-uppercase text-right" style="color: #255625" >
            <h2 class="title-super">PATRICK BAHITYA</h2>
            <h2 class="title-super">u got me</h2>

            <h4>I aim Higher! life!</h4>


        </div>

    </div>
       <div class="col-md-12">
           <hr>

       </div>

        <div class="row">
            <div class="col-md-12">

                <script>

                    var myDate=new Date();
                    var hrs=myDate.getHours();
                    var greet;

                    var weekDay=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
                    var weekDay=myDate.toDateString();


                    var today=Date.parse(myDate);
                    var valentinesDay=Date.parse("Feb 14 2018",+ myDate.getFullYear());
                    daysToValentinesDay=Math.round((valentinesDay-today)/(1000*60*60*24));



                    if(hrs<12)
                        greet="Good Morning";
                    else if(hrs>=12 && hrs<=15)
                        greet="Good Afternoon";
                    else if(hrs>=15 && hrs<=18)
                        greet="Good Evening";
                    else
                        greet="Good Night";
                    document.write('<b style="color: purple;font-size: x-large">'+ greet + '</b> Welcome to my site!!!');
                    document.write("<b>");

                    document.write('<b style="color: yellow">' + '</b> today is' + weekDay);

                    document.write("<b>");

                    if(daysToValentinesDay==0)
                    document.write(" and today is valentines day!!!!");
                    if(daysToValentinesDay<0)
                    document.write(" and valentines day was "+ Math.abs(daysToValentinesDay)+"days ago");
                    if(daysToValentinesDay>0)
                    document.write(" and there are"+daysToValentinesDay+"days remaining to valentines day!!!");


                </script>






                <p>you can explore me, my family, my crazy quotes,famous quotes,riches and life!!!!!</p>

            </div>

    </div>

    <div class="row" >
        <div class="col-md-12 ">
            <img src="images/patrick6.jpg" alt="patrick photo"  width="1200" height="600" class="img-responsive">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>

        </div>
    <div class="row">
        <div class="col-md-8">
            <h1> My Celebrities<a href="celebrities_page.php">click here </a>to find out who we share!</h1>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <a href="father_page.php"><img  src="images/father.jpg" height="300" width="390" ></a>

            <h1 class="text-uppercase">Father</h1>



        </div>
        <div class="col-md-4">
            <a href="mother_page.php"><img src="images/mother.jpg"  width="390" height="300"> </a>

            <h1 class="text-uppercase">Mother</h1>




        </div>
        <div class="col-md-4">
            <a href="patrick_page.php">  <img src="images/patrick6.jpg" width="350" height="300"> </a>

            <h1 class="text-uppercase">patrick Bahitya</h1>



        </div>

    </div>


    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="index.php" name="down">scroll up</a>

        </div>
    </div>

</div>


</body>






</html>
