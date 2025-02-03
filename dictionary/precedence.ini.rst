.. _precedence:
.. meta::
	:description:
		Precedence: Precedence organizes the way operators are executed, when they are mixed in the same expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Precedence
	:twitter:description: Precedence: Precedence organizes the way operators are executed, when they are mixed in the same expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Precedence
	:og:type: article
	:og:description: Precedence organizes the way operators are executed, when they are mixed in the same expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/precedence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Precedence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Precedence organizes the way operators are executed, when they are mixed in the same expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Precedence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Precedence
----------

Precedence organizes the way operators are executed, when they are mixed in the same expression.

For example, `1 + 2 * 3` will produce `7`, since `*` has a higher precedence than `+`. 

Every operator has a precedence, and when they have the same precedence, the rightmost one yield to the leftmost one.

Precedence offers some reading surprises to human readers. For example, `! $b instanceof \X` really applies `instanceof` first, and `&&` has a higher priority than `and`, even though they perform the same function.



.. code-block:: php
   
   <?php
   
   var_dump(!$b instanceof \X);
   var_dump($a = 1 and 2);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.precedence.php>`__

See also `Understanding PHP Operators of Logic, or || and && and ! a lot more <https://wpshout.com/php-logic-operators/>`_

Related : :ref:`Operators <operator>`
