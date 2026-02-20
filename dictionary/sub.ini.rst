.. _sub-prefix:
.. meta::
	:description:
		Sub (prefix): ``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sub (prefix)
	:twitter:description: Sub (prefix): ``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sub (prefix)
	:og:type: article
	:og:description: ``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sub-prefix.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sub (prefix)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 18:24:18 +0000","dateModified":"Wed, 18 Feb 2026 18:24:18 +0000","description":"``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sub (prefix).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sub (prefix)
------------

``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 

It applies to several concepts: 

+ subclasses: classes that extends another class
+ subnamespaces: a namespace that share a prefix with another one

While ``sub-`` is a generic prefix, it is not applied to every possible words, as they are seldom used. It may still produce neologisms, which sound funny, but may become mainstream. For example, a ``sub-interface`` makes sense, but is not used; a sub-trait makes no sense.

.. code-block:: php
   
   <?php
   
   namespace A { }
   
   // this is a subnamespace
   namespace A\B { }
   
   ?>


Related : :ref:`Subnamespaces <subnamespace>`, :ref:`Subclass <subclass>`
