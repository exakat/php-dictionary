.. _ctype:
.. meta::
	:description:
		Ctype: `ctype` is a set of functions used for character type checking.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ctype
	:twitter:description: Ctype: `ctype` is a set of functions used for character type checking
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Ctype
	:og:type: article
	:og:description: `ctype` is a set of functions used for character type checking
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ctype.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Ctype","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"`ctype` is a set of functions used for character type checking","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Ctype.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Ctype
-----

`ctype` is a set of functions used for character type checking. These functions are primarily designed to determine the type of characters in a string. They are useful for tasks such as input validation, data processing, and character manipulation. The ctype functions are part of PHP's standard library.

.. code-block:: php
   
   <?php
   $strings = array('KjgWZC', 'arf12');
   foreach ($strings as $testcase) {
       if (ctype_alpha($testcase)) {
           echo "The string $testcase consists of all letters.\n";
       } else {
           echo "The string $testcase does not consist of all letters.\n";
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/book.ctype.php>`__

See also `An Introduction to Ctype Functions <https://www.sitepoint.com/an-introduction-to-ctype-functions/>`_

Related : :ref:`filter <filter>`
