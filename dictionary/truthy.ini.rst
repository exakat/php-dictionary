.. _truthy:

Truthy
------

A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as 1, -1, ``'0'`` (strings, except the empty string and ``'0``), non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.

.. code-block:: php
   
   <?php
   
   var_dump((bool) 1);       // true
   var_dump((bool) -1);      // true
   var_dump((bool) '0');     // false
   var_dump((bool) '00');    // true
   var_dump((bool) []);      // false
   var_dump((bool) [null]);  // true
   var_dump((bool) new stdclass);    // true
   
   ?>


Related : :ref:`False <false>`, :ref:`True <true>`, :ref:`Boolean <boolean>`, :ref:`Falsy <falsy>`
