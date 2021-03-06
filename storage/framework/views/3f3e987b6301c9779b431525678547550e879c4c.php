<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TeachersTurf</title>
  
  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:200,400,500,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    


</head>
<body>
<nav class="navbar navbar-default">
        <div class="container">
           

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                       
                        
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/countries/index')); ?>"><i class="fa fa-btn fa-globe"></i>Country</a></li>
                            <li><a href="<?php echo e(url('/answers/index')); ?>"><i class="fa fa-btn fa-graduation-cap"></i>Answer</a></li>
                            <li>  <a href="<?php echo e(url('/cities/index')); ?>"><i class="fa fa-btn fa-globe"></i>City</a></li>
                            <li> <a href="<?php echo e(url('/levels/index')); ?>"><i class="fa fa-btn fa-level-up"></i>Level</a></li>
                            <li> <a href="<?php echo e(url('/questions/index')); ?>"><i class="fa fa-btn fa-question-circle"></i>Question</a></li>
                   <li> <a href="<?php echo e(url('/states/index')); ?>"><i class="fa fa-btn fa-globe"></i>State</a></li>
                   <li> <a href="<?php echo e(url('/subjects/index')); ?>"><i class="fa fa-btn fa-graduation-cap"></i>Subject</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </nav>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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