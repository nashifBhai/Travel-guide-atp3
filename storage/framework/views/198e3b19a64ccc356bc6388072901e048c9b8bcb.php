<br><br><br><br><br><br><br>
<center>
    


<h1><?php echo e(Auth::user()->type); ?></h1>
 <br>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: center;
}
</style>
<font size="5">Insert</font>
 <a font size = "5" href="<?php echo e(route('admin.newUsers')); ?>">Insert Users</a><hr> </font>

 <font size="5">All users</font>

 <table class="table">
     <thead>
         <tr>
             <td>Name</td>
             <td>Email</td>
             <td>Address</td>
             <td>type</td>
             <td>profile</td>
             <td>Block</td>
         </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->address); ?></td>
                <td><?php echo e($user->type); ?></td>
                <td><a href="<?php echo e(route('profile',$user->id)); ?>">Got to profile</a></td>                
                <?php if($user->status=='active'): ?>
                    <td>-</td>
                <?php else: ?>
                    <td><a href="<?php echo e(route('admin.statusActive',$user->id)); ?>">Add</a></td>
                <?php endif; ?>
                <?php if($user->status=='block'): ?>
                    <td>-</td>                                    
                <?php else: ?>
                <td><a href="<?php echo e(route('admin.statusBlock',$user->id)); ?>">Block</a></td>                                    
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
 </table>
 <hr>

<font size="5">All Post</font>
<br>
    <table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>Status</td>
                <td>publish</td>
                <td>Edit</td>
                <td>Delete</td>
                
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $scouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($scout->place_name); ?></td>
                    <td><?php echo e($scout->place_route); ?></td>
                    <td><?php echo e($scout->place_descripttion); ?></td>
                    <td><?php echo e($scout->status); ?></td>
                    <td><a href="<?php echo e(route('admin.postPublishByadmin',$scout->id)); ?>">publish</a></td>
                    <td><a href="<?php echo e(route('admin.postEditByadmin',$scout->id)); ?>">edit</a></td>
                    <td><a href="<?php echo e(route('admin.postDeleteByadmin',$scout->id)); ?>">Delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <hr>

   Edit Requested post
<br>
    <table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>Change Accept</td>
                <td>Change Reject</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $scoutsRequest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($s->place_name); ?></td>
                    <td><?php echo e($s->place_route); ?></td>
                    <td><?php echo e($s->place_descripttion); ?></td>
                    <td><a href="<?php echo e(route('admin.postEditAcceptByadmin',$s->id)); ?>">Accept</a></td>
                    <td><a href="<?php echo e(route('admin.postEditRejectByadmin',$s->id)); ?>">Reject</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    </center><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">   
<center>
    
<a class="" href="<?php echo e(route('logout')); ?>"
    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
    <span class="fa fa-sign-out">logout</span>
</a>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>
</center>
    <hr><?php /**PATH C:\xampp\htdocs\atp3LabExamFinal\resources\views/admin/home.blade.php ENDPATH**/ ?>