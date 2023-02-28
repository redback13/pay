<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\merchant;

use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;

/**
 * 商户上传处理图片
 *
 * @see https://opendocs.alipay.com/open/035o4e?ref=api
 */
class ImageUpload extends GeneralPlugin
{
    protected function getMethod(): string
    {
        return 'alipay.merchant.image.upload';
    }
}