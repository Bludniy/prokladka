<!DOCTYPE HTML>
<html>
<?php
  $dom = $_SERVER['HTTP_HOST'];
  $domen = 'http://'.$dom;
  $domup = strtoupper($dom);
  $json=file_get_contents("http://api.themoviedb.org/3/discover/movie?api_key=d240f3c5f20a4a336ffbe739325fe369&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1");
  $obj = json_decode($json);
  $img = $domen.'/include/images/no-poster-w185.jpg';
  $imga ='http://i1.wp.com/image.tmdb.org/t/p/w300';
  $num = 19;
?>
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Watch Movies Full HD Online Free</title>
	<meta name="description" content="Watch movies and tv series stream full hd online for free">
	<meta name="keywords" content="watch movie online,watch movie online, watch full movie,tv series, watch movie free, tv show">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		
	<link href="<? echo $domen ?>/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="<? echo $domen ?>/templates/v3/style.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
	<script src="<? echo $domen ?>/include/js/css3-mediaqueries.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<? echo $domen ?>"><? echo $domup ?></a>
                </div><!-- navbar-header -->
                <div class="navbar-collapse collapse" id="searchbar">
                        <ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<? echo $domen ?>"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<? echo $domen ?>/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="<? echo $domen ?>/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="<? echo $domen ?>/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
					</li>

                                <li>&nbsp;</li>
                        </ul>
                        <form class="navbar-form" method="get" action="/search.php">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input class="form-control search-form" name="q" placeholder="Type Movie title here?" autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- nav-collapse -->
        </div><!-- container -->
</div>

<div class="container box-container">
        <div class="row">        <div class="col-md-12">
                <div class="row">
                        <div class="page-header text-center tittle h3">MOVIES</div>
                        			
<?php 
for ($i = 0; $i <= $num; $i++){
	                $imag = $imga.$obj->results[$i]->poster_path;
					echo '<div class="col-md-15 col-sm-4 col-xs-6"><div class="movie-list text-center" data-toggle="tooltip" data-placement="top" title="'.$obj->results[$i]->title.'"><a href="'.$domen.'/movie/'.$obj->results[$i]->id.'/'.str_replace(' ', '-',strtolower($obj->results[$i]->title)).'.html"><img src="'.$imag.'?resize=300,450" alt="'.$obj->results[$i]->title.'" class="img-responsive"><div class="movie-list-title nowrap">'.$obj->results[$i]->title.'</div></a><div class="label label-info">'.$obj->results[$i]->vote_average.'/10 by'.$obj->results[$i]->vote_count.'user</div></div></div>';	
	}
?>
									
									
				                        <div class="clearfix"></div>
		</div>

                <div class="row">

                        										
									
											

                        <div class="clearfix"></div>

		</div>
	</div>		</div>
	</div>

<footer class="col-md-12" style="background:#191818;padding: 20px;color: white;font-weight: bolder;text-shadow: 0px  0px 1px rgb(0, 0, 0);">
	<div class="container">
		<div class="col-sm-6">Copyright © 2017 | <? echo $domup ?></div>
		<div class="col-sm-6">
				<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".dcma" style="min-width: 100px;">DMCA</button> <button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".privacy" style="min-width: 100px;">Privacy Police</button> <button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".contact" style="min-width: 100px;">Contact Us</button>
		</div>
	</div>
</footer>

<script>
	$(document).ready(function() {
		$('#user, #username').focus();
		$('#submit, #login').click(function() {
			event.preventDefault(); // prevent PageReLoad
			$('.error').css('display', 'none'); // hide error msg
			$('#spiner_login, #spiner_login_menu').css('display', 'block');
			var ValidEmail = $('#user').val() === 'plese@login.here'; // Email Value
			var ValidPassword = $('#password').val() === 'YourPassword'; // Password Value
			if (ValidEmail === false && ValidPassword === false) { // if ValEmail & ValPass are as above
				var delay=1500;
				setTimeout(function(){
					$('.error, .error_menu').css('display', 'block');
					$('.pesan, .error_menu').css('display', 'none');
					$('#spiner_login, #spiner_login_menu').css('display', 'none');
					var tutup=5000;
					setTimeout(function(){
						$('.error, .error_menu').css('display', 'none');
						$('.pesan, .error_menu').css('display', 'block');
					},tutup);
				},delay);
			}
		});
	});
	$('.player').modal({backdrop: 'static'})  
