<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 商家处理交易投诉
 *
 * @see https://opendocs.alipay.com/open/035o4f?ref=api
 */
class TradeComplainFeedbackSubmit extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.tradecomplain.feedback.submit';
    }
}