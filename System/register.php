<?php 
include 'includes/header.php'; 
?>


		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Home</a></li>
						<li><span>Register</span></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
								
                                <?php
							
								if (isset($_GET['p'])) {
								$position = $_GET['p'];
                                if ($position == "Employee") {
                                include 'constants/draw-employee.php';
								}else{
                               
								}	

                                if ($position == "Employer") {
                                include 'constants/draw-employer.php';
								}else{

								}								
								}else{
		                        
								}
								
								?>

									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>


<script type="text/javascript">
function val(){
if(frm.password.value == "")
{
	alert("Enter the Password.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm.password.focus();
	return false;
}

if((frm.password.value).length > 20)
{
	alert("Password should be maximum 20 characters.");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}
</script>


<?php
include 'includes/footer.php'; 
?>