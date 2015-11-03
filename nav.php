

<?php

session_start();

 

?>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>



    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="css/custom.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Lora:400italic">

   

  </head>

  <body>

    <nav class="navbar navbar-inverse" role="navigation">

    <!--<nav class="navbar navbar-default" role="navigation">-->

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <b><a class="navbar-brand" href="intro.php">Admin Panel</a></b>

    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">

      

        <li><a href="daily_users.php">Users today</a></li>

        

          <li><a href="calls_today.php">No of calls made today</a></li>

          <li><a href="verification.php">Verification</a></li>  
		
		<li><a href="heavyday.php">Heavyday</a></li> 
        
		<li><a href="heavytime.php">Heavytime</a></li>
		
		<li><a href="favcat.php">Favorite cat</a></li>  
		
		

		

      </ul>

      

      <ul class="nav navbar-right">

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog" style="font-size:30px;"></span></a>

          <ul class="dropdown-menu" role="menu">

            <li><a href="dashboard.php"><?php echo $_SESSION['user']; ?></a></li>

           

            <li class="divider"></li>

            <li><a href="logout.php">Logout</a></li>

          

          </ul>

        </ul>



    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->

</nav>

