

// Function to add item to the cart and redirect to magazine page
function addToCartAndNotify(itemName, itemPrice) {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let existingItem = cartItems.find(item => item.name === itemName);

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cartItems.push({ name: itemName, price: itemPrice, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cartItems));

    alert("Item added to cart!");
    window.location.href = 'Magazines.html';
}

// Function to handle the checkout process
function checkout() {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let totalPrice = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);

    if (confirm(`Thank you for your purchase! Total amount: $${totalPrice.toFixed(2)}`)) {
        localStorage.removeItem('cart');
        window.location.href = 'Magazines.html';
    }
}

// Function to display cart items with quantity and remove button
function displayCart() {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';

    cartItems.forEach((item, index) => {
        let itemElement = document.createElement('div');
        itemElement.textContent = `${item.name}, $${item.price}, x${item.quantity}`;

        let addButton = document.createElement('button');
        addButton.textContent = '+';
        addButton.onclick = function() {
            cartItems[index].quantity++;
            localStorage.setItem('cart', JSON.stringify(cartItems));
            displayCart();
        };

        let subtractButton = document.createElement('button');
        subtractButton.textContent = '-';
        subtractButton.onclick = function() {
            if (cartItems[index].quantity > 1) {
                cartItems[index].quantity--;
                localStorage.setItem('cart', JSON.stringify(cartItems));
                displayCart();
            }
        };

        let removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.onclick = function() {
            cartItems.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartItems));
            displayCart();
        };

        itemElement.appendChild(addButton);
        itemElement.appendChild(subtractButton);
        itemElement.appendChild(removeButton);
        cartItemsContainer.appendChild(itemElement);
    });
}

window.onload = displayCart;





