<br>
<br>
<br>
<a href="<?php echo e(route('admin.index')); ?>">Home</a><br>
<tbody>
        

        
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->password); ?></td>
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
        <?php /**PATH C:\xampp\htdocs\atp3LabExamFinal\resources\views/profile.blade.php ENDPATH**/ ?>