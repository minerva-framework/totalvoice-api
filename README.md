# totalvoice-api
Biblioteca para integração com a API do TotalVoice

`php composer.phar require minerva-framework/totalvoice-api`

Exemplo de utilização
```php
$sms = new SMS();
$sms->setNumber(44999999999);
$sms->setText("Olá, Bom dia!");

TotalVoice::$token = '...';
$response = TotalVoice::sendSms($sms);
```
