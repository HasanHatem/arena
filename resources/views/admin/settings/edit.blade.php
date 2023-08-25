<x-admin-layout>

    @section('title', 'Edit settings')

    <div class="row">
        <div class="col-100">
            <div class="card bg-white border-radius">

                <div class="form">
                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row">
                            <div class="col-50">
                                <div class="form-group">
                                    <label for="site_name">Site Name</label>
                                    <div class="input-group">
                                        <input type="text" name="site_name" id="site_name" class="@error('site_name') is-invalid @enderror" tabindex="1" value="{{ $settings->name }}">

                                        @error('site_name')
                                            <small class="invalid-feedback mt-xs">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="form-group required">
                                    <label for="email">Site Email</label>
                                    <div class="input-group">
                                        <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror" tabindex="2" value="{{ $settings->email }}">

                                        @error('email')
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
                                    <label for="mobile_number">Mobile Number</label>
                                    <div class="input-group">
                                        <input type="text" name="mobile_number" id="mobile_number" class="@error('mobile_number') is-invalid @enderror" tabindex="3" value="{{ $settings->mobile_number }}">

                                        @error('mobile_number')
                                            <small class="invalid-feedback mt-xs">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <div class="input-group">
                                        <input type="file" name="logo" id="logo" class="@error('logo') is-invalid @enderror" tabindex="3" >

                                        @error('logo')
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
                                <div class="image-preview">
                                    <h4>Logo Preview</h4>
                                    <div class="row">
                                        <div class="col-50">
                                            <div class="image">
                                                <img src="{{ asset('storage/' . $settings->logo) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
