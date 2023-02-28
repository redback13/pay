<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 查询交易投诉列表
 *
 * @see https://opendocs.alipay.com/open/035o4d?ref=api
 */
class TradeComplainBatchQuery extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.tradecomplain.batchquery';
    }
}