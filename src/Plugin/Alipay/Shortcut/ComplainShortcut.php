<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\Shortcut;

use Yansongda\Pay\Contract\ShortcutInterface;
use Yansongda\Pay\Exception\Exception;
use Yansongda\Pay\Exception\InvalidParamsException;
use Yansongda\Pay\Plugin\Alipay\merchant\TradeComplainQuery;
use Yansongda\Supports\Str;

/**
 * 交易支付投诉处理
 */
class ComplainShortcut implements ShortcutInterface
{

    /**
     * @throws InvalidParamsException
     */
    public function getPlugins(array $params): array
    {
        $typeMethod = Str::camel($params['_type'] ?? 'default').'Plugins';

        if (method_exists($this, $typeMethod)) {
            return $this->{$typeMethod}();
        }

        throw new InvalidParamsException(Exception::SHORTCUT_MULTI_TYPE_ERROR, "Complain type [$typeMethod] not supported");
    }

    protected function defaultPlugins(): array
    {
        return [
            TradeComplainQuery::class,
        ];
    }
}