<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
  <script type="text/javascript">
      function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
  </script>
  <style>

a.view {
    border: 1px solid;
    margin: 14px 0;
    display: inline-block;
    padding: 7px 31px;
    text-decoration: none;
}
input[type=text],[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.customer-form {
    width: 50%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<body>
<div class="content">
                <div class="links">
                    <h2>Simple Customer Management Module Laravel</h2>
                    <div class="customer-form">
                    	<span style="font-size: 20px;float:  left;font-weight:  bold;width:  100%;margin-bottom: 10px;">Add New Customere</span><br>
                      <?php if(session('success')): ?>
    <h1 style="color:green; font-size: 15px;"><?php echo e(session('success')); ?></h1>
<?php endif; ?>
                        <form action="store" method="post">
                        <label for="first_name">Customer ID</label>
                         <input type="text" name="c_id" onkeypress="return isNumber(event)">
                         <br>
                        <label for="first_name">First Name</label>
                        <input type="text" name="fname" id="fname">
                        <br>
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lname" id="lname">
                        <br>
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="dob" id="datepicker">
                        <br>
                        <label for="gender">Gender</label>
                         <input type="radio" name="gender" value="male" checked> Male<br>
                         <input type="radio" name="gender" value="female"> Female<br>   
                        <br>
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" onkeypress="return isNumber(event)">
                        <br>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email">
                        <br>
                        <label for="company">Company Name</label>
                        <input type="text" name="company" id="company">
                        <br>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" name="submit" id="submit" value="Save">
                        </form>

                    </div>

                <tbody>
<a href="<?php echo e(URL::to('views')); ?>" class="view">View Records</a>


                </div>
            </div>
</body>
</html>


