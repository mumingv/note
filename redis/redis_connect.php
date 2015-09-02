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

    // MSET/MGET vs PHP关联数组
    $userName = array(
        'user:1:name' => 'Tom',
        'user:2:name' => 'Jack',
    );
    $redis->mset($userName);

    $users = array_keys($userName);
    print "users: ";
    print $users;
    echo '<br>';
    //print_r($redis->mget($users));

    // HMSET/HMGET/HGETALL
    $user1 = array(
        'name' => 'Tom',
        'age' => '32'    
    );
    $redis->hmset('user:1', $user1);

    $user = $redis->hgetall('user:1');
    echo "HGETALL: "; 
    echo $user['name'];
    echo '<br>';

    // LPUSH
    $items = array('a', 'b');
    $redis->lpush('list2', $items);

    // SADD
    $items2 = array('a', 'b');
    $redis->sadd('set2', $items2);
    
    // ZADD
    $itemScore = array(
        'Tom' => '100',
        'Jack' => '89'
    );
    $redis->zadd('zset2', $itemScore);

    // SORT 
    $redis->sort('mylist', array(
        'sort' => 'desc',
        'store'=>'mylistsort'    
    ));














