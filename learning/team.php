<?php include("header.php"); ?>


		<section id="page-title">

			<div class="container clearfix">
				<h1>E-Learning Team</h1>
			</div>

		</section>

	
		<div id="page-menu">

			<div id="page-menu-wrap">


			</div>

		</div>

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					
					<div class="row">

						<div class="col-md-6 bottommargin">
<?php 
        $query = "SELECT * FROM `team` WHERE name = 'Kazi Tanim Shadid'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
        
         while( $row = mysqli_fetch_assoc($result) ){

         		$ChairmanPic = $row['image'];

         }}

?>

							<div class="team team-list clearfix">
								
							</div>
						</div>

<?php 
        $query = "SELECT * FROM `team` WHERE name = 'Muhammad Saim'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
        
         while( $row = mysqli_fetch_assoc($result) ){

         		$ceoPic = $row['image'];

         }}

?>

						<div class="col-md-6 bottommargin">

					</div>
					<div class="clear"></div>

					<div class="fancy-title title-border title-center">
						<h3>Team Members</h3>
					</div>

					<div id="oc-team" class="owl-carousel team-carousel bottommargin carousel-widget" data-margin="30" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-lg="4">

<?php 
        $query = "SELECT * FROM `team` WHERE name != 'Muhammad Saim' AND name != 'Chaudhry Faheem Irfan' ";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
        
                        //We have data 
                        //output the data
         while( $row = mysqli_fetch_assoc($result) ){

         		$memberPic = $row['image'];
         		$memberName = $row['name'];
         		$memberQ = $row['qualification'];


         		echo '<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="gotoep/images/team/'.$memberPic.'" alt="Exceptional">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>'.$memberName.'</h4><span>'.$memberQ.'</span></div>
								</div>
							</div>
						</div>';

         }}

?>
	

					</div>
					
					<div class="clear"></div>

				</div>
			</div>
		
	</section><!-- #content end -->

<?php include("footer.php"); ?>
