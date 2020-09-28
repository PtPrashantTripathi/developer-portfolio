<?php 
$url=$_SERVER['REQUEST_URI'];
       $title='Pt. Prashant Triapthi :: Home';
       $nav=1;
       include 'header.php';
	   //http://www.bhagavad-gita.org/Gita/png/verse-01-01-1.png
	   //https://www.holy-bhagavad-gita.org/chapter/18/verse/66
$slok=array("01-01","01-02","01-03","01-04","01-05","01-06","01-07","01-08","01-09","01-10","01-11","01-12","01-13","01-14","01-15","01-16","01-17","01-18","01-19","01-20","01-21","01-22","01-23","01-24","01-25","01-26","01-27","01-28","01-29","01-30","01-31","01-32","01-33","01-34","01-35","01-36","01-37","01-38","01-39","01-40","01-41","01-42","01-43","01-44","01-45","01-46","01-47","02-01","02-02","02-03","02-04","02-05","02-06","02-07","02-08","02-09","02-10","02-11","02-12","02-13","02-14","02-15","02-16","02-17","02-18","02-19","02-20","02-21","02-22","02-23","02-24","02-25","02-26","02-27","02-28","02-29","02-30","02-31","02-32","02-33","02-34","02-35","02-36","02-37","02-38","02-39","02-40","02-41","02-42","02-43","02-44","02-45","02-46","02-47","02-48","02-49","02-50","02-51","02-52","02-53","02-54","02-55","02-56","02-57","02-58","02-59","02-60","02-61","02-62","02-63","02-64","02-65","02-66","02-67","02-68","02-69","02-70","02-71","02-72","03-01","03-02","03-03","03-04","03-05","03-06","03-07","03-08","03-09","03-10","03-11","03-12","03-13","03-14","03-15","03-16","03-17","03-18","03-19","03-20","03-21","03-22","03-23","03-24","03-25","03-26","03-27","03-28","03-29","03-30","03-31","03-32","03-33","03-34","03-35","03-36","03-37","03-38","03-39","03-40","03-41","03-42","03-43","04-01","04-02","04-03","04-04","04-05","04-06","04-07","04-08","04-09","04-10","04-11","04-12","04-13","04-14","04-15","04-16","04-17","04-18","04-19","04-20","04-21","04-22","04-23","04-24","04-25","04-26","04-27","04-28","04-29","04-30","04-31","04-32","04-33","04-34","04-35","04-36","04-37","04-38","04-39","04-40","04-41","04-42","05-01","05-02","05-03","05-04","05-05","05-06","05-07","05-08","05-09","05-10","05-11","05-12","05-13","05-14","05-15","05-16","05-17","05-18","05-19","05-20","05-21","05-22","05-23","05-24","05-25","05-26","05-27","05-28","05-29","06-01","06-02","06-03","06-04","06-05","06-06","06-07","06-08","06-09","06-10","06-11","06-12","06-13","06-14","06-15","06-16","06-17","06-18","06-19","06-20","06-21","06-22","06-23","06-24","06-25","06-26","06-27","06-28","06-29","06-30","06-31","06-32","06-33","06-34","06-35","06-36","06-37","06-38","06-39","06-40","06-41","06-42","06-43","06-44","06-45","06-46","06-47","07-01","07-02","07-03","07-04","07-05","07-06","07-07","07-08","07-09","07-10","07-11","07-12","07-13","07-14","07-15","07-16","07-17","07-18","07-19","07-20","07-21","07-22","07-23","07-24","07-25","07-26","07-27","07-28","07-29","07-30","08-01","08-02","08-03","08-04","08-05","08-06","08-07","08-08","08-09","08-10","08-11","08-12","08-13","08-14","08-15","08-16","08-17","08-18","08-19","08-20","08-21","08-22","08-23","08-24","08-25","08-26","08-27","08-28","09-01","09-02","09-03","09-04","09-05","09-06","09-07","09-08","09-09","09-10","09-11","09-12","09-13","09-14","09-15","09-16","09-17","09-18","09-19","09-20","09-21","09-22","09-23","09-24","09-25","09-26","09-27","09-28","09-29","09-30","09-31","09-32","09-33","09-34","10-01","10-02","10-03","10-04","10-05","10-06","10-07","10-08","10-09","10-10","10-11","10-12","10-13","10-14","10-15","10-16","10-17","10-18","10-19","10-20","10-21","10-22","10-23","10-24","10-25","10-26","10-27","10-28","10-29","10-30","10-31","10-32","10-33","10-34","10-35","10-36","10-37","10-38","10-39","10-40","10-41","10-42","11-01","11-02","11-03","11-04","11-05","11-06","11-07","11-08","11-09","11-10","11-11","11-12","11-13","11-14","11-15","11-16","11-17","11-18","11-19","11-20","11-21","11-22","11-23","11-24","11-25","11-26","11-27","11-28","11-29","11-30","11-31","11-32","11-33","11-34","11-35","11-36","11-37","11-38","11-39","11-40","11-41","11-42","11-43","11-44","11-45","11-46","11-47","11-48","11-49","11-50","11-51","11-52","11-53","11-54","11-55","12-01","12-02","12-03","12-04","12-05","12-06","12-07","12-08","12-09","12-10","12-11","12-12","12-13","12-14","12-15","12-16","12-17","12-18","12-19","12-20","13-01","13-02","13-03","13-04","13-05","13-06","13-07","13-08","13-09","13-10","13-11","13-12","13-13","13-14","13-15","13-16","13-17","13-18","13-19","13-20","13-21","13-22","13-23","13-24","13-25","13-26","13-27","13-28","13-29","13-30","13-31","13-32","13-33","13-34","14-01","14-02","14-03","14-04","14-05","14-06","14-07","14-08","14-09","14-10","14-11","14-12","14-13","14-14","14-15","14-16","14-17","14-18","14-19","14-20","14-21","14-22","14-23","14-24","14-25","14-26","14-27","15-01","15-02","15-03","15-04","15-05","15-06","15-07","15-08","15-09","15-10","15-11","15-12","15-13","15-14","15-15","15-16","15-17","15-18","15-19","15-20","16-01","16-02","16-03","16-04","16-05","16-06","16-07","16-08","16-09","16-10","16-11","16-12","16-13","16-14","16-15","16-16","16-17","16-18","16-19","16-20","16-21","16-22","16-23","16-24","17-01","17-02","17-03","17-04","17-05","17-06","17-07","17-08","17-09","17-10","17-11","17-12","17-13","17-14","17-15","17-16","17-17","17-18","17-19","17-20","17-21","17-22","17-23","17-24","17-25","17-26","17-27","17-28","18-01","18-02","18-03","18-04","18-05","18-06","18-07","18-08","18-09","18-10","18-11","18-12","18-13","18-14","18-15","18-16","18-17","18-18","18-19","18-20","18-21","18-22","18-23","18-24","18-25","18-26","18-27","18-28","18-29","18-30","18-31","18-32","18-33","18-34","18-35","18-36","18-37","18-38","18-39","18-40","18-41","18-42","18-43","18-44","18-45","18-46","18-47","18-48","18-49","18-50","18-51","18-52","18-53","18-54","18-55","18-56","18-57","18-58","18-59","18-60","18-61","18-62","18-63","18-64","18-65","18-66","18-67","18-68","18-69","18-70","18-71","18-72","18-73","18-74","18-75","18-76","18-77","18-78");
?>

	<!--code for wallpaper start-->
