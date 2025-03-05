.. _hash-function:
.. meta::
	:description:
		hash() Function: hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hash() Function
	:twitter:description: hash() Function: hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: hash() Function
	:og:type: article
	:og:description: hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"hash() Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash() Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


hash() Function
---------------

hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms.

.. code-block:: php
   
   
   <?php
   
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>
   


`Documentation <https://www.php.net/manual/en/intro.hash.php>`__

Related : :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Map <map>`
