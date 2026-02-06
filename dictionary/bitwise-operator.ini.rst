.. _bitwise-operator:
.. meta::
	:description:
		Bitwise Operators: Bitwise operators evaluate specific bits within an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitwise Operators
	:twitter:description: Bitwise Operators: Bitwise operators evaluate specific bits within an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bitwise Operators
	:og:type: article
	:og:description: Bitwise operators evaluate specific bits within an integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitwise-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Bitwise Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 05:55:00 +0000","dateModified":"Tue, 03 Feb 2026 05:55:00 +0000","description":"Bitwise operators evaluate specific bits within an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bitwise Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bitwise Operators
-----------------

Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

+ ``&``, ``&=`` : ampersand operator, and
+ ``|``, ``|=`` : pipe operator, or
+ ``^``, ``^=`` : caret operator, xor

All these operators have a short assignation version, as shown above.

These operator differ from logical operators, which convert the value to boolean before manipulation.

.. code-block:: php
   
   <?php
   
   $a = 3;  // binary : 11
   $b = 7;  // binary : 111
   
   print $a & $b; // 3; binary : 11
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.bitwise.php>`__

See also https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/, https://rodstaines.medium.com/bitmasks-and-bitwise-operators-in-php-1718b80cd50f

Related : :ref:`Logical Operators <logical-operator>`, :ref:`Logical Operators <or>`, :ref:`And Operator <and>`, :ref:`Logical Operators <xor>`, :ref:`Short Assignations <short-assignation>`, :ref:`Bitfield <bitfield>`, :ref:`Boolean <boolean>`, :ref:`Bitmask <bitmask>`
