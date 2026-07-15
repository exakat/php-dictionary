.. _non-instantiable:
.. meta::
	:description:
		Non-instantiable: Usually, classes are turned into objects via instantiation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-instantiable
	:twitter:description: Non-instantiable: Usually, classes are turned into objects via instantiation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non-instantiable
	:og:type: article
	:og:description: Usually, classes are turned into objects via instantiation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-instantiable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/non-instantiable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/non-instantiable.ini.html","name":"Non-instantiable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:46 +0000","dateModified":"Fri, 19 Jun 2026 21:25:46 +0000","description":"Usually, classes are turned into objects via instantiation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non-instantiable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non-instantiable
----------------

Usually, classes are turned into objects via instantiation. Yet, some classes are not capable of that: they are non-instantiable.

This is the case of some native classes, such as SQLite3Result, which must be created by the dedicated methods: they can't be created by custom code. 

In userland code, non-instantiable classes have a private constructor, which makes them impossible to instantiate, unless there is a named constructor.

.. code-block:: php
   
   <?php
   
   class X {
       private function __construct() {}
   }
   
   // 
   new X();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php>`__

Related : :ref:`instance <instance>`
