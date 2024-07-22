<?php
$host = getenv('SERVER_MONGO');
$user  = getenv('MONGO_INITDB_ROOT_USERNAME');
$pass = getenv('MONGO_INITDB_ROOT_PASSWORD');
$conect = new MongoDB\Driver\Manager("mongodb://$user:$pass@$host");
