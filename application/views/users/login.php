<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 </head>
 <body>
<div class="container">
    <h2>Login to Your Account</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Login form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="EMAIL" required="">
                
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" required="">
                
            </div>
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>No tienes cuenta? <a href="<?php echo site_url('users/registration'); ?>">Registerate</a></p>
        
    </div>
</div>
</body>
</html>