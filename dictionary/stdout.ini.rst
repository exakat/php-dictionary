.. _stdout:
.. _standard-output:

STDOUT
------

stdout refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a writeonly stream. 

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a writeonly stream. 


.. code-block:: php
   
   <?php
   
   // implicitely write to the standard output
   echo 'Hello world';
   
   // explicitely write to the standard output
   fwrite(STDOUT, 'Hello world');
   
   // explicitely write to the standard output
   $fp = fopen('php://stdout', 'w');
   fwrite($fp, 'Hello world');
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.constants.php>`__

See also `PHP Protocol <https://www.php.net/manual/en/wrappers.php.php>`_
