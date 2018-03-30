<?php namespace Acme;

interface PaymentMethodInterface {
    public function acceptPayment($receipt);
}

class AcceptCash implements PaymentMethodInterface {
    public function acceptPayment($receipt)
    {
        // Logic to accept a cash payment...
    }
}

class Checkout {
    public function begin(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment($receipt);
    }

    // This does not conform to the open closed principle 
    // if we wanted to add something new to the class
    // to accept cards we would have to do something like this:
    // public function acceptCreditCard()
    // {
    //     // Accept the credit card...
    // }
    //
    // public function acceptCash() 
    // {
    //     // Accept the cash...
    // }
    // Instead we want to create an interface and then
    // flip the dependencies.
}

