<?php
require 'server_connect.inc.php';
session_start();
?>
<?php

if(isset($_POST['ATM_NO']) && !empty($_POST['ATM_NO']) && isset($_POST['PIN']) && !empty($_POST['PIN']) ){
		
		$atm_no=$_POST['ATM_NO'];
		$pin=$_POST['PIN'];
		$query1="SELECT Acc_no FROM CUSTOMERS WHERE ATM_NO='$atm_no' AND PIN='$pin'";
		
		if($query1_data=mysql_query($query1)){
			
			if(mysql_num_rows($query1_data)==1){
					$_SESSION['atm']=$atm_no;
					$_SESSION['pin']=$pin;
					$acc_no=mysql_result($query1_data,0,'Acc_no');
					$_SESSION['acc_no']=$acc_no;
					//echo $_SESSION['acc_no'];					
					header('Location:index.php');
					//require "1.php";
					//print"<a href='index.php'>Go back</a>";					
					//echo"here";	
						}
			
			else if(mysql_num_rows($query1_data)==0){
					echo 'Invalid ATM NUMBER and/or PIN';
						}
				}

			}
	
	?>
        
<?php
//echo $_POST['Password'];
if(isset($_POST['Emp_id']) && !empty($_POST['Emp_id']) && isset($_POST['Password']) && !empty($_POST['Password'])){
			$Emp_id=$_POST['Emp_id'];
			$Password=$_POST['Password'];
			$Password_new=MD5($Password);

			$query1="SELECT Emp_id FROM Employee WHERE Emp_id='$Emp_id' AND Password='$Password_new'";

			if($query1_data=mysql_query($query1)) {

				if(mysql_num_rows($query1_data)==1){
						$emp_id=mysql_result($query1_data,0,'Emp_id');
						//echo 'Welcome,'.$emp_id;
						$_SESSION['emp_id']=$emp_id;
						header('Location:index.php');

						}
						
				else if(mysql_num_rows($query1_data)==0){ 
						echo 'Invalid username and/or password';
						}
					}
	
				}

			
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

<title>Landing Page &ndash; </title>
<link rel="stylesheet" href="pure-release-0.5.0/pure.css">
<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure//grids-responsive-old-ie.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
<link rel="stylesheet" href="pure-release-0.5.0/grids-responsive.css">
  
<!--<![endif]-->
<!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
<!--<![endif]-->
 
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>


<body><!--
<script type="text/javascript">
function () {
    //var $lists = $('.list-group li').click(function(e) {

    $(".list-group li").click(function () {
        $(this).toggleClass("active");
        e.preventDefault(); /*ignores actual link*/
    })


    //$lists.filter(".active").removeClass("active");
    //$(this).addClass('active');
    //e.preventDefault() /*ignores actual link*/
    //});
}
</script>

<style>
body, a {
    font: bold 14px/18px Arial, sans-serif;
    letter-spacing: .05em;
    color: #6e6e6e;
}
a {
    text-transform: uppercase;
    outline: none;
    text-decoration: none;
    background: transparent;
}
.list-group {
    margin-bottom: 20px;
    padding: 0;
    width: 50%;
}
.list-group-item {
    background: #f0f0f0;
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    border: 1px solid #dddddd;
    /*border-right: none;*/
    cursor:pointer;
}
.list-group-item.active {
    background: transparent;
}
.list-group-item:hover {
    text-decoration: underline;
}
.list-group-item.active:hover {
    text-decoration: none;
}
.list-group-item.active a {
    color: #ff4500;
}
</style>

<ul class="list-group">
    <li class="list-group-item"><a href="#Home">Home</a>
    </li>
    <li class="list-group-item"><a href="#ATM">ATM</a>
    </li>
    <li class="list-group-item"><a href="#Employee">Employee</a>
    </li>
</ul>-->

<a name="Home"></a>

<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Welcome!!</a>

        <ul>
            <li class="pure-menu-selected"><a href="#Home">Home</a></li>
            <li><a href="#ATM">ATM</a></li>
            <li><a href="#Employee">Employee</a></li>
        </ul>
    </div>
</div>

<style>.anchor{padding-top: 1px;}
</style>


<div class="splash-container">
    <div class="splash"> <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        <!--h1 class="splash-head">Big Bold Text</h1-->
       <!-- <p class="splash-subhead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a>
        </p>-->
    </div>
</div>



<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">COMMITED TO EXCELLENCE.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Contact our front-end representatives to open an account with us.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Immediate Registration 
                </h3>
                <p>
                    As you join us, you are provided with an Account Number, ATM Number and PIN.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Security
                </h3>

                <p>
                    All our money transactions are safe, secure and organised.
                 </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Your satisfaction is our motto.
                </h3>
                <p><a name="ATM"></a>
                    Our representatives will be available 24X7 to your issues.
                </p>
            </div>
        </div>
    </div>



<style>
.color{color: white;}
.color1{color: red;}
</style>

    <div class="ribbon l-box-lrg pure-g">
		<h2 class="content-head is-center"><div class="color">ATM Login</div></h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" role="form" action="home.php" method="POST" >
                    <fieldset>

                        <label for="name"><div class="color">ATM Number</div></label>
                        <input type="text" id="ATM_NO" name="ATM_NO" placeholder="Your ATM Number">

                        <label for="password"><div class="color">PIN</div></label>
                        <input type="password" id="PIN" name="PIN" placeholder="Your PIN">
			
                        <button type="submit" class="pure-button">Login</button>
                    </fieldset>
                </form>
            </div>


            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4 class="color1">Instructions:</h4>
                <p> 1. Keep your PIN secure. 
		    2. In case you have lost it, contact our employees for generation of a new PIN.
                    
                </p>

                <h4 class="color1">Need Help?</h4>
                <p>	If you are using ATM for first time, then you are welcome to seek help from our customer service.
		</p>
            </div>
</div>
      
    </div>
<!--
    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>


    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Laboris nisi ut aliquip.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>
-->

<style>.anchor{padding-top: 1px;}</style>
<a class="anchor" name="Employee"></a>
    <div class="content">
        <h2 class="content-head is-center">EMPLOYEE LOGIN</h2>

        <div class="pure-g">
            

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Warning:</h4>
                <p>
                   IF YOU ARE NOT ONE OF THE AUTHORIZED PERSON TO USE THIS FACILITY, THEN DON'T TRY TO USE IT. 
                </p>

                <h4>Instructions:</h4>
                <p>
                   1. Use your Employee ID and Password here.
		   2. Use this facility at secure locations only.
		   3. If there is an issue with your login, contact your supervior immediately.	
                </p>
            </div>
		
		<div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" role="form" action="home.php" method="POST">
                    <fieldset>

                        <label for="name">Employee ID</label>
                        <input type="text" id="Emp_id" name="Emp_id" placeholder="Employee ID">

                        <label for="password">Your Password</label>
                        <input type="password" id="Password" name="Password"  placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>



    <div class="footer l-box is-center">
        View the source of this layout to learn more. Made with love by the YUI Team.
    </div>

</div>






</body>
</html>


