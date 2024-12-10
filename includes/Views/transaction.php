<section class="checkout-page-section my-5">
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Checkout</h1>
        <form id="checkoutForm">
            <div class="row g-4">

            
                <div class="col-lg-8">
                    <div class="billing-section border p-4 rounded shadow-sm mb-4">
                        <h4 class="fw-bold mb-3">Billing Information</h4>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="state" class="form-label">State/Province</label>
                                <input type="text" class="form-control" id="state" placeholder="Enter your state/province" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="zip" class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" id="zip" placeholder="Enter your ZIP code" required>
                            </div>
                        </div>
                    </div>

                    <div class="shipping-section border p-4 rounded shadow-sm">
                        <h4 class="fw-bold mb-3">Shipping Options</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shippingOption" id="standardShipping" value="standard" checked>
                            <label class="form-check-label" for="standardShipping">
                                Standard Shipping (5-7 days) - Rp 50.000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shippingOption" id="expressShipping" value="express">
                            <label class="form-check-label" for="expressShipping">
                                Express Shipping (1-2 days) - Rp 100.000
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-summary border p-4 rounded shadow-sm mb-4">
                        <h4 class="fw-bold mb-3">Order Summary</h4>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="text-muted">Subtotal</p>
                            <p class="text-muted" id="summarySubtotal">Rp 3.399.000</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="text-muted">Shipping</p>
                            <p class="text-muted" id="summaryShipping">Rp 50.000</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold mb-3">
                            <p>Total</p>
                            <p id="summaryTotal">Rp 3.449.000</p>
                        </div>
                    </div>

                    <div class="payment-section border p-4 rounded shadow-sm">
                        <h4 class="fw-bold mb-3">Payment Method</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" value="bank" checked>
                            <label class="form-check-label" for="bankTransfer">
                                Bank Transfer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="credit">
                            <label class="form-check-label" for="creditCard">
                                Credit/Debit Card
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal">
                            <label class="form-check-label" for="paypal">
                                PayPal
                            </label>
                        </div>
                        <button class="btn btn-primary w-100 mt-4" id="placeOrderButton">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>