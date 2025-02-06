var myMap; // Define myMap variable outside the init function
var multiRoute; // Define multiRoute variable outside the init function

function init(button, reloadMap = false) {
    if (reloadMap || !myMap) {
        if (myMap) {
            myMap.destroy(); // Destroy the existing map if it exists
        }
        myMap = new ymaps.Map('map', {
            center: [55.750625, 37.626],
            zoom: 7
        }, {
            buttonMaxWidth: 300
        });
    }

    var container = button.closest('.work-order-container');
    var referencePointA = container.querySelector('.h1ReferencePointA').innerText;
    var referencePointB = container.querySelector('.h1ReferencePointB').innerText;

    if (multiRoute) {
        myMap.geoObjects.remove(multiRoute); // Remove the existing multi-route if it exists
    }

    multiRoute = new ymaps.multiRouter.MultiRoute({
        referencePoints: [
            referencePointA,
            referencePointB
        ],
        params: {
            results: 1
        }
    }, {
        boundsAutoApply: true
    });

    myMap.geoObjects.add(multiRoute);

    console.log(referencePointA);
    console.log(referencePointB);
}