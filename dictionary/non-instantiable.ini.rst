.. _non-instantiable:
.. meta::
	:description:
		Non-instantiable: Usually, classes are turned into objects via instanciation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-instantiable
	:twitter:description: Non-instantiable: Usually, classes are turned into objects via instanciation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non-instantiable
	:og:type: article
	:og:description: Usually, classes are turned into objects via instanciation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-instantiable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Non-instantiable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 09:23:05 +0000","dateModified":"Thu, 22 Jan 2026 09:23:05 +0000","description":"Usually, classes are turned into objects via instanciation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non-instantiable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non-instantiable
----------------

Usually, classes are turned into objects via instanciation. Yet, some classes are not capable of that: they are non-instantiable.

This is the case of some native classes, such as Sqlite3Result, which must be created by the dedicated methods: they can't be created by custom code. 

In userland code, non-instantiable classes have a private constructor, which makes them impossible to instantiate, unless there is a named constructor.

.. code-block:: php
   
   <?php
   
   class X {
       private function __construct() {}
   }
   
   // 
   new X();
   
   ?>


Related : :ref:`instance <instance>`
