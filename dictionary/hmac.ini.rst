.. _hmac:
.. _hash-based-message-authentication-code:
.. meta::
	:description:
		HMAC: HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HMAC
	:twitter:description: HMAC: HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HMAC
	:og:type: article
	:og:description: HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hmac.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"HMAC","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 17:09:04 +0000","dateModified":"Tue, 02 Jun 2026 17:09:04 +0000","description":"HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HMAC.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HMAC
----

HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions. It combines a secret key with the message to produce a fixed-size digest, providing both data integrity and authenticity.

HMAC is defined in RFC 2104 and is widely used in API authentication, JWT signatures, and webhook verification.

In PHP, HMAC is computed with ``hash_hmac()``, which accepts a hashing algorithm, the message, and a secret key.

.. code-block:: php
   
   <?php
   
   $key     = 'secret-key';
   $message = 'important data';
   
   $hmac = hash_hmac('sha256', $message, $key);
   
   echo $hmac; // 64-character hexadecimal string
   
   ?>


`Documentation <https://www.php.net/manual/en/function.hash-hmac.php>`__

See also `RFC 2104 - HMAC: Keyed-Hashing for Message Authentication <https://datatracker.ietf.org/doc/html/rfc2104>`_.

Related : :ref:`Cryptography <cryptography>`, :ref:`Hash <hash>`, , :ref:`Algorithm <algorithm>`
