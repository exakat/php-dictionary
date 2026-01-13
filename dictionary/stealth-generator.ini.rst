.. _stealth-generator:
.. meta::
	:description:
		Stealth Generator: A function becomes a generator as soon as the ``yield`` keyword is added to the block of code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stealth Generator
	:twitter:description: Stealth Generator: A function becomes a generator as soon as the ``yield`` keyword is added to the block of code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stealth Generator
	:og:type: article
	:og:description: A function becomes a generator as soon as the ``yield`` keyword is added to the block of code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stealth-generator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Stealth Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 19:36:22 +0000","dateModified":"Wed, 06 Aug 2025 19:36:22 +0000","description":"A function becomes a generator as soon as the ``yield`` keyword is added to the block of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Stealth Generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Stealth Generator
-----------------

A function becomes a generator as soon as the ``yield`` keyword is added to the block of code. At that point, the function may be called, but it won't do anything until the ``yield`` are executed. The code continue its execution, though.

.. code-block:: php
   
   <?php
   
   function foo() {
       print a;
       yield 2;
       print b;
   }
   
   foo();
   print c;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php>`__

See also https://3v4l.org/p6niX
