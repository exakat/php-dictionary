.. _identifier:

Identifier
----------

An identifier is simply a name used to identify a function, class, enum, interface, trait, method, constant, or class constant. 

Identifiers are subject to certain rules, depending on their usage: for example, ``xor`` may be used as a name for a method, but not for a global constant.

Identifiers are mentionned in syntax errors, where a string is used while the parser expected another kind of token.

Identifiers are relative to the current namespace. They may be created by creating one of the supporting structure (such as function, global constant...). Their features are related to absolute names, such as ``\A``, and relative names, such as ``B\C`` (not shown here).

In the illustration, ``A`` is an identifier for a global constant: it is valid. ``B`` should most probably be a variable, and yields an error.


.. code-block:: php
   
   <?php
   
   // A is a valid identifier
   foreach(A as B) {}
   
   ?>

