<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convocatorias</title>
</head>
<body>
	
    <ul>

        <?php $__currentLoopData = $convocatorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convocatoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
	            <a href='/convocatorias/<?php echo e($convocatoria->id); ?>'>
	            <?php echo e($convocatoria->titulo); ?>

	            
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </ul>
</body>
</html>