.. _label:
.. meta::
	:description:
		Goto Labels: Labels are the receiving end of a goto call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Goto Labels
	:twitter:description: Goto Labels: Labels are the receiving end of a goto call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Goto Labels
	:og:type: article
	:og:description: Labels are the receiving end of a goto call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/label.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Goto Labels","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"Labels are the receiving end of a goto call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Goto Labels.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Goto Labels
-----------

Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to : there, they must be unique. There might be several goto for a single label.

.. code-block:: php
   
   <?php
   goto a;
   echo 'Foo';
    
   a:
   echo 'Bar';
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.goto.php>`__

Related : :ref:`Goto <goto>`
