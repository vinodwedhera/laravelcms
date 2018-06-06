<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>views</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    //width: 100%;
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
    border: 1px solid;
    margin: 14px 0;
    display: inline-block;
    padding: 7px 31px;
    text-decoration: none;
}
.action {
    border: 1px solid;
    font-size: 12px;
    padding: 4px 16px;
    text-decoration: none;
}
</style>
<body>
<div class="content">
                <div class="links">
                    <h2>Simple Customer Management Module Laravel</h2>
                    <div class="customer-form">
                      <span style="font-size: 20px;float:  left;font-weight:  bold;width:  100%;margin-bottom: 10px;">View Customer Records</span><br>
<?php if(session('success')): ?>
                      <h1 style="color:green; font-size: 15px;"><?php echo e(session('success')); ?></h1>
                      <?php endif; ?>
                        <table>
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

                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($info->c_id); ?></td>
                            <td><?php echo e($info->fname); ?></td>
                            <td><?php echo e($info->lname); ?></td>
                            <td><?php echo e($info->dob); ?></td>
                            <td><?php echo e($info->gender); ?></td>
                            <td><?php echo e($info->phone); ?></td>
                            <td><?php echo e($info->email); ?></td>
                            <td><?php echo e($info->company); ?></td>
                            <td><a href="<?php echo e(URL::to('edit')); ?>/<?php echo e($info->c_id); ?>" class="action">Edit</a> <a href="<?php echo e(URL::to('delete')); ?>/<?php echo e($info->c_id); ?>" class="action">Delete</a>

                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        
                      <a href="<?php echo e(URL::to('create')); ?>" class="add">Add New</a>    
                    </div>

                <tbody>



                </div>
            </div>
</body>
</html>

