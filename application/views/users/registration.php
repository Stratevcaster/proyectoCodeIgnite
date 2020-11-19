<div class="container">
    <h2>Crea una cuenta</h2>
	

    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                
            </div>
            <div class="form-group">
                <input type="text" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
               
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" required>
              
            </div>
            <div class="form-group">
                <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" required>
                
            </div>
          
            <div class="form-group">
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                
            </div>
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
        </form>
        <p>Ya tienes una cuenta? <a href="<?php echo base_url('users/login'); ?>">Accede a tu cuenta</a></p>
    </div>
</div>