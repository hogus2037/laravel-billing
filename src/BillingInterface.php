<?php

namespace Hogus\LaravelBilling;

interface BillingInterface
{
    public function charge($channel, array $options);

    public function refund($channel, array $options);

    public function notify($channel, $options);

    public function transfer($channel, array $options);

    public function query($channel, array $options);

    public function queryRefund($channel, array $options);

    public function close($channel, array $options);

    public function queryTransfer($channel, array $options);

    public function downloadBill($channel, array $options);


}
