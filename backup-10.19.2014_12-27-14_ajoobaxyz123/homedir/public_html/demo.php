<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";


/*
/	Select all the comments and populate the $comments array with objects
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple AJAX Commenting System | Tutorialzine demo</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>



<h1>Simple AJAX Commenting System</h1>
<h2><a href="http://tutorialzine.com/2010/06/simple-ajax-commenting-system/">Go Back to Tutorialzine &raquo;</a></h2>

<div id="main">

<?php

/*
/	Output the comments one by one:
*/

foreach($comments as $c){
	echo $c->markup();
}

?>

<!DOCTYPE HTML>
<html>
<body>
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
<head>
  <title>FOSS - a page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body onload="banner();">
<pre><code>$php_code</code></pre>
<marquee> Some....Scrolling.....Text </marquee> 
 <a href="simplestyle_1/xyz" target="_blank">Download Link</a> 
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">FOSS<span class="logo_colour">(Free and Open Source)</span></a></h1>
          <h2>Being fossevangelist</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">About</a></li>
          <li class="selected"><a href="page.html">Examples</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br/><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="file:///media/NEW%20VOLUME/simplestyle_1/page.html">A Page</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>A Page</h1>
        <p>my (@arg) = @ARGV; <br>
#perl script to scrape the slides from browser all at once<br>
if (!@arg){<br>
&nbsp;&nbsp;&nbsp;print "USAGE: \n<br>
&nbsp;&nbsp;&nbsp; &nbsp;First arg : SEMISTER Number<br>
&nbsp;&nbsp;&nbsp; &nbsp;Second Arg: Semister Subject<br>
&nbsp;&nbsp;&nbsp; &nbsp;Third arg : UNIT Number<br>
&nbsp;&nbsp;&nbsp; &nbsp;Fourth Arg : Number of Pages<br>
&nbsp;&nbsp;&nbsp; &nbsp;IMAGE TYPE : JPG or PNG <br>
&nbsp;&nbsp;&nbsp; &nbsp;Example: perl $0 3 DIF233 UNIT2 49 jpg\n";<br>
&nbsp;&nbsp;&nbsp;exit;   <br>
}else{<br>
&nbsp;&nbsp;&nbsp;#print "$arg[0]==$arg[1] === $arg[2]==$arg[3]\n";<br>
&nbsp;&nbsp;&nbsp;system("mkdir -p $arg[1]/$arg[2]"); #creates directory where you want to store the slides<br>
&nbsp;&nbsp;&nbsp;system("cd  $arg[1]/$arg[2];"); #path to that directory<br>
<br>   
&nbsp;&nbsp;&nbsp;#my $val="(?:jpg|png)";<br>
&nbsp;&nbsp;&nbsp;my $val = $arg[3];<br>
&nbsp;&nbsp;&nbsp;for(my $i=0;$i<=$val;$i++){ #from 0 to the number of slides the ppt has<br>
<br>   
&nbsp;&nbsp;&nbsp;my $val1= "wget http://media.msconline.au-kbc.org.in/slides/semester$arg[0]/$arg[1]/$arg[2]/slides/
&nbsp;&nbsp;&nbsp;complete/img$i.jpg"; #scrapes the slides from browser<br>
&nbsp;&nbsp;&nbsp;my $val2= "convert img$i.jpg slide.pdf"; #converts all slides to one pdf<br>
&nbsp;&nbsp;&nbsp;my $val3= "mv slide.pdf '$arg[1]/$arg[2]/'"; #moves the pdf to the directory created<br>
&nbsp;&nbsp;&nbsp;system("$val1");<br>
&nbsp;&nbsp;&nbsp;system("$val2");<br>
&nbsp;&nbsp;&nbsp;system("$val3");<br>
&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;for(my $i=0;$i<=$val;$i++){
&nbsp;&nbsp;&nbsp;$c = `pwd`; #the directory is from your present working directory<br>
&nbsp;&nbsp;&nbsp;chomp($c);<br>
&nbsp;&nbsp;&nbsp;$aa = "$c/$arg[1]/$arg[2]/";<br><br>
<br>       
&nbsp;&nbsp;&nbsp;#print "cp img$i.png $aa\n";<br>
&nbsp;&nbsp;&nbsp;system ("mv img$i.jpg  $aa"); #moves the slides to the directory created<br>
<br>
    }<br>
<br>
#http://media.msconline.au-kbc.org.in/slides/semester3/DIF233/unit1/slides/complete/img{0..63}.png<br>
#http://media.msconline.au-kbc.org.in/slides/semester3/DIF233/combined/img0.jpg   <br>
#http://media.msconline.au-kbc.org.in/slides/semester3/DIF232/unit2/slides/complete/img8.html<br>
#http://media.msconline.au-kbc.org.in/slides/semester3/DIF232/unit2/slides/complete/img8.png<br>
#run as perl down.pl 4 DIF%20004 unit1 63
}<br>  </p>
<div id="addCommentContainer">
	<p>Add a Comment</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Your Name</label>
        	<input type="text" name="name" id="name" />
            </div>
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email" />
            
       <div>           
            <label for="body">Comment&nbsp;&nbsp;    </label>
            <textarea name="body" id="body" cols="31" rows="5"></textarea>
            </div>
            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>

</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright  &copy; 2014 fossevangelist | Designed by <a href="https://plus.google.com/102134846690470314739/posts">Trupti Rajesh Kini</a>
       <a href="http://facebook.com/"><img src="Facebook.jpg"  height="20" width="60" alt="Join my Facebook Community!" /></a>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
  </div>
</body>
</html>
