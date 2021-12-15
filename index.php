
<?php
include_once('marks.php');
?>
<?php
include_once('fixed.php');
?>
<html>
<head>
<link rel="stylesheet"  href="css/bml1.css">
<link rel="stylesheet"  href="css/circle.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Pompiere&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
<body>
<div class="container-fluid" >
	<div class="row">
		<div class="col-sm-12">
			<div class="dupnav">
				<form method="POST" action="signout.php">
					<button name="signout" class="dupnav_signout" type="submit" >SIGN OUT</button>
				</form>
				
			</div>
		</div>
	</div>
</div>


<div class="container-fluid secondcontainer" >
	<div class="row">


		<div class="col-sm-3" >
			<div style="background-color:#FDF4F4;border-radius: 5%;padding:5px;padding-top: 20px;padding-bottom: 20px;">
			<div class="profilecard">
				<div class="profilecardpic">
					<img src="images/avatar.png" style="max-width: 80%; margin-left:10px; ">
				</div>
				<br>
				<div class="profilecardtopic" > 
				<h3 class="container2hedings"><?php echo $_SESSION['name']; ?></h3>
				<p class="container2ptag">Attendence :<?php echo $_SESSION['attendence']; ?></p>
				<p class="container2ptag"><?php echo $_SESSION['section']; ?></p>
				<p class="container2ptag">ID : <?php echo $_SESSION['id']; ?></p>
				<p class="container2ptag">CGPA : <?php echo $_SESSION['cgpa']; ?></p>
				</div>
			</div>
			<div class="quickupdates" >
				<div class="quickupdatespic">
				<h3 class="container2hedings">Quick</h3>
				<h3 class="container2hedings">Updates</h3>
				</div>
				<div class="quickupdatestopic">
				<p class="container2ptag">Quiz on SUbject X on 5th</p>
				<p class="container2ptag">Next class : DAA(timings)</p>
				</div>	
				</div>
		</div>
		</div>



		<div class="col-sm-7" style="" >
		
 			<div class="aspectcards">
 				<a href="#coursecard">
		 		<div class="commoncard courses" id="courses">
		 			<div class="cardfills">
						<h3 class="container2hedings">Courses</h3>		 				
		 			</div>
		 		</div></a>
		 		<a href="#attedencecard">
		 		<div class="commoncard attendence"  id="attendence" >
		 			<div class="cardfills">
						<h3 class="container2hedings">Attendance</h3>	

		 			</div>
		 		</div>
		 	</a>
		 		<div class="commoncard socialwall">
		 			<div class="cardfills">
						<h3 class="container2hedings">Social Wall</h3>	

		 			</div>
		 		</div>
		 		<div class="commoncard notification">
		 			<div class="cardfills">
						<h3 class="container2hedings">Notification</h3>	

		 			</div>
		 		</div>		
		 		<div class="commoncard AccessCardReports" >
		 			<div class="cardfills">
						<h3 class="container2hedings">Access Card Reports</h3>	

		 			</div>
		 		</div>
		 		<div class="commoncard Leaderboards">
		 			<div class="cardfills">
						<h3 class="container2hedings">Leaderboards</h3>

		 			</div>
		 		</div>
	 	 	</div>
		</div>



		<div class="col-sm-2" style="margin-left: -10px;">
			<div style="background-color: #FDF4F4;padding:0 8px;padding-bottom:80px;padding-top: 30px;border-radius: 8px;">
			<div class="reports-card">
				<h3 class="container2hedings">Reports</h3>
				<div class="reports-card-topic">
					<a class="reports-card-topic-links container2ptag">Attendance Report</a>
					<a class="reports-card-topic-links container2ptag">Leader board Report</a>

					<a class="reports-card-topic-links container2ptag">Student Access Card Report</a>

					<a class="reports-card-topic-links container2ptag">Student Acount Report</a>

					<a class="reports-card-topic-links container2ptag">Batch wise Report</a>

				</div>
			</div>
			</div>
		</div>
	</div>
</div>





