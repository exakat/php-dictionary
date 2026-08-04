.. _hash-function:
.. meta::
	:description:
		hash() Function: ``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hash() Function
	:twitter:description: hash() Function: ``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: hash() Function
	:og:type: article
	:og:description: ``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash-function.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash-function.ini.html","name":"hash() Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:11:48 +0000","dateModified":"Tue, 04 Aug 2026 11:11:48 +0000","description":"``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash() Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


hash() Function
---------------

``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not.

It takes an algorithm name, such as ``md5``, ``sha256``, ``sha3-512``, ``crc32``, or ``ripemd160``, and a string of data, and returns a hexadecimal digest by default, or raw binary output when the optional third argument is set to ``true``. The list of algorithms available at runtime can be retrieved with ``hash_algos()``, since it depends on how PHP was built.

``hash()`` is meant for general-purpose hashing, such as checksums, cache keys, or data fingerprinting, and should not be used to store passwords: for that, PHP provides the dedicated ``password_hash()`` and ``password_verify()`` functions, which apply a slow, salted, adaptive algorithm designed to resist brute-force attacks. Fast general hashes like MD5 or SHA-1 are also considered cryptographically weak for security-sensitive purposes such as digital signatures.

.. code-block:: php
   
   <?php
   
       echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
       // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>


`Documentation <https://www.php.net/manual/en/book.hash.php>`__

Related : :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Map <map>`
