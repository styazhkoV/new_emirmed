@yield('personal_card')
<div class="container">
    <div class="py-5 text-center">
        <h2>Амбулаторная карта</h2>
        <p class="lead">Пожалуйста, заполните этот документ корректно, поскольку данные отражённые в нём будут использоваться Вашим лечащим врачём.</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Рекомендуемые специалисты</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Врач</h6>
                        <small class="text-muted">Описание "какой хороший врач"</small>
                    </div>
                    <span class="text-muted">3500 тенге</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Врач 2</h6>
                        <small class="text-muted">Описание "какой хороший врач"</small>
                    </div>
                    <span class="text-muted">3500 тенге</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Врач 3</h6>
                        <small class="text-muted">Описание "какой хороший врач"</small>
                    </div>
                    <span class="text-muted">3500 тенге</span>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Всего</span>
                    <strong>10 500</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-success">Записаться</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Карта №</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName"> Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">для отправки результатов обследования</span></label>
                    <input type="email" class="form-control" id="email" placeholder="mail@mail.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Ваш адрес</label>
                    <input type="text" class="form-control" id="address" placeholder="ул Айманова, д 172" required="">
                    <div class="invalid-feedback">
                        Пожалуйста введите корректный адрес
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Причина обращения</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Выберите из списка</option>
                            <option>Выберите из списка</option>
                            <option>Консультация</option>
                            <option>Диагностика</option>
                            <option>Урология</option>
                            <option>Гинекология</option>
                            <option>Наркология</option>
                            <option>Отологингология</option>
                            <option>Физиотерапия</option>
                            <option>Дерматалогия</option>
                            <option>Рентгенология</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Услуга</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                            <option value="">Выберите из списка</option>
                            <option>услуга_1</option>
                            <option>услуга_2</option>
                            <option>услуга_3</option>
                            <option>услуга_4</option>
                            <option>услуга_5</option>
                            <option>услуга_6</option>
                            <option>услуга_7</option>
                            <option>услуга_8</option>
                            <option>услуга_9</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Лечащий врач</label>
                            <select class="custom-select d-block w-100" id="state" required="">
                                <option value="">Выберите</option>
                                <option>Врач_1</option>
                                <option>Врач_2</option>
                                <option>Врач_3</option>
                                <option>Врач_4</option>
                                <option>Врач_5</option>
                                <option>Врач_6</option>
                                <option>Врач_7</option>
                            </select>
                            </div>
                        </div>

                    <hr class="mb-4">


                    <h4 class="mb-3">Предоплата</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">KaspiGold</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Имя владельца карты на латинцие</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Номер карты</small>
                            <div class="invalid-feedback">
                                Имя владельца на латинице
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Номер карты</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Дата карты мм/гг</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV - карты</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Записаться на приём</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© EMIRMED</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Политика компаниии</a></li>
                <li class="list-inline-item"><a href="#">Государственная лицензия</a></li>
                <li class="list-inline-item"><a href="#">О EMIRMED</a></li>
            </ul>
        </footer>
    </div>
