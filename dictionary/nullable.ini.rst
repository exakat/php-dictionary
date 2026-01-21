.. _nullable:
.. meta::
	:description:
		Nullable: Nullable is the name of the NULL value, when used as a type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nullable
	:twitter:description: Nullable: Nullable is the name of the NULL value, when used as a type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nullable
	:og:type: article
	:og:description: Nullable is the name of the NULL value, when used as a type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nullable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Nullable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"Nullable is the name of the NULL value, when used as a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nullable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nullable
--------

Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as an union type.

.. code-block:: php
   
   <?php
   
   function foo(?A $a) : null | B {
       // code
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.null.php>`__

See also https://front-line-php.com/dealing-with-null

Related : :ref:`Null <null>`, :ref:`Type System <type>`, :ref:`Contravariance <type-contravariance>`

Added in PHP 7.1
