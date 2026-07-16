.. _validation:
.. _filtering:
.. _check:
.. meta::
	:description:
		Validation: Validation is the process to check that a data conform to a specific pattern or set of constraints.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Validation
	:twitter:description: Validation: Validation is the process to check that a data conform to a specific pattern or set of constraints
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Validation
	:og:type: article
	:og:description: Validation is the process to check that a data conform to a specific pattern or set of constraints
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/validation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/validation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/validation.ini.html","name":"Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:21:55 +0000","dateModified":"Thu, 16 Jul 2026 04:21:55 +0000","description":"Validation is the process to check that a data conform to a specific pattern or set of constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Validation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Validation
----------

Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are PHP extension and external components to perform validation tasks. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

Validation is also called filtering.

.. code-block:: php
   
   <?php
   
       if (intval($string) > 0) {
           print "The string is an integer";
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

See also `PHP Form Validation <https://www.geeksforgeeks.org/php-form-validation/>`_.

Related : :ref:`Sanitation <sanitation>`, :ref:`Parse <parse>`, :ref:`Parser <parser>`, :ref:`Schema <schema>`, :ref:`Specification <specification>`, :ref:`filter <filter>`, :ref:`parse_url() <parse_url>`, :ref:`is_array() <is_array>`, :ref:`is_bool() <is_bool>`, :ref:`is_int() <is_int>`, :ref:`is_string() <is_string>`, :ref:`Refinement Type <refinement-type>`

Related packages : `respect/validation <https://packagist.org/packages/respect/validation>`_, `beberlei/assert <https://packagist.org/packages/beberlei/assert>`_, `lemmon/validator <https://packagist.org/packages/lemmon/validator>`_
