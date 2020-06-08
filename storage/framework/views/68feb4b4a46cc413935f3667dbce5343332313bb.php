<br>
<br>
<br>
<br>
<br>
<center>

<a href="<?php echo e(route('admin.index')); ?>">Home</a><br>
<br>
<br>
<br>
<table>
<form action="<?php echo e(route('admin.addUsers')); ?>" method="post">
    <?php echo csrf_field(); ?>
    Name: <input type="text" name="name" id=""><br><br>
    Email: <input type="text" name="email" id=""><br><br>
    Password: <input type="text" name="password" id=""><br><br>
    

    Confirm Password: <input type="text" name="password_confirmation" id=""><br><br>
    Address: <input type="text" name="address" id=""><br><br>
    <input type="submit" value="Add"><br>

    user type: <select name="type" id="">
        <option value="user">user</option>
        <option value="scout">Scout</option>
    </select><br><br>
</form><?php /**PATH C:\xampp\htdocs\atp3LabExamFinal\resources\views/admin/newUsers.blade.php ENDPATH**/ ?>