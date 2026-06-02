.. _api:
.. meta::
	:description:
		Application Programming Interface (API): An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Application Programming Interface (API)
	:twitter:description: Application Programming Interface (API): An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Application Programming Interface (API)
	:og:type: article
	:og:description: An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/api.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Application Programming Interface (API)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 10:05:37 +0000","dateModified":"Thu, 28 May 2026 10:05:37 +0000","description":"An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Application Programming Interface (API).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Application Programming Interface (API)
---------------------------------------

An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service.

There are several API protocols: ``REST``, ``RPC``, ``gRPC``, ``GraphQL``, ``SOAP``, etc. 

They are sometimes supported directly by PHP, with extensions, or via components. There are usually a client version, used to connect to a remote API, and a server version, to host a service based on this protocol.

.. code-block:: php
   
   <?php
   
   // Consuming a REST API with cURL
   $ch = curl_init('https://api.example.com/users/1');
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, [
       'Authorization: Bearer your-api-token',
       'Accept: application/json',
   ]);
   
   $response = curl_exec($ch);
   $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   curl_close($ch);
   
   if ($statusCode === 200) {
       $data = json_decode($response, true);
       echo $data['name'];
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/API>`__

See also `PHP: HTTP context options <https://www.php.net/manual/en/context.http.php>`_ and `PHP: cURL <https://www.php.net/manual/en/book.curl.php>`_.

Related : :ref:`REST API <rest-api>`, :ref:`GraphQL <graphql-api>`, :ref:`Simple Object Access Protocol (SOAP) <soap>`, :ref:`Remote Procedure Call (RPC) <rpc>`, :ref:`gRPC (Google Remote Procedure Call) <grpc>`, :ref:`Library <library>`, :ref:`Swagger <swagger>`, :ref:`WebRTC <webrtc>`, :ref:`Wrapper Pattern <wrapper-pattern>`

Related packages : `webonyx/graphql-php <https://packagist.org/packages/webonyx/graphql-php>`_, `nuwave/lighthouse <https://packagist.org/packages/nuwave/lighthouse>`_
