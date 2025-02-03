.. _empty:
.. meta::
	:description:
		Empty: Empty is a language structure, which determines whether a variable is empty.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Empty
	:twitter:description: Empty: Empty is a language structure, which determines whether a variable is empty
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Empty
	:og:type: article
	:og:description: Empty is a language structure, which determines whether a variable is empty
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/empty.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Empty is a language structure, which determines whether a variable is empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Empty
-----

Empty is a language structure, which determines whether a variable is empty. 

A variable is considered empty if it does not exist or if its value equals false. This may overlap with the usage of isset().

``empty()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.



.. code-block:: php
   
   <?php
   
   // True
   var_dump(empty($a));
   
   $b = [];
   // True
   var_dump(empty($b));
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`__

See also `PHP isset() vs. empty() vs. is_null() <https://code.tutsplus.com/php-isset-vs-empty-vs-is_null--cms-37162t>`_, `Avoiding empty() in PHP <https://localheinz.com/articles/2023/05/10/avoiding-empty-in-php/>`_

Related : :ref:`Language Construct <language-construct>`, :ref:`Isset <isset>`, :ref:`Null <null>`
