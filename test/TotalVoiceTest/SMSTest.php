<?php

namespace TotalVoiceTest;

use Minerva\TotalVoice\SMS\SMS;
use Minerva\TotalVoice\TotalVoice;

/**
 * Class SMSTest
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package TotalVoiceTest
 */
class SMSTest extends \PHPUnit_Framework_TestCase
{
    public function testSms()
    {
        TotalVoice::$token = '';

        $sms = new SMS();
        $sms->setNumber(123);
        $sms->setText("Sieg Heil Viktoria!");

        $response = TotalVoice::sendSms($sms);

        $this->assertEquals(200, $response->getStatusCode());
    }
}