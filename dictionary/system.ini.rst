.. _system:
.. _os:
.. _operating-system:

System
------

The system, or the operating system, is the environement where PHP is running. It might be Linux, MacOSX, Windows, Debian etc. The system provides specific features, such as access to the file system, or a shell to run commands.

.. code-block:: php
   
   <?php
   
   // use a system command to get the name of the underlying OS name
   echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');
   
   ?>

