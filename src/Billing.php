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
    public function charge($channel, array $options)
    {
        return $this->gateway($channel)->purchase($options)->send();
    }

    /**
     *  退款 原路返回
     * @param array $options
     * @param $channel
     * @return mixed
     */
    public function refund($channel, array $options)
    {
        return $this->gateway($channel)->refund($options)->send();
    }

    /**
     * 支付回调
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function notify($channel, $options)
    {
        return $this->gateway($channel)->completePurchase([
            'request_params' => $options
        ])->send();

    }

    /**
     * 企业付款
     * @param array $options
     * @param null $channel
     * @return mixed
     */
    public function transfer($channel, array $options)
    {
        return $this->gateway($channel)->transfer($options)->send();
    }

    /**
     * 订单查询
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function query($channel, array $options)
    {
        return $this->gateway($channel)->query($options)->send();
    }

    /**
     * 订单退款查询
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function queryRefund($channel, array $options)
    {
        return $this->gateway($channel)->queryRefund($options)->send();
    }

    /**
     * 关闭订单
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function close($channel, array $options)
    {
        return $this->gateway($channel)->close($options)->send();
    }

    /**
     * 确认企业付款
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function queryTransfer($channel, array $options)
    {
        return $this->gateway($channel)->queryTransfer($options)->send();
    }

    /**
     * 下载报表
     * @param $channel
     * @param array $options
     * @return mixed
     */
    public function downloadBill($channel, array $options)
    {
        return $this->gateway($channel)->downloadBill($options)->send();
    }

}
