<x-admin-layout>

    @section('title', 'Properties')

    @section('actions')
        <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">New property</a>
    @endsection

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Status
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($properties as $property)
                <tr id="property-{{ $property->id }}">
                    <td>
                        <a href="{{ route('admin.properties.edit', ['property' => $property]) }}">
                            {{ $property->name }}
                        </a>
                    </td>
                    <td>
                        AED {{ $property->price }}
                    </td>
                    <td>
                        {{ $property->status === 'off-plan' ? 'Off-plan' : 'On-plan' }}
                    </td>
                    <td>
                        <ul class="actions flex align-middle">
                            <li>
                                <a href="{{ route('admin.properties.edit', ['property' => $property]) }}" class="edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.properties.destroy', ['property' => $property]) }}" class="delete" onclick="if (confirm('Are you sure?')) {event.preventDefault(); document.getElementById('delete-property-{{ $property->id }}').submit();} else {return false;}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    <form action="{{ route('admin.properties.destroy', ['property' => $property]) }}" method="POST" id="delete-property-{{ $property->id }}" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @empty
                <tr class="table-empty">
                    <td colspan="4">
                        <p>No records yet</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Status
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </tfoot>
    </table>
    <!--/ Table -->

    <!-- Pagination -->
    <div class="pagination">
        {{ $properties->links() }}
    </div>
    <!--/ Pagination -->

</x-admin-layout>

