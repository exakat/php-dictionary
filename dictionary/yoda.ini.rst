.. _yoda:
.. _yoda-condition:
.. meta::
	:description:
		Yoda Condition: Yoda condition is a way to write condition by using any literal value on the left, instead of the right.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yoda Condition
	:twitter:description: Yoda Condition: Yoda condition is a way to write condition by using any literal value on the left, instead of the right
	:twitter:creator: @exakat
	:og:title: Yoda Condition
	:og:type: article
	:og:description: Yoda condition is a way to write condition by using any literal value on the left, instead of the right
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/yoda.ini.html
	:og:locale: en


Yoda Condition
--------------

Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.

.. code-block:: php
   
   <?php
   
   // Yoda condition
   if (0 == $a) {}
   
   // Assignation, instead of comparison and bug
   if ($a = 0) {}
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Yoda_conditions>`__

See also `Why using Yoda conditions you should probably not be  <https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not>`_
