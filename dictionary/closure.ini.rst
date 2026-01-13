.. _closure:
.. _lambda-functions:
.. meta::
	:description:
		Closure: Closures are anonymous functions : functions without a name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure
	:twitter:description: Closure: Closures are anonymous functions : functions without a name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Closure
	:og:type: article
	:og:description: Closures are anonymous functions : functions without a name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Dec 2025 05:58:37 +0000","dateModified":"Tue, 02 Dec 2025 05:58:37 +0000","description":"Closures are anonymous functions : functions without a name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Closure
-------

Closures are anonymous functions : functions without a name. They are also supported by the eponymous ``Closure`` class in PHP.

They are close to the arrow-functions. They are also created with the ``...`` operator, also known as the first class callable.


.. code-block:: php
   
   <?php
   
   $closure = function ($a) use ($b) {
       return $a + $b + 1;
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

Related : :ref:`static <static>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Callables <callable>`, :ref:`Callbacks <callback>`, :ref:`Anonymous Class <anonymous-class>`, :ref:`Closure Binding <closure-binding>`, :ref:`Functions <function>`, :ref:`Return <return>`, :ref:`Sort <sort>`, :ref:`Use <use>`, :ref:`Callable Arrays <array-callable>`, :ref:`Array Callback <array-callback>`, :ref:`Bind <bind>`, :ref:`Inherited Variable <inherited-variable>`, :ref:`Closure Class <closure-class>`
