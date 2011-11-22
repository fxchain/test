<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head profile="http://gmpg.org/xfn/11">
  <title>Zynga With Friends</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" type="text/css" href="http://www.zyngawithfriends.com/wp/wp-content/themes/overeasy/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="http://www.zyngawithfriends.com/wp/hwfcontest/css/contest.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="demo_table.css" media="screen" />

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/Newtoy" />
  <link rel="pingback" href="http://www.zyngawithfriends.com/wp/xmlrpc.php" />

  <!--[if lt IE 7]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
  <![endif]-->



  <script type='text/javascript' src='http://www.zyngawithfriends.com/wp/wp-includes/js/jquery/jquery.js?ver=1.3.2'></script>
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.zyngawithfriends.com/wp/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.zyngawithfriends.com/wp/wp-includes/wlwmanifest.xml" />
  <link rel='index' title='Newtoy' href='http://www.zyngawithfriends.com/wp' />
  <meta name="generator" content="WordPress 2.9.2" />
  <link href="http://www.zyngawithfriends.com/wp/wp-content/themes/overeasy/styles/nt.css" rel="stylesheet" type="text/css" />
  

  <script src="http://www.zyngawithfriends.com/wp/hwfcontest/js/cufon-yui.js" type="text/javascript"></script>
  <script src="http://www.zyngawithfriends.com/wp/hwfcontest/js/Helvetica_Rounded_LT_Std_900.font.js" type="text/javascript"></script>
  <script type="text/javascript">
    Cufon.replace('h2'); // Works without a selector engine
  </script>

<style type="text/css">
.wrapper{width:100%;}
.smaller{font-size:0.9em;}
.listallbtn{float:right;margin:0 20px 0 0;}
</style>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js'></script>
<script type='text/javascript' src='jquery.dataTables.min.js'></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.tablesorter').dataTable();
	});
</script>

</head>

<body>

  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '171375869613760', // App ID
        channelURL : '//www.zyngawithfriends.com/wp/hwfcontest/channel.html', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        oauth      : true, // enable OAuth 2.0
        xfbml      : true  // parse XFBML
      });

      // Additional initialization code here
      FB.Event.subscribe('edge.create', function(response) {
        _gaq.push(['_trackEvent', 'HWF Contest', 'Like']);
      });
    };

    // Load the SDK Asynchronously
    (function(d){
       var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=171375869613760";
       d.getElementsByTagName('head')[0].appendChild(js);
     }(document));
  </script>

<div id="page">

  <div id="header">

    <div id="logo">
      <h1><a href="http://www.zyngawithfriends.com/wp" title="Zynga With Friends"><img src="http://zyngawithfriends.com/wp/wp-content/themes/overeasy/styles/nt/logo-trans.png" alt="Zynga With Friends" /></a></h1>
    </div>

    <div id="nav1">
      <ul>
        <li  class="current_page_item" ><a href="http://www.zyngawithfriends.com/wp/"><span>Home</span></a></li>
        <li ><a href="http://www.zyngawithfriends.com/wp/category/blog/" title="Blog"><span>Blog</span></a></li>
        <li class="page_item page-item-2"><a href="http://www.zyngawithfriends.com/wp/about/" title="About"><span>About</span></a></li>
        <li class="page_item page-item-124"><a href="http://www.zyngawithfriends.com/wp/in-the-news/" title="News"><span>Press</span></a></li>
        <li class="page_item page-item-297"><a href="http://www.zyngawithfriends.com/wp/hiring/" title="Hiring"><span>Hiring</span></a></li>
        <li><a href="http://www.zyngawithfriends.com/gameswithfriends/support" title="Support"><span>Support</span></a></li>
      </ul>
    </div>
    <!--/nav1-->

  </div>
  <!--/header -->


  <!-- Featured Slider -->
  <div class="box5">

    <div class="top"></div>
    <div class="spacer">
    <div id="h"></div>
      <div class="wrapper">
          
	
<?php
include '../config.php';

mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD) or die(mysql_error());
mysql_select_db(DB_DATABASE) or die(mysql_error());


if(isset($_GET['image']) && $_GET['image']!=''){
	echo '<strong><a href="index.php" class="listallbtn">Back</a></strong>';
	echo "<h3>List of IPs that voted for ".$_GET['image']."</h3>";

	$result = mysql_query("SELECT vote_client_ip, COUNT(vote_client_ip) FROM votes WHERE vote_image = '".$_GET['image']."' GROUP BY vote_client_ip ORDER BY COUNT(vote_client_ip) DESC") or die(mysql_error());
	
	while($row = mysql_fetch_array($result)){
		echo $row['vote_client_ip']." voted ".$row['COUNT(vote_client_ip)']." times.";
		echo "<br />";
	}
	echo '<strong><a href="index.php" class="listallbtn">Back</a></strong>';
	
}elseif(isset($_GET['list']) && $_GET['list']=='all'){
	echo '<strong><a href="index.php" class="listallbtn">Back</a></strong>';
	echo "<h3>All Votes</h3><br />";

	$result = mysql_query("SELECT * FROM votes ORDER BY vote_id ASC") 
	or die(mysql_error());  

	echo '<table cellspacing="1" class="tablesorter">';
	echo "<thead><tr> <th>ID</th> <th>Image Name</th> <th>Date / Time</th> <th>Voter's IP</th></tr></thead><tbody>";
	// keeps getting the next row until there are no more to get
	while($row = mysql_fetch_array( $result )) {
		// Print out the contents of each row into a table
		echo "<tr><td>"; 
		echo $row['vote_id'];
		echo "</td><td>"; 
		echo $row['vote_image'];
		echo "</td><td>"; 
		echo $row['vote_datetime'];
		echo "</td><td>"; 
		echo $row['vote_client_ip'];
		echo "</td></tr>";
	}

	echo "</tbody></table>";

}else{

	echo '<strong><a href="?list=all" class="listallbtn">List all votes</a></strong>';
	echo "<h3>HWF Art Contest Vote Results</h3>";

	$result = mysql_query("SELECT vote_image, COUNT(vote_image) FROM votes GROUP BY vote_image ORDER BY COUNT(vote_image) DESC") 
	or die(mysql_error());



	while($row = mysql_fetch_array($result)){
		echo "<strong>".$row['vote_image']."</strong> has <strong>".$row['COUNT(vote_image)'].'</strong> votes <em class="smaller"><a href="?image='.$row['vote_image'].'">List voting IPs</a></em>';
		echo "<br />";
	}


}
?>

      </div> <!--/wrapper -->

<!-- End Added -->
        <br class="fix" />

    </div>
    <!--/spacer -->
    <div class="bot"></div>
</div>
<!--/box5 -->
    <!-- Bottom Widgets -->

  <!--/columns -->



  <!-- Footer -->
  <div id="footer">
        <div class="box6">
            <div class="top"></div>
            <div class="spacer">
                <div class="fl">Follow us on <a href="http://twitter.com/zyngawfriends">twitter</a>, <a href="http://www.facebook.com/ZyngaWithFriends">facebook</a>, or <a href="mailto:contactzwf@zynga.com">send us some email</a>.</div>

                <div class="fr">&copy; 2011 Zynga With Friends.  View our <a href="http://www.zynga.com/about/terms-of-service.php">Terms of Service</a> and <a href="http://www.zynga.com/privacy/privacy-policy.php">Privacy Policy</a>.</div>
                <!-- <div class="fr">OverEasy by &nbsp; <a href="http://www.woothemes.com"><img src="http://static.zyngawithfriends.zgncdn.com/cdn-cache/c99/797aa3c9.ico-woothemes-trans.png" alt="WooThemes - Premium Wordpress Themes" width="86" height="21" /></a></div> -->
        <div class="fix"></div>
      </div>
            <!--/spacer -->
            <div class="bot"></div>
        </div>

  </div>
  <!--/footer -->

</div>
<!--/page -->
</body>
</html>
