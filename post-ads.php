





















<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>BOOTCLASIFIED - Responsive Classified Theme</title>

        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.css" rel="stylesheet">


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->

        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="assets/js/pace.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
                <nav class="navbar   navbar-site navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                            <a href="index.html" class="navbar-brand logo logo-title">

                                <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                                BOOT<span>CLASSIFIED </span> </a></div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.html">Post Free Add</a></li>
                            </ul>
                        </div>

                    </div>

                </nav>
            </div>

            <div class="main-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 page-content">
                            <div class="inner-box category-content">
                                <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Post a Free Classified
                                        Ad</strong></h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                        
                                        <!--FORM-->
                                        
                                        
                    <form class="form-horizontal" method="POST" action="post-adsphp.php" enctype="multipart/form-data" name="upload">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Category</label>
                                                    <div class="col-md-8">
                                                        <select name="category-group" id="category-group" class="form-control">
                                                            <option value="0" selected="selected"> Select a category...</option>
                                                            <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Vehicles -
                                                            </option>
                                                            <option value="Cars"> Cars</option>
                                                            <option value="Commercial vehicles"> Commercial vehicles</option>
                                                            <option value="Motorcycles"> Motorcycles</option>
                                                            <option value="Motorcycle Equipment"> Car &amp; Motorcycle
                                                                Equipment
                                                            </option>
                                                            <option value="Boats"> Boats</option>
                                                            <option value="Vehicles"> Other Vehicles</option>
                                                            <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - House and Children -
                                                            </option>
                                                            <option value="Appliances"> Appliances</option>
                                                            <option value="Inside"> Inside</option>
                                                            <option value="Games"> Games and Clothing</option>
                                                            <option value="Garden"> Garden</option>
                                                            <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Multimedia -
                                                            </option>
                                                            <option value="Telephony"> Telephony</option>
                                                            <option value="Image"> Image and sound</option>
                                                            <option value="Computers"> Computers and Accessories</option>
                                                            <option value="Video"> Video games and consoles</option>
                                                            <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Real Estate -
                                                            </option>
                                                            <option value="Apartment"> Apartment</option>
                                                            <option value="Home"> Home</option>
                                                            <option value="Vacation"> Vacation Rentals</option>
                                                            <option value="Commercial"> Commercial offices and local</option>
                                                            <option value="Grounds"> Grounds</option>
                                                            <option value="Houseshares"> Houseshares</option>
                                                            <option value="Other real estate"> Other real estate</option>
                                                            <option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Services -
                                                            </option>
                                                            <option value="Jobs"> Jobs</option>
                                                            <option value="Job application"> Job application</option>
                                                            <option value="Services"> Services</option>
                                                            <option value="Price"> Price</option>
                                                            <option value="Business"> Business and goodwill</option>
                                                            <option value="Professional"> Professional equipment</option>
                                                            <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Extra -
                                                            </option>
                                                            <option value="Other"> Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Add Type</label>
                                                    <div class="col-md-8">
                                                        <label class="radio-inline" for="radios-0">
                                                            <input name="radios" id="radios-0" value="Private" checked="checked" type="radio">
                                                            Private </label>
                                                        <label class="radio-inline" for="radios-1">
                                                            <input name="radios" id="radios-1" value="Business" type="radio">
                                                            Business </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="Adtitle">Ad title</label>
                                                    <div class="col-md-8">
                                                        <input id="Adtitle" name="Adtitle" placeholder="Ad title" class="form-control input-md" required="" type="text">
                                                        <span class="help-block">A great title needs at least 60 characters. </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Describe ad </label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" id="textarea" name="textarea" >Describe
                                                    what makes your ad unique</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="Price">Price</label>
                                                    <div class="col-md-4">
                                                        <div class="input-group"><span class="input-group-addon">RS</span>
                                                            <input id="Price" name="Price" class="form-control" placeholder="price" required="" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Negotiable </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea"> Picture </label>
                                                    <div class="col-md-8">
                                                        <div class="mb10">
                                                            <input id="input-upload-img1" type="file" class="file" name="image0" data-preview-file-type="text">
                                                        </div>
                                                        <div class="mb10">
                                                            <input id="input-upload-img2" type="file" class="file" name="image1" data-preview-file-type="text">
                                                        </div>
                                                        <div class="mb10">
                                                            <input id="input-upload-img3" type="file" class="file" name="image2" data-preview-file-type="text">
                                                        </div>
                                                        <div class="mb10">
                                                            <input id="input-upload-img4" type="file" class="file" name="image3" data-preview-file-type="text">
                                                        </div>
                                                        <div class="mb10">
                                                            <input id="input-upload-img5" type="file" class="file" name="image4" data-preview-file-type="text">
                                                        </div>
                                                        <p class="help-block">Add up to 5 photos. Use a real image of your
                                                            product, not catalogs.</p>
                                                    </div>
                                                </div>
                                                <div class="content-subheading"><i class="icon-user fa"></i> <strong>Seller
                                                        information</strong></div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textinput-name">Name</label>
                                                    <div class="col-md-8">
                                                        <input id="textinput-name" name="textinput-name" placeholder="Seller Name" class="form-control input-md" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="seller-email"> Seller
                                                        Email</label>
                                                    <div class="col-md-8">
                                                        <input id="seller-email" name="seller-email" class="form-control" placeholder="Email" required="" type="text">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <small> Hide the phone number on this ads.</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="seller-Number">Phone
                                                        Number</label>
                                                    <div class="col-md-8">
                                                        <input id="seller-Number" name="seller-Number" placeholder="Phone Number" class="form-control input-md" required="" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="seller-Location">Location</label>
                                                    <div class="col-md-8">
                                                        <select id="seller-Location" name="seller-Location" class="form-control">
                                                            <option value="1">Option one</option>
                                                            <option value="2">Option two</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="seller-area">City</label>
                                                    <div class="col-md-8">
                                                        <select id="seller-area" name="seller-area" class="form-control">
                                                            <option value="1">Option one</option>
                                                            <option value="2">Option two</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="well">
                                                    <h3><i class=" icon-certificate icon-color-1"></i> Make your Ad Premium
                                                    </h3>
                                                    <p>Premium ads help sellers promote their product or service by getting
                                                        their ads more visibility with more
                                                        buyers and sell what they want faster. <a href="help.html">Learn
                                                            more</a></p>
                                                    <div class="form-group">
                                                        <table class="table table-hover checkboxtable">
                                                            <tr>
                                                                <td>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios" id="optionsRadios0" value="option0" checked>
                                                                            <strong>Regular List </strong> </label>
                                                                    </div>
                                                                </td>
                                                                <td><p>$00.00</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                                            <strong>Urgent Ad </strong> </label>
                                                                    </div>
                                                                </td>
                                                                <td><p>$10.00</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                                            <strong>Top of the Page Ad </strong> </label>
                                                                    </div>
                                                                </td>
                                                                <td><p>$20.00</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                                                            <strong>Top of the Page Ad + Urgent Ad </strong>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td><p>$40.00</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="col-md-8">
                                                                            <select class="form-control" name="Method" id="PaymentMethod">
                                                                                <option value="2">Select Payment Method</option>
                                                                                <option value="3">Credit / Debit Card</option>
                                                                                <option value="5">Paypal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><p><strong>Payable Amount : $40.00</strong></p></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Terms</label>
                                                    <div class="col-md-8">
                                                        <label class="checkbox-inline" for="checkboxes-0">
                                                            <input name="checkboxes" id="checkboxes-0" value="Remember above contact information." type="checkbox">
                                                            Remember above contact information. </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <!-- <div class="col-md-8"><a href="posting-success.html" id="button1id" class="btn btn-success btn-lg">Submit</a></div> -->
                                                    <input type="submit" value="press here to submit">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 reg-sidebar">
                            <div class="reg-sidebar-inner text-center">
                                <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
                                    <h3><strong>Post a Free Classified</strong></h3>
                                    <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. </p>
                                </div>
                                <div class="panel sidebar-panel">
                                    <div class="panel-heading uppercase">
                                        <small><strong>How to sell quickly?</strong></small>
                                    </div>
                                    <div class="panel-content">
                                        <div class="panel-body text-left">
                                            <ul class="list-check">
                                                <li> Use a brief title and description of the item</li>
                                                <li> Make sure you post in the correct category</li>
                                                <li> Add nice photos to your ad</li>
                                                <li> Put a reasonable price</li>
                                                <li> Check the item before publish</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="footer" id="footer">
                <div class="container">
                    <ul class=" pull-left navbar-link footer-nav">
                        <li><a href="index.html"> Home </a> <a href="about-us.html"> About us </a> <a href="#"> Terms and
                                Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a href="faq.html"> FAQ </a>
                    </ul>
                    <ul class=" pull-right navbar-link footer-nav">
                        <li> &copy; 2015 BootClassified</li>
                    </ul>
                </div>
            </div>

        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/js/fileinput.min.js" type="text/javascript"></script>
        <script>
            // initialize with defaults
            $("#input-upload-img1").fileinput();
            $("#input-upload-img2").fileinput();
            $("#input-upload-img3").fileinput();
            $("#input-upload-img4").fileinput();
            $("#input-upload-img5").fileinput();


        </script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/jquery.matchHeight-min.js"></script>

        <script src="assets/js/hideMaxListItem.js"></script>

        <script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
        <script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

        <script src="assets/js/script.js"></script>
    </body>
</html>
