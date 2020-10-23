<?php
$servidor_mongo = getenv('SERVER_MONGO');
$usuario_mongo  = getenv('MONGO_INITDB_ROOT_USERNAME');
$password_mongo = getenv('MONGO_INITDB_ROOT_PASSWORD');
$manager        = new MongoDB\Driver\Manager("mongodb://$usuario_mongo:$password_mongo@$servidor_mongo");
