<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>CyberNest</title>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php"><img src="img/CyberNestLogo.png" alt="logo" style="width: 305px;"></a>
            <a href="news.php"><h3 class="orange-text">Новости</h3></a>
            <a href="services.php"><h3 class="orange-text">Услуги</h3></a>
            <a href="contacts.php"><h3 class="orange-text">Контакты</h3></a>
            <a href="auth.php"><img src="img/acc.png" alt="acc-button" style="width: 54px;"></a>
        </div>
    </header>
    <div class="head-block">
        <img src="img/CyberNestLogo.png" alt="logo" style="width: 633px; margin-right: 47%;">
        <h2 style="color: #ECEFF4; width: 477px;">ЛУЧШИЙ КОМПЬЮТЕРНЫЙ КЛУБ В МОСКВЕ</h2>
        <p class="light-text" style="width: 627px; margin-left: 30%;">Круглосуточная работа, доступные цены, лучшее оборудование и современное ПО - все это про <span class="orange-text">CyberNest</span>. Регистрируйся и бронируй место в <span class="blue-text">любое удобное время</span> прямо сейчас!</p>
    </div>
    <div class="services">
        <div class="head-container">
            <h1>УСЛУГИ</h1>
        </div>
        <div class="service-card">
            <div class="service-card-text">
                <h2>ЗАЛ С PS5</h2>
                <p class="dark-text">Бронируйте PS5. Только почасовой.</p>
            </div>
            <img src="img/psHall.png" alt="ps hall">
        </div>
        <div class="service-card">
            <div class="service-card-text">
                <h2>VIP</h2>
                <p class="dark-text">Бронируйте ПК в VIP зале с самыми лучшими характеристиками. </p>
            </div>
            <img src="img/vipHall.png" alt="service">
        </div>
        <div class="service-card">
            <div class="service-card-text">
                <h2>ЛАУНЖ ЗОНА</h2>
                <p class="dark-text">Отдохните от игры в лаунж зоне.</p>                
            </div>
            <img src="img/loungeZone.png" alt="service">
        </div>
        <div class="service-card">
            <div class="service-card-text">
                <h2>ТУРНИРЫ</h2>
                <p class="dark-text">Участвуйте в турнирах нашего клуба. Получайте призы.</p>                
            </div>
            <img src="img/dotaTournament.png" alt="service">
        </div>
        <div class="service-card">
            <div class="service-card-text">                
                <h2>ПОМИНУТНО</h2>
                <p class="dark-text">Бронируйте ПК по тарифу “поминутно”.</p>
            </div>
            <img src="img/minuteHall.png" alt="service">
        </div>
        <div class="service-card">
            <div class="service-card-text">
                <h2>ПОЧАСОВОЙ</h2>
                <p class="dark-text">Бронируйте ПК по тарифу “почасовой”.</p>                
            </div>
            <img src="img/hourHall.png" alt="service">
        </div>
        <div class="button-container">
            <button class="button-blue" onclick="window.location.href='services.php';">Подробнее</button>
        </div>
    </div>
    <div class="actions-block">
        <div class="action">
            <div class="action-text">
                <h1>РЕГИСТРИРУЙСЯ</h1>
                <p class="light-text">Круглосуточная работа, доступные цены, лучшее оборудование и современное ПО - все это про <span class="orange-text">CyberNest</span>. Регистрируйся и бронируй место в <span class="blue-text">любое удобное время</span> прямо сейчас!</p>
                <button class="button-blue" onclick="window.location.href='auth.php';">Аккаунт</button>
            </div>
            <img src="img/acc.png" alt="" class="action-image">
        </div>
        <div class="action">
            <img src="img/pcIcon.png" alt="" class="action-image">
            <div class="action-text reverse">
                <h1>БРОНИРУЙ СТОЛ</h1>
                <p class="light-text reverse"><span class="orange-text">Отслеживай</span> предстоящие и прошедшие сеансы, <span class="blue-text">бронируй</span> новые столы в своем личном кабинете!</p>
                <button class="button-blue" onclick="window.location.href='services.php';">Услуги</button>
            </div>
        </div>
        <div class="action">
            <div class="action-text">
                <h1>ПЕРЕКУСИ</h1>
                <p class="light-text"><span class="orange-text">Покупай</span>напитки и еду от наших партнеров, и <span class="blue-text">отдохни</span> от игры в нашей <span class="orange-text">лаунж зоне</span>!</p>
            </div>
            <img src="img/drinkIcon.png" alt="" class="action-image">
        </div>
        <div class="action">
            <img src="img/cupIcon.png" alt="" class="action-image">
            <div class="action-text reverse">
                <h1>УЧАСТВУЙ В ТУРНИРАХ</h1>
                <p class="light-text reverse"><span class="orange-text">Следи</span> за проведением турниров в нашем блоке новостей и соцсетях. <span class="blue-text">Приходи</span> в указанное время и участвуй!</p>
                <button class="button-blue" onclick="window.location.href='news.php';">Новости</button>
            </div>
        </div>
        <div class="action">
            <div class="action-text">
                <h1>НАПИШИ НАМ</h1>
                <p class="light-text">Возникла <span class="orange-text">проблема</span> или есть <span class="blue-text">вопрос</span> к организации? Хотите <span class="blue-text">связаться</span> по поводу рекламы? Напишите нам!</p>
                <button class="button-blue" onclick="window.location.href='contacts.php';">Контакты</button>
            </div>
            <img src="img/headPhoneIcon.png" alt="" class="action-image">
        </div>
    </div>
    <div class="gallery">
        <div class="gallery-half">
            <img src="img/hourHall.png" alt="" style="width: 626px; height: 369px">
            <img src="img/minuteHall.png" alt="" style="width: 305px; height: 183px">
            <img src="img/loungeZone.png" alt="" style="width: 305px; height: 183px">
        </div>
        <div class="gallery-half">
            <img src="img/vipHall.png" alt="" style="width: 626px; height: 369px">
            <img src="img/psGreen.png" alt="" style="width: 305px; height: 183px">
            <img src="img/psHall.png" alt="" style="width: 305px; height: 183px">
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <img src="img/CyberNestLogo.png" alt="logo" style="width: 305px; height: 37px;">
            <div class="contacts">
                <h3 class="blue-text">+7 (999) 999-99-99</h3>
                <h3 class="blue-text">example@mail.com</h3>
            </div>
            <div class="messengers">
                <img src="img/vk.png" alt="vk" style="width: 65px; height: 38px; cursor: pointer;">
                <img src="img/tg.png" alt="tg" style="width: 54px; height: 53px; cursor: pointer;">
                <img src="img/yt.png" alt="yt" style="width: 65px; height: 65px; cursor: pointer;">
            </div>
        </div>
    </footer>
</body>
</html>