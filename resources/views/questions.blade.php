<section class="section_questions">
    <div class="container-inner">
        <div class="questions">
            <div class="questions__inner wrapper">
                <div class="questions__wrapper">
                    <form class="form" action="{{ route('submit-question') }}" method="post">
                        @csrf
                        <div class="form__title">
                            <h3>Есть вопросы?</h3>
                        </div>
                        <div class="form__subtitle">
                            <p>Оставьте телефон и мы перезвоним
                                и расскажем все подробности о школе :)</p>
                        </div>
                        <div class="wrap">
                            <div class="wrapper">
                                <div class="form__wrapper">
                                    <div class="form__input">
                                        <label for="tel"></label>
                                        <input type="text" name="tel" id="tel"
                                               placeholder="+ 7 _  _  _  -  _  _  _  -  _  _  -  _  _">
                                        @error('tel')
                                        <div class="error-input"><p>Это обязательное поле</p></div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="width: 100%">
                                    <button class="btn" type="submit">
                                        Отправить
                                    </button>
                                    @error('checkbox2')
                                    <div class="error-input"><p>Условия обработки не
                                            приняты</p></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form__checkbox">
                                <input type="checkbox" name="checkbox" id="checkbox2">
                                <label for="checkbox2">Я принимаю условия<br>
                                    пользовательского соглашения</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="questions__wrapper"></div>
            </div>
        </div>
    </div>
</section>
