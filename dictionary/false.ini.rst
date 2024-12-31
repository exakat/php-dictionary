.. _false:
.. meta::
	:description:
		False: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: False
	:twitter:description: False: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: False
	:og:type: article
	:og:description: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/false.ini.html
	:og:locale: en


False
-----

false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true. 

.. code-block:: php
   
   <?php
   
   function foo($a) : false|A {
       if ($a == 1) {
           return false;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Boolean <boolean>`, :ref:`Type System <type>`, :ref:`True <true>`
