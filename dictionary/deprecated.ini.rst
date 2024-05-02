.. _deprecated:
.. _obsolete:

Deprecation
-----------

Deprecation is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.

.. code-block:: php
   
   <?php
   
   1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
   (1 ? 2 : 3) ? 4 : 5; // ok
   
   ?>


`Documentation <https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary>`__
