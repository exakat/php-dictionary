.. _invariant:

Type Invariant
--------------

A type invariant is a data container whose type can't change between a parent class and a child class. This is the case of properties.

The child type must be a subtype of the parent type and the parent type must be a subtype of the child type. This implies that the types are equal.

Invariance is the third type of variance, with contravariance and covariance.


.. code-block:: php
   
   <?php
   
   class p {
   	protected string $p;
   }
   
   class q extends p {
   	// same a above
   	protected string $p;
   }
   
   ?>


See also `Type variance in PHP <https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html>`_

Related : :ref:`Covariance <covariance>`, :ref:`Contravariance <contravariance>`
