.. _deprecated:

Deprecated
----------

Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.

.. code-block:: php
   
   <?php
   
   #[Deprecated]
   function foo() {}
   
   foo();
   //Deprecated: Function foo() is deprecated
   
   #[Deprecated('Use hoo instead.')]
   function goo() {}
   
   goo();
   //Deprecated: Function goo() is deprecated, Use hoo instead.
   
   ?>


`Documentation <https://wiki.php.net/rfc/deprecated_attribute>`__
