.. _inherited-variable:
.. meta::
	:description:
		Inherited Variable: An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inherited Variable
	:twitter:description: Inherited Variable: An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inherited Variable
	:og:type: article
	:og:description: An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inherited-variable.ini.html
	:og:locale: en


Inherited Variable
------------------

An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.

The variable is said 'inherited', as it is extracted from the context at definition time, and not passed as parameter, at call time.

Contrary to parameters, inherited variable cannot be typed.


.. code-block:: php
   
   <?php
   
   $inherited = 'yes';
   
   $closure = function() use ($inherited) {
       return $inherited;
   }
   
   foo($closure);
   
   function foo($closure) {
       $inherited = 'no'; // This is local to the foo function
       
       echo $closure(); // display yes 
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

Related : :ref:`Closure <closure>`, :ref:`Parameter <parameter>`
