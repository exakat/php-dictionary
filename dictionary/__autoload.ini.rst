.. _-__autoload:
.. meta::
	:description:
		__autoload: ``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __autoload
	:twitter:description: __autoload: ``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __autoload
	:og:type: article
	:og:description: ``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__autoload.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Using $this when not in object context.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Using $this when not in object context.html","name":"__autoload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:30 +0000","dateModified":"Wed, 21 Jan 2026 08:52:30 +0000","description":"``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__autoload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__autoload
----------

``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment. 

This function was later replaced with ``spl_autoload_register()``, which allows the composition of multiple autoloading methods.

.. code-block:: php
   
   <?php
   
   function __autoload($name) {
       if (file_exists(classes/$name.php)) {
           include classes/$name.php;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.autoload.php>`__

Related : :ref:`Class Autoloading <autoload>`

Added in PHP 5.0
