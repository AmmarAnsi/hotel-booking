<?php

require_once (__DIR__ . '\\database\\Connection.php');
require_once (__DIR__ . '\\database\\QueryBuilder.php');

$q = new QueryBuilder(Connection::make());