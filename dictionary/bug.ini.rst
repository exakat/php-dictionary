.. _bug:
.. meta::
	:description:
		Bug: A bug is an discrepancy between the expected result of a program and its actual result.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bug
	:twitter:description: Bug: A bug is an discrepancy between the expected result of a program and its actual result
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bug
	:og:type: article
	:og:description: A bug is an discrepancy between the expected result of a program and its actual result
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bug.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Bug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"A bug is an discrepancy between the expected result of a program and its actual result","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bug
---

A bug is an discrepancy between the expected result of a program and its actual result. 

Bugs have many different varieties : 

+ Code does not compile
+ Program stop before complete, with a 'Fatal error'
+ Program outputs a wrong result
+ Program outputs a result different from expected
+ Program is vulnerable to security attack
+ Poor performance.

.. code-block:: php
   
   <?php
   
   echo hello world; // case of a syntax error
   
   echo -3 ** 2; // known bug
   
   ?>


Related : :ref:`Linting <linting>`
