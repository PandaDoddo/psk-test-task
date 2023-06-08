<?php

namespace psk;

use JsonException;
use psk\Exceptions\BlockTypeNotFoundException;
use psk\Exceptions\ParameterNotFoundException;
use Psr4AutoloaderClass;

require_once './src/Psr4AutoloaderClass.php';

// instantiate the loader
$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('psk', realpath(__DIR__) . DIRECTORY_SEPARATOR . 'src');

try {
    echo (new JsonToHtml(file_get_contents('./data.json')))->getHtml();
} catch (JsonException|BlockTypeNotFoundException|ParameterNotFoundException $e) {
    exit($e->getMessage());
}
?>

<style>
    .size-medium {
        padding: 8px;
    }

    .fontSize-large {
        font-size: 24px;
    }

    .style-custom {
        border-radius: 5px;
    }
</style>