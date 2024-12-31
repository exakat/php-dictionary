.. _system:
.. _os:
.. _operating-system:
.. meta::
	:description:
		System: The system, or the operating system, is the environement where PHP is running.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: System
	:twitter:description: System: The system, or the operating system, is the environement where PHP is running
	:twitter:creator: @exakat
	:og:title: System
	:og:type: article
	:og:description: The system, or the operating system, is the environement where PHP is running
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/system.ini.html
	:og:locale: en


System
------

The system, or the operating system, is the environement where PHP is running. It might be Linux, MacOSX, Windows, Debian etc. The system provides specific features, such as access to the file system, or a shell to run commands.

.. code-block:: php
   
   <?php
   
   // use a system command to get the name of the underlying OS name
   echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');
   
   ?>

