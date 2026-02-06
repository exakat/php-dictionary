.. _dowhile:
.. meta::
	:description:
		Do...while: Do.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Do...while
	:twitter:description: Do...while: Do
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Do...while
	:og:type: article
	:og:description: Do
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dowhile.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Do...while","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 10:08:25 +0000","dateModified":"Thu, 05 Feb 2026 10:08:25 +0000","description":"Do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Do...while.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Do...while
----------

Do...while is a loop structure. It runs the block once, then it runs it until the condition is not met anymore. 

The loop may be terminated by using the ``continue`` keyword.

.. code-block:: php
   
   <?php
   
   $i = 0;
   do {
   	print "$i\n";
   } while($i < 10);
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.do.while.php>`__

Related : :ref:`While <while>`, :ref:`Continue <continue>`, :ref:`Loops <loop>`
