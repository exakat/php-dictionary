.. _yield:
.. meta::
	:description:
		Yield: In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield
	:twitter:description: Yield: In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Yield
	:og:type: article
	:og:description: In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html
	:og:locale: en


Yield
-----

In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function. 

.. code-block:: php
   
   <?php
   function gen_one_to_three() {
       for ($i = 1; $i <= 3; $i++) {
           // Note that $i is preserved between yields.
           yield $i;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield>`__

See also `Introduction to PHP yield <https://www.educba.com/php-yield/>`_

Related : :ref:`yield from Keyword <yield-from>`, :ref:`Generator <generator>`

Added in PHP 5.5