</script>

<div class="modal fade dcma" tabindex="-1" role="dialog" aria-labelledby="dcma" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">DMCA Notice <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body" style="text-align:justify;">
<p>Latest movies HD free online respects the intellectual property of others. Latest movies HD free online takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.</p>
<p>It should be noted that Latest movies HD free online is a simple search engine of videos available at a wide variety websites.</p>
<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:</p>
<ul>
<li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li>
<li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li>
<li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li>
<li>A statement that the complaining party &#8220;in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law&#8221;</li>
<li>A statement that the &#8220;information in the notification is accurate&#8221;, and &#8220;under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed&#8221;</li>
</ul>
<p>Contact Us :<b>admin@<? echo $dom ?></b></p>
<p>WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER&#8217;S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>
<p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade privacy" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Privacy Policy <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body" style="text-align:justify;">
				
					<div class="panel-body" style="text-align: justify">
<p>We recognize that your privacy is important. This document outlines the types of personal information we receive and collect when you use Watch TV Show Online, as well as some of the steps we take to safeguard information. We hope this will help you make an informed decision about sharing personal information with us. Watch TV Show Online strives to maintain the highest standards of decency, fairness and integrity in all our operations. Likewise, we are dedicated to protecting our customers&#8217;, consumers&#8217; and online visitors&#8217; privacy on our website.</p>
<p><strong>Personal Information</strong></p>
<p>Watch TV Show Online collects personally identifiable information from the visitors to our website only on a voluntary basis. Personal information collected on a voluntary basis may include name, postal address, email address, company name and telephone number.</p>
<p>This information is collected if you request information from us, participate in a contest or sweepstakes, and sign up to join our email list or request some other service or information from us. The information collected is internally reviewed, used to improve the content of our website, notify our visitors of updates, and respond to visitor inquiries.</p>
<p>Once information is reviewed, it is discarded or stored in our files. If we make material changes in the collection of personally identifiable information we will inform you by placing a notice on our site. Personal information received from any visitor will be used only for internal purposes and will not be sold or provided to third parties.</p>
<p><strong>Use of Cookies and Web Beacons</strong></p>
<p>We may use cookies to help you personalize your online experience. Cookies are identifiers that are transferred to your computer&#8217;s hard drive through your Web browser to enable our systems to recognize your browser. The purpose of a cookie is to tell the Web server that you have returned to a specific page. For example, if you personalize the sites pages, or register with any of our site&#8217;s services, a cookie enables Watch TV Show Online to recall your specific information on subsequent visits.</p>
<p>You have the ability to accept or decline cookies by modifying your Web browser; however, if you choose to decline cookies, you may not be able to fully experience the interactive features of the site.</p>
<p>A web beacon is a transparent image file used to monitor your journey around a single website or collection of sites. They are also referred to as web bugs and are commonly used by sites that hire third-party services to monitor traffic. They may be used in association with cookies to understand how visitors interact with the pages and content on the pages of a web site.</p>
<p>We may serve third-party advertisements that use cookies and web beacons in the course of ads being served on our web site to ascertain how many times you&#8217;ve seen an advertisement. No personally identifiable information you give us is provided to them for cookie or web beacon use, so they cannot personally identify you with that information on our web site.</p>
<p>Some third-party advertisements may be provided by Google, which uses cookies to serve ads on this site. Google uses the DART cookie, which enables it to serve ads to our users based on their visits to this site and other sites on the Web. You may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>
<p>Browsers can be set to accept or reject cookies or notify you when a cookie is being sent. Privacy software can be used to override web beacons. Taking either of these actions shouldn&#8217;t cause a problem with our site, should you so choose.</p>
<p><strong>Children&#8217;s Online Privacy Protection Act</strong></p>
<p>This website is directed to adults; it is not directed to children under the age of 13. We operate our site in compliance with the Children&#8217;s Online Privacy Protection Act, and will not knowingly collect or use personal information from anyone under 13 years of age.</p>
<p><strong>Non-Personal Information</strong></p>
<p>In some cases, we may collect information about you that is not personally identifiable. We use this information, which does not identify individual users, to analyze trends, to administer the site, to track users&#8217; movements around the site and to gather demographic information about our user base as a whole. The information collected is used solely for internal review and not shared with other organizations for commercial purposes.</p>
<p><strong>Release of Information</strong></p>
<p>If Watch TV Show Online is sold, the information we have obtained from you through your voluntary participation in our site may transfer to the new owner as a part of the sale in order that the service being provided to you may continue. In that event, you will receive notice through our website of that change in control and practices, and we will make reasonable efforts to ensure that the purchaser honors any opt-out requests you might make of us.</p>
<p><strong>How You Can Correct or Remove Information</strong></p>
<p>We provide this privacy policy as a statement to you of our commitment to protect your personal information. If you have submitted personal information through our website and would like that information deleted from our records or would like to update or correct that information, please use our Contact Us page.</p>
<p><strong>Updates and Effective Date</strong></p>
<p>Watch TV Show Online reserves the right to make changes in this policy. If there is a material change in our privacy practices, we will indicate on our site that our privacy practices have changed and provide a link to the new privacy policy. We encourage you to periodically review this policy so that you will know what information we collect and how we use it.</p>
<p><strong>Agreeing to Terms</strong></p>
<p>If you do not agree to Watch TV Show Online Privacy Policy as posted here on this website, please do not use this site or any services offered by this site.</p>
<p>Your use of this site indicates acceptance of this privacy policy.</p>
<p><strong>DISCLAIMER</strong></p>
<p>Watch TV Show Online provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>
<p>The materials contained on this website are provided for general information purposes only. Watch TV Show Online does not accept any responsibility for any loss which may arise from reliance on information contained on this site.</p>
<p>Permission is given for the downloading and temporary storage of one or more of these pages for the purpose of viewing on a personal computer. The contents of this site are protected by copyright under international conventions and, apart from the permission stated, the reproduction, permanent storage, or retransmission of the contents of this site is prohibited without the prior written consent of Watch TV Show Online.</p>
<p>Some links within this website may lead to other websites, including those operated and maintained by third parties. Watch TV Show Online includes these links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked site or an endorsement of the linked site, its operator, or its contents (exceptions may apply).</p>
<p>This website and its contents are provided &#8220;AS IS&#8221; without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
<p>Reproduction, distribution, republication, and/or retransmission of material contained within this website are prohibited unless the prior written permission of Watch TV Show Online has been obtained. provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>
<p>The materials contained on this website are provided for general information purposes only. Watch TV Show Online does not accept any responsibility for any loss which may arise from reliance on information contained on this site.</p>
<p>Permission is given for the downloading and temporary storage of one or more of these pages for the purpose of viewing on a personal computer. The contents of this site are protected by copyright under international conventions and, apart from the permission stated, the reproduction, permanent storage, or retransmission of the contents of this site is prohibited without the prior written consent of Watch TV Show Online.<br />
Some links within this website may lead to other websites, including those operated and maintained by third parties. Watch TV Show Online includes these links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked site or an endorsement of the linked site, its operator, or its contents (exceptions may apply).</p>
<p>This website and its contents are provided &#8220;AS IS&#8221; without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
<p>Reproduction, distribution, republication, and/or retransmission of material contained within this website are prohibited unless the prior written permission of Watch TV Show Online has been obtained.</p>
					</div>
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Contact Us <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body">
			 
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" required="" type="text" class="form-control" id="name" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" required="" type="email" class="form-control" id="email" placeholder="Your Email">
					</div>
					<div class="form-group">
						<label for="">Message</label>
						<textarea name="message" required="" class="form-control" id="message" placeholder="Your Message" style="resize: none;"></textarea>
					</div>
                                                <input type="hidden" name="contact" value="submit">
						<button id="submitcontact" type="submit" class="btn btn-primary pull-right">Submit</button>
				</form>
				 
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<? echo $domen ?>/include/js/scripts.js"></script>
<script type="text/javascript" src="<? echo $domen ?>/include/js/screenfull.min.js"></script>

</body>
<!-- Histats.com  START  (aync)-->
<!-- Histats.com  END  -->
</html>