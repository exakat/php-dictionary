.. _c2-framework:

C2 Framework
------------

A C2 framework is also known as a C&C framework, or command-and-control framework. It is a library of tools to use with a vulnerability, to discover and escalate services on a target website. 

Among the possible tasks, there are running command system, creating, editing and removing files, starting reverse shells, etc. 

C2-framework shall be used once a backdoor has been installed, to widen the control over the target server. The installation of the backdoor is not included in the C2 framework. 

.. code-block:: php
   
   <?php
   
   	// example of a simple backdoor, based on the GET method 
   	echo @eval($_GET['command']); 
   ?>


`Documentation <https://en.wikipedia.org/wiki/Command_and_control>`__

See also `PHPSPLO1T <https://github.com/nil0x42/phpsploit>`_, `Introduction to C2 Frameworks <https://redfoxsec.com/blog/introduction-to-c2-frameworks/>`_
