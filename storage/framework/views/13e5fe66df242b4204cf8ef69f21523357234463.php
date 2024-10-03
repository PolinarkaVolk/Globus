

<?php $__env->startSection('content'); ?>
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" style="opacity: 0.85" src="<?php echo e($service->img_desc); ?>" aria-hidden="true" alt="wd" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="80%" fill="var(--bs-secondary-color)"></rect></img>
            <div class="container">
              <div class="carousel-caption text">
              <h1 class="display-2" style="font-weight: 500; color: #EAE2D8"><?php echo e($service->title); ?></h1>
                <!-- <p class="opacity-75">Некоторое репрезентативное содержимое-заполнитель для первого слайда карусели.</p> -->
                <!-- <p><a class="btn btn-lg btn-primary" href="#">Зарегистрироваться Сегодня</a></p> -->
              </div>
            </div>
          </div>
      </div>
    

    <p><?php echo e($service->desc); ?></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Globus\resources\views/services/show.blade.php ENDPATH**/ ?>