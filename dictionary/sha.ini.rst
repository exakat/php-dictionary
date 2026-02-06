.. _sha:
.. meta::
	:description:
		Secure Hash Algorithm (SHA): Secure Hash Algorithm (SHA), is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Secure Hash Algorithm (SHA)
	:twitter:description: Secure Hash Algorithm (SHA): Secure Hash Algorithm (SHA), is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Secure Hash Algorithm (SHA)
	:og:type: article
	:og:description: Secure Hash Algorithm (SHA), is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sha.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Secure Hash Algorithm (SHA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 15:32:07 +0000","dateModified":"Thu, 05 Feb 2026 15:32:07 +0000","description":"Secure Hash Algorithm (SHA), is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Secure Hash Algorithm (SHA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Secure Hash Algorithm (SHA)
---------------------------

Secure Hash Algorithm (SHA), is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest.

Key properties

+ Deterministic: same input gives the same output
+ One-way: it is not possible to go back to the original data, unless may be with brute-force or rainbow tables
+ Collision resistant: it is hard to find two inputs with the same hash
+ Fast to compute

Common SHA versions

+ SHA-1: a 160-bit hash. It is now considered insecure and should not be used anymore
+ SHA-2:

  . SHA-224
  . SHA-256 (very common)
  . SHA-384
  . SHA-512

+ SHA-3: future version

The SHA hashes re commonly used for password hashing and storage (although it is replaced by more modern methods, like bcrypt), file integrity check, signature, git commits (SHA-1).

.. code-block:: php
   
   <?php
   
       // recommended SHA256 for password
       password_hash($password, PASSWORD_DEFAULT);
   
       // raw SHA256 
       echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
       
   
   ?>


`Documentation <https://www.php.net/manual/en/function.hash.php>`__

See also https://datatracker.ietf.org/doc/html/rfc3174

Related : :ref:`git <git>`, :ref:`Hash <hash>`
