.. _signature:
.. meta::
	:description:
		Signature: Signature has several meanings:  .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Signature
	:twitter:description: Signature: Signature has several meanings:  
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Signature
	:og:type: article
	:og:description: Signature has several meanings:  
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/signature.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Signature","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"Signature has several meanings:  ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Signature.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Signature
---------

Signature has several meanings:  

+ Method signature: the name, arguments, attributes and return type of a method or function
+ Digital signature: a piece of data that gives a recipient confidence that the message came from a specific sender
+ Email signature: a suffix for email messages, to conclude a email message with coordinates and social greetings.

.. code-block:: php
   
   <?php
   
       // The line below is the function signature
       function foo(string $message): string {
   
           // adapted from the PHP manual
           // fetch private key from file and ready it
           $pkeyid = openssl_pkey_get_private(file://src/openssl-0.9.6/php/sign/key.pem);
   
           // compute signature
           openssl_sign($message, $signature, $pkeyid);
   
           // free the key from memory
           openssl_free_key($pkeyid);        
           
           // This returns the signature of the message for 'php' user.
           // It may be checked with the public key
           return $signature;
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Digital_signature>`__

Related : :ref:`Method Signature <method-signature>`, :ref:`Digital Signature <digital-signature>`
