<?php


namespace DP\TemplateMethod;


class Order 
{
    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var Object
     */
    private $payment;

    /**
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @return Object
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Object $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }
}