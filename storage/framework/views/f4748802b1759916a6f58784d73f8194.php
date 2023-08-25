<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('title', 'Edit: ' . $property->name); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.edit-property', ['property' => $property])->html();
} elseif ($_instance->childHasBeenRendered('IuLQqnX')) {
    $componentId = $_instance->getRenderedChildComponentId('IuLQqnX');
    $componentTag = $_instance->getRenderedChildComponentTagName('IuLQqnX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IuLQqnX');
} else {
    $response = \Livewire\Livewire::mount('admin.edit-property', ['property' => $property]);
    $html = $response->html();
    $_instance->logRenderedChild('IuLQqnX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/admin/properties/edit.blade.php ENDPATH**/ ?>