<!--
  _____       _              _          ____                     _    _                       
 |_   _|     | |            (_)        / __ \                   | |  | |                      
   | |  _ __ | |_ __ _ _ __  _  __ _  | |  | |_ __   ___ _ __   | |__| | ___  _   _ ___  ___  
   | | | '_ \| __/ _` | '_ \| |/ _` | | |  | | '_ \ / _ \ '_ \  |  __  |/ _ \| | | / __|/ _ \ 
  _| |_| | | | || (_| | | | | | (_| | | |__| | |_) |  __/ | | | | |  | | (_) | |_| \__ \  __/ 
 |_____|_| |_|\__\__,_|_| |_|_|\__,_|  \____/| .__/ \___|_| |_| |_|  |_|\___/ \__,_|___/\___| 
                                             | |                                              
                                             |_|                                              

อ้าว สนใจดูโค้ดหรอครับ โค้ดไม่ค่อยเทพเท่าไหร่หรอกครับ 5555555
มาพูดคุยกันได้นะ ที่ https://www.facebook.com/intaniaopenhouse

อย่าลืมกดไลค์เพจด้วยนะครับ ขอบคุณมากครับ
แล้วเจอกันที่งาน Intania Open House นะครับ
15-17 พฤศจิกายน 2558 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย

มาเถอะ อยากเจอ
#มาเข้าภาคคอมกันเถอะ

-->
<?php 
	include_once 'lib/quicksilver/TagParser.php'; 
	$container = quicksilver\TagParser::getInstance();
	$tag_container = $container;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- PLEASE EDIT YOUR METADATA HERE, OTHERWISE IT WILL SHOW METADATA OF MY EVENT INSTEAD -->
	<meta name="description" content="มาสร้างรูปโปรไฟล์  Banshi Open House ">
	<meta name="author" content="Chula BANSHI">
	<meta property="og:url" content="http://xvista.in.th/banshichula/profile/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="CBS CHULA | Profile Picture Maker">
	<meta property="og:description" content="มาสร้างรูปโปรไฟล์  CBS CHULA กันเถอะ! >
	<meta property="og:image" content="http://xvista.in.th/intaniaopenhouse/profile/img/fbpic.png">
	<!-- END OF METADATA SECTION -->

	<title>CBS CHULA | Profile Picture Maker</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/cropper.css">
<link rel="stylesheet" href="css/sweetalert.css">
<link rel="stylesheet" href="css/app-20151107-0344.css">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="">CBSChula</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li><a href="https://www.facebook.com/CBSChula/" target="_blank"><i class="fa fa-facebook-official"></i> Official Facebook Page</a></li>
			
			
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</nav>

	<div class="container">
	  <div class="row">
		<div class="header col-md-8 col-md-offset-2">
		  <img class="img-responsive" src="img/cheader.png">
		</div>
	  </div>
	</div>

	<div class="container content">
	  <div class="row step-1" id="step-1">
		<div class="col-md-6 col-md-offset-3">
		  <h2>อัพโหลด Profile Picture</h2>
		  <span class="btn btn-primary btn-lg btn-block btn-file" id="btn-upload">
			<i class="fa fa-file-image-o"></i> คลิกเพื่อเลือกรูปภาพ <input type="file" id="file-uploader" accept="image/*">
		  </span>
		</div>
	  </div>
	  <div class="row step-2" id="step-2">
		<div class="col-md-6 col-md-offset-3">
		  <h2>ปรับแต่งขนาดของภาพ</h2>
		  <p>ลากมุมกรอบเพื่อปรับขนาด หรือลากกรอบเคลื่อนย้ายตำแหน่งได้ ถ้ารูปกลับหัวก็สามารถหมุนรูปได้นะ ลองเลย รออะไรอยู่!</p>
		  <div class="img-preview-area">
			<img class="img-responsive" id="img-preview">
		  </div>
		  <div class="adjust-panel">
			<div class="btn-group">
			  <button id="btn-rotate-ccw" type="button" class="btn btn-default" title="หมุนภาพทวนเข็มนาฬิกา">
				  <span class="fa fa-rotate-left"></span> หมุนภาพทวนเข็มนาฬิกา
			  </button>
			  <button id="btn-rotate-cw" type="button" class="btn btn-default" title="หมุนภาพตามเข็มนาฬิกา">
				  <span class="fa fa-rotate-right"></span> หมุนภาพตามเข็มนาฬิกา
			  </button>
			</div>
		  </div>
		  <button id="btn-to-step-3" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check"></i> ปรับขนาดภาพเสร็จแล้ว</button>
		</div>
	  </div>
	  <div class="row step-3" id="step-3">
		<div class="col-md-4 img-preview-block">
		  <div id="img-result"><canvas id="img-canvas" width="1024" height="1024"></canvas><div id="loading">กำลังโหลด...</div></div>
		  <button id="btn-download" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download"></i> ดาวน์โหลด</button>
		  <div class="facebook-section">
			<a href="https://www.facebook.com/CBSChula/" target="_blank" class="btn btn-primary btn-lg btn-block btn-facebook"><i class="fa fa-facebook-official"></i> มากดไลค์เพจกันเถอะ นะๆ</a>
		  </div>
		</div>
		
		
		
		<div class="col-md-8">
		  <div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>เลือกข้อความที่ต้องการ</h2>
					<p class="text-center">คลิกเลือกข้อความแล้วดูตัวอย่างภาพที่ได้ เมื่อเลือกได้ตามที่ต้องการแล้ว คลิกปุ่มดาวน์โหลดใต้ภาพตัวอย่าง</p>
					
				</div>
		  </div>
		  
		 <div class="row overlay-selector">
						<div class="col-md-12 overlay-selector-header">
							<hr>
							<h3>ภาควิชา/หลักสูตรในคณะพาณิชยศาสตร์และการบัญชี</h3>
						</div>
					</div>

					<div class="row overlay-selector">
													<div class="col-md-6">
								<button id="btn-team-stat" data-tagid="stat" class="intania-team btn btn-default btn-block">
									<b>#TEAMSTAT</b>
																			<br><small>(สถิติศาสตร์)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-bit" data-tagid="bit" class="intania-team btn btn-default btn-block">
									<b>#TEAMBIT</b>
																			<br><small>(เทคโนโลยีสารสนเทศเพื่อธุรกิจ)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-insu" data-tagid="insu" class="intania-team btn btn-default btn-block">
									<b>##TEAMINSURANCE</b>
																			<br><small>(ประกันภัย)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-app" data-tagid="app" class="intania-team btn btn-default btn-block">
									<b>#TEAMAPPLY/b>
																			<br><small>(สถิติ-ประยุกต์)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-math" data-tagid="math" class="intania-team btn btn-default btn-block">
									<b>#TEAMMATH</b>
																			<br><small>(สถิติ-สถิติ)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-audit" data-tagid="audit" class="intania-team btn btn-default btn-block">
									<b>#TEAMAUDIT</b>
																			<br><small>(บัญชีฯ)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-fin" data-tagid="fin" class="intania-team btn btn-default btn-block">
									<b>#TEAMFINANCE</b>
																			<br><small>(การธนาคารและการเงิน)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-logis" data-tagid="logis" class="intania-team btn btn-default btn-block">
									<b>#TEAMLOGIS</b>
																			<br><small>(การจัดการโลจิสติกส์ระหว่างประเทศ)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-mkt" data-tagid="mkt" class="intania-team btn btn-default btn-block">
									<b>#TEAMMARKET</b>
																			<br><small>(การตลาด)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-mis" data-tagid="mis" class="intania-team btn btn-default btn-block">
									<b>#TEAMMIS</b>
																			<br><small>(ระบบสารสนเทศทางการจัดการ)</small>
																	</button>
							</div>
													<div class="col-md-6">
								<button id="btn-team-ent" data-tagid="ent" class="intania-team btn btn-default btn-block">
									<b>#TEAMENTRE</b>
																			<br><small>(การจัดการเพื่อเป็นผู้ประกอบการธุรกิจ)</small>
																	</button>
							</div>
			
			
			<div class="row overlay-selector">
						<div class="col-md-12 overlay-selector-header">
							<hr>
							<h3>กรุ๊ปต่างๆ ในคณะพาณิชยศาสตร์และการบัญชี</h3>
						</div>
					</div>

					<div class="row overlay-selector">
													<div class="col-md-4">
								<button id="btn-team-club-1" data-tagid="club-1" class="intania-team btn btn-default btn-block">
									<b>#TEAMก1</b>
																			<br><small>(กรุ๊ปก1)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-2" data-tagid="club-2" class="intania-team btn btn-default btn-block">
									<b>#TEAMก2</b>
																			<br><small>(กรุ๊ปก2)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-3" data-tagid="club-3" class="intania-team btn btn-default btn-block">
									<b>#TEAMก3</b>
																			<br><small>(กรุ๊ปก3)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-4" data-tagid="club-4" class="intania-team btn btn-default btn-block">
									<b>#TEAMก4</b>
																			<br><small>(กรุ๊ปก4)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-5" data-tagid="club-5" class="intania-team btn btn-default btn-block">
									<b>##TEAMก5</b>
																			<br><small>(กรุ๊ปก5)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-6" data-tagid="club-6" class="intania-team btn btn-default btn-block">
									<b>#TEAMข1</b>
																			<br><small>(กรุ๊ปข1)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-7" data-tagid="club-7" class="intania-team btn btn-default btn-block">
									<b>#TEAMข2</b>
																			<br><small>(กรุ๊ปข2)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-8" data-tagid="club-8" class="intania-team btn btn-default btn-block">
									<b>#TEAMข3</b>
																			<br><small>(กรุ๊ปข3)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-9" data-tagid="club-9" class="intania-team btn btn-default btn-block">
									<b>#TEAMข4</b>
																			<br><small>(กรุ๊ปข4)</small>
																	</button>
							</div>
											</div>		
													<div class="col-md-4">
								<button id="btn-team-club-10" data-tagid="club-10" class="intania-team btn btn-default btn-block">
									<b>#TEAMข5</b>
																			<br><small>(กรุ๊ปข5)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-11" data-tagid="club-11" class="intania-team btn btn-default btn-block">
									<b>#TEAMSD</b>
																			<br><small>(กรุ๊ปสมทบ)</small>
																	</button>
							</div>
													<div class="col-md-4">
								<button id="btn-team-club-12" data-tagid="club-12" class="intania-team btn btn-default btn-block">
									<b>#TEAMST</b>
																			<br><small>(กรุ๊ปสแตท)</small>
																	</button>
							</div>
											</div>	
													

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cropper.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/reimg.js"></script>
	<script src="js/app-20151107-0428.js"></script>
  </body>
</html>
