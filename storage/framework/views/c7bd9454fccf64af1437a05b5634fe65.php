<div class="properties-wrapper">
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-33">
                <div class="property">
                    <div class="slider">
                        <section class="splide splide-cards" data-properties-splide aria-label="Properties Section">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php $__currentLoopData = json_decode($property->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="splide__slide">
                                            <div class="property-image">
                                                <img src="<?php echo e(asset('storage/' . $image)); ?>" alt="">
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="property-card">
                        <h3>
                            <span class="fix-font"><?php echo e($property->name); ?></span>
                        </h3>
                        <p class="brief">
                            <span class="fix-font">
                                <?php echo e($property->brief); ?>

                            </span>
                        </p>

                        <div class="flex align-middle justify-between">
                            <p class="price"><span class="fix-font currency">AED</span> <span class="fix-font"><?php echo e($property->price); ?></span></p>
                            <p class="status">
                                <span class="fix-font"><?php echo e(ucfirst($property->status)); ?></span>
                            </p>
                        </div>

                        <div class="info flex align-middle justify-between">
                            <p>
                                <span class="fix-font">
                                    <?php echo e($property->paid_returns); ?>

                                    <span>paid returns</span>
                                </span>
                            </p>
                            <p>
                                <span class="fix-font">
                                    <?php echo e($property->annual_yield); ?>

                                    <span>annual yield</span>
                                </span>
                            </p>
                        </div>

                        <div class="flex align-middle justify-center">
                            <a href="#" class="btn btn-primary">
                                <span><?php echo e($content['properties_cta']); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>no properties</p>
        <?php endif; ?>
    </div>

    <?php if($showLoadMore): ?>
        <div class="row">
            <div class="col-100">
                <div class="flex justify-center">
                    <a wire:click="load" class="btn btn-transparent">
                        <span>
                            <?php echo e($content['properties_load_more']); ?>

                        </span>
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 13" width="17" height="13"><style>.a{fill:#161922}</style><path class="a" d="m8.6 12.3l-7.9-12.4h15.8z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/livewire/show-properties.blade.php ENDPATH**/ ?>