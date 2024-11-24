.. _asymmetric-property:

Asymmetric Property
-------------------

An asymmetric property is a property that specify the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symetric: identical to write and read.

.. code-block:: php
   
   <?php
   
   class x {
   	public private(set) int $property;
   }
   
   ?>


Related : :ref:`Asymetric Visibility <asymmetric-visibility>`
