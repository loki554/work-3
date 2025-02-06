const ctx = document.getElementById('bar');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['В обработке', 'Активные', 'Завершённые'],
      datasets: [{
        label: 'Заказы на текущий момент:',
        data: [25, 19, 32],
        backgroundColor: [
            'rgba(0, 128, 255, 0.63)',
            'rgba(85, 223, 85, 1)',
            'rgba(68, 68, 68, 0.25)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
        legend: {
            display: false,
         } } } 
  });