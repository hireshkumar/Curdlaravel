<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Student Dashboard  <?php echo e(Session::get('uid')); ?></h2>
                </div>
                </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="<?php echo e(route('registerform')); ?>">Create Student</a>
                <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>">Logout</a>
                <a class="btn btn-primary" href="<?php echo e(route('import')); ?>">Import Students</a>
                <a class="btn btn-success" href="<?php echo e(route('export.excel')); ?>">Export Students</a>
            </div>
        </div>
    </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <!-- <th>Student Password</th> -->
                    <th>Student Number</th>
                    <th>Student Gender</th>
                    <th>Student City</th>
                    <th>Student state</th>
                    <th>Student Profile_photo</th>
                    <th width="280px">Action</th>
                    <th>Student Status</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <!-- <td><?php echo e($student->password); ?></td> -->
                        <td><?php echo e($student->number); ?></td>
                        <td><?php echo e($student->gender); ?></td>
                        <td><?php echo e($student->ct_name); ?></td>
                        <td><?php echo e($student->st_name); ?></td>
                        <td>
                            <?php if(!empty($student->profile_photo)): ?>
                                <img src="images/<?php echo e($student->profile_photo); ?>" class="rounded-circle"
                                width="50" height="50" />
                            <?php else: ?>    
                                <img src="images/dummy-user.png" class="rounded-circle"
                                width="50" height="50" />
                            <?php endif; ?>
                        

                        </td>
                        <td>
                            <a href="<?php echo e(url('edit_record',$student->id)); ?>" class="btn btn-success mx-2"><i class="fa fa-edit"></i> </a>
                            <a href="<?php echo e(url('delete_record', $student->id)); ?>" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>  
                            
                            <form action="<?php echo e(url('records'.$student->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <!-- <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
                                </button> -->
                             
                            </form>    
                            

                        </td>

                        <td>
                        <?php if($student->status == 1): ?>
                        <a href="<?php echo e(route('toggle_status', $student->id)); ?>" class="btn btn-success"onclick="return confirm('Are you sure?')">Active</a>
                        <?php else: ?>
                        <a href="<?php echo e(route('toggle_status', $student->id)); ?>" class="btn btn-danger"onclick="return confirm('Are you sure?')">Deactive</a>
                        <?php endif; ?> 
                        </td>

                    </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\new_laravel\resources\views/records.blade.php ENDPATH**/ ?>