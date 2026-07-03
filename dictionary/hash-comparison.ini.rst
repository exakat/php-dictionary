.. _hash-comparison:
.. meta::
	:description:
		Hash Comparisons: Cryptographic hashes are usually represented by strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hash Comparisons
	:twitter:description: Hash Comparisons: Cryptographic hashes are usually represented by strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hash Comparisons
	:og:type: article
	:og:description: Cryptographic hashes are usually represented by strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-comparison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hash Comparisons","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:02:53 +0000","dateModified":"Fri, 03 Jul 2026 08:02:53 +0000","description":"Cryptographic hashes are usually represented by strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hash Comparisons.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hash Comparisons
----------------

Cryptographic hashes are usually represented by strings. As such, they are subjects to type juggling, and they should be compared with the identity operator, or a dedicated function.

.. code-block:: php
   
   <?php
   
   $expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
   $correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
   $incorrect = crypt('apple', '$2a$07$usesomesillystringforsalt$');
   
   var_dump(hash_equals($expected, $correct));
   var_dump(hash_equals($expected, $incorrect));
   
   var_dump($expected == $correct);
   var_dump($expected == $incorrect);
   
   var_dump($expected === $correct);
   var_dump($expected === $incorrect);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.hash-equals.php>`__

See also `Can you find the bug in this piece of php code? <https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l>`_.

Related : :ref:`Hash <hash>`, :ref:`Type Juggling <type-juggling>`, :ref:`Identity Comparison <identity-comparison>`, :ref:`Strict Comparison <strict-comparison>`, :ref:`hash_equals() <hash_equals>`, :ref:`Security <security>`
