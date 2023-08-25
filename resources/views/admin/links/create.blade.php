<x-admin-layout>

    @section('title', 'Create Menu Links')

    <div class="row">
        <div class="col-100">
            <div class="card bg-white border-radius">

                <div class="form">
                    <form action="{{ route('admin.links.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-50">
                                <div class="form-group required">
                                    <label for="label">Label</label>
                                    <div class="input-group">
                                        <input type="text" name="label" id="label" class="@error('label') is-invalid @enderror" tabindex="1">

                                        @error('label')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="form-group required">
                                    <label for="url">URL</label>
                                    <div class="input-group">
                                        <input type="text" name="url" id="url" class="@error('url') is-invalid @enderror" tabindex="2">

                                        @error('url')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-50">
                                <div class="form-group required">
                                    <label for="order">Order</label>
                                    <div class="input-group">
                                        <input type="number" name="order" id="order" class="@error('order') is-invalid @enderror" tabindex="3" min="1">

                                        @error('order')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-100">
                                <div class="flex align-items-center">
                                    <button type="submit" class="btn btn-primary">
                                        Save
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
