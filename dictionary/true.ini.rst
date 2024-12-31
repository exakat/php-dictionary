.. _true:
.. meta::
	:description:
		True: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: True
	:twitter:description: True: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: True
	:og:type: article
	:og:description: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/true.ini.html
	:og:locale: en


True
----

true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false. 

``true`` as a type was introduced in PHP 8.2.



.. code-block:: php
   
   <?php
   
   function foo($a) : true|A {
       if ($a == 1) {
           return true;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Boolean <boolean>`, :ref:`Type System <type>`, :ref:`False <false>`
