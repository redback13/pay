<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 商家留言回复
 *
 * @see https://opendocs.alipay.com/open/03szh7?ref=api
 */
class TradeComplainReplySubmit extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.tradecomplain.reply.submit';
    }
}