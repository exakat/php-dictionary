.. _constant-in-trait:

Constants In Trait
------------------

Constants were added to trait in PHP 8.3. Before, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own class, but higher precedence than the host parent's one.

.. code-block:: php
   
   <?php
   
   trait t {
       private const A = 1;
   }
   
   ?>


Related : :ref:`Traits <trait>`, :ref:`Static Constant <class-constant>`
