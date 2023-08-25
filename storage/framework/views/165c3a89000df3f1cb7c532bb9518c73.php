<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arena</title>

    <!-- Scripts -->
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/admin/admin.scss', 'resources/js/admin/admin.js']); ?>
</head>
<body>

    <div id="admin">

        <!-- Sidebar -->
        <div class="sidebar open flex flex-col align-center">
            <div class="logo">
                <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="<?php echo e(route('home')); ?>" target="_blank">
                            Go to website
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.home')); ?>" class="<?php echo e(Request::path() === 'admin' ? 'active' : ''); ?>">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.links.index')); ?>" class="<?php echo e(Request::path() === 'admin/links' || Request::is('admin/links/*') ? 'active' : ''); ?>">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.properties.index')); ?>" class="<?php echo e(Request::path() === 'admin/properties' || Request::is('admin/properties/*') ? 'active' : ''); ?>">
                            Properties
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.content.edit')); ?>" class="<?php echo e(Request::path() === 'admin/content' ? 'active' : ''); ?>">
                            Landing Page
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.settings.edit')); ?>" class="<?php echo e(Request::path() === 'admin/settings' ? 'active' : ''); ?>">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">
                            Logout
                            <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="post" style="display: none;"><?php echo csrf_field(); ?></form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wrapper open">
            <div class="container">

                <div class="content">
                    <div class="page-title flex align-middle justify-between">
                        <h1>
                            <?php echo $__env->yieldContent('title'); ?>
                        </h1>

                        <?php echo $__env->yieldContent('actions'); ?>
                    </div>

                    <!-- Alerts -->
                    <div class="alerts mb-1">

                        <?php if($message = Session::get('success')): ?>
                            <div class="row">
                                <div class="col-100">
                                    <div class="alert alert-success flex align-center">
                                        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/></svg>
                                        <p>
                                            <?php echo e($message); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!--/ Alerts -->

                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>

    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/admin/layouts/admin.blade.php ENDPATH**/ ?>