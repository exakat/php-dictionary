.. _octal-integer:
.. _octal:

Octal Integer
-------------

Integers can be specified in octal (base 8) notation. Octal integer syntax starts with ``0o`` (zero-o) and only contains digits from 0 to 7.

Initially, octal integers were formatted by simply starting with a initial 0. This features is still available, yet should be replaced with the less confusing syntax with ``0o``.


.. code-block:: php
   
   <?php
   
   // 12
   $octal = 0O14;
   $octal = 014;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`integer <integer>`, :ref:`Binary Integer <binary-integer>`, :ref:`Hexadecimal Integer <hexadecimal-integer>`
