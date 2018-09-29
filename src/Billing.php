<?php
namespace Hogus\LaravelBilling;

/**
 * Class Billing
 * @package Hogus\LaravelBilling
 */
class Billing extends AbstractGateway
{

    /**
     * 统一下单
     * @param array $options
     * @param $channel
     * @return mixed
     */
    public function charge(array $options, $channel = null)
    {
        if($channel) $this->gateway = $channel;

        $data = $this->formatOptions($options);

        $response = $this->gateway($channel)->purchase($data)->send();

        return $response;

    }

    /**
     *  退款 原路返回
     * @param array $options
     * @param $channel
     * @return mixed
     */
    public function refund(array $options, $channel = null)
    {
        if($channel) $this->gateway = $channel;

        $data = $this->formatOptions($options);

        $response = $this->gateway($channel)->refund($data)->send();

        return $response;

    }

    /**
     * @param $options
     * @param $channel
     * @return array|bool
     */
    public function notify(array $options, $channel = null)
    {
        try {
            $gateway = $this->gateway($channel);

            $response = $gateway->completePurchase([
                'request_params' => $options
            ])->send();

            if ($response->isPaid()) {
                return $this->notifyFormatOptions($response->getRequestData());
            }


        } catch (\Exception $exception) {

            return false;
        }

    }

    /**
     * 企业付款
     * @param array $options
     * @param null $channel
     * @return mixed
     */
    public function transfer(array $options, $channel = null)
    {
        $gateway = $this->gateway($channel);

        $data = $this->formatOptions($options);
        $response = $gateway->transfer($data)->send();

        return $response->getData();

    }



}
