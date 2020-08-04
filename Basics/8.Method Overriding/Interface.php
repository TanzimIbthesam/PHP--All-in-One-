<?php
interface MobileBanking
{
    public function mobilebanking();
}
interface CardPayment
{
    public function cardpayment();
}
interface giftCard
{
    public function giftcard();
}
class PaymentGateway implements MobileBanking, CardPayment, giftCard
{
    public function mobilebanking()
    {
        echo "Payments made with Bkash,Nagad and Rocket", "<br>";
    }
    public function cardpayment()
    {
        echo "Payments made with Debit and Credit card", "<br>";
    }
    public function giftcard()
    {
        echo "Payment made with giftcards", "<br>";
    }
}
$gateway = new PaymentGateway();
$gateway->mobilebanking();
$gateway->cardpayment();
$gateway->giftcard();
