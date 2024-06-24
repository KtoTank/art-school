<section class="section_messages" id="messages">
    <div class="container-inner">
        <div class="title">
            <h2>Отзывы</h2>
        </div>
        <div class="messages slide slider__wrap">
            <div class="swiper swiper-link-3">
                <div class="swiper-wrapper">
                    @foreach($dataMessages as $data)
                        <div class="swiper-slide">
                            <div class="messages__item">
                                <div class="messages__item-author">
                                    <div class="messages__item-img">
                                        <img loading="lazy" src="{{ 'public/img/messages/' . $data['img'] }}" alt="">
                                    </div>
                                    <div class="messages__item-title">
                                        <p>{{$data['author']}}</p>
                                        <p>{{$data['location_city']}}</p>
                                    </div>
                                </div>
                                <div class="messages__item-text">
                                    <p>{{$data['text']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-prev-outline-2">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#13CAD2"/>
            <path
                d="M36.1993 40.944C36.4759 41.221 36.4759 41.6705 36.1993 41.9476C35.9228 42.2246 35.474 42.2246 35.1975 41.9476L23.8007 30.5311C23.5241 30.2541 23.5241 29.8045 23.8007 29.5275L35.1975 18.1111C35.474 17.8341 35.9228 17.8341 36.1993 18.1111C36.4759 18.3881 36.4759 18.8377 36.1993 19.1147L25.3035 30.0293L36.1993 40.944Z"
                fill="#13CAD2"/>
        </svg>
    </div>
    <div class="swiper-button-next-outline-2">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="59.5" y="59.4971" width="59" height="59" rx="29.5" transform="rotate(-180 59.5 59.4971)"
                  stroke="#13CAD2"/>
            <path
                d="M23.8006 19.0532C23.5241 18.7762 23.5241 18.3266 23.8006 18.0496C24.0771 17.7726 24.5259 17.7726 24.8025 18.0496L36.1993 29.466C36.4758 29.743 36.4758 30.1926 36.1993 30.4696L24.8025 41.8861C24.5259 42.1631 24.0771 42.1631 23.8006 41.8861C23.5241 41.609 23.5241 41.1595 23.8006 40.8825L34.6965 29.9678L23.8006 19.0532Z"
                fill="#13CAD2"/>
        </svg>
    </div>
    <div class="swiper-pagination sp2"></div>
</section>
