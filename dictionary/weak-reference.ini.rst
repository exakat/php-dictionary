.. _weak-reference:

Weak References
---------------

Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 

.. code-block:: php
   
   <?php
   
   $obj = new stdClass;
   $weakref = WeakReference::create($obj);
   
   var_dump($weakref->get());
   unset($obj);
   
   var_dump($weakref->get());
   // NULL
   
   ?>


`Documentation <https://www.php.net/manual/en/class.weakreference.php>`__

See also `PHP 8.0 feature focus: Weak maps <https://platform.sh/blog/php-80-feature-focus-weak-maps/>`_, `WeakReferences <https://www.cmuir.co.nz/post/weakreferences/>`_

Related : :ref:`References <reference>`

Added in PHP 7.4
