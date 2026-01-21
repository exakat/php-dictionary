.. _positional-parameter:
.. meta::
	:description:
		Positional Parameters: Way of calling a function or method, where argument which are identified by their position in the signature or the call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Positional Parameters
	:twitter:description: Positional Parameters: Way of calling a function or method, where argument which are identified by their position in the signature or the call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Positional Parameters
	:og:type: article
	:og:description: Way of calling a function or method, where argument which are identified by their position in the signature or the call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/positional-parameter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Positional Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"Way of calling a function or method, where argument which are identified by their position in the signature or the call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Positional Parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Positional Parameters
---------------------

Way of calling a function or method, where argument which are identified by their position in the signature or the call. This is the traditional way of sending arguments to a method. 

The alternative way is to use named parameters.

.. code-block:: php
   
   <?php
   
   function foo($a, $b) {
       return $a - $b;
   }
   
   echo foo(2, 3);  // return -1
   echo foo(3, 2);  // return 1
   
   echo foo(a: 2, b: 3);  // return -1
   echo foo(b: 2, a: 3);  // return 1
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Named Parameters <named-parameter>`
