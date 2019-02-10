<?php
$servername = "localhost";
$username = "Gurmeet";
$password = "WINDOWSTEN";
$dbname = "studentdb";
$name="";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$roll = $_REQUEST['q'];
$sql = "SELECT Name FROM cse WHERE Reg_No='$roll'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['Name'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="MainStyle.css" rel="stylesheet" type="text/css"/>
        <title>CSE Department</title>
    </head>
    <body>
		<div class="jumbotron" style="margin:0;background:#FFFF33;color:black;">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<h1>CSE Department</h1>
						<p><h4>Welcome, <?php echo $name; ?></h4></p>
					</div>
					<div class="col-md-2">
					<img src="logo.jpg" alt="logo" height="120" width="150" style="background:white;"/>
					</div>
				</div>
			</div>
		 </div>

		 <script type="text/javascript">
			$(document).ready(function() {
				$('.carousel').carousel({
				interval: 3000
				})
				$('#time').change(function(){
					var value = $(this).val();
					if(value=="Select Year"){
						$('#ima').hide();
					}
					else{
						$('#ima').attr("src",value+"T.jpg").show();
					}					
				})
				$('#cur').change(function(){
					var value = $(this).val();
					if(value=="Select Semester/Elective"){
						$('#im').hide();
					}
					else{
						$('#im').attr("src",value+".png").show();
					}					
				})
			});
		</script>

		 <div class="container col-lg-12  col-md-12 col-sm-12 col-xs-12" style="padding:0;margin:0;">

		<!--Carousel Wrapper-->
		<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" style="width:100%;padding:0;">
			<!--Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="view">
						<img class="d-block w-100" src="h.jpg" alt="First slide" height="600">
					</div>

				</div>
				<div class="carousel-item">

					<div class="view">
						<img class="d-block w-100" height="600" src="p.jpg" alt="Second slide">
					</div>

				</div>
				<div class="carousel-item">

					<div class="view">
						<img class="d-block w-100" height="600" src="r.jpg" alt="Third slide">
					</div>

				</div>
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!--/.Controls-->
		</div>
		<!--/.Carousel Wrapper-->

		</div>



		<div class="container register col-lg-12  col-md-12 col-sm-12 col-xs-12" style="padding:0;margin:0 0 10px 0;border-radius:0;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h5>Faculty</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h5>Curriculum</h5></a>
                        </li>
												<li class="nav-item">
                            <a class="nav-link" id="TT-tab" data-toggle="tab" href="#TT" role="tab" aria-controls="TT" aria-selected="false"><h5>Time Table</h5></a>
                        </li>
												<li class="nav-item">
                            <a class="nav-link" id="pcon-tab" data-toggle="tab" href="#pcon" role="tab" aria-controls="pcon" aria-selected="false"><h5>PCON</h5></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" style="margin:5% 0 5% 5%;padding:0;" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
								<div class="col-md-3">
									<span style="color:white"><h2>Profile Image</h2></span><br><hr style="background:yellow;margin-top:0;"><br>
									<img src="hod.png" alt="sir" height="95" width="120" style="background:white;"/><br><br><hr style="background:white;margin-top:0;">
									<img src="rr.png" alt="sir" height="95" width="120" style="background:white;"/><br><br><hr style="background:white;margin-top:0;">
									<img src="sanj.png" alt="sir" height="100" width="120" style="background:white;"/><br><br><br><hr style="background:white;margin-top:0;">
									<img src="dilip.png" alt="sir" height="95" width="120" style="background:white;"/><br><br><br><hr style="background:white;margin-top:0;">
									<img src="kk.png" alt="sir" height="95" width="120" style="background:white;"/><br><br><br><hr style="background:white;margin-top:0;">
									<img src="dutta.png" alt="sir" height="95" width="120" style="background:white;"/><br><br><br><hr style="background:white;margin-top:0;">
									<img src="vinay.png" alt="sir" height="100" width="120" style="background:white;"/><br><br><br><br><hr style="background:yellow;margin-top:0;"><br>
								</div>	
								<div class="col-md-3">
									<span style="color:white"><h2>Details</h2></span><br><hr style="background:yellow;margin-top:0;"><br>
									<span class="error">Dr. Binod Kumar Singh</span><br>
									<span class="error">Associate Professor & Head of Department</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Software Engineering, DBMS, OS, Image processing.</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Mr. Rajiv Ranjan Suman</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Software Engineering.</span><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Mr. Sanjay Kumar</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Network Security,Mobile Computing, Parallel & Distributed Systems, Artificial Intelligence.</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Dr. Dilip Kumar</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Cloud Computing, Optimizarion, Heuristic Techniques and Network simulation.</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Dr. Koushlendra Kumar Singh</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Image processing, Image reconstrucyion, Remote Sensing, Integral Transform and Pattern Classification.</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Dr. Subrata Dutta</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Wireless sensor network, Adhoc network and Mobile computing.</span><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">Dr. Vinay Kumar</span><br>
									<span class="error">Associate Professor</span><br>
									<span class="error"><strong style="color:white">Research Interests:</strong> Software Engineering, Mathematical Modelling, IOT, Distributed Computing and Dependability analysis of Computer Based Systems.</span><br><br><hr style="background:yellow;margin-top:0;"><br>
								</div>
								<div class="col-md-3">
									<span style="color:white"><h2>Contact Details</h2></span><br><hr style="background:yellow;margin-top:0;"><br>
									<span class="error"><strong style="color:white">Residential Address:</strong> Dept. of CSE, NIT Jamshedpur</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 0657-237-4097/99</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> bksingh.cse@nitjsr.ac.in</span><br>	<br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> D-24, NIT Campus, Adityapur-2, Jamshedpur - 831014</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 0657-237-4101</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> rrsuman.cse@nitjsr.ac.in</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> QR. No. C-5, NIT Campus,Adityapur, P.O./ P.S. - RIT, District - Saraikella Kharsawn</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 0657-237-4102</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> sanjay.cse@nitjsr.ac.in</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> </span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 0657 2374103</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> dilip.cse@nitjsr.ac.in</span><br><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> Q.N.- 57,NIT Campus, Adityapur-2, Jamshedpur, Jharkhand, PIN: 831014</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 9479845831</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> koushlendra.cse@nitjsr.ac.in</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> Department of CSE</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 9477501086</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> sdutta.cse@nitjsr.ac.in</span><br><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error"><strong style="color:white">Residential Address:</strong> CSE Dept.</span><br>
									<span class="error"><strong style="color:white">Call at:</strong> 9454690527</span><br>
									<span class="error"><strong style="color:white">e-mail at:</strong> vkumar.cse@nitjsr.ac.in</span><br><br><br><br><br><hr style="background:yellow;margin-top:0;"><br>												
								</div>
								<div class="col-md-3">
									<span style="color:white"><h2>Qualifications</h2></span><br><hr style="background:yellow;margin-top:0;"><br>
									<span class="error">B.E. (CSE), BIT SINDRI, </span><br>
									<span class="error">M.Tech. (CSE), IIT Roorkee, </span><br>
									<span class="error">Ph.D. - IIT Roorkee.</span><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.E. (CSE), BIT SINDRI, </span><br>
									<span class="error">M.Tech. (CSE), IIT KGP, </span><br>
									<span class="error">Ph.D. - Pursuing.</span><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.E. (CSE) </span><br>
									<span class="error">M.Tech. (CSE) </span><br>
									<span class="error">Ph.D. - Pursuing.</span><br><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.E. (CSE) </span><br>
									<span class="error">M.Tech. (CSE) </span><br>
									<span class="error">Ph.D. - Pursuing.</span><br><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.Tech, BCE BHAGALPUR  </span><br>
									<span class="error">M.Tech, IIITDM JABALPUR  </span><br>
									<span class="error">PhD, IIITDM JABALPUR.</span><br><br><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.Tech. (CSE), B.P.Poddar Institute of Management And Technology </span><br>
									<span class="error">M.Tech. (CSE), Jadavpur University </span><br>
									<span class="error">Ph.D. , Jadavpur University.</span><br>
									<span class="error">Post Doc, University of West of Scotland, UK</span><br><br><hr style="background:white;margin-top:0;">
									<span class="error">B.E. (CSE) </span><br>
									<span class="error">M.Tech. (CSE), NIT Durgapur </span><br>
									<span class="error">Ph.D, IIT BHU.</span><br><br><br><br><br><hr style="background:yellow;margin-top:0;"><br>
								</div>	                         								
                            </div>
                            
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
							<div class="col-md-12">
								<form>
									<div class="form-group" style="position:relative;top:-50px;">
									<label class="error" for="cur">Curriculum:</label>
									<select class="form-control" id="cur">
										<option>Select Semester/Elective</option>
										<option>1st</option>
										<option>2nd</option>
										<option>3rd</option>
										<option>4th</option>
										<option>5th</option>
										<option>6th</option>
										<option>7th</option>
										<option>8th</option>
										<option>Elective_1</option>
										<option>Elective_2</option>
										<option>Elective_3</option>
										<option>Elective_4</option>
										<option>Elective_free</option>
									</select>
									</div>
								</form>
								<img width="800" height="500"  id="im" src="" style="display:none;position:relative;left:-130px;">
                                </div>	
                              </div>
                         
                        </div>

							<div class="tab-pane fade show text-align form-new" id="TT" role="tabpanel" aria-labelledby="TT-tab">
                            <div class="row">
                                <div class="col-md-12">
								<form>
									<div class="form-group" style="position:relative;top:-50px;">
									<label class="error" for="time">Time Table:</label>
									<select class="form-control" id="time">
										<option>Select Year</option>
										<option>1st</option>
										<option>2nd</option>
										<option>3rd</option>
										<option>4th</option>
									</select>
									</div>
								</form>
								<img width="1000" height="600"  id="ima" src="" style="display:none;position:relative;left:-200px;">
                                </div>	
                                							
                            </div>
                            
                        </div>

							<div class="tab-pane fade show text-align form-new" id="pcon" role="tabpanel" aria-labelledby="pcon-tab">
                            <div class="row">
							<div class="col-md-11">
                                    <span class="error" style="position:relative;left:-100px;top:-50px;font-size:120%">PCON, Programming club of NIT Jamshedpur is a group of programming enthusiasts and developers from various departments of Institute, who aim at improving the programming culture of the institute. The club was officiated on 18 April 2018. The club was founded by a group of like-minded people of CSE 2k13 batch in the quest to explore CSE principles beyond the scope of classroom syllabus.</span>
									<br><br>
									<span class="error" style="position:relative;left:-100px;top:-50px;font-size:120%">
										The Professor-in-charge of the activities of the Club is Dr. Dilip Kumar.
									</span>
                                </div>	
								<div class="col-md-1">
									<img src="pcon.jpg" alt="user" height="150" width="150" style="position:absolute;left:120px;top:-15px;"/>
                                </div>    
                            </div>
                            
                        </div>
						

                    </div>
					
                </div>
            </div>
        </div>

    </body>
</html>

	</body>
</html>