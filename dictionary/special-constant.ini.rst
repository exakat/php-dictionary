.. _special-constant:

Special Constant
----------------

The only special constant is the ``::class`` constant. It has the same syntax as a class constant, hence the name. Yet, it is always defined, and holds the fully qualified name of the related class, interface, trait or enumeration.

It is convenient for class name resolution, in particular with namespaced classes.

The resulting name does not include the initial ``\``.

``::class`` is similar to the get_class() function, although it is compatible with ``static``, ``self`` or ``parent``.

The notion of special constant is distinct from the magic constants, such as ``__FILE__``.


.. code-block:: php
   
   <?php
   
   use A\B\C as D;
   
   echo A::class;  // A 
   
   echo D::class;  // A\B\C 
   
   class x {
   	function foo() {
   		echo static::class;  // x
   	}
   }
   
   echo $object::class; // similar to get_class($object)
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Fully Qualified Name <fqn>`, :ref:`Static Constant <class-constant>`, :ref:`Magic Constants <magic-constant>`
