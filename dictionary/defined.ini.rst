.. _defined:
.. meta::
	:description:
		defined(): defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: defined()
	:twitter:description: defined(): defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: defined()
	:og:type: article
	:og:description: defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/defined.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"defined()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:33 +0000","dateModified":"Mon, 26 Jan 2026 11:11:33 +0000","description":"defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/defined().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


defined()
---------

defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution.

defined() is a function, and may be called on any piece of string. true is returned when the string is a valid name of a constant, and a value for it was found. Otherwise, it returns false, without error.

defined() doesn't take into account the 'use const' expressions: it should be a fully qualified constant name, or a relative one.

.. code-block:: php
   
   <?php
       var_dump(defined('UNKNOWN'));         // false
       var_dump(defined('Not a constant'));  // false
       var_dump(defined('E_ALL'));           // true
       var_dump(defined('\E_ALL'));          // truet
       
       // use expression are not handled
       use const E_ALL as E;
       var_dump(defined('\E'));               // false
   
       // with class constants
       class E { const E = 1; }
       var_dump(defined('E'));                // false
       var_dump(defined('E::E'));             // true
   
       // do not confuse the constant and its value
       const F = 'E';
       var_dump(defined(F));                  // false
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__
