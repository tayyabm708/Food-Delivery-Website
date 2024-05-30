$(document).ready(function() {
    const cart = [];
    let total = 0;

    function updateCart() {
        $('#cart-summary').empty();
        if (cart.length === 0) {
            $('#cart-summary').append('<p>Your cart is empty.</p>');
        } else {
            cart.forEach(item => {
                $('#cart-summary').append(`
                    <div class="cart-item">
                        <span>${item.name} - $${item.price}</span>
                    </div>
                `);
            });
            $('#cart-summary').append(`
                <div class="cart-item font-weight-bold">
                    <span>Total: $${total}</span>
                </div>
            `);
        }
    }

    $('.add-to-cart').on('click', function() {
        const item = $(this).data('item');
        const price = $(this).data('price');
        cart.push({ name: item, price: price });
        total += price;
        alert(`${item} added to cart.`);
        updateCart();
    });

    $('#checkout').on('click', function(event) {
        if (cart.length === 0) {
            alert('Your cart is empty.');
            event.preventDefault();
        }
    });

    updateCart();
});
