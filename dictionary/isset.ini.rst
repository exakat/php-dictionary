.. _isset:
.. meta::
	:description:
		Isset: isset() is a function that determines if a variable is declared and is different than null.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Isset
	:twitter:description: Isset: isset() is a function that determines if a variable is declared and is different than null
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Isset
	:og:type: article
	:og:description: isset() is a function that determines if a variable is declared and is different than null
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/isset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Isset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 23:12:07 +0000","dateModified":"Sun, 16 Feb 2025 23:12:07 +0000","description":"isset() is a function that determines if a variable is declared and is different than null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Isset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Isset
-----

isset() is a function that determines if a variable is declared and is different than null.

``isset()`` is also related to the magic method __isset(), which is used to determine if a property in an object exists or not. 

``isset()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.


.. code-block:: php
   
   <?php
   
   $var = 'something';
   
   if (isset($var)) {
       echo 'The variable $var contains '.$var;
   } else {
       echo 'No such variable as $var';
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.isset.php>`__

See also `isset vs empty vs is_null <https://phppot.com/php/isset-vs-empty-vs-is_null/>`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`__isset() Method <-__isset>`
