.. _relaxed-keywords:

Relaxed Keywords
----------------

The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name. 

Generally speaking, PHP keywords are not allowed as names for classes, functions, etc. This is still the case here, yet this constraint has been relaxed for method names. 

Functions (not methods), and global constants do not support that feature.

Property names do not have this constraints, as the ``$`` sign make them distinct. 

Using PHP keywords as names is not a commonly known feature, and generate a lot of surprise, when used. 

.. code-block:: php
   
   <?php
   
   class x {
   	const function = 1;
   	function function() {}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words>`__
