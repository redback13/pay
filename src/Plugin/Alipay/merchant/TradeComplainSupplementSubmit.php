<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 商家补充凭证
 *
 * @see https://opendocs.alipay.com/open/03t1js?ref=api
 */
class TradeComplainSupplementSubmit extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.tradecomplain.supplement.submit';
    }
}