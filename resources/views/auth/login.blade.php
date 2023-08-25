<x-app-layout>

    <div class="auth">
        <div class="container">
            <div class="row row-center">
                <div class="col-50">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                </div>
            </div>

            <div class="row row-center">
                <div class="col-50">
                    <h1>Login</h1>
                    <div class="form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="col-100">
                                    <div class="form-group">
                                        <label for="email">
                                        <span class="fix-font">
                                            Email
                                        </span>
                                        </label>
                                        <div class="input-group">
                                            <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror" tabindex="1" value="{{ old('email') }}" autofocus autocomplete="username">

                                            @error('email')
                                            <small class="invalid-feedback mt-xs">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-100">
                                    <div class="form-group required">
                                        <label for="password">
                                        <span class="fix-font">
                                            Password
                                        </span>
                                        </label>
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" tabindex="2">

                                            @error('password')
                                            <small class="invalid-feedback mt-xs">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">
                                <span>{{ __('Log in') }}</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
