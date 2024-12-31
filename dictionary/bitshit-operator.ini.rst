.. _bitshift:
.. meta::
	:description:
		Bitshift Operators: Bitshift operators ``<<`` and ``>>`` move bits within an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitshift Operators
	:twitter:description: Bitshift Operators: Bitshift operators ``<<`` and ``>>`` move bits within an integer
	:twitter:creator: @exakat
	:og:title: Bitshift Operators
	:og:type: article
	:og:description: Bitshift operators ``<<`` and ``>>`` move bits within an integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitshift.ini.html
	:og:locale: en


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

See also `Are Bitwise Operators Still Relevant in Modern PHP? <https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/>`_

Related : :ref:`Logical Operators <logical-operator>`, :ref:`Bitwise Operators <bitwise-operator>`
