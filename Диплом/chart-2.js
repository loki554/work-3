const ctx2 = document.getElementById('doughnut');

  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      maintainAspectRatio: false,
      labels: ['Чистый доход', 'Расходы на топливо', 'Зарплаты', 'Другие расходы'],
      datasets: [{
        data: [506457, 19084, 320532, 50765],
        backgroundColor: [
            'rgba(85, 223, 85, 1)',
            'rgba(232, 17, 17, 0.8)',
            'rgba(232, 17, 17, 0.8)',
            'rgba(232, 17, 17, 0.8)',
        ],
        borderWidth: 5
      }]
    },
    options: {

      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });