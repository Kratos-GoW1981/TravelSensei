<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;
use Stripe\Stripe;
use Stripe\PaymentMethod;
use Stripe\Customer;

class PaymentController extends Controller
{


    public function index()
    {
        return view('payment.index');
    }

    public function process(Request $request)
    {
        $user = Auth::user();

        // // Use Cashier to create a new subscription
        // $user->newSubscription('default', 'plan_id')->create($request->stripeToken);

        return redirect()->route('payment.success');
    }


    public function updateDefaultPaymentMethod($customerId, $paymentMethodId)
{
    // Create a Stripe client instance
    $stripe = new StripeClient(config('services.stripe.secret'));

    // Update the customer's default payment method
    $stripe->customers->update($customerId, [
        'invoice_settings' => [
            'default_payment_method' => $paymentMethodId
        ]
    ]);

    // You can return a response or perform any other actions as needed
    return response()->json(['message' => 'Default payment method updated successfully']);
}

public function processPayment(Request $request)
{
    Stripe::setApiKey(config('services.stripe.secret'));

    $paymentMethodId = $request->input('payment_method_id');
    $user =  auth()->user()->name;// Replace with how you get the authenticated user

    // Create a subscription or update customer's default payment method
    // Example: $user->newSubscription('default', 'plan_id')->create($paymentMethodId);

    return response()->json(['message' => 'Payment processed successfully']);
}

public function success(Request $request)
{
    // Process the payment success here
    // You can retrieve data from the $request object, such as the stripeToken, package, and amount

    // Return a response or redirect as needed
    return view('payment.success');
}


public function getPaymentIntent(Request $request)
{
    $amount = $flight->price;
    // Create a Stripe Payment Intent
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'currency' => 'usd', // Replace with your desired currency
        // Other payment details
    ]);

    return response()->json(['sessionId' => $paymentIntent->id]);
}



}
