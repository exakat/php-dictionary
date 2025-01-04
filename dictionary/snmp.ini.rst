.. _snmp:
.. meta::
	:description:
		Simple Network Management Protocol (SNMP): SNMP stands for 'Simple Network Management Protocol'.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Simple Network Management Protocol (SNMP)
	:twitter:description: Simple Network Management Protocol (SNMP): SNMP stands for 'Simple Network Management Protocol'
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Simple Network Management Protocol (SNMP)
	:og:type: article
	:og:description: SNMP stands for 'Simple Network Management Protocol'
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/snmp.ini.html
	:og:locale: en


Simple Network Management Protocol (SNMP)
-----------------------------------------

SNMP stands for 'Simple Network Management Protocol'. The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

.. code-block:: php
   
   <?php
       $syscontact = snmp2_get(127.0.0.1, public, system.SysContact.0);
   ?>


`Documentation <https://www.php.net/manual/en/book.snmp.php>`__

See also https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol
