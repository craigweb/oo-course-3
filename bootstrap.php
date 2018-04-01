<?php

require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';

// Made up details that I would only ever use locally because I'm not in the habit of sharing my details online!
$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'craigweb',
    'db_pass' => 'super8'
);