<div class="container-fluid">    
	<div class="row">
		<div class="col-xs-12 main_bg">
			<br>
			<!--div class="hidden-xs"><br><br><br><br></div>
			<img id="ptprashanttripathi" src="https://avatars1.githubusercontent.com/u/26687933?s=460&u=77ad09e2c60d22ff01ccb952ecafd3008b187a5d&v=4" alt="Pt. Prashant Tripathi" class="img  img-thumbnail img-responsive" style="height:100px"/> 
			<br><br>
			<div class="main_hd"><h2>Hi. I'm <br>Pt. Prashant Tripathi</h2><h4>Astrologer, Web Developer, B.E. Student.</h4></div-->
		</div>
	</div>
    <!--motivational quaotes-->
    <div class="row" id="main_quote">
	<center>
		<img id="slok" src="http://www.bhagavad-gita.org/Gita/png/verse-<?php echo $slok[rand(0,699)];?>-1.png" alt="Pt. Prashant Tripathi :: Gita Slok" class="img-responsive"  style="padding:10px 0;"/>    
	<!--div class="col-xs-12"></div-->
	</center>
    </div>
</div>
<br>
    <!--main content start-->
    <div class="container">

        <div class="row">
			
            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/aboutme/">
                            <center> <span class="ca-icon"><i class="mdi mdi-account-circle"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Know Me</h2>
                                <h3 class="ca-sub">Lifestyle</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/portfolio/#technical">
                            <center> <span class="ca-icon"><i class="mdi mdi-laptop-mac"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Portfolio</h2>
                                <h3 class="ca-sub">Technical ability</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/career/academic">
                            <center> <span class="ca-icon"><i class="mdi mdi-school"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Career</h2>
                                <h3 class="ca-sub">Academic Details</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/achievements/">
                            <center> <span class="ca-icon"><i class="mdi mdi-certificate"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Honors</h2>
                                <h3 class="ca-sub">Achievements & Certificates</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/portfolio/" target="_blank">
                            <center><span class="ca-icon"><i class="mdi mdi-code-tags"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Projects</h2>
                                <h3 class="ca-sub">Codes by me</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/contact/">
                            <center><span class="ca-icon"><i class="mdi mdi-contact-mail"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Contact</h2>
                                <h3 class="ca-sub">Ping me</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-3 lib">
                <div class="panel panel-default">
                    <div class="panel-body lib_body">
                        <a href="/Prashant_Tripathi_Resume.pdf">
                            <center> <span class="ca-icon"><i class="mdi mdi-attachment"></i></span></center>
                            <div class="ca-content">
                                <h2 class="ca-main">Resume</h2>
                                <h3 class="ca-sub">Download in PDF</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!--About start-->
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-custom" style="background: #F44336; color: #fff; font-size:20px;">All about Me</div>

                    <div class="panel-body detail">
                        <p class="title2">
						Hi! My name is Pt. Prashant Tripathi, I am 19 years old and I live in Jabalpur, India. I am currently working on <B>Brosena</B>. 
						a Social Networking Website, well I am the Founder Of Brosena. I studied computer science at SAIT which is affiliated with RGPV. 
						I enjoy developing the webpage, software, especially for online stuff. In the past, I have developed many websites from scratch, 
						going from designing the API & Logo to collating content to rest things. I love contributing open source. 
						This I developed during my university days To show myself to rest of the world. I enjoy travelling with my PAPA, 
						I have spent my several summer vacation on wondering the spritulness of India. I am an active blogger (view blog here), 
						where I write my mind. I love watching Movies specially Psychological and Science Fiction. I'm extremely enthusiastic about life, 
						am in love with my work and am always on the hunt for learning something new. You can find me on LinkedIn, or email me here. 
						Let's <a href="/contact/" style="color:#F44336;">Get in Touch!</a> To Know more about me and my life read on here. Currently, I am looking for an internship. 
						To know more about me <a href="/aboutme/" style="color:blue">click here.</a>
