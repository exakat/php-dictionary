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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__autoload.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__autoload.ini.html","name":"__autoload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:56:49 +0000","dateModified":"Mon, 29 Jun 2026 09:56:49 +0000","description":"``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__autoload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__autoload
----------

``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment. 

``__autoload()`` was later replaced with ``spl_autoload_register()``, which allows the composition of multiple autoloading methods.

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
