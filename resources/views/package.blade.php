@extends('layouts.app')

@section('content')
    <section>
<head>
    <script src="https://js.stripe.com/v3/"></script>

</head>



        <h1>
            Package
        </h1>
        @csrf
        <details>
            <summary>Pokhara</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu - Pokhara</td>
                        <td>Rs. 20500</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success" onclick="openStripeCheckout('Kathmandu,Pokhara', 20500)">Book Now</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mandu, Nagarkot, Pokhara</td>
                        <td>Rs. 30,400</td>
                        <td>5N/ 6D</td>
                        <td>Hotels, Car, Sightseeing, Meals</td>
                        <td><button class="success" onclick="openStripeCheckout('Mandu, Nagarkot, Pokhara', 30400)">Book Now</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mandu, Chitwan National Park, Pokhara</td>
                        <td>Rs. 32,000</td>
                        <td>6N/ 7D</td>
                        <td>Hotels, Car, Sightseeing</td>
                        <td><button class="success" onclick="openStripeCheckout('Mandu, Chitwan National Park, Pokhara', 32000)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Kathmandu</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Pokhara</td>
                        <td>Rs. 23,500</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><<button class="success" onclick="openStripeCheckout('Kathmandu,Pokhara', 23500)">Book Now</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nagarkot, Pokhara, Kathmandu</td>
                        <td>Rs. 36,500</td>
                        <td>6N/ 7D</td>
                        <td>Hotel, Meal, Car, Sightseeing</td>
                        <td><button class="success" onclick="openStripeCheckout('Nagarkot, Pokhara, Kathmandu', 36500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Lumbini</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu, Pokhara, Lumbini	</td>
                        <td>Rs. 56,836</td>
                        <td>6N/ 7D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success" onclick="openStripeCheckout('Kathmandu,Pokhara, Lumbini', 56836)">Book Now</button></td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>Lumbini, Pokhara, Kathmandu, Chitwan National Park, Gorakhpur</td>
                        <td>Rs. 77,000</td>
                        <td>8N/ 9D</td>
                        <td>Hotel, Meal, Car, SightSeeing</td>
                        <td><button class="success" onclick="openStripeCheckout('Lumbini, Pokhara, Kathmandu, Chitwan National Park, Gorakhpur', 77000)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Janakpur</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu - Janakpur</td>
                        <td>Rs. 33500</td>
                        <td>5N/ 6D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success" onclick="openStripeCheckout('Kathmandu - Janakpur', 33500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Bhaktapur</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu, Bhaktapur</td>
                        <td>Rs. 2500</td>
                        <td>2N/ 3D</td>
                        <td>Hotel, Meal, Car</td>
                        <td> <button class="success" onclick="openStripeCheckout('Kathmandu, Bhaktapur', 2500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Patan</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pokhara - Patan</td>
                        <td>Rs. 20500</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td> <button class="success" onclick="openStripeCheckout('Pokhara-Patan', 20500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Chitlang</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Chitlang</td>
                        <td>Rs. 10500</td>
                        <td>1N/ 2D</td>
                        <td>Hotel, Meal, Car</td>
                        <td> <button class="success" onclick="openStripeCheckout('Kathmandu,Chitlang', 10500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Mustang</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Pokhara, Mustang</td>
                        <td>Rs. 25000</td>
                        <td>5N/ 6D</td>
                        <td>Hotel, Meal, Car</td>
                        <td> <button class="success" onclick="openStripeCheckout('Kathmandu,Pokhara, Mustang', 25000)">Book Now</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lumbini, Mustang</td>
                        <td>Rs. 25800</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Jomsom</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pokhara, Jomsom</td>
                        <td>Rs. 25000</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td>
                            <button class="success" onclick="openStripeCheckout('Pokhara, Jomsom', 25000)">Book Now</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu, Jomsom</td>
                        <td>Rs. 30000</td>
                        <td>6N/ 7D</td>
                        <td>Hotel, Meal, Car</td>
                            <button class="success" onclick="openStripeCheckout('Kathmandu, Jomsom', 30000)">Book Now</button></td>
                            <td> 
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Mount Manaslu</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Mount Manaslu</td>
                        <td>Rs. 30000</td>
                        <td>6N/ 7D</td>
                        <td>Hotel, Meal, Car</td>
                        <td>    <button class="success" onclick="openStripeCheckout('Kathmandu, Mount Manaslu', 30000)">Book Now</button></td>
                            
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Gorkha</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Gorkha</td>
                        <td>Rs. 10500</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td>     <button class="success" onclick="openStripeCheckout('Kathmandu, Gorkha', 10500)">Book Now</button></td>
                            
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Nuwakot</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu - Nuwakot</td>
                        <td>Rs. 5500</td>
                        <td>1N/ 2D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success" onclick="openStripeCheckout('Kathmandu, Nuwakot', 5500)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
        </h1>
        <details>
            <summary>Kagbeni</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu,Pokhara, Kagbeni</td>
                        <td>Rs. 25000</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success" onclick="openStripeCheckout('Kathmandu,Pokhara, Kagbeni', 25000)">Book Now</button></td>
                    </tr>
                </tbody>
            </table>            
            </p>
        </details>
        </h1>
        
    </section>
     @csrf
    <script>
    function openStripeCheckout(packageName, amount) {
        var handler = StripeCheckout.configure({
            key: "{{ config('services.stripe.key') }}",
            locale: 'auto',
            currency: 'npr', // Change this to 'npr' for Nepalese Rupees
            amount: amount * 100, // Amount in cents
            name: 'Stripe Payment',
            description: 'Make your Payment',
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            token: function(token) {
                // Send the token to your server for processing
                // You can also include the package name or any other details here
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('payment.process') }}";
                form.style.display = 'none';


                 // Include CSRF token
                 var csrfTokenInput = document.createElement('input');
                csrfTokenInput.type = 'hidden';
                csrfTokenInput.name = '_token';
                csrfTokenInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfTokenInput);

                var tokenInput = document.createElement('input');
                tokenInput.name = 'stripeToken';
                tokenInput.value = token.id;
                form.appendChild(tokenInput);

                var packageInput = document.createElement('input');
                packageInput.name = 'package';
                packageInput.value = packageName;
                form.appendChild(packageInput);

                var amountInput = document.createElement('input');
                amountInput.name = 'amount';
                amountInput.value = amount;
                form.appendChild(amountInput);

                document.body.appendChild(form);
                form.submit();
            }
        });

        // Open the Stripe Checkout popup
        handler.open();
    }
