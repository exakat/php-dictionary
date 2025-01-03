.. _null:
.. meta::
	:description:
		Null: ``null`` is a special data type that represents a variable with no value or an undefined value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null
	:twitter:description: Null: ``null`` is a special data type that represents a variable with no value or an undefined value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null
	:og:type: article
	:og:description: ``null`` is a special data type that represents a variable with no value or an undefined value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html
	:og:locale: en


Null
----

``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object. 


.. code-block:: php
   
   <?php
   
   $a = null;
   
   function foo(?string $s = null) {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.null.php>`__

See also `Much ado about null <https://peakd.com/hive-168588/@crell/much-ado-about-null>`_, `Null Hell and How to Get Out of It <https://afilina.com/null-hell>`_, `Avoiding Unnecessary Null Checks <https://www.arhohuttunen.com/avoiding-unnecessary-null-checks/>`_

Related : :ref:`Nullable <nullable>`, :ref:`Null Pattern <nullpattern>`
