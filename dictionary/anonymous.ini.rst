.. _anonymous:
.. meta::
	:description:
		Anonymous: An anonymous structure is a structure that usually has a name, but may also go without it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous
	:twitter:description: Anonymous: An anonymous structure is a structure that usually has a name, but may also go without it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anonymous
	:og:type: article
	:og:description: An anonymous structure is a structure that usually has a name, but may also go without it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","name":"Anonymous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:15 +0000","dateModified":"Thu, 22 Jan 2026 21:18:15 +0000","description":"An anonymous structure is a structure that usually has a name, but may also go without it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anonymous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anonymous
---------

An anonymous structure is a structure that usually has a name, but may also go without it. 

There a several structures which have an anonymous version: 

+ functions : there are two types : closures and arrow functions
+ method : the magic method __invoke()
+ classes
+ constants : basically, it is a literal value
+ catch : in this case, the exception is caught, but it is not provided in a related variable

Some structures are always named: variables, properties, traits, interfaces, enums.

Anonymous structures should not be confused with dynamic structures: these structures are defined with a name which is stored in a variable, or a similar data container. In fact, dynamic structures often rely on a name to be usable. This is the case of variables, with ``$$variable``.

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
