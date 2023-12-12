.. _rpc:

Remote Procedure Call
---------------------

RPC is an acronym for Remote Procedure Call. This happens when the program delegate the execution of a piece of code to a separate server.

PHP offers xml-rpc, grpc, protocolbuffers and yar offers different standard way to do RPC.



.. code-block:: php
   
   <?php
   $params = array ( "one"=>"red","two"=>"blue","three"=>"green" );
   
   $response = xmlrpc_encode ( $params );
   
   echo ( $response );
   ?>


`Documentation <https://en.wikipedia.org/wiki/Remote_procedure_call>`__

See also `grpc <https://pecl.php.net/package/gRPC>`_, `yar <https://pecl.php.net/package/yar>`_

Related packages : `grpc/grpc <https://packagist.org/packages/grpc/grpc>`_
