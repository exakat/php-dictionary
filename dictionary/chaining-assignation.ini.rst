.. _chaining-assignation:
.. _chained-assignment:
.. _assignment-chaining:
.. meta::
	:description:
		Chaining Assignation: Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Chaining Assignation
	:twitter:description: Chaining Assignation: Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Chaining Assignation
	:og:type: article
	:og:description: Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/chaining-assignation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/chaining-assignation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/chaining-assignation.ini.html","name":"Chaining Assignation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:14:19 +0000","dateModified":"Tue, 14 Jul 2026 05:14:19 +0000","description":"Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Chaining Assignation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Chaining Assignation
--------------------

Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators.

The assignment is evaluated from right to left: the rightmost value is assigned first, then the result propagates leftward. Each ``=`` operator returns the assigned value, which becomes the operand of the next assignment.

Note that magic methods such as ``__set()`` and ``__get()`` are never called during chaining assignments. Writing ``$a = $obj->b = 8;`` will not trigger ``__set()`` on ``$obj``.

.. code-block:: php
   
   <?php
   
       // Basic chaining assignation
       $a = $b = $c = 0;
       // $a, $b, $c are all 0
       
       // Right-to-left evaluation
       $x = ($y = 5) + 3;
       // $y is 5, $x is 8
       
       // Chaining with a function call
       $arr = $count = count([1, 2, 3]);
       // both $arr and $count are 3
   
   ?>


`Documentation <https://www.php.net/manual/en/language.assignments.php>`__

See also `Assignment Operators <https://www.php.net/manual/en/language.assignments.php>`_, `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_ and `Hidden Traps with Chained Assignments <https://www.exakat.io/hidden-traps-with-chained-assignments/>`_.

Related : :ref:`Assignment <assignment>`, :ref:`__set() Method <-__set>`, :ref:`__get() Method <-__get>`, :ref:`Chaining (disambiguation) <chaining>`, :ref:`Chaining New Without Parenthesis <chaining-new-without-parenthesis>`
