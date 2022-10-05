<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Rigesteration Form</title>
    <link rel="stylesheet" type="text/css" href="style1./css"> 
	
</head>
<body style="background: # ">
    <style>
	.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
		
	
	<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h3>Register</h3>
                </div>
				<form method="post" action="Register.php">
				<?php include('errors.php'); ?>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name *" value="<?php echo $name?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="username *" value="<?php echo $username?>"/>
                            </div>
							
                        </div>
						<div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control"  name="email" placeholder="Email *" value="<?php echo $email?>"/>
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_1" placeholder="Your Password *" value="<?php echo $password?>"/>
                            </div>
							
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_2"  placeholder="Confirm Password *" value=""/>
                            </div>
                        </div>
                    </div>
                   <div>
					<button type="submit"class="btn" name="reg_user" >Register</button>
					</div>
						<placeholder="Confirm Passwordp>
			   Have Acount?<a href="login.php">Login</a>
				</p>
                </div>
            </div>
        </div>
		</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>