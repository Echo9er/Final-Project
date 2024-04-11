// function addToCartAndNotify(productName, price) {
//     // Add product to cart logic here
    
//     // Find the notification element corresponding to the clicked button
//     var notification = event.target.nextElementSibling;

//     // Display the notification
//     notification.style.display = "block";

//     // Hide the notification after 3 seconds (3000 milliseconds)
//     setTimeout(function(){
//         notification.style.display = "none";
//     }, 3000);
// }


// buynow.js

function addToCartAndNotify(productName, price) {
    // Add product to cart logic here
    
    // Find the notification element corresponding to the clicked button
    var notification = event.target.nextElementSibling;

    // Display the notification
    notification.style.display = "block";

    // Hide the notification after 3 seconds (3000 milliseconds)
    setTimeout(function(){
        notification.style.display = "none";
    }, 3000);

    // Create HTML elements for the selected item
    var item = document.createElement("div");
    item.classList.add("cart-item");
    item.innerHTML = `<p>${productName} - $${price}</p>`;

    // Append the item to the cart-content element
    var cartContent = document.getElementById("cart-content");
    cartContent.appendChild(item);
}
