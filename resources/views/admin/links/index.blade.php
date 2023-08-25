<x-admin-layout>

    @section('title', 'Menu Links')

    @section('actions')
        <a href="{{ route('admin.links.create') }}" class="btn btn-primary">New Link</a>
    @endsection

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
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($links as $link)
                <tr id="link-{{ $link->id }}">
                    <td>
                        <a href="{{ route('admin.links.edit', ['link' => $link]) }}">
                            {{ $link->label }}
                        </a>
                    </td>
                    <td>
                        {{ $link->url }}
                    </td>
                    <td>
                        {{ $link->order }}
                    </td>
                    <td>
                        <ul class="actions flex align-middle">
                            <li>
                                <a href="{{ route('admin.links.edit', ['link' => $link]) }}" class="edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.links.destroy', ['link' => $link]) }}" class="delete" onclick="if (confirm('Are you sure?')) {event.preventDefault(); document.getElementById('delete-link-{{ $link->id }}').submit();} else {return false;}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    <form action="{{ route('admin.links.destroy', ['link' => $link]) }}" method="POST" id="delete-link-{{ $link->id }}" style="display: none">
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
                    <td colspan="3">
                        <p>No records yet</p>
                    </td>
                </tr>
            @endforelse
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
                <th>
                    Actions
                </th>
            </tr>
        </tfoot>
    </table>
    <!--/ Table -->

    <!-- Pagination -->
    <div class="pagination">
        {{ $links->links() }}
    </div>
    <!--/ Pagination -->

</x-admin-layout>

