.. _libsodium:
.. _sodium:
.. meta::
	:description:
		libsodium: Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: libsodium
	:twitter:description: libsodium: Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: libsodium
	:og:type: article
	:og:description: Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/libsodium.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/libsodium.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/libsodium.ini.html","name":"libsodium","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/libsodium.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


libsodium
---------

Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.

.. code-block:: php
   
   <?php
   //Generate a random key for sodium_crypto_auth
   $key = sodium_crypto_auth_keygen();
   
   ?>


`Documentation <https://libsodium.gitbook.io/doc/>`__

See also `libsodium on github <https://github.com/jedisct1/libsodium.git>`_.

Related : :ref:`Cryptography <cryptography>`, :ref:`OpenSSL <openssl>`
