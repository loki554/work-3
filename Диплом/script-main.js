document.addEventListener("DOMContentLoaded", function() {
    // Функция для выполнения поиска
    function searchOrders() {
        // Получаем значение поискового запроса пользователя
        var query = document.getElementById("searchInput").value.toLowerCase();

        // Получаем все контейнеры с информацией о заказах
        var orderContainers = document.querySelectorAll(".work-order-container");

        // Проходимся по каждому контейнеру
        orderContainers.forEach(function(container) {
            // Получаем текстовые данные о заказе
            var orderName = container.querySelector(".work-order-name-and-id h1").textContent.toLowerCase();
            var orderId = container.querySelector(".work-order-name-and-id h2").textContent.toLowerCase();
            var carrier = container.querySelector(".work-order-name-and-id h2:nth-child(4)").textContent.toLowerCase();
            var cargo = container.querySelector(".work-order-info h1:nth-child(4)").textContent.toLowerCase();

            // Проверяем, соответствует ли хотя бы один параметр поисковому запросу
            if (orderName.includes(query) || orderId.includes(query) || carrier.includes(query) || cargo.includes(query)) {
                // Если да, показываем контейнер с заказом
                container.style.display = "block";
            } else {
                // Иначе скрываем контейнер с заказом
                container.style.display = "none";
            }
        });
    }

    // Инициализация поиска при вводе в поле поиска
    document.getElementById("searchInput").addEventListener("input", searchOrders);
});

document.addEventListener("DOMContentLoaded", function() {
    // Функция для переключения режима сортировки по алфавиту
    function toggleSortMode() {
        var workOrderContainers = document.querySelectorAll('.work-order-container');
        var sortedContainers = Array.from(workOrderContainers).sort(function(a, b) {
            var nameA = a.querySelector('.work-order-name-and-id h1').textContent.trim().toUpperCase();
            var nameB = b.querySelector('.work-order-name-and-id h1').textContent.trim().toUpperCase();
            return nameA.localeCompare(nameB);
        });

        var workOrdersList = document.querySelector('.work-orders-list');
        var currentMode = workOrdersList.getAttribute('data-sort-mode');

        if (currentMode === 'asc') {
            sortedContainers.reverse();
            workOrdersList.setAttribute('data-sort-mode', 'desc');
        } else {
            workOrdersList.setAttribute('data-sort-mode', 'asc');
        }

        // Очищаем текущий список и добавляем отсортированные элементы
        workOrdersList.innerHTML = '';
        sortedContainers.forEach(function(container) {
            workOrdersList.appendChild(container);
        });
    }

    // Находим кнопку переключения режима сортировки и назначаем ей обработчик события
    var sortButton = document.getElementById('sortButton');
    sortButton.addEventListener('click', toggleSortMode);

    // Добавляем вызов функции toggleSortMode() после загрузки страницы, чтобы установить начальный порядок сортировки
    toggleSortMode();
});

document.addEventListener("DOMContentLoaded", function() {
    // Находим кнопку копирования и блок текста с информацией о заказе
    var copyButton = document.getElementById("copyButton");
    var orderId = document.getElementById("orderId");

    // Добавляем обработчик события для кнопки копирования
    copyButton.addEventListener("click", function() {
        // Создаем временный элемент textarea для копирования текста
        var textarea = document.createElement("textarea");
        textarea.value = orderId.textContent; // Устанавливаем значение textarea на текст заказа
        document.body.appendChild(textarea);
        textarea.select();

        // Копируем текст в буфер обмена
        document.execCommand("copy");

        // Удаляем временный элемент textarea
        document.body.removeChild(textarea);
    });
});