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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Return Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 12 Jan 2026 09:54:32 +0000","dateModified":"Mon, 12 Jan 2026 09:54:32 +0000","description":"Return value is the value returned by a method or function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Return Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Return Value
------------

Return value is the value returned by a method or function call. 

That value may be typed with a data type. In that case, each call to ``return`` must return that type.

It may also be typed with ``never``, in case the method doesn't return anything. In 

, or `void`, when the method returns nothing.

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
