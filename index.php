<?php
$rerr="";$perr="";
$servername = "localhost";
$username = "Gurmeet";
$password = "WINDOWSTEN";
$dbname = "studentdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST["LGform1"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $roll = $_POST["rno"];
    $pwd = $_POST["user_pwd"];
    $sql = "SELECT Password FROM cse WHERE Reg_No='$roll'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$pass = $row["Password"];
		if(strcasecmp($pass,$pwd)==0){
			header('Location: http://localhost/DBMS/user.php?q='.$roll); }
		else{
			$perr = "*Invalid Password";
			//header('Location: http://localhost/scripts/index.php');
		    }
		}
	else{
		$rerr = "*Invalid Roll Number";/*header('Location: http://localhost/scripts/index.html');die;*/
	}

}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="MainStyle.css" rel="stylesheet" type="text/css"/>
        <title>CSE, NIT Jamshedpur</title>
    </head>
    <body>
		
		
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<h1>CSE Department of NIT Jamshedpur</h1>
						<p><h4>Login to continue.</h4></p>
					</div>
					<div class="col-md-2">
						<img src="logo.jpg" alt="logo" height="150" width="150" style="background:white;"/>
					</div>
				</div>
			</div>
		 </div>
		 
        <script type="text/javascript">
            jQuery.noConflict();
		 	jQuery(document).ready(function(){
			
			jQuery("#profile-tab").click(function(){
                jQuery('#text').hide();
            })
            
			jQuery("#home-tab").click(function(){
                jQuery('#text').show();
            })

            jQuery(".btnForgetPwd").click(function(){
                var roll = prompt("Enter your roll number, Password will be sent to your email");
				if(roll.length > 0){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
				  if (this.readyState == 4 && this.status == 200) {
					var msg = this.responseText;
					alert(msg);
				  }
				};
				xmlhttp.open("GET", "http://localhost/JEE/sendmail.php?q=" + roll, true);
				xmlhttp.send();
				}
				else{return;}
            })

            })
        </script>
		
		
        <div class="container register">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h5>About CSE</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h5>Candidate Login</h5></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new"  id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                        <span class="error" style="font-size:130%;position:relative;top:-20px;left:-250px;">The Department of Computer Science and Engineering at the National Institute of Technology Jamshedpur, was formed in 1992. Since its inception, the department has always been recognized all over the country for its excellence. The Department has consistently produced quality professionals in the field of Computer Science & Engineering and strived for excellence in research and development.</span>
                                    
                                </div>	
                                							
                            </div>
                            
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                    
                                <div class="col-md-11" >
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group">											
                                            <span class="error"><?php echo "$rerr";?></span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!--<span class="input-group-text" style="">$</span> -->
                                                    <i class="glyphicon glyphicon-plus" style="background:white;"></i>
                                                </div>
                                                <input type="text" name="rno" class="form-control" placeholder="Your Registration No.*" required=""/>
                                            </div>	                                            
                                        </div>
                                        <div class="form-group" >
											<span class="error"><?php echo "$perr";?></span>	
                                            <input type="password" name="user_pwd" class="form-control" placeholder="Your Password *" required  />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="LGform1" class="btnContactSubmit" value="Login" />   
                                            <span role="button"  class="btnForgetPwd" >Forgot Password?</span>                                        										
                                        </div>
                                        <div class="form-group">
                                            <a href="http://localhost/DBMS/register.php" class="btnForgetPwd" >New User? Register...</a>
                                        </div>

                                        
                                    </form>
                                </div>
                                
                                <div class="col-md-1">
                                    <img src="admin.png" alt="user" height="150" width="150" style="position:absolute;left:120px;"/>
                                </div>
                            </div>
                        </div>
						

                    </div>
					
                </div>
            </div>
        </div>

        <div id="text" class="container" style="position:relative;left:800px;top:-370px">
            <div class="row">
                <div class="col-md-6">
                <pre class="error" style="font-size: 120%;overflow-x:hidden;position:relative;top:-20px;left:-250px;"><span style="color:white">Vision: </span>
Producing high quality industry ready Computer 
engineers to cater to the needs of the society.          
<span style="color:white">Mission: </span>
To train young minds and to equip them with 
the best possible technical knowledge to meet the 
current and future demands of the industry & 
research. To create infrastructure, motivation 
and culture for the state of the art research work 
in Computer Science & Information Technology.</pre>
                </div>
            </div>
        </div>
		
    </body>
</html>