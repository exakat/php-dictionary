.. _pack:

pack
----

Pack() is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format. 

.. code-block:: php
   
   <?php
   $binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
   ?>


`Documentation <https://www.php.net/manual/en/function.pack.php>`__
