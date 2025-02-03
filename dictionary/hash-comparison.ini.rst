.. _hash-comparison:
.. meta::
	:description:
		Hash Comparisons: Cryptographic hashes are usually represented by strings in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hash Comparisons
	:twitter:description: Hash Comparisons: Cryptographic hashes are usually represented by strings in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hash Comparisons
	:og:type: article
	:og:description: Cryptographic hashes are usually represented by strings in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-comparison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Hash Comparisons","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Cryptographic hashes are usually represented by strings in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hash Comparisons.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hash Comparisons
----------------

Cryptographic hashes are usually represented by strings in PHP. As such, they are subjects to type juggling, and they should be compared with the identity operator, or a dedicated function.

.. code-block:: php
   
   <?php
   $expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
   $correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
   $incorrect = crypt('apple', '$2a$07$usesomesillystringforsalt$');
   
   var_dump(hash_equals($expected, $correct));
   var_dump(hash_equals($expected, $incorrect));
   
   var_dump($expected == $correct));
   var_dump($expected == $incorrect));
   
   var_dump($expected === $correct));
   var_dump($expected === $incorrect));
   
   ?>


See also `Can you find the bug in this piece of php code? <https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l>`_
