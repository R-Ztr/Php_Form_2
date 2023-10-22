<?php
require_once 'vendor/autoload.php';

use Gipetto\CowSay\Cow;

$cow = new Cow();
echo $cow->say("Bonjour, je suis une vache !");
