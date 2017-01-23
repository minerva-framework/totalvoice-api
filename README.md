# totalvoice-api
Biblioteca para integração com a API do TotalVoice

```php
$sms = new SMS();
$sms->setNumber(44999999999);
$sms->setText("Sieg Heil Viktoria!");

TotalVoice::$token = '...';
$response = TotalVoice::sendSms($sms);
```
