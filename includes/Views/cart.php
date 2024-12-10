<section class="cart-page-section my-5">
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Your Cart</h1>
        <div class="row">
            
        <!-- ini bagian cart -->
            <div class="col-lg-8">
                <div class="cart-items">

                    <div class="cart-item border-bottom py-3 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/products/dahua 4.jpg" alt="Product Image" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                            <div class="ms-3">
                                <h5 class="fw-bold mb-1">Paket 4 Kamera Dahua IR</h5>
                                <p class="text-muted mb-1">4 Kamera Dahua 2MP 1080p</p>
                                <p class="text-success fw-bold">Rp 3.399.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="quantity-controller d-flex align-items-center">
                                <button class="btn btn-outline-secondary btn-sm me-2 decrease-quantity" data-id="1">-</button>
                                <span class="quantity-value fw-bold" id="quantity-1">1</span>
                                <button class="btn btn-outline-secondary btn-sm ms-2 increase-quantity" data-id="1">+</button>
                            </div>
                            <button class="btn btn-danger btn-sm ms-4 remove-item" data-id="1">Remove</button>
                        </div>
                    </div>

                    <div class="cart-item border-bottom py-3 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/products/hilook 16.png" alt="Product Image" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                            <div class="ms-3">
                                <h5 class="fw-bold mb-1">Paket 16 Kamera Hilook</h5>
                                <p class="text-muted mb-1">16 Kamera Hilook 2MP 1080p</p>
                                <p class="text-success fw-bold">Rp 17.399.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="quantity-controller d-flex align-items-center">
                                <button class="btn btn-outline-secondary btn-sm me-2 decrease-quantity" data-id="2">-</button>
                                <span class="quantity-value fw-bold" id="quantity-2">1</span>
                                <button class="btn btn-outline-secondary btn-sm ms-2 increase-quantity" data-id="2">+</button>
                            </div>
                            <button class="btn btn-danger btn-sm ms-4 remove-item" data-id="1">Remove</button>
                        </div>
                    </div>

                    <!-- kalau mau nambah nanti disini -->

                </div>
            </div>

            <!-- bagian total -->
            <div class="col-lg-4">
                <div class="cart-summary border p-4 rounded shadow-sm">
                    <h4 class="fw-bold mb-3">Order Summary</h4>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted">Subtotal</p>
                        <p class="text-muted" id="subtotal">Rp 3.399.000</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted">Shipping</p>
                        <p class="text-muted" id="shipping">Rp 50.000</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold mb-3">
                        <p>Total</p>
                        <p id="total">Rp 3.449.000</p>
                    </div>
                    <button class="btn btn-primary w-100" id="buyNow">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
</section>