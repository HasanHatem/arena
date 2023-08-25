<div class="row">
    <div class="col-100">
        <div class="card bg-white border-radius">

            <div class="form">
                <form wire:submit.prevent="save" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <input type="text" wire:model.defer="name" id="name" class="@error('name') is-invalid @enderror" tabindex="1">

                                    @error('name')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="brief">Brief</label>
                                <div class="input-group">
                                    <input type="text" wire:model.defer="brief" id="brief" class="@error('brief') is-invalid @enderror" tabindex="2">

                                    @error('brief')
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
                                <label for="price">Price (AED)</label>
                                <div class="input-group">
                                    <input type="number" wire:model.defer="price" id="price" class="@error('price') is-invalid @enderror" tabindex="3" min="1">

                                    @error('price')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="status">Status</label>
                                <div class="input-group">
                                    <select wire:model.defer="status" id="status" class="@error('status') is-invalid @enderror" tabindex="4">
                                        <option value="">Select Status</option>
                                        <option value="off-plan">Off-plan</option>
                                        <option value="on-plan">On-plan</option>
                                    </select>

                                    @error('status')
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
                                <label for="paid_returns">Paid Returns</label>
                                <div class="input-group">
                                    <input type="text" wire:model.defer="paid_returns" id="paid_returns" class="@error('paid_returns') is-invalid @enderror" tabindex="5">

                                    @error('paid_returns')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="annual_yield">Annual Yield</label>
                                <div class="input-group">
                                    <input type="text" wire:model.defer="annual_yield" id="annual_yield" class="@error('annual_yield') is-invalid @enderror" tabindex="6">

                                    @error('annual_yield')
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
                                <label for="images">Images</label>
                                <div class="input-group">
                                    <input type="file" wire:model.defer="images" id="images" class="@error('images') is-invalid @enderror" tabindex="7" multiple>

                                    @error('images')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($images)
                        <div class="row">
                            <div class="col-100">
                                <div class="image-preview">
                                    <h4>Images Preview</h4>
                                    <div class="row">
                                        @foreach($images as $image)
                                            <div class="col-50">
                                                <div class="image">
                                                    <img src="{{ $image->temporaryUrl() }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

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
