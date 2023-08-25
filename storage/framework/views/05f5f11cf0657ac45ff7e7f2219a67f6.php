<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('title', 'Edit landing page content'); ?>

    <div class="row">
        <div class="col-100">
            <div class="card bg-white border-radius">

                <div class="form">
                    <form action="<?php echo e(route('admin.content.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>

                        <div class="row">

                            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($row->type === 'text'): ?>
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="<?php echo e($row->identifier); ?>"><?php echo e(ucfirst(str_replace('_', ' ', $row->identifier))); ?></label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    name="<?php echo e($row->identifier); ?>"
                                                    id="<?php echo e($row->identifier); ?>"
                                                    class="<?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    value="<?php echo e($row->content); ?>">

                                                <?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="invalid-feedback mt-xs">
                                                        <?php echo e($message); ?>

                                                    </small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($row->type === 'textarea'): ?>
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="<?php echo e($row->identifier); ?>"><?php echo e(ucfirst(str_replace('_', ' ', $row->identifier))); ?></label>
                                            <div class="input-group">
                                                <textarea
                                                    name="<?php echo e($row->identifier); ?>"
                                                    id="<?php echo e($row->identifier); ?>"
                                                    cols="30"
                                                    rows="2"
                                                    class="<?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                ><?php echo e($row->content); ?></textarea>

                                                <?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="invalid-feedback mt-xs">
                                                        <?php echo e($message); ?>

                                                    </small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($row->type === 'image'): ?>
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="<?php echo e($row->identifier); ?>"><?php echo e(ucfirst(str_replace('_', ' ', $row->identifier))); ?></label>
                                            <div class="input-group">
                                                <input
                                                    type="file"
                                                    name="<?php echo e($row->identifier); ?>"
                                                    id="<?php echo e($row->identifier); ?>"
                                                    class="<?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                >

                                                <?php $__errorArgs = [$row->identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="invalid-feedback mt-xs">
                                                        <?php echo e($message); ?>

                                                    </small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="image-preview">
                                            <img src="<?php echo e(asset('storage/' . $row->content)); ?>" alt="">
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="row">
                            <div class="col-100">
                                <div class="flex align-items-center">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/admin/content/edit.blade.php ENDPATH**/ ?>