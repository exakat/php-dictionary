.. _inlining:
.. meta::
	:description:
		Inlining: Inlining is the process to bring a dependency inside the current code, so as to remove that dependency.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inlining
	:twitter:description: Inlining: Inlining is the process to bring a dependency inside the current code, so as to remove that dependency
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inlining
	:og:type: article
	:og:description: Inlining is the process to bring a dependency inside the current code, so as to remove that dependency
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inlining.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Inlining","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 08:50:46 +0000","dateModified":"Mon, 30 Mar 2026 08:50:46 +0000","description":"Inlining is the process to bring a dependency inside the current code, so as to remove that dependency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inlining.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inlining
--------

Inlining is the process to bring a dependency inside the current code, so as to remove that dependency. 

For example, replacing a constant by its value, as a literal, means that the code works without depending on the external definition. 

On the other hand, such external structure may also have its own life cycle, which is not reflected anymore. It also may hurt readability.


.. code-block:: php
   
   <?php
   
   const A = 1;
   
   echo A; // dependent code
   
   echo 1; // 
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Inline_expansion>`__

See also https://blog.jetbrains.com/phpstorm/2018/04/inline-method-refactoring/, hhttps://refactoring.guru/inline-method

Related : :ref:`Readability <readability>`, , :ref:`Literal <literal>`
