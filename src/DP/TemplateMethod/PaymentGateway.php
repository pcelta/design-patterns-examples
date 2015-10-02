<?php


namespace DP\TemplateMethod;


abstract class PaymentGateway
{

    /**
     * @param string $paymentType
     * @param Object $payment
     * @return mixed
     */
    abstract public function createPayLoad($paymentType, $payment);

    /**
     * @param $payLoad
     * @return Reserve
     */
    abstract public function reserve($payLoad);

    /**
     * @param Reserve $reserve
     * @return Result
     */
    abstract public function capture(Reserve $reserve);

    /**
     * @param Order $order
     * @return bool
     */
    public function pay(Order $order)
    {
        $payment = $order->getPayment();
        $paymentType = $order->getPaymentType();

        $payLoad = $this->createPayLoad($paymentType, $payment);
        $reserve = $this->reserve($payLoad);

        if (!$reserve->isSuccess()) {

            return false;
        }

        $result = $this->capture($reserve);

        return $result->isSuccess();
    }
}