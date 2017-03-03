<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nada's Project</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url()?>/home">K-Drama</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
							<li><a href="<?php echo site_url()?>/about">About</a></li>
							<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
							<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>

						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Qotrunnada Widadu Izdihar <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Profile</a></li>
									<li><a href="#">Setting</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="jumbotron">
				<div class="container">
					<h1><?php echo $nama?></h1>
					<p>Thank you for visiting my web :)</p>
					<p>
						<a class="btn btn-danger btn-lg">Learn more..</a>
					</p>
				</div>
			</div>
			
			<div class="col-xs-5 col-sm-6 col-md-6 col-lg-6">
			<table class="table table-striped table-hover">
					<tbody>
						<tr>
						<img src="<?php echo base_url() ?>assets/img/1.jpg" class="img-responsive" alt="Image">
						</tr>
						<tr>
						<h3>Production</h3>
						<p>The series reunites writer Joo Hwa-mi and PD Song Hyun-wook of Marriage, Not Dating after 2 years. Song Hyun-wook also directed the 2016 hit drama Another Oh Hae-young.</p>

						<p>The production team stated that the series would stop airing for a week, as the team would be doing extensive rewrites to the scripts in order to make improvements to the drama.</p>
    				  
						</p>	
						<h3>Soundtrack</h3>
						<p>1.  "Is it love?" (사랑인 걸까?) Hong Dae-kwang</p>
						<p>2.  "Is it love?" (Inst.)</p>	  
						<p>3.  "Memory" Ben</p> 	
						<p>4.  "Memory" (Inst.)</p> 	
						<p>5.  "One More Step" (한 걸음만 더) Sandeul (B1A4)</p>	
						<p>6.  "One More Step" (Inst.)</p> 	  	
						<p>7.  "Isn't She Lovely" Park Bo-ram</p>	
						<p>8.  "Isn't She Lovely" (Inst.)</p>	 
						<p>9.  "Because Of You" Kim EZ (Ggotjam Project)</p>
						<p>10. "Because Of You" (Inst.)</p> 	
						<p>11. "Suspicious You" (수상한 너) Ryu Ji-hyun</p>
						<p>12. "Suspicious You" (Inst.)</p>	  
						</p>
						<h3>References</h3>
						<p>1. "[단독]박혜수·연우진, ´내성적인 보스´ 주인공 ´확정´ - 일간스포츠". Isplus.live.joins.com. Retrieved 2016-11-13.</p>
						<p>2. Yoon Joon-pil (January 11, 2017). "스테파니, '내성적인 보스'로 첫 연기 도전…윤박·예지원과 호흡". TenAsia (in Korean). Retrieved January 24, 2017.</p>
						<p>3. "[단독] ´또 오해영´ PD, tvN ´내성적인 보스´로 2017년 첫 출발 - 일간스포츠". Isplus.live.joins.com. Retrieved 2016-11-13.</p>
						<p>4. "송현욱 PDX주화미 작가, '연애 말고 결혼' 2탄 탄생시킬까 [종합] : 스포츠동아". Sports.donga.com. 2016-09-08. Retrieved 2016-11-13.</p>
						<p>5. "[대본수정 초강수 '내보스', 시청자 마음 다시 돌릴까 원문보기". http://www.sportsseoul.com. Retrieved 2017-01-30. line feed character in |title= at position 31 (help); External link in |website= (help)</p>
						<p>6. "AGB Daily Ratings: this links to current day-select the date from drop down menu". AGB Nielsen Media Research (in Korean). Retrieved January 17, 2017.</p>
						<p>7. "TNmS Ratings". TNMS Ratings (in Korean). Retrieved January 17, 2017.</p>
						</p>
						
						</tr>
					</tbody>
				</table>	
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<table class="table table-striped table-hover">
					<tbody>
						<tr>
						<h3>Profile</h3> 
						<p><strong>- Drama:</strong> <?php echo $drama; ?></p>
						<p><strong>- Revised romanization:</strong> <?php echo $rev; ?></p>
    					<p><strong>- Hangul:</strong> <?php echo $hangul; ?></p>
   						<p><strong>- Director:</strong> <?php echo $director; ?></p>
   					    <p><strong>- Writer:</strong> <?php echo $writer; ?></p>
    		       		<p><strong>- Network:</strong> <?php echo $network; ?></p>
    					<p><strong>- Episodes:</strong> <?php echo $eps; ?></p>
    				    <p><strong>- Release Date:</strong> <?php echo $rel; ?></p>
    					<p><strong>- Runtime: </strong><?php echo $runt; ?></p>
    				    <p><strong>- Language: </strong><?php echo $lang; ?></p>
    				    <p><strong>- Country:</strong> <?php echo $country; ?></p>
			</p>

			<h3>Plot</h3> 
			<p>Eun Hwan-Ki (Yeon Woo-Jin) is the CEO of a public relations company, but he is extremely shy. Due to his personality, even his employees do not know him well.
			<p>Chae Ro-Woon (Park Hye-Soo) begins work at Eun Hwan-Ki’s company. She is very energetic and receives recognition for her work, but her only interest is in CEO Eun Hwan-Ki. She plans to reveal who Eun Hwan-Ki really is.</p>
			</p>

			<h3>Notes</h3>
			<p>1. "Introverted Boss" takes over the tvN Mondays & Tuesdays 23:00 time slot previously occupied by "Rude 	   Miss Young-Ae Season 15” and will be followed by "The Liar and His Lover" March, 2017.</p>
    		<p>2. Yoon Doo-Joon was first offered the lead male role, but declined.</p>
    		<p>3. Yeon Woo-Jin and Park Hye-Soo cast in tvN drama series “Introverted Boss.”</p>
    		<p>4. 8 character posters for tvN drama series “Introverted Boss.”</p>
			</p> 

			<h3>Cast</h3>
			</tr>
			<tr>
				<img src="<?php echo base_url() ?>assets/img/20.jpg" class="img-responsive" alt="Image">
			</tr>
					</tbody>
				</table>	
			</div>
		 
			</div>
		</div>
	</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>