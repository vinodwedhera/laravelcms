<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit</title>

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
.view {
    background-color: #4CAF50;
    color: white;
    padding: 11px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
.makes {
    width: 100%;
    display: inline-block;
}
.left {
    float: left;
}
.right {
    float: right;
}
</style>
<body>
<div class="content">
                <div class="links">
                    <h2>Simple Customer Management Module Laravel</h2>
                    <div class="customer-form">
                    <div class="makes">
                    	<div class="left">
                    	<span style="font-size: 20px;float:  left;font-weight:  bold;width:  100%;margin-bottom: 10px;">
                        Update Record Customer ID -{{$edit->c_id}}</span>
                      	</div>	
						<div class="right">	
						<a href="{{ URL::to('views') }}" class="view">View Records</a>
                        </div>
                        </div>
                        <form action="../update" method="post">
                         <input type="hidden" name="c_id" value="{{$edit->c_id}}">
                         <br>
                        <label for="first_name">First Name</label>
                        <input type="text" name="fname" id="fname" value="{{$edit->fname}}">
                        <br>
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lname" id="lname" value="{{$edit->lname}}">
                        <br>
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="dob" id="datepicker" value="{{$edit->dob}}">
                        <br>
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" value="male" {{ $edit->gender == 'male' ? 'checked' : '' }}> Male<br>
                         <input type="radio" name="gender" value="female"{{ $edit->gender == 'female' ? 'checked' : '' }}> Female<br>
                        <br>
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" onkeypress="return isNumber(event)" value="{{$edit->phone}}">
                        <br>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" value="{{$edit->email}}">
                        <br>
                        <label for="company">Company Name</label>
                        <input type="text" name="company" id="company" value="{{$edit->company}}">
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="update" id="submit" value="Update">
                        </form>

                    </div>

                <tbody>



                </div>
            </div>
</body>
</html>


