.. _comparison:
.. _comparison-operator:
.. meta::
	:description:
		Comparison: Comparison operators check how two values relate to each other.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comparison
	:twitter:description: Comparison: Comparison operators check how two values relate to each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comparison
	:og:type: article
	:og:description: Comparison operators check how two values relate to each other
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/comparison.ini.html","name":"Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:09:05 +0000","dateModified":"Tue, 16 Jun 2026 15:09:05 +0000","description":"Comparison operators check how two values relate to each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Comparison
----------

Comparison operators check how two values relate to each other. They may be equal or different, and, depending on the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, ``==``, ``<>``, ``<=>``, ``switch()`` and ``!=``, and with type checks, ``match()``, ``===`` and ``!==``. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications: ``strcmp()``, ``strcasecmp()``, ``strnatcasecmp()``, ``strcoll()``, ``similar_text()``, ``levensthein()``, ``bccomp()``, ``version_compare()``, ``hash_equals()``. 

Some of the functions include a loose or a strict version.

.. code-block:: php
   
   <?php
   
       if ($a == $b) {
           print 'a and b are equal';
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `PHP Variable Comparison <https://phpcheatsheets.com/compare/>`_ and `Difference between the (=), (==), and (===) operators in PHP <https://www.educative.io/answers/difference-between-the-and-operators-in-php>`_.

Related : :ref:`Operators <operator>`, :ref:`Type Juggling <type-juggling>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Spaceship Operator <spaceship>`, :ref:`Magic Hash <magic-hash>`, :ref:`Truthy <truthy>`, :ref:`Underscore <underscore>`, :ref:`zero <zero>`, :ref:`Identity Comparison <identity-comparison>`, :ref:`Relaxed Comparison <relaxed-comparison>`, :ref:`array_keys() <array_keys>`, :ref:`Double Arrow <double-arrow>`, :ref:`Triple <triple>`
