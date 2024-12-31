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
	:og:title: Class Autoloading
	:og:type: article
	:og:description: Autoloading provides a hook to allow the loading of a class, the first PHP requires it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autoload.ini.html
	:og:locale: en


Class Autoloading
-----------------

Autoloading provides a hook to allow the loading of a class, the first PHP requires it. This is a more flexible way to handle the class definitions than the traditional inclusions, which requires good planning.

Autoloading requires each class, trait, interface or enumeration to be stored in a distinct file. This is the most popular way, yet autoloading allows any other strategy of storage, as long as the class may be loaded based only on its name.

Autoloading relies on the spl_autoload_register() function. Prior to PHP 8.0, it was possible to define the  __autoload() method, and this has being deprecated since PHP 7.2.

Autoloading does not work for global constants and functions. Those still require a specific inclusion mechanism.


.. code-block:: php
   
   <?php
   spl_autoload_register(function ($class_name) {
       include $class_name . '.php';
   });
   
   $obj  = new MyClass1();
   $obj2 = new MyClass2(); 
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.autoload.php>`__

See also `PHP OOP Autoloading <https://tutorials.supunkavinda.blog/php/oop-autoloading>`_, `What is autoloading in PHP <https://solidlystated.com/scripting/what-is-autoloading-in-php/>`_

Related : :ref:`Autowiring <auto-wiring>`, :ref:`Definition <definition>`, :ref:`Call <call>`

Added in PHP 5.0
