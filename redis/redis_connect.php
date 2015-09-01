<?php
    echo "I'm ready!<br>";
    require './predis/autoload.php';
    //require __DIR__.'/predis/autoload.php'; // OK
    $redis = new Predis\Client(array(
        'scheme'=>'tcp',
        'host'=>'127.0.0.1',
        'port'=>5160,
    ));

    // 页面访问计数 
    if ($redis->exists('count') == 0) {
        $redis->set('count', 0);
    }
    echo "Reflesh time: ";
    $redis->incr('count');
    echo $redis->get('count');
    echo '<br>';

    //$redis->lpush('list', '4', '5', '6');
    //echo $redis->get('foo');
    //$redis->set('zzz2', 'test');
    /*
    try {
        echo $redis->get('list');
    } catch (Exception $e) {
        echo "Message: {$e->getMessage()}";
    }
    */

    // PHP关联数组 vs Redis字符串MSET/MGET
    $userName = array(
        'user:1:name' => 'Tom',
        'user:2:name' => 'Jack',
    );
    $redis->mset($userName);

    $users = array_keys($userName);
    print $users;
    //print_r($redis->mget($users));
    









