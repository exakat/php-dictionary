.. _generator:
.. meta::
	:description:
		Generator: Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Generator
	:twitter:description: Generator: Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Generator
	:og:type: article
	:og:description: Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html
	:og:locale: en


Generator
---------

Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.

Generators are implicitely created when including the yield and yield from keywords in the body of the method. Any type of function can be a generator: functions, methods, arrow functions, closures, static methods.

Generator always have the \Generator return type: in fact, there is not return type on its returned value, nor on the yielded values. They are all of mixed types.

Generators are used to reduce the memory footprint of an interation, has they do not require all data to be loaded to run: they can be created along the way. 

Generators are also used to implement asynchronous properties: they may stop execution, using yield, and then, return later to continue. This allows for partial execution of the method.



.. code-block:: php
   
   <?php
   
   function evenIntegers() {
       for ($i = 0; $i < 10; ++$i) {
           yield 2 * $i;
       }
   }
   
   foreach (evenInteger() as $number) {
       echo "$number ";
   }
   echo "\n";
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.overview.php>`__

See also `Do generators really reduce the memory usage? <https://phpdelusions.net/articles/generators>`_, `PHP Generators From Scratch <https://alanstorm.com/php-generators-from-scratch/>`_, `Unlocking PHP Generators: Revolutionizing Memory Efficiency <https://itnext.io/unlocking-php-generators-revolutionizing-memory-efficiency-c6b894aacd22>`_

Related : :ref:`Yield <yield>`, :ref:`yield from Keyword <yield-from>`, :ref:`Return Type <return-type>`
