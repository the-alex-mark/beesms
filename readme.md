# BEESMS

Официальный модуль для отправки смс-сообщений по протоколу **HTTP** через провайдера **Beeline**.

<br>

## Установка

Указание репозитория в файле `composer.json`:
```json
{
    "require": {
        "the_alex_mark/beesms": "*"
    },
    "repositories": [
    {
        "type": "git",
        "url": "https://github.com/the-alex-mark/beesms.git"
        }
    ]
}
```

<br>

Установка командой:
```bash
composer update the_alex_mark/beesms
```

<br>

## Использование

```php
$client = new BEESMS($username, $password);
$result = $client->post_message('Hello World!', $target, $sender);

// Результат в формате XML
echo $result;
```

<br>

## Дополнительная информация

- [Beeline](https://beeline.ru)
- [Beeline SMPP Docs](https://beeline.amega-inform.ru/support/smpp34_rus.pdf)
