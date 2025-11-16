<?php

namespace Telegram\Bot\Hypervel;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [],
            'commands' => [],
            'listeners' => [],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for telegram.',
                    'source' => __DIR__ . '/config/telegram.php',
                    'destination' => BASE_PATH . '/config/autoload/telegram.php',
                ],
            ],
        ];
    }
}