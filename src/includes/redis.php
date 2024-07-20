<?php
$sessionHost = getenv('SERVER_REDIS_SESSION');
$cacheHost  = getenv('SERVER_REDIS_CACHE');
$redis_sesion    = new Redis();
$redis_sesion->connect($sessionHost, 6379);
$v_redis        = $redis_sesion->info();
$redis_cache     = new Redis();
$redis_cache->connect($cacheHost, 6379);