</script>


<script>
  var stripe = Stripe('pk_test_51NFCFHSIKHRiMNHAanHcxYwUPDfbKHOUdSUyNYlccsdZT9GgwqYYvIXVjPgZS1GG4DIJ0e1eUlOBMzIcpxsKbxk100N11fdS7t');

  // Create a PaymentMethod when the form is submitted
  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createPaymentMethod({
      type: 'card',
      card: cardElement, // Replace with your card element
    }).then(function(result) {
      if (result.error) {
        // Handle error
      } else {
        // Send the PaymentMethod ID to your server
        fetch('/process-payment', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ payment_method_id: result.paymentMethod.id })
        }).then(function(response) {
          return response.json();
        }).then(function(data) {
          // Handle server response
        });
      }
    });
  });
</script>
<form action="{{ route('payment.process') }}" method="post">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="9999" <!-- Amount in cents -->
        data-name="Stripe Payment Gateway"
        data-description="Subscription"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="npr"> 
    </script>
</form>



<style>
    html,
.root {
    padding: 0;
    margin: 0;
    font-size: 18px;
}

body {
    font: menu;
    font-size: 1rem;
    line-height: 1.4;
    padding: 0;
    margin: 0;
}

section {
    padding-top: 4rem;
    width: 50%;
    margin: auto;
}

h1 {
    font-size: 2rem;
    font-weight: 500;
}

details[open] summary~* {
    animation: open 0.3s ease-in-out;
}

@keyframes open {
    0% {
        opacity: 0;
        transform: translateY(-10px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

details summary::-webkit-details-marker {
    display: none;
}

details summary {
    width: 100%;
    padding: 0.5rem 0;
    border-top: 1px solid black;
    position: relative;
    cursor: pointer;
    font-size: 1.25rem;
    font-weight: 300;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

details summary:after {
    content: "+";
    color: black;
    position: absolute;
    font-size: 1.75rem;
    line-height: 0;
    margin-top: 0.75rem;
    right: 0;
    font-weight: 200;
    transform-origin: center;
    transition: 200ms linear;
}

details[open] summary:after {
    transform: rotate(45deg);
    font-size: 2rem;
}

details summary {
    outline: 0;
}

details p {
    font-size: 0.95rem;
    margin: 0;
    padding: 1rem 0;
    border-top: 1px solid black;
}

button.success {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
}

button.success:hover {
    background-color: #45a049;
}
</style>
@endsection
