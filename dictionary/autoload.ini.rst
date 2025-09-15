.. _autoload:
.. _autoloading:
.. meta::
	:description:
		Class Autoloading: Autoloading provides a hook to allow the loading of a class, the first PHP requires it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Autoloading
	:twitter:description: Class Autoloading: Autoloading provides a hook to allow the loading of a class, the first PHP requires it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Autoloading
	:og:type: article
	:og:description: Autoloading provides a hook to allow the loading of a class, the first PHP requires it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autoload.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Autoloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 13 Aug 2025 04:55:38 +0000","dateModified":"Wed, 13 Aug 2025 04:55:38 +0000","description":"Autoloading provides a hook to allow the loading of a class, the first PHP requires it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Autoloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Autoloading
-----------------

Autoloading provides a hook to allow the loading of a class, the first PHP requires it. This is a more flexible way to handle the class definitions than the traditional inclusions, which requires good planning.

Autoloading requires each class, trait, interface or enumeration to be stored in a distinct file. This is the most popular way, yet autoloading allows any other strategy of storage, as long as the class may be loaded based only on its name.

Autoloading relies on the spl_autoload_register() function. Prior to PHP 8.0, it was possible to define the  __autoload() method, and this has being deprecated since PHP 7.2.

Autoloading does not work for global constants and functions. Those still require a specific inclusion mechanism.

In modern PHP, not using class autoloading is considered a bad practice.


.. code-block:: php
   
   <?php
   spl_autoload_register(function ($class_name) {
       include $class_name . '.php';
   });
   
   $obj  = new MyClass1();
   $obj2 = new MyClass2(); 
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.autoload.php>`__

See also `PHP OOP Autoloading <https://tutorials.supunkavinda.blog/php/oop-autoloading>`_, `What is autoloading in PHP <https://solidlystated.com/scripting/what-is-autoloading-in-php/>`_, https://tideways.com/profiler/blog/autoloading-performance-avoid-these-5-mistakes

Related : :ref:`Autowiring <auto-wiring>`, :ref:`Definition <definition>`, :ref:`Call <call>`

Added in PHP 5.0
