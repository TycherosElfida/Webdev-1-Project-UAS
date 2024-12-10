$(document).ready(function() {
    
    $('input[name="category"]').on('change', function() {
        const selectedCategory = $(this).next('label').text();
        alert('Selected Category: ' + selectedCategory);
    });
  
    $(".thumbnail-btn").on("click", function() {
        const newImage = $(this).data("image");
        $("#mainImage").attr("src", newImage);
    });
  
    // buat ngezoom
    $("#zoomButton").on("click", function() {
        const imageUrl = $("#mainImage").attr("src");
        window.open(imageUrl, "_blank");
    });
  
    $("#buyNow").on("click", function() {
        window.location.href = '/index.php?page=transaction';
    });
  
    // buat masukin ke cart tapi alert aja
    $("#addToCart").on("click", function() {
        alert("Item has been added to your cart.");
    });
  
    $("#check-more-packages").on("click", function() {
        window.location.href = "/index.php?page=packages";
    });
  
    // tombol kurang lebih
    $('.increase-quantity').on('click', function () {
        const id = $(this).data('id');
        const quantityElement = $('#quantity-' + id);
        let quantity = parseInt(quantityElement.text());
        quantity++;
        quantityElement.text(quantity);
        updateSummary();
    });

    $('.decrease-quantity').on('click', function () {
        const id = $(this).data('id');
        const quantityElement = $('#quantity-' + id);
        let quantity = parseInt(quantityElement.text());
        if (quantity > 1) {
            quantity--;
            quantityElement.text(quantity);
        }
    });

    // Remove item from cart
    $('.remove-item').on('click', function () {
        const id = $(this).data('id');
        $(this).closest('.cart-item').remove();
    });

    $('.remove-compare').on('click', function () {
        const id = $(this).data('id');
        $(this).closest('th').remove(); // Remove column header
        $('tbody tr').each(function () {
            $(this).find('td').eq(id - 1).remove(); // Remove corresponding column
        });
    });
    
});