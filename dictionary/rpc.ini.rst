.. _rpc:
.. meta::
	:description:
		Remote Procedure Call (RPC): RPC is an acronym for Remote Procedure Call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Remote Procedure Call (RPC)
	:twitter:description: Remote Procedure Call (RPC): RPC is an acronym for Remote Procedure Call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Remote Procedure Call (RPC)
	:og:type: article
	:og:description: RPC is an acronym for Remote Procedure Call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rpc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rpc.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rpc.ini.html","name":"Remote Procedure Call (RPC)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"RPC is an acronym for Remote Procedure Call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Remote Procedure Call (RPC).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Remote Procedure Call (RPC)
---------------------------

RPC is an acronym for Remote Procedure Call. This happens when the program delegate the execution of a piece of code to a separate server.

PHP offers xml-rpc, grpc, protocolbuffers or protobuf and yar offers different standard way to do RPC.

.. code-block:: php
   
   <?php
   
       $params = ['one'=>'red', 'two'=>'blue', 'three'=>'green'];
   
       $response = xmlrpc_encode($params);
   
       echo($response);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Remote_procedure_call>`__

See also `grpc <https://pecl.php.net/package/gRPC>`_ and `yar <https://pecl.php.net/package/yar>`_.

Related : :ref:`gRPC (Google Remote Procedure Call) <grpc>`, :ref:`Application Programming Interface (API) <api>`, :ref:`Serialization <serialization>`

Related packages : `grpc/grpc <https://packagist.org/packages/grpc/grpc>`_
