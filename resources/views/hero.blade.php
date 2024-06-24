<section class="section_hero">
    <div class="hero wrapper">
        <div class="hero__wrapper">
            <div class="hero__title">
                <h1>ДШИ №6</h1>
                <h2>Школа, где каждый успешен</h2>
            </div>
        </div>
        <div class="hero__form">
            <form class="form" action="{{ route('submit-record') }}" method="post">
                @csrf
                <div class="form__title">
                    <h3>Приходите к нам!</h3>
                </div>
                <div class="form__subtitle">
                    <p>Заполните форму и посмотрите школу в удобное для вас и ребенка время</p>
                </div>
                <div class="wrap">
                    <div class="form__wrapper">
                        <div class="form__input">
                            <label for="name"></label>
                            <input type="text" name="name" id="name" placeholder="Ваше имя">
                            @error('name')
                            <div class="error-input"><p>Это обязательное поле</p></div>
                            @enderror
                        </div>
                        <div class="form__input">
                            <label for="phone"></label>
                            <input type="text" name="phone" id="phone"
                                   placeholder="+ 7 _  _  _  -  _  _  _  -  _  _  -  _  _">
                            @error('phone')
                            <div class="error-input"><p>Это обязательное поле</p></div>
                            @enderror
                        </div>
                        <div class="form__input">
                            <label for="email"></label>
                            <input type="text" name="email" id="email"
                                   placeholder="Ваш e-mail">
                            @error('email')
                            <div class="error-input"><p>Это обязательное поле</p></div>
                            @enderror
                        </div>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox">Я принимаю условия обработки пользовательского соглашения</label>
                    </div>
                    <button class="btn" type="submit">
                        Записаться
                    </button>
                    @error('checkbox')
                    <div class="error-input"><p>Условия обработки не приняты</p></div>
                    @enderror
                </div>
            </form>
        </div>
    </div>

</section>

