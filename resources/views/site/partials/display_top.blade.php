@isset($sliders)


<div id="displayTop" class="displaytopthree">
    <div class="container">
        <div class="row">
            <div class="nov-row  col-lg-12 col-xs-12">
                <div class="nov-row-wrap row">

                    <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                        <div class="block">
                            <div class="block_content">

                            </div>
                        </div>
                    </div>


                    <div id="nov-slider" class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                        data-effect="random" data-slices="15" data-animSpeed="500" data-pauseTime="10000"
                        data-startSlide="0" data-directionnav="false" data-controlNav="true"
                        data-controlNavThumbs="false" data-pauseOnHover="true" data-manualAdvance="false"
                        data-randomStart="false">
                        <div class="nov_preload">
                            <div class="process-loading active">
                                <div class="loader">
                                    @foreach ($sliders as $slide)
                                    <div class="dot"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="nivoSlider">
                            @foreach ($sliders as $slide)
                            @if ($slide->link)
                            <a href="#">
                                <img src="{{ $slide->image_url }}"
                                alt="" title="slider-{{ $slide->id }}" />
                            </a>
                            @else
                            <img src="{{ $slide->image_url }}"
                                    alt="" title="slider-{{ $slide->id }}" />
                            @endif

                            @endforeach
                        </div>
                        @foreach ($sliders as $slide)
                        <div id="slider-{{ $slide->id }}" class="nivo-html-caption">
                            <div class="nov-slider-ct">
                                <div class="nov-center slider-none">
                                    <div class="nov-title effect-0">{{ $slide->title }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endisset
