<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>views</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    /*width: 100%;*/
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
a.add {
    background-color: #4CAF50;
    color: white;
    padding: 11px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
.action {
    font-size: 12px;
    padding: 5px 16px;
    text-decoration: none;
    background: #0b6cb1;
    color: #fff;
    border-radius: 3px;
}
.action:nth-child(2) {
    background: red;
}
.makes {
    width: 100%;
    display: inline-block;
}
.left {
    float: left;
}
.right {
    margin-left: 25px;
    display: inline-block;
    margin-bottom: 14px;
}
</style>
<body>
<div class="content">
                <div class="links">
                    <h2>Simple Customer Management Module Laravel</h2>
                    <div class="customer-form">
                    
                     
                        <table>
                        <div class="makes">
                    	<div class="left">
                    	<span style="font-size: 20px;float:  left;font-weight:  bold;width:  100%;">View Customer Records</span><br>
                      @if(session('success'))
    <h1 style="color:green; font-size: 15px;">{{session('success')}}</h1>
@endif					</div>	
						<div class="right">	
						<a href="{{ URL::to('create') }}" class="add">Add New</a>  
                        </div>
                        </div>
                        
                          <tr>
                            <th>Customer ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Company Name</th>
                            <th>Actions</th>
                          </tr>

                          @foreach($data as $info)
                          <tr>
                            <td>{{ $info->c_id }}</td>
                            <td>{{ $info->fname }}</td>
                            <td>{{ $info->lname }}</td>
                            <td>{{ $info->dob }}</td>
                            <td>{{ $info->gender }}</td>
                            <td>{{ $info->phone }}</td>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->company }}</td>
                            <td><a href="{{ URL::to('edit') }}/{{$info->c_id}}" class="action">Edit</a> <a href="{{ URL::to('delete') }}/{{$info->c_id}}" class="action">Delete</a>

                            </td>
                          </tr>
                          @endforeach
                        </table>
                        
                        
                    </div>

                <tbody>



                </div>
            </div>
</body>
</html>

