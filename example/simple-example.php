<?php

use Dsblack\Dserror\DescriptionError;

include __DIR__."/../vendor/autoload.php";

echo (new DescriptionError)->setGateway('PayPal')
->setError('404')
->setLenguage('de')
->handle();