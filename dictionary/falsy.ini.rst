.. _falsy:

Falsy
-----

A falsy value is a value that evaluate to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''`` (empty string), or ``[]`` (empty array).

The contrary to falsy is truthy. 

There are some values which are difficult to guess, as is illustrated below.


.. code-block:: php
   
   <?php
   
   var_dump((bool) 0);       // false
   var_dump((bool) '');      // false
   var_dump((bool) '0');     // false
   var_dump((bool) '00');    // true
   var_dump((bool) []);      // false
   var_dump((bool) [null]);  // true
   var_dump((bool) null);    // false
   
   ?>


Related : :ref:`Truthy <truthy>`, :ref:`False <false>`, :ref:`Boolean <boolean>`
