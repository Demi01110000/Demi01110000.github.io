<?php

// Definice konstanty, kterou lze následně volat na jakémkoliv místě aplikace
// Presunuto do Konfiguracni tridy Configurator
// define('PROJECT_NAME', 'Simple PHP APP');

// Aktivujeme ladici nastroj
// Více na https://tracy.nette.org/cs/
require_once './tracy/src/tracy.php';
use Tracy\Debugger;
Debugger::enable(Debugger::DETECT, __DIR__ . '/log');

// Zpřístupní soubor třídy Application
require_once './Application.php';

// Zpřístupní třídu pro konfiguraci aplikace
require_once './config/Configurator.php';

// Vytvorim objekt tridy Application
$app = new Application();

// Predam rizeni aplikace
$app->run();

// chcíp pes