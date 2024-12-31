.. _return-value:
.. meta::
	:description:
		Return Value: Return value is the value returned by a method or function call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Value
	:twitter:description: Return Value: Return value is the value returned by a method or function call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return Value
	:og:type: article
	:og:description: Return value is the value returned by a method or function call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return-value.ini.html
	:og:locale: en


Return Value
------------

Return value is the value returned by a method or function call. 

That value may be typed with a data type. It may also be typed with `never`, in case the method doesn't return, or `void`, when the method returns nothing.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.

.. code-block:: php
   
   <?php
   
   function foo() : int {
       return 1;
   }
   
   function goo() : never {
       throw new Exception("Error");
   }
   
   function hoo() : void {
       echo __METHOD__;
       // No return value
   }
   
   // returns null
   function bar() { }
   ?>
   


`Documentation <https://www.php.net/manual/en/function.include.php>`__
