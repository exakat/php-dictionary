.. _body:
.. meta::
	:description:
		Body: The body, of a function or a command, it the related block that is commanded by the the command.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Body
	:twitter:description: Body: The body, of a function or a command, it the related block that is commanded by the the command
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Body
	:og:type: article
	:og:description: The body, of a function or a command, it the related block that is commanded by the the command
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/body.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:21:41 +0000","dateModified":"Sun, 25 Jan 2026 20:21:41 +0000","description":"The body, of a function or a command, it the related block that is commanded by the the command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Body
----

The body, of a function or a command, it the related block that is commanded by the the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. Since an abstract method is only its signature, the body is replaced by a semi colon ``;``.

.. code-block:: php
   
   <?php
   
   abstract class X {
       function foo() {
           // This block is the body
       }
   
       // No body for an abstract method
       abstract function goo();
   }
   
   ?>


Related : :ref:`Block <block>`
