.. _anonymous:

Anonymous
---------

An anonymous structure is a definition that usually has a name, but may also go without it. 

There a several structure which may have an anonynous version : 

+ functions : there are two types : closures and arrow functions
+ classes
+ constants : it is a literal
+ catch : in this case, the exception is caught, but it is not provided in a related variable

Anonymous structure should be be confused with dynamic structures: these structures are defined with a name which is stored in a variable, or a similar data container.


.. code-block:: php
   
   <?php
   	$closure = function () {} ; 
   
   	$arrowFunction = fn() => 1;
   	
   	'literal value';
   	
   	// an object of an anonymous class
   	new class() {}; 
   	
   	try {}
   	catch(Exception ) {}
   	
   ?>


Related : :ref:`Anonymous Function <anonymous-function>`, :ref:`Anonymous Class <anonymous-class>`, :ref:`Anonymous Catch <anonymous-catch>`
