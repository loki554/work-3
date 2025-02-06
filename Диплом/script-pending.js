document.addEventListener('DOMContentLoaded', function() {
    const editButtons = document.querySelectorAll('.edit-button');
    let currentContainer = null;

    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            currentContainer = button.closest('.work-pending-order-container');
            
            const orderData = {
                id: currentContainer.querySelector('.order-id').textContent,
                name: currentContainer.querySelector('.order-name').textContent,
                phone: currentContainer.querySelector('.order-phone').textContent,
                cargo: currentContainer.querySelector('.order-cargo').textContent,
                from: currentContainer.querySelector('.order-from').textContent,
                to: currentContainer.querySelector('.order-to').textContent,
            };

            // Populate the right section form with this data
            document.querySelector('#edit-id').value = orderData.id;
            document.querySelector('#edit-name').value = orderData.name;
            document.querySelector('#edit-phone').value = orderData.phone;
            document.querySelector('#edit-cargo').value = orderData.cargo;
            document.querySelector('#edit-from').value = orderData.from;
            document.querySelector('#edit-to').value = orderData.to;

            // Show the form
            document.querySelector('.edit-form').style.display = 'block';

            // Hide the "Выберите обращение" message
            document.querySelector('.select-order-message').style.display = 'none';
        });
    });

    document.querySelector('.save-button').addEventListener('click', function() {
        const updatedOrderData = {
            id: document.querySelector('#edit-id').value,
            name: document.querySelector('#edit-name').value,
            phone: document.querySelector('#edit-phone').value,
            cargo: document.querySelector('#edit-cargo').value,
            from: document.querySelector('#edit-from').value,
            to: document.querySelector('#edit-to').value,
        };

        if (currentContainer) {
            currentContainer.querySelector('.order-id').textContent = updatedOrderData.id;
            currentContainer.querySelector('.order-name').textContent = updatedOrderData.name;
            currentContainer.querySelector('.order-phone').textContent = updatedOrderData.phone;
            currentContainer.querySelector('.order-cargo').textContent = updatedOrderData.cargo;
            currentContainer.querySelector('.order-from').textContent = updatedOrderData.from;
            currentContainer.querySelector('.order-to').textContent = updatedOrderData.to;
        }

        // Hide the form
        document.querySelector('.edit-form').style.display = 'none';
    });
});