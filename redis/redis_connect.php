<?php
    echo "I'm ready!<br>";
    require './predis/autoload.php';
    //require __DIR__.'/predis/autoload.php'; // OK
    $redis = new Predis\Client(array(
        'scheme'=>'tcp',
        'host'=>'127.0.0.1',
        'port'=>5160,
    ));

    echo $redis->get('foo');
?>
