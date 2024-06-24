<section id="courses" class="section_courses">
    <div class="container-inner">
        <div class="course">
            <div class="course__title title">
                <h2>Курсы</h2>
            </div>
        </div>
        <div class="course-grid">
            @foreach($dataCourses as $data)
                <div class="course-card ">
                    <div class="course-card__inner wrapper">
                        <div class="course-card__img">
                            <img loading="lazy" src="{{ 'public/img/courses/' . $data['img']}}" alt="">
                        </div>
                        <div class="course-card__subtitle">
                            <p><span class="bold">{{$data['name']}}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
