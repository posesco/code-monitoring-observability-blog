<?php
require_once 'includes/mysql.php';
require_once 'includes/redis.php';
// require_once 'includes/mongo.php';
require_once 'controllers/helpers.php';
if (isset($_SESSION['user'])) {
    $redis->lpush($_SESSION['user']['user'], $_SERVER['REQUEST_URI']);
}
?>
<div class="info-header">
    <table border="0">
        <tr>
            <td>
                <?php
                echo '<strong>Web Server: </strong>' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'];
                echo '<br>';
                echo '<strong>DB SQL Version: </strong>' . mysqli_get_server_info($sqlDb);
                ?>
            </td>
            <td></td>
            <td>
                <?php
                echo '<strong>Redis version: </strong>' . $v_redis["redis_version"];
                echo '<br>';
                echo '<strong>Redis php-ext version: </strong>' . phpversion('redis');
                echo '<br>';
                ?>
            </td>
            <td></td>
            <td>
                <?php
                echo '<strong>Mongo php-ext version: </strong>'. phpversion('mongodb');
                echo '<br>';
                echo '<strong>Mysqli php-ext version: </strong>'. phpversion('mysqli');
                echo '<br>';
                ?>
            </td>
        </tr>
    </table>
</div>