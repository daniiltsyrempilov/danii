<?php

$pdo = new PDO("pgsql:host=postgres; port=5432; dbname=laravel", "root", "root");

$pdo->exec("INSERT INTO users VALUES (2, 'test')");