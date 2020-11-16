<?php
$indexpath = "/test/index.php";
?>



   <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>MTDesigns</title>
	
	<link rel="shortcut icon" href="/view/images/template_images/mtd.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/test/view/css/bootstrap.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="/test/view/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/test/view/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<a id="page-top"></a>
    <!-- Navigation -->
    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a name="page-top" class="navbar-brand" href="#page-top"></a>
				<a href="/test/index.php" alt="MTDesigns main logo and home link" class="navbar-brand">Time Clock</a>
            </div>
<?php

if(isset($_SESSION['signout_avail'])){

?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a name="page-top" href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a id="signoutlink" href="javascript:void(0)" onclick="$('#sobutton').click()">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
<?php
} else {
    //do nothing
}
?>
            
        </div>
        <!-- /.container-fluid -->
    </nav>
	<form id="signoutform" style="display:none;" name="signoutform" action="/test/index.php">
		<button style="display:none;" name="signout" value="signout" id="sobutton">SignOut</button>
	</form>
	    <!-- jQuery -->
    <script src="/model/script/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/model/script/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/model/script/classie.js"></script> 
	<script src="/model/script/logochange.js"></script>
    <script src="/model/script/cbpAnimatedHeader.js"></script> 
    <!-- Custom Theme JavaScript -->
    <script src="/model/script/freelancer.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="/model/script/jqBootstrapValidation.js"></script>
    <!-- <script src="/model/script/contact_me.js"></script> -->

