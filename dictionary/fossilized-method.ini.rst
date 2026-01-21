.. _fossilized-method:
.. meta::
	:description:
		Fossilized Methods: A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fossilized Methods
	:twitter:description: Fossilized Methods: A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fossilized Methods
	:og:type: article
	:og:description: A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fossilized-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fossilized Methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fossilized Methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fossilized Methods
------------------

A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code.

.. code-block:: php
   
   <?php
   
   class x {
       function foo(A $a) : array {}
   }
   
   class y1 extends x {
       function foo(A $a) : array {}
   }
   
   class y2 extends x {
       function foo(A $a) : array {}
   }
   
   // Updating this method means updating y2, y1, x... 
   class yN extends x {
       function foo(A $a) : array {}
   }
   
   ?>


See also https://www.exakat.io/en/method-fossilisation/

Related : :ref:`Method <method>`
