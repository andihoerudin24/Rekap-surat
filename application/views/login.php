<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Surma Revisi</title>
<link rel="stylesheet" href="assets/style.default.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="loginpage">
<div class="loginpanel">
    <div class="loginpanelinner">
        <?php echo form_open('Auth/Login')  ?>
             <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username"  placeholder="Username" />
            </div>
        <br>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" placeholder="Password" />
            </div>
        <br>
            <div class="inputwrapper animate3 bounceIn">
                <button type="submit" name="submit">Login</button>
            </div>
        <?php echo form_close();?>
    </div><!--loginpanelinner-->
</div>
<!--loginpanel-->

<div class="loginfooter">
    <p>&copy; Tugas Ade</p>
</div>
</body>
</html>
