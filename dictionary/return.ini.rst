.. _return:
.. meta::
	:description:
		Return: `return` ends the current method, and sends back a produced value to the calling module.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return
	:twitter:description: Return: `return` ends the current method, and sends back a produced value to the calling module
	:twitter:creator: @exakat
	:og:title: Return
	:og:type: article
	:og:description: `return` ends the current method, and sends back a produced value to the calling module
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html
	:og:locale: en


Return
------

`return` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation. 

.. code-block:: php
   
   <?php
   
   function foo() {
       if (rand(0, 1)) {
           return 'tail';
       }
       
       return 'face';
   }
   
   echo foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.return.php>`__

Related : :ref:`Functions <function>`, :ref:`Method <method>`, :ref:`Closure <closure>`
