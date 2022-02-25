<?php

/*
class PaymentGateway
{
    public function charge($token, $amount)
    {
        $payment = $this->service->charge($token, $amount);

        if (!$payment->success) {
            return false;
        }
    }
}

$gateway = new PaymentGateway();


if (!$gateway->charge("123", 25.00)) {
    die("payment failed");
}
*/

class PaymentGatewayException extends Exception{

}

class GatewayPaymentFailedExceptions extends PaymentGatewayException
{
    protected $message = "Payment failed";
}

class InvalidGatewayTokenExceptions extends PaymentGatewayException
{
    protected $message = "Invalid token";
}

class PaymentGatewayEx
{
    public function charge($token, $amount)
    {
//        $payment = $this->service->charge($token, $amount);

        if (1) {
            throw new InvalidGatewayTokenExceptions();
        }
        if (1) { //!$payment->success
            throw new GatewayPaymentFailedExceptions();
        }
    }
}

$gateway = new PaymentGatewayEx();

try {
    $gateway->charge("123", 25.00);
    echo "Update subscription";
} catch (PaymentGatewayException $e) {
    die($e->getMessage());
} finally {
    die("Finally...");
}