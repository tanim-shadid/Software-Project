<?php include("header.php"); ?>

<div class="container clearfix"></div>
		<div id="page-menu">
			<div id="page-menu-wrap">
			</div>
		</div>
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200"></p>
								</div>
							</div>
							<div class="video-wrap">
								<img src="images/slider/slider2.jpg">
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('images/slider/slider1.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Welcome </h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">We are here for achieve your expectations.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1>Welcome to our <br>Platform</h1>
							</div>
							<p class="lead">We are a group of 3rd year students of AUST.Our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web &amp; Software Development.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="images/services/browse.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<img src="images/services/two.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
								
							</div>

						</div>

					</div>
				</div>

				<div class="section nobottommargin">
					<div class="container clear-bottommargin clearfix">

						<div class="row topmargin-sm clearfix">

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-smile inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Positive Attitude</h4>
								</div>
								<p>We are here for achieve your expectations. Our professional programmers have care about your product. They are positive, willing to go the distance to get the job done and bring their best every day.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-users inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Customer Communication Skills</h4>
								</div>
								<p>We have a team for communication with users to inform the status, requirements and guidelines about the project in present also in future.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-time inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Great at Time and Task Management</h4>
								</div>
								<p>We are highly reliable. Our team have a strong work ethic. An important skill is the ability to estimate the amount of time needed to complete a task.</p>
							</div>

						</div>

					</div>
				</div>
				<div class="clear"></div>
				<div class="section notopmargin notopborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>Latest from the Blog</h3>
						</div>
					</div>
				</div>
<?php

				$query = "SELECT * FROM `blog` ORDER BY id DESC limit 4";

				$result = mysqli_query($connection, $query);

        		if(mysqli_num_rows($result) > 0){
        

        			echo '<div class="container clear-bottommargin clearfix">
				<div class="row">';

         			while( $row = mysqli_fetch_assoc($result) ){ 
         					$postId = $row['id'];
         					$status =  $row["status"]; 
            			    $post = $row["post"];
                			$title = $row["title"]; 
             			    $content = $row["postContent"];
             			    $adminPost = $row["admin"];
             			    $postDate = $row["postDate"];

				$query2 = "SELECT * FROM `admin` WhERE id='$adminPost'";

				$result2 = mysqli_query($connection, $query2);

        		if(mysqli_num_rows($result2) > 0){         			

        		while( $row2 = mysqli_fetch_assoc($result2) ){
        				$adminName = $row2['name'];
        		}} else { $adminName = 'ADMIN';}	

         			echo '<div class="col-md-3 col-sm-6 bottommargin">
							<div class="ipost clearfix">';

					if($status=='image'){			
							echo'<div heigth="150px" width="150px">
									<a href="blog.php?id='.$postId.'"><img class="image_fade" src="gotoep/images/blog/'.$post.'" alt="Image"></a>
								</div>';
					}else{
						echo'<div>
								<a href="blog.php?id='.$postId.'"><iframe width="150px" height="150px" src="https://www.youtube.com/embed/'.$post.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>';
					}			
								echo '<div class="entry-title">
									<h3><a href="blog.php?id='.$postId.'">.'.$title.' </a></h3>
								</div>
								
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> '.$postDate.'</li>
									<li><i class="icon-user"></i>'.$adminName.'</li>
								</ul>
							
								<div class="entry-content">
									<p>' .$content .'</p>
								</div>
								</div>
								</div>';
         			}
         			echo '</div></div>';
         		}else{
         			echo '<div class="section notopmargin notopborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>Posts are not available Yet</h3>
							</div>
						</div>
					</div>';
         		}			
			?>								
					</div>
				
		</section>

<?php include("footer.php"); ?>