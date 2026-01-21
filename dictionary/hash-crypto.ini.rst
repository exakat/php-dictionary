.. _hash-crypto:
.. meta::
	:description:
		Cryptographic Hash: A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cryptographic Hash
	:twitter:description: Cryptographic Hash: A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cryptographic Hash
	:og:type: article
	:og:description: A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-crypto.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cryptographic Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:57:00 +0000","dateModified":"Sat, 17 Jan 2026 06:57:00 +0000","description":"A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cryptographic Hash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cryptographic Hash
------------------

A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert.

Some famous algorithms : MD5, SHA1, SHA256, HAVAL, Bcrypt.

Other algorithms include crc32(), though it is not considered a cryptography. 

While the extension 'hash' only process hashes, there are other extensions which offer these features : openssl, sodium and password hashing. Mhash and mcrypt are older PHP extensions, which are now discontinued.

.. code-block:: php
   
   <?php
   
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>


`Documentation <https://www.php.net/manual/en/intro.hash.php>`__

Related : :ref:`hash() Function <hash-function>`, :ref:`Hash <hash>`, :ref:`Array <array>`, :ref:`Map <map>`
