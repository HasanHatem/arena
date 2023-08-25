<x-app-layout>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <div class="hero">
                        <h1 data-title>
                            <span class="fix-title">
                                {{ $content['title'] }}
                            </span>
                        </h1>

                        <p class="description">
                            <span class="fix-font">
                                {{ $content['description'] }}
                            </span>
                        </p>

                        <a href="{{ $content['main_cta_url'] }}" class="btn btn-primary">
                            <span>{{ $content['main_cta_text'] }}</span>
                        </a>
                    </div>
                </div>

                <div class="col-50">
                    <div class="vertical-slider-container">
                        <div class="vertical-slider">
                            <div class="column left">
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_1']) }}" alt="">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_2']) }}" alt="">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_2']) }}" alt="">
                                </div>
                            </div>
                            <div class="column right">
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_3']) }}" alt="">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_4']) }}" alt="">
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $content['hero_slider_image_4']) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="properties">

        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="title">
                        <p class="sub-title">
                            <span class="fix-font">{{ $content['properties_sub_title'] }}</span>
                        </p>
                        <h2>
                            <span class="fix-title">{{ $content['properties_title'] }}</span>
                        </h2>

                        <div class="description">
                            <p>
                                <span class="fix-font">{{ $content['properties_first_description'] }}</span>
                            </p>
                            <span class="second">
                                <span class="fix-font">{{ $content['properties_second_description'] }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:show-properties :content="$content" />
        </div>

    </div>

    <div class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="title">
                        <p class="sub-title">
                            <span class="fix-font">{{ $content['contact_sub_title'] }}</span>
                        </p>
                        <h2>
                            <span class="fix-title">{{ $content['contact_title'] }}</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="form">
                <form action="#">
                    <div class="row">
                        <div class="col-50">
                            <div class="form-group required">
                                <label for="name">
                                    <span class="fix-font">
                                        {{ $content['form_name'] }}
                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" tabindex="1">

                                    @error('name')
                                        <small class="invalid-feedback mt-xs">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="form-group">
                                <label for="email">
                                    <span class="fix-font">
                                        {{ $content['form_email'] }}
                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror" tabindex="2">

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
                            <div class="form-group">
                                <label for="mobile_number">
                                    <span class="fix-font">
                                        {{ $content['form_mobile_number'] }}
                                    </span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="mobile_number" id="mobile_number" class="@error('mobile_number') is-invalid @enderror" tabindex="3">

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
                                <label for="investment_amount">
                                    <span class="fix-font">
                                        {{ $content['form_investment_amount'] }}
                                    </span>
                                </label>
                                <div class="input-group">
                                    <select name="investment_amount" id="investment_amount" class="@error('investment_amount') is-invalid @enderror" tabindex="4">
                                        <option value="">Select Amount</option>
                                        <option value="">100,000 EUR</option>
                                        <option value="">200,000 EUR</option>
                                        <option value="">300,000 EUR</option>
                                        <option value="">400,000 EUR</option>
                                        <option value="">500,000 EUR</option>
                                    </select>

                                    <div class="arrow">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 13" width="17" height="13"><style>.a{fill:#161922}</style><path class="a" d="m8.6 12.3l-7.9-12.4h15.8z"/></svg>
                                    </div>

                                    @error('investment_amount')
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
                            <div class="form-group">
                                <label for="message">
                                    <span class="fix-font">
                                        {{ $content['form_message'] }}
                                    </span>
                                </label>
                                <div class="input-group">
                                    <textarea name="message" id="message" cols="30" rows="5" class="@error('message') is-invalid @enderror" tabindex="5"></textarea>

                                    @error('message')
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
                            <button type="submit" class="btn btn-primary btn-block">
                                <span>{{ $content['contact_cta'] }}</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</x-app-layout>
