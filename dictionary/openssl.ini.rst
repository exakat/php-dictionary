.. _openssl:
.. meta::
	:description:
		OpenSSL: The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OpenSSL
	:twitter:description: OpenSSL: The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OpenSSL
	:og:type: article
	:og:description: The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/openssl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"OpenSSL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Jul 2025 20:00:04 +0000","dateModified":"Sun, 27 Jul 2025 20:00:04 +0000","description":"The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OpenSSL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OpenSSL
-------

The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication. 

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.


.. code-block:: php
   
   <?php
   // Example from php.net documentation
   // $data is assumed to contain the data to be signed
   
   // fetch private key from file and ready it
   $pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");
   
   // compute signature
   openssl_sign($data, $signature, $pkeyid);
   
   // free the key from memory
   openssl_free_key($pkeyid);
   ?>


`Documentation <https://www.openssl.org/>`__

See also `Encryption using PHP and OpenSSL <https://www.virendrachandak.com/techtalk/encryption-using-php-openssl/>`_

Related : :ref:`Cryptography <cryptography>`, :ref:`libsodium <libsodium>`
