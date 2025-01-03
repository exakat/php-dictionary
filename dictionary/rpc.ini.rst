.. _rpc:
.. meta::
	:description:
		Remote Procedure Call: RPC is an acronym for Remote Procedure Call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Remote Procedure Call
	:twitter:description: Remote Procedure Call: RPC is an acronym for Remote Procedure Call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Remote Procedure Call
	:og:type: article
	:og:description: RPC is an acronym for Remote Procedure Call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rpc.ini.html
	:og:locale: en


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
