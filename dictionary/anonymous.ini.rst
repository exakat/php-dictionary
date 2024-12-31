.. _anonymous:
.. meta::
	:description:
		Anonymous: An anonymous structure is a definition that usually has a name, but may also go without it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous
	:twitter:description: Anonymous: An anonymous structure is a definition that usually has a name, but may also go without it
	:twitter:creator: @exakat
	:og:title: Anonymous
	:og:type: article
	:og:description: An anonymous structure is a definition that usually has a name, but may also go without it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous.ini.html
	:og:locale: en


Anonymous
---------

An anonymous structure is a definition that usually has a name, but may also go without it. 

There a several structures which may have an anonynous version : 

+ functions : there are two types : closures and arrow functions
+ method : the magic method __invoke()
+ classes
+ constants : basically, it is a literal value
+ catch : in this case, the exception is caught, but it is not provided in a related variable

Some structures are always named: variable, property, method, 

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


Related : :ref:`Anonymous Function <anonymous-function>`, :ref:`Anonymous Class <anonymous-class>`, :ref:`Anonymous Catch <anonymous-catch>`, :ref:`Dynamic Call <dynamic-call>`, :ref:`__invoke() Method <-__invoke>`
