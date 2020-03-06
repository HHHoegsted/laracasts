<?php

require 'Task.php';
require 'Database/connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::make();
$qb = new QueryBuilder($pdo);

$tasks = $qb->selectAll('tasks', 'Task ');

require 'index.view.php';
