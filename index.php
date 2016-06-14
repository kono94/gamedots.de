<?php 
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
require "php/inc_connect.php"; ?>
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">
    <title>GameDots</title>
    <link rel="icon" href="images/favicon.ico">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/popup.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.css">
	 <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
	<link href="css/popup2.css" rel="stylesheet" type="text/css">
   
    <script type="text/javascript" src="js/modernizr.js"></script>
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
<script type="text/javascript" src="js/popup.js"></script>
<script>
var myPopup = [];
</script>
    <div id="preloader">
        <div class="loader"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
    <div class="home-page">
        <div class="introduction">
            <img alt="" src="images/league_ashe.jpg">
            <div class="mask"> </div>
            <div class="intro-content">
                <h1>HELLO<br>WE ARE <span>GameDots</span> </h1>
                <h2>GAMING COMMUNITY</h2>
                <p class="social-media hidden-xs">
                    <a href="https://twitter.com/gamedotsde" target="_blank" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                    <a href="https://www.twitch.tv/thatezra" target="_blank" class="fa fa-twitch" data-toggle="tooltip" title="Twitch.tv"></a>
                    <a href="https://www.youtube.com/user/GameDots" target="_blank" class="fa fa-youtube" data-toggle="tooltip" title="Youtube"></a>
                    <a href="http://thatanimegamerboy.tumblr.com/" target="_blank" class="fa fa-tumblr" data-toggle="tooltip" title="Tumblr"></a>
                </p>
            </div>
        </div>
        <div class="menu">
            <div class="team-btn">
                <img alt="" src="images/csgo.jpg">
                <div class="mask"> </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs"> <i class="fa fa-graduation-cap "></i> </div>
                    <div class="col-sm-10">
                        <h2>TE<span>A</span>M</h2>
                        <h3>Some words about us.</h3>
                    </div>
                </div>
            </div>
            <div class="member-btn">
                <img alt="" src="images/hearthstone.jpg">
                <div class="mask"> </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs"> <i class="fa fa-user"></i> </div>
                    <div class="col-sm-10">
                        <h2>ME<span>M</span>BER</h2>
                        <h3>Meet the boys.</h3>
                    </div>
                </div>
            </div>
            <div class="news-btn">
                <img alt="" src="images/rocketleague.jpg">
                <div class="mask"> </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs"> <i class="fa fa-newspaper-o"></i> </div>
                    <div class="col-sm-10">
                        <h2>LA<span>T</span>EST NEWS</h2>
                        <h3>Always be up to date.</h3>
                    </div>
                </div>
            </div>
            <div class="contact-btn">
                <img alt="" src="images/starcraft.jpg">
                <div class="mask"> </div>
                <div class="heading col-xs-11 col-xs-offset-1">
                    <div class="col-xs-2 hidden-xs"> <i class="fa fa-envelope-o"></i> </div>
                    <div class="col-sm-10">
                        <h2>CO<span>N</span>TACT</h2>
                        <h3>Give feedback or just say hello.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============4 ) Close Button==============-->
    <div class="close-btn"></div>
    <!--=============5 ) team Page==============-->
    <div class="team-page">
        <div class="image-container col-md-5 col-sm-12">
            <div class="mask"> </div>
            <div class="main-heading">
                <h1>TE<span>A</span>M</h1>
            </div>
        </div>
        <div class="content-container col-md-7 col-sm-12">
            <div class="story clearfix">
                <h2 class="small-heading">About us</h2>
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="story-content clearfix">
                        <img alt="" src="images/story_of_glory.jpg" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                        <div class="col-sm-8 col-xs-12">
                            <h3 id="glory-h3">Story of Glory</h3>
                            <p>"GameDots" sounds pretty cool, we know that already, that is why we chose it, but what is the story behind the name? </p>
                            <p>The tag "GameDots" was born during an incredible exhausting session of brainstorming and was used for the very first time by Mello. The goal of the whole process was to find an awesome, non-cringy name that would fit our YouTube channel. Right after the tremendous success of the channel, including videos with far more than 100k views it got quite silent around GameDots. </p>
                            <p>It was no other than Kono to break this silence by creating a strong, tryhard League of Legends team. Countless tournament participations and matches against professional organisations such as aAa, eSuba and "Unicorns of Love" go to the account of this legendary team. </p>
                            <p>Exhausted from the success, Gamedots took a different path and started focusing on the community based site of eSports/gaming. Our teamspeak server is the place where all kinds of people are getting together to play games. Every day the boys are ready to rumble and after a bad day you are sure to know there will always be someone to play with and someone who is just feeding the opponnents to obesity.</p>
                            <p>Exhausted from the success, Gamedots took a different path and started focusing on the community based site of eSports/gaming. Our teamspeak server is the place where all kinds of people are getting together to play games. Every day the boys are ready to rumble and after a bad day you are sure to know there will always be someone to play with and someone who is just feeding the opponnents to obesity.</p>
                        </div>
                    </div>
                </div>
            </div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- test -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7472386784659723"
     data-ad-slot="8505514299"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <div class="services-container clearfix">
                <h2 class="small-heading">Explore</h2>
                <div class="services col-lg-4 col-md-6 col-sm-4">
                    <a href="http://www.gamedots.de/dank/index.php" target="_blank"><i class="fa fa-lightbulb-o"></i></a>
                    <h3>Dankest site on the internet</h3>
                    <p>Born too late to explore the earth <br> Born too soon to explore the galaxy <br> Born just in time to browse dank memes <img src="http://images.akamai.steamusercontent.com/ugc/704037974368568265/918BC6D28FC3F0EA872E32938BF3047D80E2107D/"> </p>
                </div>
                <div class="services col-lg-4 col-md-6 col-sm-4">
                    <a href="http://gamedots.de/inventory.php" target="_blank"><i class="fa fa-usd"></i></a>
                    <h3>Inventory values</h3>
                    <p>We analyse the prices of our inventories. Every four hours we save the current value in a databse so we can display progress.</p>
                </div>
                <div class="services col-lg-4 col-md-6 col-sm-4">
                    <i class="fa fa-wrench"></i>
                    <h3>SETTINGS</h3>
                    <p> Vestibulum tincidunt sed dapibus elit, sed accumsan libero. Nam vulputate tincidunt quam quis nibh porttitor, a tincidunt lacinia. Nulla turpis arcu, hendrerit volutpat tincidunt at, eget est. </p>
                </div>
            </div>
            <div class="skills clearfix">
                <h2 class="small-heading">GRAPHS</h2>
                <div class="clearfix">
                    <div class="skill-container col-sm-4">
                        <h3>Dank</h3>
                        <div class="skill" data-percent="69"> <span>69%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Skill</h3>
                        <div class="skill" data-percent="50"> <span>50%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Fun</h3>
                        <div class="skill" data-percent="80"> <span>80%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Counter Strike</h3>
                        <div class="skill" data-percent="84"> <span>84%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>League of Legends</h3>
                        <div class="skill" data-percent="70"> <span>70%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Hearthstone</h3>
                        <div class="skill" data-percent="60"> <span>60%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Rocket League</h3>
                        <div class="skill" data-percent="35"> <span>35%</span> </div>
                    </div>
                    <div class="skill-container col-sm-4">
                        <h3>Starcraft</h3>
                        <div class="skill" data-percent="8"> <span>8%</span> </div>
                    </div>
                </div>
            </div>
            <div class="facts clearfix">
                <div class="col-xs-4">
                    <h3>GAMES PLAYED</h3>
                    <h1>15565</h1>
                </div>
                <div class="col-xs-4">
                    <h3>HOURS PLAYED</h3>
                    <h1>49852</h1>
                </div>
                <div class="col-xs-4">
                    <h3>VAPES</h3>
                    <h1>420</h1>
                </div>
            </div>
            <div class="footer clearfix">
                <a href="#">GameDots</a>
                <p> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 All right reserved </p>
            </div>
        </div>
    </div>
    <!--=============6 ) news Page===============-->
    <div class="news-page">
        <div class="image-container col-md-5 col-sm-12">
            <div class="mask"> </div>
            <div class="main-heading">
                <h1>LA<span>T</span>EST NEWS</h1>
            </div>
        </div>
        <div class="content-container col-md-7 col-sm-12">
            <div class="latest-news clearfix">
                <h2 class="small-heading">NEWS</h2>
                <div class="latest-news-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
				<?php 
				    $sql = "SELECT * FROM news ORDER BY time_added DESC";
					$result = $mysqli->query($sql);					
					while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
					echo '<div class="item">
                        <div class="bullet hidden-xs"> </div>
                        <div class="latest-news-content">
                            <h3>'.$row["title"].'<span> / '.date("jS F, Y", strtotime($row["time_added"])).'</span></h3>
                            <p>'.$row["content"].'</p>
						</div>
                    </div>';				
					}
				?>                  
         
                </div>
            </div>
            <div class="footer clearfix">
                <a href="#">GameDots</a>
                <p> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 All right reserved </p>
            </div>
        </div>
    </div>
    <!--===============7 ) member Page================-->
    <div class="member-page">
        <div class="image-container col-md-5 col-sm-12">
            <div class="mask"> </div>
            <div class="main-heading">
                <h1>ME<span>M</span>BER</h1>
            </div>
        </div>
        <div class="content-container col-md-7 col-sm-12">
            <div class="member">
                <h2 class="small-heading">MEMBER</h2>
                <div class="memberoni-container">
                    <div class="memberoni-controls">
                        <button class="filter" data-filter="all">All</button>
                        <button class="filter" data-filter=".lol">League of Legends</button>
                        <button class="filter" data-filter=".hs">Hearthstone</button>
                        <button class="filter" data-filter=".cs">Counter Strike</button>
                        <button class="filter" data-filter=".rl">Rocket League</button>
                        <button class="filter" data-filter=".sc">Starcraft II</button>
                    </div>
                    <div class="projet-items clearfix" id="memberonis">
					<?php 
					$sql = "SELECT * FROM members_games 
								INNER JOIN games 
								ON members_games.game_id = games.id 
								INNER JOIN members
								ON members_games.member_id = members.id
							";
					$result = $mysqli->query($sql);
					$member_info = array();
					while($row = $result->fetch_array(MYSQLI_ASSOC)){
						// print_r($row["member_id"]);
						if (!isset($member_info[$row["member_id"]])) {							
							$member_info[$row["member_id"]]["classes"] = "";
							$member_info[$row["member_id"]]["member_id"] = $row["member_id"];
							$member_info[$row["member_id"]]["personal_image"] = $row["personal_image"];
							$member_info[$row["member_id"]]["rl_name"] = $row["rl_name"];
							$member_info[$row["member_id"]]["nickname"] = $row["nickname"];
							$member_info[$row["member_id"]]["steam_id"] = $row["steam_id"];
							$member_info[$row["member_id"]]["custom_steam_id"] = $row["custom_steam_id"];
							$member_info[$row["member_id"]]["image"] = $row["image"];
							$member_info[$row["member_id"]]["age"] = $row["age"];		
							$member_info[$row["member_id"]]["personal_text"] = $row["personal_text"];
						}						
						$member_info[$row["member_id"]]["classes"] .= $row["name"]." ";		
						$member_info[$row["member_id"]]["game"][$row["game_id"]]["display_name"] = $row["display_name"];
						$member_info[$row["member_id"]]["game"][$row["game_id"]]["elo"] = $row["elo"];						
					}
					// print_r($member_info);  							

					foreach($member_info as $single_member){						
						echo '<div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix '.$single_member["classes"].'">
                            <div class="memberoni">
                                <img style="max-width:500px;" src="'.$single_member["image"].'" alt="">
                                <div class="ovrly" style="cursor:pointer;" onclick="show_popup('.$single_member["member_id"].')"> </div>
                                <div class="buttons">
                                    <a onclick="show_popup('.$single_member["member_id"].')" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>
						<div id="popup_'.$single_member["member_id"].'" style="display:none;">
							<smq-popup><div class="background-mask" onclick="hide_popup('.$single_member["member_id"].');"></div>
								<div class="window">
								<a  onclick="hide_popup('.$single_member["member_id"].');" class="close">X</a>
									<header class="api-header" style="position:absolute";>
									<h1 style="font-size:30px;" class="api-title">'.$single_member["nickname"].'</h1></header>
									<div class="api-content">
										<img alt="no image found" style="display: block; margin-right:auto;margin-left: auto;max-width:250px;margin-top:40px;max-height: 250px;" src="'.$single_member["personal_image"].'" onError=\'this.onerror=null;this.src="images/personal_images/no_image.jpg";\'>
										<div style="display:-webkit-inline-box;">
											<div style="margin-right:40px; margin-top:10px;">	
											<p>Name: &nbsp;'.$single_member["rl_name"].'</p>';
											echo '<p>Age: &nbsp;'.$single_member["age"].'</p>';
											echo '<p>SteamID: &nbsp;<a href="http://www.steamcommunity.com/profiles/'.$single_member["steam_id"].'" target="_blank">';
											if($single_member["custom_steam_id"] == ""){
												echo $single_member["steam_id"];
											}else{
											 echo $single_member["custom_steam_id"];	
											}
											echo'</a></p>';
											foreach($single_member["game"] as $game_info){
												echo '<p>'.$game_info["display_name"].': &nbsp;'.$game_info["elo"].'</p>';								
											}	
											echo'</div>
											<div>'.$single_member["personal_text"].'</div>
										</div>
									</div>
								</div>
							</smq-popup>					
						</div>';						
					}
					?>	                      
                    </div>
                </div>
            </div>			
	<script>
	function show_popup(member_id){
		$('#popup_' + member_id).css("display","block");
	}
	
	function hide_popup(member_id){
		$('#popup_' + member_id).css("display","none");
	}
	</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- team -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7472386784659723"
     data-ad-slot="1261449095"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <div class="testimonials clearfix">
                <h2 class="small-heading">SOME WORDS FROM OUR OPPONNENTS</h2>
                <div class="testimonials-container col-sm-10 col-sm-offset-1">
                    <div class="owl-carousel">
                        <div>
                            <p> <i class="fa fa-quote-left"></i>OMG knub premade. You are 4 premades and suck so hard. GO KICK ME. GO KICK ME FAGGOTS. You so bad<i class="fa fa-quote-right"></i> </p>
                            <h3>Putin Lover69</h3>
                        </div>
                        <div>
                            <p> <i class="fa fa-quote-left"></i>You are good persons. Person why are knifing me, you are a bad person. PERSON stop. I AM CZECH !<i class="fa fa-quote-right"></i> </p>
                            <h3>Random Greece Guy</h3>
                        </div>
                        <div>
                            <p> <i class="fa fa-quote-left"></i>You are the coolest guy I have ever played with. Let me please join your clan I will do everything for you but be aware that I will be afk for a year<i class="fa fa-quote-right"></i> </p>
                            <h3>Vestal</h3>
                        </div>
                        <div>
                            <p> <i class="fa fa-quote-left"></i>Es war einfach eine unendliche Genugtuung... ihn in diesem Spiel mittlerweile einfach auseinander zu nehmen<i class="fa fa-quote-right"></i> </p>
                            <h3>Vikt0-3r</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="facts clearfix">
                <div class="col-xs-4">
                    <h3>KAPPA</h3>
                    <h1>785</h1>
                </div>
                <div class="col-xs-4">
                    <h3>ELEGIGGLE</h3>
                    <h1>853</h1>
                </div>
                <div class="col-xs-4">
                    <h3>DANSGAME</h3>
                    <h1>366</h1>
                </div>
            </div>
            <div class="footer clearfix">
                <a href="#">GameDots</a>
                <p> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 All right reserved </p>
            </div>
        </div>
    </div>
    <!-- ---------- Contact Page----------- -->
    <div class="contact-page">
        <div class="image-container col-md-5 col-sm-12">
            <div class="mask"> </div>
            <div class="main-heading">
                <h1>CO<span>N</span>TACT</h1>
            </div>
        </div>
        <div class="content-container col-md-7 col-sm-12">
            <div>
                <h2 class="small-heading">WRITE US!</h2>
                <div class="contact-form col-sm-11 clearfix">
                    <div id="contactForm" name="contactForm">
                        <fieldset>
                            <div class="col-sm-12">
                                <input id="name"  placeholder="Your Name*" type="text" value=""> </div>
                            <div class="col-sm-12">
                                <input id="email" placeholder="Your Email*" type="text" value=""> </div>
                            <div class="col-xs-12">
                                <textarea cols="5" id="message"  placeholder="Your Message....*"></textarea>
                            </div>
                            <div class="col-xs-12">
                                <button class="submit active" onclick="send_email();">SEND</button>
                            </div>                           
                        </fieldset>
                    </div>
					 <div class="error col-xs-12">
                                <h3></h3>
                            </div>
                            <div class="success col-xs-12">
                                <h3>Success! Your message was sent.</h3>
                            </div>
                </div>
            </div>
            <div class="contact-details clearfix">
                <h2 class="small-heading">CONTACT DETAILS</h2>
                <div class="contact col-sm-4">
                    <p> <i class="fa fa-map-marker"></i>
                        <br>117 King St, Melbourne VIC </p>
                </div>
                <div class="contact col-sm-4">
                    <p> <i class="fa fa-phone"></i>
                        <br>+03 7010 5678 </p>
                </div>
                <div class="contact col-sm-4">
                    <p> <i class="fa fa-envelope"></i>
                        <br>gamedots@gmail.com </p>
                </div>
                <div class="col-xs-12 social-media">
                    <a href="https://twitter.com/gamedotsde" target="_blank" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                    <a href="https://www.twitch.tv/thatezra" target="_blank" class="fa fa-twitch" data-toggle="tooltip" title="Twitch.tv"></a>
                    <a href="https://www.youtube.com/user/GameDots" target="_blank" class="fa fa-youtube" data-toggle="tooltip" title="Youtube"></a>
                    <a href="http://thatanimegamerboy.tumblr.com/" target="_blank" class="fa fa-tumblr" data-toggle="tooltip" title="Tumblr"></a>
                </div>
            </div>
            <div class="footer clearfix">
                <a href="#">GameDots</a>
                <p> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 All right reserved </p>
            </div>
        </div>
    </div>
	<script>	
function send_email(){  
     var name = $('#name').val();
     var email = $('#email').val();
     var message = $('#message').val();
	 if(name === "" || email === "" || message === ""){
		alert("all fields must be filled out"); 
		return;
	 } 
	 
	$.post("/php/contact.php", {name: name, email: email, message: message},
       function(data){		
        var response = jQuery.parseJSON(data);		
		if(response.error){    
		   $('.success').css("display", "none");
		   $('.error').css("display", "inline");
		   $('.error').html("<h3>" + response.error_message + "</h3>");			  
	   }else{
		   $('#contactForm').remove();
		    $('.error').css("display", "none");
			$('.success').css("display", "inline");
			$('.success').html("<h3>" + response.success_message + "</h3>");			 
		  }	   
        });
}
</script>
	</script>
    <script src="https://use.fontawesome.com/8e1cfae25f.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78460531-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>