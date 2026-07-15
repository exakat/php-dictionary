.. _digital-signature:
.. meta::
	:description:
		Digital Signature: A digital signature is a method to ensure that a message was sent by a specific recipient.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Digital Signature
	:twitter:description: Digital Signature: A digital signature is a method to ensure that a message was sent by a specific recipient
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Digital Signature
	:og:type: article
	:og:description: A digital signature is a method to ensure that a message was sent by a specific recipient
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/digital-signature.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/digital-signature.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/digital-signature.ini.html","name":"Digital Signature","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A digital signature is a method to ensure that a message was sent by a specific recipient","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Digital Signature.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Digital Signature
-----------------

A digital signature is a method to ensure that a message was sent by a specific recipient. It uses mathematical methods to combine the original message, plain text or not, with a private key, to produce a piece of data which may be verified later with the public key. Then, the pair private key and public key gives a high level of confidence that the message was coming from the known sender.

PHP can sign data with ``openssl`` and ``sodium`` extensions. 

A checksum can be considered a signature without a private key: it computes a short version of a file, and is difficult to reproduce without the original data. Any attempt at modifying the original data can then be detected, although the checksum itself has now to be trusted.

A signature is distinct from the sign of a number, ``+`` or ``-``.


.. code-block:: php
   
   <?php
   
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

Related : :ref:`Method Signature <method-signature>`, :ref:`Signature <signature>`, :ref:`Sign <sign>`, :ref:`Checksum <checksum>`
