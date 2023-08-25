<x-admin-layout>

    @section('title', 'Edit: ' . $property->name)

    <livewire:admin.edit-property :property="$property" />
</x-admin-layout>
