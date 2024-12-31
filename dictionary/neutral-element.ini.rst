.. _neutral-element:
.. meta::
	:description:
		Neutral Element: A neutral element is an piece of data which has no effect with a particular operation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Neutral Element
	:twitter:description: Neutral Element: A neutral element is an piece of data which has no effect with a particular operation
	:twitter:creator: @exakat
	:og:title: Neutral Element
	:og:type: article
	:og:description: A neutral element is an piece of data which has no effect with a particular operation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/neutral-element.ini.html
	:og:locale: en


Neutral Element
---------------

A neutral element is an piece of data which has no effect with a particular operation.

For example, ``0`` is the neutral element for the addition, as ``0 + $a`` is the same as ``$a + 0`` and the same as ``$a`` (without any type change).

The neutral element for the multiplication is ``1``; the neutral element for the concatenation is the empty string ``''``. 

It is usually possible to define a neutral element for any operation or method call. For objects, they are call null object, as they could replace the ``null`` scalar value.


.. code-block:: php
   
   <?php
   
   $a = 10;
   
   $a *= 1; // this does nothing
   $a += 1; // this does nothing
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Identity_element>`__

See also `Null Object Pattern <https://en.wikipedia.org/wiki/Null_object_pattern>`_
