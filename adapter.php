<?php

class PayPal
{
    public function __construct()
    {

    }

    public function makePayment($amount)
    {
        echo "You pay: " . $amount;
    }
}

interface PaymentAdapter
{
    public function pay($amount);
}

class PayPalAdapter implements PaymentAdapter
{
    private $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function pay($amount)
    {
        $this->payPal->makePayment($amount);
    }
}

$payPal = new PayPalAdapter(new PayPal());
$payPal->pay(1000000);