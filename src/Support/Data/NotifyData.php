<?php
/**
 * Created by PhpStorm.
 * User: wugang
 * Date: 2018/9/29
 * Time: 下午4:07
 */

namespace Hogus\LaravelBilling\Support\Data;

/**
 * 支付回调 统一数据结构返回
 * Class NotifyData
 * @package Hogus\LaravelBilling\Support\Data
 */
class NotifyData extends BaseData
{

    protected $values = [];

    /**
     * @param $value
     */
    public function setOutTradeNo($value)//out_trade_no
    {
        $this->values['order_no'] = $value;
    }

    /**
     * @param $value
     */
    public function setTotalFee($value)//total_fee
    {
        $this->values['price'] = $value / 100;
    }

    /**
     * @param $value
     */
    public function setAttach($value)
    {
        $this->values['attach'] = $value;
    }

    /**
     * @param $value
     */
    public function setBankType($value)
    {
        $this->values['bank_type'] = $value;
    }

    /**
     * @param $value
     */
    public function setFeeType($value)
    {
        $this->values['fee_type'] = $value;
    }

    /**
     * @param $value
     */
    public function setTransactionId($value)
    {
        $this->values['transaction_id'] = $value;
    }

    /**
     * @param $value
     */
    public function setChannel($value)
    {
        $this->values['channel'] = $value;
    }

    /**
     * @param $value
     */
    public function setOpenid($value)
    {
        $this->values['openid'] = $value;
    }

    /**
     * @param $value
     */
    public function setTimeEnd($value)
    {
        $this->values['time_end'] = $value;
    }

    /**
     * @param $value
     */
    public function setTradeType($value)
    {
        $this->values['trade_type'] = $value;
    }

    public function toArray()
    {
        return $this->values;
    }
}
