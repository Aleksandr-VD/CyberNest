// Создаем массив с данными для новостей
let fullNewCard = [
    {head: "открытие зала с ps5", description: "Друзья, мы запускаем эксклюзивную зону с PlayStation 5! Вас ждут 6 новых консолей с 4K HDR-экранами, полная библиотека игровых хитов и удобные диваны! Первые 3 дня – скидка 30% на время в PS5-зоне! Ждём вас на тест-драйв next-gen графики!", img: "img/psHall.png"},
    {head: "расширение клуба", description: "Мы рады сообщить, что в ближайшие месяцы значительно увеличим пространство клуба! Вас ждут новые игровые зоны с топовым оборудованием и больше комфорта и пространства для турниров!", img: "img/vipHall.png"},
    {head: "конкурс", description: "Хочешь выиграть топовую гарнитуру для полного погружения в игру? Участвуй в нашем конкурсе! Как победить? Будь подписан на наши соцсети и напиши в комментариях свою любимую игру. Итоги – через неделю! Удачи!", img: "img/headPhones.png"},
    {head: "турнир по cs2", description: "Скоро в нашем клубе – накаленный турнир по CS:GO с призовым фондом! Собирайте команду из 5 человек, тренируйте прицел, продумывайте тактики – битва будет жёсткой!", img: "img/csTournament.png"},
    {head: "турнир по dota2", description: "Друзья, готовьтесь к эпичным баталиям! Скоро в нашем клубе пройдет масштабный турнир по Dota 2 с солидным призовым фондом. Регистрация откроется на следующей неделе – следите за новостями! Киберспортивный адреналин, жёсткая конкуренция и море эмоций гарантированы. Собирайте команду и начинайте тренировки!", img: "img/dotaTournament.png"},
    {head: "новые столы", description: "Теперь у нас ещё больше мест для игры! Добавили новые мощные ПК, чтобы вы могли комфортно играть без очередей. Заходите, тестируйте и наслаждайтесь!", img: "img/hourHall.png"},
    {head: "строительство 2 этажа", description: "Стартовало строительство второго этажа! Скоро вас ждёт больше игровых зон, комфорта и крутых возможностей. Следите за обновлениями – будет ещё круче!", img: "img/build.png"},
    {head: "открытие лаунж зоны", description: "Мы рады сообщить об открытии уютной лаунж-зоны в нашем клубе! Теперь вы можете отдохнуть между играми на удобных диванах, перекусить и обсудить стратегии с друзьями. Ждём вас!", img: "img/loungeZone.png"},
    {head: "мы открылись!", description: "2 месяца планирования, пол года организации всех моментов, год строительства, и наконец мы открылись! Приходите к нам и получите незабываемый опыт от посещения нашего компьютероного клуба! Всю неделю 2 часа аренды бесплатно, в честь долгожданного открытия.", img: "img/minuteHall.png"},
]

let newsCards = document.querySelectorAll('.news-card') //Переменная карточки с новостью
let fullNewContainer = document.querySelector('.full-new') //Переменная окна с полной новостью
let bookingWindow = document.querySelector('.booking-window') //Переменная окна с добавлением сеанса
let openBookingWindowButton = document.querySelector('.open-booking-window-button') //Переменная кнопки, открывающей окно добавления сеанса
let closeWindowButton = document.querySelector('.close-window-button') //Переменная кнопки, закрывающей всплывающее окно

newsCards.forEach(card => { //Перебираем массив карточек новостей
    card.addEventListener('click', () => { //Событие нажатия на карточку
        fullNewContainer.style.display = 'flex'; //Отображение всплывающего окна
        fullNewContainer.innerHTML =  //Добавление в html код карточки тегов с текстом и зображениями из массива, взависимости от нажатой карточки
        `<div class="cross-container">
            <img src="img/crossIcon.png" alt="exit" style="width: 50px; cursor: pointer;" class="close-news">
        </div>
        <h1>${fullNewCard[card.id - 1].head}</h1>
        <p class="light-text">${fullNewCard[card.id - 1].description}</p>
        <img src="${fullNewCard[card.id - 1].img}" alt="news picture"></img>`;

        let closeNewsButton = document.querySelector('.close-news'); //Переменная с кнопкой закрытия окна
        closeNewsButton.addEventListener('click', () => { //Событие нажатия на кнопку закрытия всплывающего окна
            fullNewContainer.style.display = 'none' //Скрытие отображения окна
        });
    })
})

closeWindowButton.addEventListener('click', () => { //Событие нажатия на кнопку закрытия всплывающего окна
    bookingWindow.style.display = 'none' //Скрытие отображения окна
})

openBookingWindowButton.addEventListener('click', () => { //Событие нажатия на кнопку открытия всплывающего окна
    bookingWindow.style.display = 'flex' //Отображение окна
})