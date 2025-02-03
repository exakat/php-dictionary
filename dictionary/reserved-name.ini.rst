.. _reserved-name:
.. _reserved-word:
.. meta::
	:description:
		Reserved Names: PHP shares several namespaces with the users, and has reserved some names for its own usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reserved Names
	:twitter:description: Reserved Names: PHP shares several namespaces with the users, and has reserved some names for its own usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reserved Names
	:og:type: article
	:og:description: PHP shares several namespaces with the users, and has reserved some names for its own usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reserved-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Reserved Names","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"PHP shares several namespaces with the users, and has reserved some names for its own usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reserved Names.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Reserved Names
--------------

PHP shares several namespaces with the users, and has reserved some names for its own usage. 

+ Namespaces : the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords : ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ...
+ classes, constants, functions, interfaces
+ variables : ``$GLOBALS``, ``$_GET``,...



.. code-block:: php
   
   <?php
   
   // function void() would not compile
   function theVoid() : bool { }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.php>`__

See also `Predefined Variables <https://www.php.net/manual/en/language.variables.predefined.php>`_
