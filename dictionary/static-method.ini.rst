.. _static-method:
.. meta::
	:description:
		Static Method: Static methods are methods defined with the static keyword.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Method
	:twitter:description: Static Method: Static methods are methods defined with the static keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Method
	:og:type: article
	:og:description: Static methods are methods defined with the static keyword
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-method.ini.html
	:og:locale: en


Static Method
-------------

Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than instantiated object. 

.. code-block:: php
   
   <?php
   
   class x {
       static function foo() {
           echo __METHOD__;
       }
   }
   
   //displays x::foo
   x::foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods>`__

See also `When to use static methods <https://verraes.net/2014/06/when-to-use-static-methods-in-php/>`_, `When Should You (And Shouldn’t You) Use Static Methods in Laravel/PHP? A Practical Guide <https://medium.com/@laravelprotips/when-should-you-and-shouldnt-you-use-static-methods-in-laravel-php-a-practical-guide-1b1caac46f2d/>`_

Related : :ref:`Method <method>`
