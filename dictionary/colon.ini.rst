.. _colon:
.. meta::
	:description:
		Colon: Colons are used in a variety of situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Colon
	:twitter:description: Colon: Colons are used in a variety of situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Colon
	:og:type: article
	:og:description: Colons are used in a variety of situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/colon.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Colon","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 21:45:09 +0000","dateModified":"Thu, 12 Feb 2026 21:45:09 +0000","description":"Colons are used in a variety of situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Colon.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Colon
-----

Colons are used in a variety of situations: 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark

The double colon is a distinct operator.

.. code-block:: php
   
   <?php
   
   goto there;
   there:
   
   foo(a: 3); // 
   
   $b = $a ? 'a' : 'b';
   $c = $c ?: 'a';
   
   ?>


Related : :ref:`Goto <goto>`, :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <null-ternary>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Named Parameters <named-parameter>`, :ref:`Scope Resolution Operator :: <double-colon>`
