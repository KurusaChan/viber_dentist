<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once(__DIR__ . "/vendor/autoload.php");
(new \App\WebhookController())->run();