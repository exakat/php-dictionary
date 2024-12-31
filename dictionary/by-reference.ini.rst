.. _by-reference:
.. meta::
	:description:
		Passing By Reference: When calling a method, or returning from it, data may be passed by value or by reference.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing By Reference
	:twitter:description: Passing By Reference: When calling a method, or returning from it, data may be passed by value or by reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Passing By Reference
	:og:type: article
	:og:description: When calling a method, or returning from it, data may be passed by value or by reference
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/by-reference.ini.html
	:og:locale: en


Passing By Reference
--------------------

When calling a method, or returning from it, data may be passed by value or by reference. 

By reference, a reference to the the data is passed : any modification on that value inside the method will be reflected in the original value. 

This is the alternative way of passing data to methods : the default way is to use by value, which copies the data. 

Passing by reference is the default behavior with object. Otherwise, it needs to be declared with the ``&`` operator, in the function signature.

Returned value are passed back to the calling context with the same rule than for parameters.



.. code-block:: php
   
   <?php
   
   $a = 0;
   foo($a);  // displays 1
   print $a; // displays 1
   
   function foo(&$a) {
       ++$a;
       echo $a;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.references.pass.php>`__

See also `PHP References: How They Work, and When to Use Them <https://www.elated.com/php-references/>`_

Related : :ref:`Passing By Value <by-value>`
