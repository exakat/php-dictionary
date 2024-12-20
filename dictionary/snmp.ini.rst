.. _snmp:

SNMP
----

The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

.. code-block:: php
   
   <?php
       $syscontact = snmp2_get(127.0.0.1, public, system.SysContact.0);
   ?>


`Documentation <https://www.php.net/manual/en/book.snmp.php>`__

See also https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol
