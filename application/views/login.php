<!DOCTYPE html>
<html lang="en">
<html >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Digital Service Canvas</title>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>-->
  <link href="<?php echo base_url()?>assets/login/style.css" rel="stylesheet">

</head>
<?php echo form_open('auth/login','class="form-signin"'); ?>
<body>
  <div class="login">
  <center><img src="<?php echo base_url();?>assets/img/Telkomsel_Logo_copy.png">
		<h3>Digital Service Canvas</h3></center>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
	
</div>
  <?php echo form_close(); ?>
    <script  src="<?php echo base_url();?>assets/login/index.js"></script>

</body>
</html>
