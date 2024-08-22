.. _non-breakable-space:

Non Breakable Spaces
--------------------

Space is one of the base ascii character. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called : non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.


.. code-block:: php
   
   <?php
   
   // This is a space, it won't compile
   const A B = 1;
   
   // This is a non breakabe space, it compile and is not visibly different from the line above
   const A B = 1;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Non-breaking_space>`__

See also `Non breakable space in PHP <https://3v4l.org/ATkWY>`_
