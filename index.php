<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>World Bank Publications</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
</head>
<body>
    <div class="site-wrapper">
        <header>

            <div class="logo-wrapper">
                <a href=""><img src="images/logo.png" alt="Логотип World Bank Publications" id="logo"></a>
            </div>

            <div class="phones-wrapper">
                <span class="tel">8-800-100-5005</span>
                <span class="tel">+7 (3452) 522-000</span>

            </div>

        </header>
        <nav class="site-navigation">
            <ul>
                <li><a href="">Кредитные карты</a></li>
                <li><a href="">Вклады</a></li>
                <li><a href="">Дебетовая карта</a></li>
                <li><a href="">Страхование</a></li>
                <li><a href="">Друзья</a></li>
                <li><a href="">Интернет-банк</a></li>
            </ul>
        </nav>
        <div class="bread-crumbs">
            <ul>
                <li><a href="">Главная</a></li>
                <li><a href="">Вклады</a></li>
                <li><a href="">Калькулятор</a></li>
            </ul>
        </div>
        <main>
            <div class="calculator-wrapper">
                <span class="title">Калькулятор</span>

                <div class="left-section">
                    <div class="field">
                        <label>
                            <span>Дата оформления вклада</span>
                            <input type="text" id="datepicker" value="дд.мм.гггг">
                        </label>
                    </div>

                    <div class="field">
                        <label>
                            <span>Сумма для вклада</span>
                            <input type="number" min="1000" max="3000000" id="input-amountOfDeposit">
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <span>Срок вклада</span>
                            <select name="" id="">
                                <option value="1">1 год</option>
                                <option value="2">2 года</option>
                                <option value="1">3 года</option>
                                <option value="1">4 года</option>
                                <option value="1">5 лет</option>
                            </select>
                        </label>
                    </div>
                    <div class="field">
                        <span>Пополнение вклада</span>
                        <label>
                            <input type="radio" name="refill" value="false" checked>

                            Нет
                        </label>
                        <label>
                            <input type="radio" name="refill" value="true">
                            Да
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <span>Сумма пополнения вклада</span>
                            <input type="number" name="amount" min="1000" max="3000000" id="input-amountOfDeposit_replenish">
                        </label>
                    </div>

                    <div class="calculate-field">
                        <button id="calculate">Рассчитать</button>

                        <div class="result-wrapper">
                            <span class="result-text">Результат:</span>
                            <span id="result">0 руб.</span>
                        </div>


                    </div>
                </div>

                <div class="right-section">
                    <div class="slider-wrapper">
                        <div id="slider-amountOfDeposit">
                            <div id="custom-handle-slider" class="ui-slider-handle"></div>
                        </div>

                        <span class="min">1 тыс.руб.</span>
                        <span class="max">3 000 000</span>
                    </div>
                    <div class="slider-wrapper">
                        <div id="slider-amountOfDeposit_replenish">
                            <div id="custom-handle-slider_replenish" class="ui-slider-handle"></div>
                        </div>

                        <span class="min">1 тыс.руб.</span>
                        <span class="max">3 000 000</span>
                    </div>

                </div>
            </div>

        </main>
        <footer>
            <nav class="footer-navigation">
                <ul>
                    <li><a href="">Кредитные карты</a></li>
                    <li><a href="">Вклады</a></li>
                    <li><a href="">Дебетовая карта</a></li>
                    <li><a href="">Страхование</a></li>
                    <li><a href="">Друзья</a></li>
                    <li><a href="">Интернет-банк</a></li>
                </ul>
            </nav>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>