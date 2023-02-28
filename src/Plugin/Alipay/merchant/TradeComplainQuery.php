<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 查询单条交易投诉详情
 *
 * @see https://opendocs.alipay.com/open/035o4c?ref=api
 */
class TradeComplainQuery extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.tradecomplain.query';
    }
}