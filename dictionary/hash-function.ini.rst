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
