

<form action="{{ route('payment.process') }}" method="post">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="999" <!-- Amount in cents -->
        data-name="Laravel Stripe Example"
        data-description="Subscription"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="usd">
    </script>
</form>