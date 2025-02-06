const select = document.querySelector('select');
const products = document.querySelector('.catalog-item')

select.addEventListener('filter', (event) => {
    const selected = event.target.value;

    for(let i = 0; i < products.children.length; i++) {
        const product = products.children[i];

        if(selected === 'none') {
            product.style.display = 'block';
        } else {
            if(product.id != selected) {
                product.style.display = 'none';
            } else {
                product.style.display = 'block';
            }
        }
    }
});

function search() {
    let filter = document.getElementById('searchbar').value.toUpperCase();

    let item = document.querySelectorAll('.catalog-item');

    let l = document.getElementsByTagName('h1');

    for(var i = 0;i<=l.length;i++) {
        let a = item[i].getElementsByTagName('h1')[0];

        let value = a.innerHTML || a.innerText || a.textContent;

        if(value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.display = "";
        }
        else
        {
            item[i].style.display = "none";
        }
    }
}

function toggle() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}