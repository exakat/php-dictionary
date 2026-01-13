.. _jump:
.. meta::
	:description:
		Jump: A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Jump
	:twitter:description: Jump: A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Jump
	:og:type: article
	:og:description: A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jump.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Jump","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 20:38:31 +0000","dateModified":"Wed, 06 Aug 2025 20:38:31 +0000","description":"A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Jump.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Jump
----

A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs in PHP that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.

.. code-block:: php
   
   <?php
   
   function foo(int $a) {
       // jumps out of the method
       if ($a > 10) { return; }
       
       foreach(range(1, 10) as $i) {
           if (doSomething($i, $a)) {
               // jumps out of the loop
               break 1; 
           }
       }
       
       // normal execution
       return $a + 1;
   }
   
   ?>


Related : :ref:`Goto <goto>`, :ref:`Return <return>`, :ref:`Break <break>`, :ref:`Continue <continue>`, :ref:`throw <throw>`
