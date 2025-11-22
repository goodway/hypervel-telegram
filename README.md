
<p align="center">
<a href="https://github.com/goodway/hypervel-telegram/actions"><img src="https://img.shields.io/github/actions/workflow/status/irazasyed/telegram-bot-sdk/ci.yml?style=for-the-badge" alt="Build Status"/></a>
<a href="https://github.com/goodway/hypervel-telegram/releases"><img src="https://img.shields.io/github/release/goodway/hypervel-telegram.svg?style=for-the-badge" alt="Latest Version"/></a>
<a href="https://packagist.org/packages/goodway/hypervel-telegram"><img src="https://img.shields.io/packagist/dt/goodway/hypervel-telegram.svg?style=for-the-badge" alt="Total Downloads"/></a>
</p>

Telegram Bot API - PHP SDK
==========================

> Telegram Bot PHP SDK lets you develop Telegram Bots in PHP easily! Supports Laravel out of the box.
>
> [Telegram Bot API][link-telegram-bot-api] is an HTTP-based interface created for developers keen on building bots for Telegram.
> 
> To learn more about the Telegram Bot API, please consult the [Introduction to Bots][link-telegram-bot-api] and [Bot FAQ](https://core.telegram.org/bots/faq) on official Telegram site.
>


## Are You Using Telegram Bot SDK?

If you're using this SDK to build your Telegram Bots or have a project that's relevant to this SDK, We'd love to know and share it with the world.


## 📦 Installation

Install via Composer:

```bash
composer require goodway/hypervel-telegram
```

Next, you should publish the HypervelTelegram configuration file using the vendor:publish Artisan command. Configuration file will be placed in your application's config directory:

```
php artisan vendor:publish "Telegram\Bot\Hypervel\TelegramServiceProvider"
```

## 🧪 Usage Example

```php
use Telegram\Bot\Hypervel\Facades\Telegram;

$response = Telegram::sendMessage([
	'chat_id' => 'CHAT_ID',
	'text' => 'Hello World'
]);

$messageId = $response->getMessageId();
```

## 🧪 Advanced Usage Example With InlineKeyboard

```php
use Telegram\Bot\Hypervel\Facades\Telegram;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Keyboard\Button;

$buttons = [
     new Button()->setText('Button 1')->setCallbackData('btn1_callback'),
     new Button()->setText('Button 2')->setCallbackData('btn2_callback'),
];

$keyboard = new Keyboard()->inline()->row($buttons);
$replyMarkup = json_encode($keyboard->toArray());
        
$response = Telegram::sendMessage([
    'chat_id' => 'CHAT_ID',
    'text' => 'Hello World',
    'parse_mode' => 'MarkdownV2',
    'reply_markup' => $replyMarkup,
]);

$messageId = $response->getMessageId();
```


## 🧠 Why Hypervel?

Hypervel is a modern PHP framework built for performance and scalability. This Telegram client is built with Hypervel in mind, ensuring smooth compatibility and optimal performance within your Hypervel-based applications.

## 🔄 Migration Note

This client is a **port** of the popular [telegram-bot-sdk](https://github.com/irazasyed/telegram-bot-sdk) library, which was originally designed for PHP & Laravel. I have adapted and optimized this version specifically for Hypervel framework compatibility, maintaining all core functionality while ensuring seamless integration with Hypervel's architecture.


## Additional information

Any issues, feedback, suggestions or questions please use issue tracker [here][link-issues].

## Contributing

Thank you for considering contributing to the project. Please review the [CONTRIBUTING](https://telegram-bot-sdk.readme.io/docs/contributing) guidelines before submitting any pull requests.

## Credits

- [Serge Goodway][link-author]
- [All Contributors][link-contributors]


## Disclaimer

This project and its author are neither associated nor affiliated with [Telegram](https://telegram.org/) in any way. 
Please see the [License][link-license] for more details.

## License

This project is released under the [BSD 3-Clause][link-license] License.

[link-author]: https://github.com/goodway
[link-repo]: https://github.com/goodway/hypervel-telegram
[link-issues]: https://github.com/goodway/hypervel-telegram/issues
[link-contributors]: https://github.com/goodway/hypervel-telegram/contributors
[link-license]: https://github.com/goodway/hypervel-telegram/blob/develop/LICENSE.md
[link-telegram-bot-api]: https://core.telegram.org/bots


## 🛠️ Coming Soon

- Better integration with Hypervel
- Improved documentation and examples
- Enhanced error handling and logging