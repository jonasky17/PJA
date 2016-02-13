<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
 <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Princess Joanne <span>Apartelle</span></div>
    </div>
    <br>
    <div class="login1">
      <?php echo validation_errors(); ?>
      <?php echo form_open('verifylogin'); ?>
      <input type="text" placeholder="username" size="20" id="username" name="username"/>
      <input type="password" placeholder="password" size="20" id="passowrd" name="password"/>
      <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
      </form>
   </div>
 </body>
</html>