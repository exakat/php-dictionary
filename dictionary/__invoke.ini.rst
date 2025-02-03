.. _-__invoke:
.. meta::
	:description:
		__invoke() Method: The __invoke() magic method is called when the code calls an object as a function name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __invoke() Method
	:twitter:description: __invoke() Method: The __invoke() magic method is called when the code calls an object as a function name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __invoke() Method
	:og:type: article
	:og:description: The __invoke() magic method is called when the code calls an object as a function name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__invoke.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__invoke() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"The __invoke() magic method is called when the code calls an object as a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__invoke() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__invoke() Method
-----------------

The __invoke() magic method is called when the code calls an object as a function name. This type of class is also called a functor. 

The method is able to take an arbitrary number of arguments, as usual. 

When a class has the ``__invoke`` class, it is possible to can a method without mentioning its name: the object is the method.

``__invoke``` is also considered as the anonymous method: it is called without using its name.


.. code-block:: php
   
   <?php
   // extracted from the PHP manual
   	class CallableClass
   	{
   	    public function __invoke($x)
   	    {
   	        var_dump($x);
   	    }
   	}
   
   	$obj = new CallableClass;
   	$obj(5);
   	var_dump(is_callable($obj));
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke>`__

See also `PHP __invoke <https://www.phptutorial.net/php-oop/php-__invoke/>`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`SOLID <solid>`
