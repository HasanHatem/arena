<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('title', 'Menu Links'); ?>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>
                    Label
                </th>
                <th>
                    Url
                </th>
                <th>
                    Order
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr id="link-<?php echo e($link->id); ?>">
                    <td>
                        <a href="<?php echo e(route('admin.links.edit', ['link' => $link])); ?>">
                            <?php echo e($link->label); ?>

                        </a>
                        <ul class="actions flex align-center">
                            <li>
                                <a href="<?php echo e(route('admin.links.edit', ['link' => $link])); ?>" class="edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.links.destroy', ['link' => $link])); ?>" class="delete" onclick="if (confirm('Are you sure?')) {event.preventDefault(); document.getElementById('delete-link-<?php echo e($link->id); ?>').submit();} else {return false;}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    <form action="<?php echo e(route('admin.links.destroy', ['link' => $link])); ?>" method="POST" id="delete-link-<?php echo e($link->id); ?>" style="display: none">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <?php echo e($link->url); ?>

                    </td>
                    <td>
                        <?php echo e($link->order); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr class="table-empty">
                    <td colspan="3">
                        <p>No records yet</p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>
                    Label
                </th>
                <th>
                    Url
                </th>
                <th>
                    Order
                </th>
            </tr>
        </tfoot>
    </table>
    <!--/ Table -->

    <!-- Pagination -->
    <div class="pagination mt-2">
        <?php echo e($links->links()); ?>

    </div>
    <!--/ Pagination -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>

<?php /**PATH /Users/mohammedjaseel/Documents/Sites/arena/resources/views/admin/menus/index.blade.php ENDPATH**/ ?>