<div class="properties-wrapper">
    <div class="row">
        @forelse($properties as $property)
            <div class="col-33">
                <div class="property">
                    <div class="slider">
                        <section class="splide splide-cards" data-properties-splide aria-label="Properties Section">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach(json_decode($property->images) as $image)
                                        <div class="splide__slide">
                                            <div class="property-image">
                                                <img src="{{ asset('storage/' . $image) }}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="property-card">
                        <h3>
                            <span class="fix-font">{{ $property->name }}</span>
                        </h3>
                        <p class="brief">
                            <span class="fix-font">
                                {{ $property->brief }}
                            </span>
                        </p>

                        <div class="flex align-middle justify-between">
                            <p class="price"><span class="fix-font currency">AED</span> <span class="fix-font">{{ $property->price }}</span></p>
                            <p class="status">
                                <span class="fix-font">{{ ucfirst($property->status) }}</span>
                            </p>
                        </div>

                        <div class="info flex align-middle justify-between">
                            <p>
                                <span class="fix-font">
                                    {{ $property->paid_returns }}
                                    <span>paid returns</span>
                                </span>
                            </p>
                            <p>
                                <span class="fix-font">
                                    {{ $property->annual_yield }}
                                    <span>annual yield</span>
                                </span>
                            </p>
                        </div>

                        <div class="flex align-middle justify-center">
                            <a href="#" class="btn btn-primary">
                                <span>{{ $content['properties_cta'] }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>no properties</p>
        @endforelse
    </div>

    @if($showLoadMore)
        <div class="row">
            <div class="col-100">
                <div class="flex justify-center">
                    <a wire:click="load" class="btn btn-transparent">
                        <span>
                            {{ $content['properties_load_more'] }}
                        </span>
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 13" width="17" height="13"><style>.a{fill:#161922}</style><path class="a" d="m8.6 12.3l-7.9-12.4h15.8z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
