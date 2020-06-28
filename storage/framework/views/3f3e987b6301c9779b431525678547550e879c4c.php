<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TeachersTurf</title>
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
  



</head>
<body>
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
  <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor2' );
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor3' );
</script>

</body>
</html><?php /**PATH C:\Users\Ceayama Software\TeachersTurf\resources\views/layouts/app.blade.php ENDPATH**/ ?>