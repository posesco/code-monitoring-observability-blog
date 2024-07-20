<?php
$servidor_sesion = getenv('SERVER_REDIS_SESSION');
$servidor_cache  = getenv('SERVER_REDIS_CACHE');
$redis_sesion    = new Redis();
$redis_sesion->connect($servidor_sesion, 6379);
$v_redis        = $redis_sesion->info();
$redis_cache     = new Redis();
$redis_cache->connect($servidor_cache, 6379);
