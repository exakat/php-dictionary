.. _invoke:
.. _invokable:
.. _invocable:
.. meta::
	:description:
		Invoke: It is possible to invoke an object, that means calling a function built with the object as the function name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invoke
	:twitter:description: Invoke: It is possible to invoke an object, that means calling a function built with the object as the function name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Invoke
	:og:type: article
	:og:description: It is possible to invoke an object, that means calling a function built with the object as the function name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invoke.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/invoke.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/invoke.ini.html","name":"Invoke","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"It is possible to invoke an object, that means calling a function built with the object as the function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Invoke.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Invoke
------

It is possible to invoke an object, that means calling a function built with the object as the function name. 

Invocation is based on the ``__invoke`` magic method.

Being invokable means that an object may be used as a function name.

.. code-block:: php
   
   <?php
   
   class x {
       function __invoke($a) {
           echo 'I am '.$a;
       }
   }
   
   $x = new x;
   $x('x'); // I am x
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.invoke>`__

See also `The Magical invoke Method in PHP. Your Clean Code Ally <https://www.juannicolas.eu/the-invoke-method-in-php/>`_.

Related : :ref:`Magic Methods <magic-method>`, :ref:`__invoke() Method <-__invoke>`
