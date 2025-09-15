.. _logical-operator:
.. _xor:
.. _or:
.. _and-operator:
.. _logical:
.. meta::
	:description:
		Logical Operators: Logical operators applies four logical functions to booleans.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Logical Operators
	:twitter:description: Logical Operators: Logical operators applies four logical functions to booleans
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Logical Operators
	:og:type: article
	:og:description: Logical operators applies four logical functions to booleans
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/logical-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Logical Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 25 Aug 2025 04:27:43 +0000","dateModified":"Mon, 25 Aug 2025 04:27:43 +0000","description":"Logical operators applies four logical functions to booleans","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Logical Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Logical Operators
-----------------

Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor`` (no symbolic version for ``xor``)
+ ``!``  (no letter version for ``not``)

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular in regards to comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.

 

.. code-block:: php
   
   <?php
   
   if ($a == $b) {
       print "a and b are equal";
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_

Related : :ref:`Bitwise Operators <bitwise-operator>`, :ref:`Not Operator <not>`, :ref:`And Operator <and>`, :ref:`Bitshift Operators <bitshift-operator>`, :ref:`False <false>`, :ref:`True <true>`
