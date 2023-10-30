<!doctype html>
<html><!-- InstanceBegin template="/Templates/NavTemplate.dwt" codeOutsideHTMLIsLocked="false" --><head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contact Artist Pat Fulmer</title>
<meta name="description" content="Contact Artist Pat Fulmer">

<meta name="keywords" content="Contact Pat Patsy Fulmer Art Artist Paint Paintings Acrylic">
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href='http://fonts.googleapis.com/css?family=Halant:300' rel='stylesheet' type='text/css'>

<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<link href="styles/style.css" rel="stylesheet" type="text/css">
<link href="styles/nav.css"   rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
	.red {
		color:red;
	}
	.pink {
		background-color: pink;
	}
	.input {
		width: 300px;
		margin:.5em auto;
		text-align: left;
	}
	input, textarea, select, button {
		font-family: '__Nueva Std_3';
		font-weight:normal;
		font-size: 1.3em;
		width : 300px;
		margin: 0;
		padding: 1em;
		background-color: #E7E7E7;
		border-radius: 4px 4px 4px 4px;
		-webkit-box-sizing: border-box; /* For legacy WebKit based browsers */
		-moz-box-sizing: border-box; /* For legacy (Firefox <29) Gecko based browsers */
		box-sizing: border-box;
	}
	label {
		font-family: '__Nueva Std_3';
		font-weight:normal;
		font-size: 1.3em;
	}
	p {text-align:center;}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapperOuter">

  <header>
    <!-- no link on siteTitle since need a place to tap on phone if need to tap away from dropdown mobile menu-->
	<h1 class="siteTitle">Pat Fulmer</h1>
    
    <nav>
		<a id="menuIcon"  href="#" ></a>
        <div id="navDiv">
			<ul class="nav">
			  <!-- InstanceBeginEditable name="navCurrentPage" -->
			    <li><a href="index.htm">Home</a></li>
				<li><a href="goddess-triumphant.htm">Book</a></li>
			    <li><a href="paintings.htm">Paintings</a></li>
			    <li><a href="biography.htm">Bio</a></li>
			    <!--<li><a href="exhibition.htm">Exhibit</a></li>
                <li><a href="da-vinci-code.htm">Da Vinci</a></li>-->
			    <li><a href="video.htm">Video</a></li>
			    <li><a class="current" href="#">Contact</a></li>
		      <!-- InstanceEndEditable -->
		  </ul>
        </div>
        <a class="blocker" href=""></a><!--Not Using-->
	</nav>
	</header>
    <!-- InstanceBeginEditable name="pageContent" -->
    <div id="wrapper">
    	<main>
        		<img class="topImage image" src="images/Pat-Fulmer-painting-Shekinah.jpg" alt="Pat Fulmer in Santa Barbara, CA" width="500" height="326">
                <p>Use the form below to contact me or send an email directly to <strong>pat{at}patfulmer{dot}com</strong>.</p>
				<?php
                	//http://www.123contactform.com/simple-php-contact-form-2.htm
					
                    $action=$_REQUEST['action'];
					
                    if ($action=="")    /* display the contact form */
                    
                        {
						?>
                            <form  action="" method="POST" enctype="multipart/form-data"> 
                                <h2 style="margin-top:20px;">Contact</h2>
                                <div class="input">
                                    <input type="hidden" name="action" value="submit"> 
                                    <label for="name">Name:</label><br>
                                    <input name="name" type="text" value="" size="30"/><br> 
                                </div>
                                <div class="input">
                                    <label for="email">Email:<span class="red">*</span></label><br>
                                    <input name="email" type="text" value="" size="30"/><br> 
                                </div>
                                <div class="input">
                                    <label for="message">Message:<span class="red">*</span></label><br>
                                    <textarea name="message" rows="7" cols="35"></textarea><br>
                                 </div>
                                 <div class="input">
                                    <input type="submit" value="Send email"/> 
                                 </div>
                            </form>
                        <?php
                        }  
                    else	/* send the submitted data */ 
                        { 
							$name=$_REQUEST['name']; 
							$email=$_REQUEST['email']; 
							$message=$_REQUEST['message'];
							
							//Header Injection deterant
							//not working even on its own page for me. supposed to just add it to top of page.
							//if (!isset($_POST['submit'])) {
							//	   echo "<h1>Error</h1>\n
							//		  <p>Accessing this page directly is not allowed.</p>";
							//	   exit;
							//	}
							
							//Header Injection deterant
							$email   = preg_replace("([\r\n])", "", $email);
							$find = "/(content-type|bcc:|cc:)/i";
							if (preg_match($find, $name) || preg_match($find, $email) || preg_match($find, $message))
								{
								    echo '<h2 class="red">Error</h2>\n
									      <p class="red">There was a problem. Please try again.</p>';
								    ?>
                                        <form  action="" method="POST" enctype="multipart/form-data"> 
                                            <h2 style="margin-top:20px;">Contact</h2>
                                            <div class="input">
                                                <input type="hidden" name="action" value="submit"> 
                                                <label for="name">Name:</label><br>
                                                <input name="name" type="text" size="30" value="<?php echo htmlspecialchars($name); ?>"/><br> 
                                            </div>
                                            <div class="input">
                                                <label for="email">Email:<span class="red">*</span></label><br>
                                                <input class="pink" name="email" type="text" size="30"/><br> 
                                            </div>
                                            <div class="input">
                                                <label for="message">Message:<span class="red">*</span></label><br>
                                                <textarea name="message" rows="7" cols="35"><?php echo htmlspecialchars($message); ?></textarea><br>
                                             </div>
                                             <div class="input">
                                                <input type="submit" value="Send email"/> 
                                             </div>
                                        </form>
                                    <?php
								    exit;
								}
							//end
						
						
							if (($email=="")||($message==""))
								{
									//header("Location: http://patfulmer.com/contactTest3.htm");
									//exit;
									echo '<h3 class="red">Email & Message fields are required, please try again.</h3>';
								    ?>
                                        <form  action="" method="POST" enctype="multipart/form-data"> 
                                            <h2 style="margin-top:20px;">Contact</h2>
                                            <div class="input">
                                                <input type="hidden" name="action" value="submit"> 
                                                <label for="name">Name:</label><br>
                                                <input name="name" type="text" size="30" value="<?php echo htmlspecialchars($name); ?>"/><br> 
                                            </div>
                                            <div class="input">
                                                <label for="email">Email:<span class="red">*</span></label><br>
                                                <input class="pink" name="email" type="text" size="30" value="<?php echo htmlspecialchars($email); ?>"/><br> 
                                            </div>
                                            <div class="input">
                                                <label for="message">Message:<span class="red">*</span></label><br>
                                                <textarea style="background-color: pink;" name="message" rows="7" cols="35"><?php echo htmlspecialchars($message); ?></textarea><br>
                                             </div>
                                             <div class="input">
                                                <input type="submit" value="Send email"/> 
                                             </div>
                                        </form>
                                    <?php
									exit;
								} 
							else
								{
								if (filter_var($email, FILTER_VALIDATE_EMAIL))
									{     
										$from="From: $name<$email>\r\nReturn-path: $email"; 
										$subject="Message sent using the contact form from PatFulmer.com"; 
										mail("pat@patfulmer.com", $subject, $message, $from);
										
										//header("Location: http://patfulmer.com/contactTest3.htm");
										//exit;
										echo "<h3>Email sent. Thank you!</h3>"; 
									} 
								else
									{
										//header("Location: http://patfulmer.com/contactTest3.htm");
										//exit;
										echo '<h3 class="red">A valid email address is required, please try again.</h3>';
										?>
											<form  action="" method="POST" enctype="multipart/form-data"> 
												<h2 style="margin-top:20px;">Contact</h2>
												<div class="input">
													<input type="hidden" name="action" value="submit"> 
													<label for="name">Name:</label><br>
													<input name="name" type="text" size="30" value="<?php echo htmlspecialchars($name); ?>"/><br> 
												</div>
												<div class="input">
													<label for="email">Email:<span class="red">*</span></label><br>
													<input style="background-color: pink;" name="email" type="text" size="30" value="<?php echo htmlspecialchars($email); ?>"/><br> 
												</div>
												<div class="input">
													<label for="message">Message:<span class="red">*</span></label><br>
													<textarea name="message" rows="7" cols="35"><?php echo htmlspecialchars($message); ?></textarea><br>
												 </div>
												 <div class="input">
													<input type="submit" value="Send email"/> 
												 </div>
											</form>
										<?php
										exit;
									}
							}
					}
                ?>
    	</main>
		&nbsp;
        &nbsp;
        <footer>
        	<p>Copyright © Pat Fulmer. All Rights Reserved.<br>Web Design by <a href="http://bradwallacedesign.com" title="Brad Wallace Design" target="_blank">BradWallaceDesign.com</a></p>
        </footer>
    
    </div><!--wrapper-->   
</div><!--wrapperOuter-->

    <!-- InstanceEndEditable -->
    
</body>
<!-- InstanceEnd --></html>