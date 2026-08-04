# Remote Procedure Call (RPC)
RPC is an acronym for Remote Procedure Call. This happens when the program delegate the execution of a piece of code to a separate server.

PHP offers xml-rpc, grpc, protocolbuffers or protobuf and yar offers different standard way to do RPC.
```php
<?php

    $params = ['one'=>'red', 'two'=>'blue', 'three'=>'green'];

    $response = xmlrpc_encode($params);

    echo($response);

?>
```

## See Also

+ [grpc](https://pecl.php.net/package/gRPC)
+ [yar](https://pecl.php.net/package/yar)

Related : [gRPC (Google Remote Procedure Call)](gRPC (Google Remote Procedure Call)), [Application Programming Interface (API)](Application Programming Interface (API)), [Serialization](Serialization)
