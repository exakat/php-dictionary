.. _bitshift-operator:
.. _bitshift:
.. meta::
	:description:
		Bitshift Operators: Bitshift operators ``<<`` and ``>>`` move bits within an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitshift Operators
	:twitter:description: Bitshift Operators: Bitshift operators ``<<`` and ``>>`` move bits within an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bitshift Operators
	:og:type: article
	:og:description: Bitshift operators ``<<`` and ``>>`` move bits within an integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitshift-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/bitshift-operator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/bitshift-operator.ini.html","name":"Bitshift Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Bitshift operators ``<<`` and ``>>`` move bits within an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bitshift Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bitshift Operators
------------------

Bitshift operators ``<<`` and ``>>`` move bits within an integer. The bits are shifted by an number of position, to the right or to the left. They are equivalent to multiplying or dividing by a power of 2.

.. code-block:: php
   
   <?php
   
   $a = 3;       // binary : 11
   echo $a >> 1; // binary : 1 (the last 1 is lost)
   echo $a << 2; // binary : 1100 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.bitwise.php>`__

See also `Are Bitwise Operators Still Relevant in Modern PHP? <https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/>`_.

Related : :ref:`Logical Operators <logical-operator>`, :ref:`Bitwise Operators <bitwise-operator>`
