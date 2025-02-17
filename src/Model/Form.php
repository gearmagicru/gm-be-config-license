<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\License\Model;

use Gm;
use Gm\Backend\Config\Model\ServiceForm;

/**
 * Модель данных конфигурации службы "Лицензия".
 * 
 * Cлужба {@see \Gm\License\License}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\License\Model
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'key' => 'key'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function saveConfig(?array $parameters): static
    {
        Gm::$app->license
            ->setKey($parameters['key'])
            ->save();
        return $this;
    }
}
