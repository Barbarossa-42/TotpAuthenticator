<?php

use Oops\TotpAuthenticator\Security\TotpAuthenticator;
use Oops\TotpAuthenticator\Utils\TimeProvider;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$googleAuthenticator = new TotpAuthenticator(new TimeProvider());
Assert::match('~^[A-Z2-7]{32}$~', $seed1 = $googleAuthenticator->getRandomSecret());
Assert::notEqual($googleAuthenticator->getRandomSecret(), $seed1);
