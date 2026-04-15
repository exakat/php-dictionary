.. _question-mark:
.. _?:
.. meta::
	:description:
		Question Mark ?: ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Question Mark ?
	:twitter:description: Question Mark ?: ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Question Mark ?
	:og:type: article
	:og:description: ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/question-mark.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Question Mark ?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Apr 2026 09:29:37 +0000","dateModified":"Wed, 15 Apr 2026 09:29:37 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Question Mark ?.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Question Mark ?
---------------

``?`` is a character, used in various situations: 

+ ternary operator: ``$a ? $b : $c``
+ short ternary operator: ``$a ?: $c``
+ coalesce operator: ``$a ??``
+ null type, ``function foo(?int $int) {}``
+ as a quantifier in regex, 0 or 1
+ as a quantifier with ``fnmatch()``, 0 or 1

.. code-block:: php
   
   <?php
   
       $a = 1;
       $echo a ? 'b' : 'c'; // c
   
   ?>


Related : :ref:`Ternary Operator <ternary-operator>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Type System <type>`, :ref:`Regular Expressions <regex>`, :ref:`fnmatch() <fnmatch>`
