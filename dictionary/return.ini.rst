.. _return:
.. meta::
	:description:
		Return: `return` ends the current method, and sends back a produced value to the calling module.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return
	:twitter:description: Return: `return` ends the current method, and sends back a produced value to the calling module
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return
	:og:type: article
	:og:description: `return` ends the current method, and sends back a produced value to the calling module
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","name":"Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 12 Jan 2026 09:51:43 +0000","dateModified":"Mon, 12 Jan 2026 09:51:43 +0000","description":"`return` ends the current method, and sends back a produced value to the calling module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
