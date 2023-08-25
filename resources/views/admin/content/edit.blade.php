<x-admin-layout>

    @section('title', 'Edit landing page content')

    <div class="row">
        <div class="col-100">
            <div class="card bg-white border-radius">

                <div class="form">
                    <form action="{{ route('admin.content.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row">

                            @foreach($content as $row)

                                @if ($row->type === 'text')
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="{{ $row->identifier }}">{{ ucfirst(str_replace('_', ' ', $row->identifier)) }}</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    name="{{ $row->identifier }}"
                                                    id="{{ $row->identifier }}"
                                                    class="@error($row->identifier) is-invalid @enderror"
                                                    value="{{ $row->content }}">

                                                @error($row->identifier)
                                                    <small class="invalid-feedback mt-xs">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($row->type === 'textarea')
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="{{ $row->identifier }}">{{ ucfirst(str_replace('_', ' ', $row->identifier)) }}</label>
                                            <div class="input-group">
                                                <textarea
                                                    name="{{ $row->identifier }}"
                                                    id="{{ $row->identifier }}"
                                                    cols="30"
                                                    rows="2"
                                                    class="@error($row->identifier) is-invalid @enderror"
                                                >{{ $row->content }}</textarea>

                                                @error($row->identifier)
                                                    <small class="invalid-feedback mt-xs">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($row->type === 'image')
                                    <div class="col-50">
                                        <div class="form-group">
                                            <label for="{{ $row->identifier }}">{{ ucfirst(str_replace('_', ' ', $row->identifier)) }}</label>
                                            <div class="input-group">
                                                <input
                                                    type="file"
                                                    name="{{ $row->identifier }}"
                                                    id="{{ $row->identifier }}"
                                                    class="@error($row->identifier) is-invalid @enderror"
                                                >

                                                @error($row->identifier)
                                                    <small class="invalid-feedback mt-xs">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="image-preview">
                                            <img src="{{ asset('storage/' . $row->content) }}" alt="">
                                        </div>
                                    </div>
                                @endif

                            @endforeach
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
</x-admin-layout>
