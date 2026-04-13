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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 05:28:50 +0000","dateModified":"Mon, 13 Apr 2026 05:28:50 +0000","description":"Validation is the process to check that a data conform to a specific pattern or set of constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Validation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Validation
----------

Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are native and extension functions in PHP to perform validation, and components. 

Validation is also called filtering. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

.. code-block:: php
   
   <?php
   
       if (intval($string) > 0) {
           print "The string is an integer";
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

See also https://www.geeksforgeeks.org/php-form-validation/

Related : :ref:`Sanitation <sanitation>`

Related packages : `respect/validation <https://packagist.org/packages/respect/validation>`_, `beberlei/assert <https://packagist.org/packages/beberlei/assert>`_, `lemmon/validator <https://packagist.org/packages/lemmon/validator>`_
