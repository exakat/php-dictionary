.. _typo:
.. meta::
	:description:
		Typo: A typo is short for ``typographical error``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typo
	:twitter:description: Typo: A typo is short for ``typographical error``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Typo
	:og:type: article
	:og:description: A typo is short for ``typographical error``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/typo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/typo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/typo.ini.html","name":"Typo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A typo is short for ``typographical error``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Typo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Typo
----

A typo is short for ``typographical error``. It refers to a mistake made in the typing of the code. Typographical errors can include misspelled words, misplaced operators. Typos can occur in various contexts, such as types, expressions, naming. 

A typo can lead to a visible or invisible error. An typo in the function name of ``array_slice()``, like ``array_sloce()`` leads to a fatal error, as the function is not defined; 

On the other hand, a typo on the same function, written ``array_splice()``, note the extra p, leads to arguments errors, as this new function exists, but requests different types of data.

Typo happen in any text based system.

.. code-block:: php
   
   <?php
   
       // The typo has placed the === false INSIDE the in_array(), and changes the behavior
       if (in_array($array, $value, $strict === false)) {
       
       }
       
       // the type and is not expected, instead of an integer
       function foo(ant $i) {
       
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Typographical_error>`__

See also `Top Common PHP Errors <https://medium.com/@jaydipkumarjha/top-common-php-errors-9dd20dfcdf81>`_ and `Top Common PHP Errors and How to Fix Them <https://olixlab.com/blog/top-common-php-errors-and-how-to-fix-them/>`_.

Related : :ref:`Silent Behavior <silent>`, :ref:`Semantics <semantics>`
