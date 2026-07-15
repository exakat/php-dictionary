.. _message-digest:
.. meta::
	:description:
		Message Digest: A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Message Digest
	:twitter:description: Message Digest: A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Message Digest
	:og:type: article
	:og:description: A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/message-digest.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/message-digest.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/message-digest.ini.html","name":"Message Digest","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:41:49 +0000","dateModified":"Mon, 13 Jul 2026 18:41:49 +0000","description":"A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Message Digest.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Message Digest
--------------

A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message. The term comes from the ``MD`` family of algorithms, ``MD2``, ``MD4`` and ``MD5``, but it is now used generically for the result of any cryptographic hash.

A message digest acts as a fingerprint: it is small, deterministic, and any change to the original message, even a single bit, produces a completely different digest. This makes digests useful to detect tampering, verify downloads, and sign data.

Unlike a checksum, which mainly targets accidental corruption, a message digest is designed to resist deliberate manipulation: it should be computationally infeasible to find two different messages producing the same digest, an event called a collision, or to reconstruct a message from its digest alone.

Message digests are produced with the ``hash()`` function, or its dedicated shortcuts such as ``md5()`` and ``sha1()``. Older algorithms like ``MD5`` and ``SHA1`` are now considered broken for security purposes, and ``SHA256`` or better should be preferred.

.. code-block:: php
   
   <?php
   
       // generic access, through the hash extension
       echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
   
       // dedicated shortcut functions
       echo md5('The quick brown fox jumped over the lazy dog.');
       echo sha1('The quick brown fox jumped over the lazy dog.');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.hash.php>`__

See also `Cryptographic hash function <https://en.wikipedia.org/wiki/Cryptographic_hash_function>`_.

Related : :ref:`Hashing <hashing>`, :ref:`Hash <hash>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Message Digest Algorithm 5 (MD5) <md5>`, :ref:`Secure Hash Algorithm (SHA) <sha>`, :ref:`Checksum <checksum>`, :ref:`Cryptography <cryptography>`, :ref:`Weak Cryptography <weak-cryptography>`, :ref:`Digital Signature <digital-signature>`
