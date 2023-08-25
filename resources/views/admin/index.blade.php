<x-admin-layout>

    @section('title', 'Dashboard')

    <div class="row">
        <div class="col-100">
            <p>
                Welcome back, {{ auth()->user()->name }}
            </p>
        </div>
    </div>

</x-admin-layout>
