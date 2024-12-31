.. _validation:
.. _filter:
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


Validation
----------

Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are native and extension functions in PHP to perform validation, and components. 

Validation is also called filtering. 

.. code-block:: php
   
   <?php
   
   if (intval($string) > 0) {
       print "The string is an integer";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

See also `PHP Form Validation <https://www.geeksforgeeks.org/php-form-validation/>`_

Related : :ref:`Sanitation <sanitation>`

Related packages : `respect/validation <https://packagist.org/packages/respect/validation>`_, `beberlei/assert <https://packagist.org/packages/beberlei/assert>`_