<div class="container-fluid container3" id="coursecard">
	<div class="row">
		<div class="col-sm-3"  >
		<img src="images/bml.jpg" class="bmllogo">
		</div>



		<div class="col-sm-9">
			<div class="coursestuff">
				<div class="coursestuff-fill">
					
					<div class="courses-of-sem">
						<h3 class="container2hedings" style="margin-bottom: 60px;color:white;padding-top: 30px;">Courses</h3>
						<a style="display: block;" class="container2ptag" id="sdaa">DAA</a><br>	
						<a style="display: block;" class="container2ptag" id="scoa">COA</a><br>
						<a style="display: block;" class="container2ptag" id="soops">OOPS</a><br>
						<a style="display: block;" class="container2ptag" id="sdbms">DBMS</a><br>	
						<a style="display: block;" class="container2ptag" id="semsa">EMSA</a><br>	
						<a style="display: block;" class="container2ptag" id="scn">CN</a><br>	
						<a style="display: block;" class="container2ptag" id="sels">ELS</a><br>
					</div>

					<div id="daa">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> DAA</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $mdaa; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $mdaa; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($mdaa*$oidaa)/100); ?> </p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oidaa*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oidaa; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 54%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 21%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 99%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>








				<div id="coa" >
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> COA</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $mcoa; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $mcoa; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($mcoa*$oicoa)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oicoa*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oicoa; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 97%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 4%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 63%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 9%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>








				<div id="oops">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> OOPS</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $moops; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $moops; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($moops*$oioops)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oioops*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oioops; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 79%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 83%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 84%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 6%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 92%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>






				<div id="dbms">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> DBMS</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $mdbms; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $mdbms; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($mdbms*$oidbms)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oidbms*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oidbms; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 53%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 21%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 84%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>






				<div id="emsa">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> EMSA</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $memsa; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $memsa; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($memsa*$oidaa)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oiemsa*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oiemsa; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 83%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 92%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 82%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>






				<div id="cn">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> CN</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $mcn; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $mcn; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($mcn*$oicn)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oicn*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oicn; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 84%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 91%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 4%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 84%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>





				<div id="els">
					<div class="selected-subject">
						<div style="">
						<h3 class="container2hedings" style="text-align: center;"> ELS</h3>
						<div style="" class="selected-subject-bars">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $mels; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $mels; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
							     <p style="text-align: center;" class="container2ptag">YOUR SCORE : <?php echo floor(($mels*$oiels)/100); ?></p>
							    </div>

								<div  class="selected-subject-bars">
								<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo floor(($oiels*100)/60); ?> big nanda2 bark"  style="font-size: 200px;">
							    <span><?php echo $oiels; ?>/60</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							        </div>							        
							    </div>  
						    </div>
						    <p style="text-align: center;" class="container2ptag">MAX FACTOR</p>
							</div>
						</div>
							
					</div>
					<div class="selected-subject-progressbar">
						<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-1</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 82%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>

  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Quiz-2</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 63%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Mid-sem</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 23%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


  					<div class="selected-subject-progressbar1">
						<span class="container2ptag" style="float:left;margin-right: 50px;">Project</span>
						<div class="progress bg-dark " style="height:8px;margin-top: 9px;">
  							<div class="progress-bar bg-warning" role="progressbar" style="width: 81%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  							<div class="progress-bar bg-danger" role="progressbar" style="width: 3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  						</div>
  					</div>


					</div>
					<div class="progressbar-indicators">
							
							<button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-warning" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">your marks</span>
							</button>



								
							 <button class="btn btn-transparent" type="button" disabled>
							  <span class="spinner-grow spinner-grow-lg bg-danger" role="status" aria-hidden="true"></span>
							  <span style="color: red;font-size: 22;font-weight: 500;">class average</span>
							</button>
					</div>
				</div>





				</div>
			</div>			
		</div>



	</div>
</div>










