.. _coalesce:
.. _null-coalesce:
.. _null-ternary:
.. meta::
	:description:
		Coalesce Operator: The coalesce operator ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce Operator
	:twitter:description: Coalesce Operator: The coalesce operator ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Coalesce Operator
	:og:type: article
	:og:description: The coalesce operator ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coalesce.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/coalesce.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/coalesce.ini.html","name":"Coalesce Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:13:32 +0000","dateModified":"Tue, 04 Aug 2026 11:13:32 +0000","description":"The coalesce operator ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Coalesce Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Coalesce Operator
-----------------

The coalesce operator ``??`` returns its first operand if it is set and not NULL. Otherwise it will return its second operand. It was introduced in version 7.0 to replace the common but verbose ``isset($x) ? $x : $default`` pattern, while also silencing the notice that would normally be raised when reading an undefined variable, array key, or property.

The operator is chainable: ``$a ?? $b ?? $c`` evaluates left to right and returns the first operand that is set and not NULL, falling through to the last operand otherwise. Since PHP 7.4, it also has an assignment form, ``??=``, which assigns the right-hand value only if the left-hand variable is currently unset or NULL, making it convenient for lazily initializing defaults.

Because ``??`` only checks for NULL, it is not a general-purpose replacement for the ternary operator: falsy-but-non-NULL values such as ``0``, ``""``, or ``false`` are returned unchanged rather than replaced by the fallback.

.. code-block:: php
   
   <?php
   
       class X { }
       
       // instantiation
       $x = new X;
       
       // cloning
       $y = clone $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`__

See also `Null Coalescing Operator (??) <https://riptutorial.com/php/example/7164/null-coalescing-operator----->`_ and `PHP ternary operator vs null coalescing operator <https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator>`_.

Related : :ref:`Ternary Operator <ternary>`, :ref:`Colon <colon>`, :ref:`If Then Else <if-then>`, :ref:`Short Ternary Operator <short-ternary>`, :ref:`Conditional Structures <conditional-structure>`, :ref:`Double <double>`, :ref:`Nullsafe <nullsafe>`, :ref:`Question Mark ? <question-mark>`, :ref:`Streamlining <streamlining>`

Added in PHP 7.0+
