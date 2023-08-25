<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <div class="hero">
                        <h1 data-title>
                            <span class="fix-title">
                                <?php echo e($content['title']); ?>

                            </span>
                        </h1>

                        <p class="description">
                            <span class="fix-font">
                                <?php echo e($content['description']); ?>

                            </span>
                        </p>

                        <a href="<?php echo e($content['main_cta_url']); ?>" class="btn btn-primary">
                            <span><?php echo e($content['main_cta_text']); ?></span>
                        </a>
                    </div>
                </div>

                <div class="col-50">
                    <div class="vertical-slider-container">
                        <div class="vertical-slider">
                            <div class="column left">
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_1'])); ?>" alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_2'])); ?>" alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_2'])); ?>" alt="">
                                </div>
                            </div>
                            <div class="column right">
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_3'])); ?>" alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_4'])); ?>" alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo e(asset('storage/' . $content['hero_slider_image_4'])); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="properties">

        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="title">
                        <p class="sub-title">
                            <span class="fix-font"><?php echo e($content['properties_sub_title']); ?></span>
                        </p>
                        <h2>
                            <span class="fix-title"><?php echo e($content['properties_title']); ?></span>
                        </h2>

                        <div class="description">
                            <p>
                                <span class="fix-font"><?php echo e($content['properties_first_description']); ?></span>
                            </p>
                            <span class="second">
                                <span class="fix-font"><?php echo e($content['properties_second_description']); ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-properties', ['content' => $content])->html();
} elseif ($_instance->childHasBeenRendered('HjrIt8T')) {
    $componentId = $_instance->getRenderedChildComponentId('HjrIt8T');
    $componentTag = $_instance->getRenderedChildComponentTagName('HjrIt8T');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HjrIt8T');
} else {
    $response = \Livewire\Livewire::mount('show-properties', ['content' => $content]);
    $html = $response->html();
    $_instance->logRenderedChild('HjrIt8T', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

    </div>

    <div class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="title">
                        <p class="sub-title">
                            <span class="fix-font"><?php echo e($content['contact_sub_title']); ?></span>
                        </p>
                        <h2>
                            <span class="fix-title"><?php echo e($content['contact_title']); ?></span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="form">
                <form action="#">
                    <div class="row">
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="name">
                                    <span class="fix-font">
                                        <?php echo e($content['form_name']); ?>

                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="name" id="name" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" tabindex="1">

                                    <?php $__errorArgs = ['name'];
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
                        <div class="col-50">
                            <div class="form-group">
                                <label for="email">
                                    <span class="fix-font">
                                        <?php echo e($content['form_email']); ?>

                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="email" id="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" tabindex="2">

                                    <?php $__errorArgs = ['email'];
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
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <div class="form-group">
                                <label for="mobile_number">
                                    <span class="fix-font">
                                        <?php echo e($content['form_mobile_number']); ?>

                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="mobile_number" id="mobile_number" class="<?php $__errorArgs = ['mobile_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" tabindex="3">

                                    <?php $__errorArgs = ['mobile_number'];
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

                        <div class="col-50">
                            <div class="form-group">
                                <label for="investment_amount">
                                    <span class="fix-font">
                                        <?php echo e($content['form_investment_amount']); ?>

                                    </span>
                                </label>
                                <div class="input-group">
                                    <select name="investment_amount" id="investment_amount" class="<?php $__errorArgs = ['investment_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" tabindex="4">
                                        <option value="">Select Amount</option>
                                        <option value="">100,000 EUR</option>
                                        <option value="">200,000 EUR</option>
                                        <option value="">300,000 EUR</option>
                                        <option value="">400,000 EUR</option>
                                        <option value="">500,000 EUR</option>
                                    </select>

                                    <div class="arrow">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 13" width="17" height="13"><style>.a{fill:#161922}</style><path class="a" d="m8.6 12.3l-7.9-12.4h15.8z"/></svg>
                                    </div>

                                    <?php $__errorArgs = ['investment_amount'];
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
                    </div>
                    <div class="row">
                        <div class="col-100">
                            <div class="form-group">
                                <label for="message">
                                    <span class="fix-font">
                                        <?php echo e($content['form_message']); ?>

                                    </span>
                                </label>
                                <div class="input-group">
                                    <textarea name="message" id="message" cols="30" rows="5" class="<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" tabindex="5"></textarea>

                                    <?php $__errorArgs = ['message'];
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
                    </div>

                    <div class="row">
                        <div class="col-50">
                            <button type="submit" class="btn btn-primary btn-block">
                                <span><?php echo e($content['contact_cta']); ?></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/home.blade.php ENDPATH**/ ?>