<div class="container-fluid container4" id="attedencecard">
	<div class="row">
		<div class="col-sm-3"  >
		<img src="images/bml.jpg" class="bmllogo">
		</div>



		<div class="col-sm-9 " >
			<div class="whole-attendence">
			<div class="whole-attendence-card">


			<div class="attence-1-subcard">
				<span class="container2hedings" style="text-align: center;">Attendance<span>
				<br><br>

				<div style="" class="">
							<div class="clearfix " style="margin-top:40px;">
							    <div class="c100 p<?php echo $_SESSION['attendence']; ?> big nanda bark" style="font-size: 200px;">
							    <span ><?php echo $_SESSION['attendence']; ?>%</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
						 <p style="text-align: center;" class="container2ptag">Your Attendace</p>
				</div>
				<div style="padding-top: 50px;text-align: justify;" class="container2ptag-attendence1">
				<p class="container2ptag-attendence" style="text-align: center;display: inline;">Criteria <span  style="font-weight: 550;">- 80%</span></p>
				<br>
				<p class="container2ptag-attendence" style="text-align: center;display: inline;">Overall Attendance <span  style="font-weight: 550;">- <?php echo $_SESSION['attendence']; ?>%</span></p>
				<br>
				<p class="container2ptag-attendence" style="text-align: center;display: inline;font-weight: 500;letter-spacing: 1px;">Attendance Stats:</p>
				<br>
				<p class="container2ptag-attendence" style="text-align: center;display: inline;">Classes Attended <span  style="font-weight: 550;">33</span></p>
				<br>
				<p class="container2ptag-attendence" style="text-align: center;display: inline;">Total Classes <span  style="font-weight: 550;">35</span></p>
				<br>
				</div>
				</div>

			


			<div class="attendence-of-subjects">


				  <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">D</span>esign and
                    Analysis of Algorithm</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($ncdaa*$_SESSION['adaa'])/100); ?>/<?php echo $ncdaa; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                    <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['adaa']; ?>  nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['adaa']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>





         <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">C</span>omputer Networks</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                            <?php echo floor(($nccn*$_SESSION['acn'])/100); ?>/<?php echo $nccn; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['acn']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['acn']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>



         <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">O</span>bject Oiented Programming</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($ncoops*$_SESSION['aoops'])/100); ?>/<?php echo $ncoops; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['aoops']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['aoops']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>




         <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">C</span>OA</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($nccoa*$_SESSION['acoa'])/100); ?>/<?php echo $nccoa; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['acoa']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['acoa']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>




         <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">D</span>BMS</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($ncdbms*$_SESSION['adbms'])/100); ?>/<?php echo $ncdbms; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['adbms']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['adbms']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>
 <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">E</span>LS</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($ncels*$_SESSION['aels'])/100); ?>/<?php echo $ncels; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['aels']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['aels']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>
         <div class="card sub5" style="">
            <div class="card-body">
                <p class="pl-1 pb-1 vl"><span class="pl-1" style="border-left: 3px solid #D9CB4E;">E</span>MSA</p>
                <div class="d-flex flex-row">
                    <div class="m1">
                        <div class="attendance">
                            Attendance
                        </div>
                        <div class="numerical_stats">
                             <?php echo floor(($ncemsa*$_SESSION['aemsa'])/100); ?>/<?php echo $ncemsa; ?>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="attendance ">
                            Status
                        </div>
                        <div class="numerical_stats">
                            Attend next 3 classes
                        </div>
                    </div>
                     <div class="clearfix " style="margin-left: 30px;margin-top: -40px;">
							    <div class="c100 p<?php echo $_SESSION['aemsa']; ?>   nanda bark" style="font-size: 80px;">
							    <span ><?php echo $_SESSION['aemsa']; ?> %</span>
							     	<div class="slice">
							            <div class="bar"></div>
							            <div class="fill"></div>
							     	</div>
							    </div>
								</div>
                </div>


            </div>
        </div>




			</div>
			

					
	


	</div>
</div>
</div>
</div>
</div>





<script>
	var a=document.getElementById("attendence");
a.onclick=function (){

document.getElementById("attedencecard").style.display="block";
document.getElementById("coursecard").style.display="none";
a.classList.add("rest");
c.classList.remove("rest");
}

var c=document.getElementById("courses");
c.onclick=function (){
document.getElementById("attedencecard").style.display="none";

document.getElementById("coursecard").style.display="block";
c.classList.add("rest");
a.classList.remove("rest");
}


</script>


<script >
function resize(){
	document.getElementById("sdaa").style.fontSize="1.3vw";
	document.getElementById("scoa").style.fontSize="1.3vw";
	document.getElementById("soops").style.fontSize="1.3vw";
	document.getElementById("sdbms").style.fontSize="1.3vw";
	document.getElementById("semsa").style.fontSize="1.3vw";
	document.getElementById("scn").style.fontSize="1.3vw";
	document.getElementById("sels").style.fontSize="1.3vw";
}

	document.getElementById("sdaa").onclick=function (){
		resize();
	document.getElementById("sdaa").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="block";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="none";
}
	document.getElementById("scoa").onclick=function (){
		resize();
	document.getElementById("scoa").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="block";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="none";
}
	document.getElementById("soops").onclick=function (){
		resize();
	document.getElementById("soops").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="block";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="none";
}
	document.getElementById("sdbms").onclick=function (){
		resize();
	document.getElementById("sdbms").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="block";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="none";
}
	document.getElementById("semsa").onclick=function (){
		resize();
	document.getElementById("semsa").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="block";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="none";
}
	document.getElementById("scn").onclick=function (){
		resize();
	document.getElementById("scn").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="block";
	document.getElementById("els").style.display="none";
}
	document.getElementById("sels").onclick=function (){
		resize();
	document.getElementById("sels").style.fontSize="1.8vw";
	document.getElementById("daa").style.display="none";
	document.getElementById("coa").style.display="none";
	document.getElementById("oops").style.display="none";
	document.getElementById("dbms").style.display="none";
	document.getElementById("emsa").style.display="none";
	document.getElementById("cn").style.display="none";
	document.getElementById("els").style.display="block";
}


</script>
</body>
</html>
