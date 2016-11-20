<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog 2 Columns + Right Sidebar | Triangle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <style type="text/css">
    #header .navbar-nav.navbar-right >li a{font-size: 17px;}
    	.profilepic{border-radius: 100px; width:120px; height:120px;}
    	.pull-right{padding-left: 346px;}
    	.bloodgroup{font-size: 20px; color: red; display: inline;}
    	.blogpic{width:30px; height: 30px;}
    	.doctorapp{border-radius: 100px;width: 120px;height: 120px;margin-left: 70px;margin-top:20px;}
    	.doctorstatus{text-align: center;}
    	.messbut{margin-left: 90px;}
    </style>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      

        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="images/logo.png" alt="logo" ></h1>
                    </a>
                    
                </div>
                <div class = "collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navsize">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="#">Organs<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">Kidney</a></li>
                                <li><a href="aboutus2.html">Heart</a></li>
                                <li><a href="service.html">Pancreas</a></li>
                                <li><a href="pricing.html">Liver</a></li>
                                <li><a href="contact.html">Eyes</a></li>
                                <li><a href="contact2.html">Tissue</a></li>
                            </ul>
                        </li> 
                        <li><a href="index.html">Success Stories</a></li>
                        <li><a href="index.html">FAQ</a></li>
                        <li><a href="index.html">About Us</a></li>
                        <li><a href="shortcodes.html ">Contact Us</a></li> 

                   
                    </ul>
                </div>
               
            </div>
        </div>
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-6">
                           <figure class="profilepic"> <img  class="profilepic" src="John_Abraham3.jpg" id="profilepic"></figure>
                        </div>
                        <div class="col-sm-6 pull-right">
                        <div>
                            <h1 class="title">Joseph Bing</h1>
                            <p>Exchange Donner</p>
                            <p style="display:inline;">Blood Group : <section class="bloodgroup">A+</section></p>
                            <p><a href="#">Edit Profile</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    <h2 style="color:#FF6666; margin-bottom:50px;">Matched Reciepients</h2>
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rondy Johns</a></h2>
                                    <h3 class="post-author">Chandigarh,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in chandigarh and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:A+</a></li>
                                            <li><a href="#">Donation Time: 1 month</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rachel Blake</a></h2>
                                    <h3 class="post-author">Ranchi,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in Ranchi and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:AB+</a></li>
                                            <li><a href="#">Donation Time: 3 months</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rondy Johns</a></h2>
                                    <h3 class="post-author">Chandigarh,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in chandigarh and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:A+</a></li>
                                            <li><a href="#">Donation Time: 1 month</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rondy Johns</a></h2>
                                    <h3 class="post-author">Chandigarh,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in chandigarh and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:A+</a></li>
                                            <li><a href="#">Donation Time: 1 month</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rachel Blake</a></h2>
                                    <h3 class="post-author">Delhi,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in Delhi and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:AB+</a></li>
                                            <li><a href="#">Donation Time: 4 months</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="download.jpeg" class="img-responsive" alt=""></a>
                                  
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Rondy Johns</a></h2>
                                    <h3 class="post-author">Chandigarh,India</h3>
                                    <p>I am in urgent need of kidney transplant. I live in chandigarh and have no qualms accepting kidney from a person belonging to any particular religion. </p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#">Blood Group:A+</a></li>
                                            <li><a href="#">Donation Time: 1 month</a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>New Blog Posts</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img  class="blogpic" src="Healthcare-Lungs-icon.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Increasing Number Of Kidney Patients</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="blogpic" src="heart.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Heart and How To Take Care Of It</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img  class="blogpic" src="pill.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Nutrients For Strong Immune</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                          <div class="sidebar-item popular">
                            <h3>Doctor Appointed</h3>
                           <div><img class="doctorapp" src="doctor.jpeg"></div>
                           <h4 class="doctorstatus">Dr Kevin August</h4>
                           <h5 class="doctorstatus">Nephrologist</h5>
                           <h5 class="doctorstatus">JD Memorial Hospital</h5>
                           <button  type="button" class="btn btn-success messbut">Message</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-8 col-sm-12">
                 <h1 style="margin-left:70px;font-size:60px;font-weight:bold;margin-top:-20px">"We make matches <br/>that save lives "<h1>
                </div>
                <div class="col-md-4 col-sm-12" style="float:right;margin-top:-20px">
                    <div class="contact-form bottom">
                        <h2>Ask A Question</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">


                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your question here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   



    <script>
        $.getJSON('reciever.php?id=1', function(data) {
            alert(data[0].pic)
          $("#profilepic").attr("src", <?php echo "data:image/jpeg;base64,".base64_encode( data[0].pic )?>);
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
        });
    </script>
</body>
</html>
