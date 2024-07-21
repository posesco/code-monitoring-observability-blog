<?php
$redisHost = getenv('SERVER_REDIS');
$redisPass = getenv('REDIS_PASS');
$redisPort = 6379;
$redisTimeout = 2.5;

$redis = new Redis();
try {
    $connected = $redis->connect($redisHost, $redisPort, $redisTimeout);
    if (!$connected) {
        throw new Exception('Could not connect to Redis at ' . $redisHost . ':' . $redisPort);
    }
    if ($redisPass) {
        $redis->auth($redisPass);
        $v_redis = $redis->info();
    }
} catch (RedisException $e) {
    echo 'RedisException: ' . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage() . "\n";
}
