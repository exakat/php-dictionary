.. _arm:
.. meta::
	:description:
		Arm: An arm is a branch in a match() expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arm
	:twitter:description: Arm: An arm is a branch in a match() expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Arm
	:og:type: article
	:og:description: An arm is a branch in a match() expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arm.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Arm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:18 +0000","dateModified":"Thu, 22 Jan 2026 21:18:18 +0000","description":"An arm is a branch in a match() expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Arm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Arm
---

An arm is a branch in a match() expression. There is the ``default`` arm, and the other ``arm``. The arm includes the case (left) and the payload (right).

.. code-block:: php
   
   <?php
   
   // a match with 2 arm, including the default
   $a = match($b) {
   	1 => 2,
   	default => 3,
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.match.php>`__

Related : :ref:`If Then Else <if-then>`, :ref:`Branch <branch>`, :ref:`Match <match>`