</p><hr>

                        <!--At a glance start-->
                        <p class="title">At A Glance</p>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">

                                <p class="title1">Education</p>
                                <hr>
                                <p class="title2">Undergraduate Student at St. Aloysius Institute of Technology, Jabalpur, Madhya Pradesh, India.
                                    <br> In Computer Science & Engg. Batch of 2016-2020</p>
                                <a href="/career/academic/" class="btn btn-sm btn-danger btn-raised" title="Prashant's Academic career">Learn more <i class="mdi mdi-rocket"></i>&nbsp;&nbsp;</a>

                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <p class="title1">Histroy</p>
                                <hr>

                                <p class="title2">Born and brought up in <a href="https://en.wikipedia.org/wiki/Mandla_district">Mandla</a> , Madhya Pradesh India.
                                    <br> Currently living in the <a href="https://en.wikipedia.org/wiki/Jabalpur">Jabalpur</a>, Madhya Pradesh, India.</p>
                                <a href="aboutme/" class="btn btn-sm btn-danger btn-raised" title="Prashant's Personal life">Know more <i class="mdi mdi-rocket"></i>&nbsp;&nbsp;</a>

                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <p class="title1">Experience</p>
                                <hr>
                                <p class="title2">
								I do not have any kind of experience right now, because I am a freelancer, 
								but still today I am the CFO & CEO of <a href="http://brosena.ga"> Brosena </a>
                                    <br>
                                </p>
                                <a href="/portfolio/" class="btn btn-sm btn-danger btn-raised" title="Prashant's Professional career">See more <i class="mdi mdi-rocket"></i>&nbsp;&nbsp;</a>

                            </div>
                        </div>
                        <hr>
                        <!--Testimonials start-->
                        <p class="title">Testimonials</p>

                        <p class="title2">Here you can see what my friends, relatives, colleagues and others have to say about me.
                            <br> No testimonial to display :( Be the first one to write a testimonial for me :)
                            <br> If you want to write a testimonial for me <a href="mailto:pt8435782545@gmail.com" style="color:blue">click here.</a></p>

                    </div>
                </div>
                <!--panel closed-->

            </div>
        </div>

    </div>

    <!--footer start-->
    <?php include 'footer.php' ?>
