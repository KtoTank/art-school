<section id="teachers" class="section_teachers">
    <div class="container-inner">
        <div class="title">
            <h2>Преподаватели</h2>
        </div>
        <div class="teachers slide slider__wrap">
            <div class="swiper swiper-link-2">
                <div class="swiper-wrapper">
                    @foreach($dataTeachers as $data)
                        <div class="swiper-slide">
                            <div class="teachers__item">
                                <div class="teachers__item-img">
                                    <img loading="lazy" src="{{ 'public/img/teachers/' . $data['img'] }}" alt="">
                                </div>
                                <div class="teachers__item-title">
                                    <h3>{{$data['lastname']}}</h3>
                                    <p>{{$data['name']}}</p>
                                </div>
                                <div class="teachers__item-text">
                                    <p>{{$data['position']}}</p>
                                </div>
                                <div class="teachers__item-text">
                                    <p>{{$data['experience']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="swiper-button-prev-outline">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.499996" width="59" height="59" rx="29.5" stroke="#8266BA"/>
            <path
                d="M36.1993 40.944C36.4759 41.221 36.4759 41.6705 36.1993 41.9475C35.9228 42.2246 35.474 42.2246 35.1975 41.9475L23.8007 30.5311C23.5241 30.2541 23.5241 29.8045 23.8007 29.5275L35.1975 18.1111C35.474 17.8341 35.9228 17.8341 36.1993 18.1111C36.4759 18.3881 36.4759 18.8377 36.1993 19.1147L25.3035 30.0293L36.1993 40.944Z"
                fill="#8266BA"/>
        </svg>
    </div>
    <div class="swiper-button-next-outline">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="59.5" y="59.5001" width="59" height="59" rx="29.5"
                  transform="rotate(-180 59.5 59.5001)" stroke="#8266BA"/>
            <path
                d="M23.8006 19.0562C23.5241 18.7792 23.5241 18.3296 23.8006 18.0526C24.0771 17.7756 24.5259 17.7756 24.8025 18.0526L36.1993 29.469C36.4758 29.746 36.4758 30.1956 36.1993 30.4726L24.8025 41.889C24.5259 42.1661 24.0771 42.1661 23.8006 41.889C23.5241 41.612 23.5241 41.1625 23.8006 40.8854L34.6965 29.9708L23.8006 19.0562Z"
                fill="#8266BA"/>
        </svg>
    </div>
</section>
