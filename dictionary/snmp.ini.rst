.. _snmp:
.. meta::
	:description:
		SNMP: The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SNMP
	:twitter:description: SNMP: The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SNMP
	:og:type: article
	:og:description: The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/snmp.ini.html
	:og:locale: en


SNMP
----

The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

.. code-block:: php
   
   <?php
       $syscontact = snmp2_get(127.0.0.1, public, system.SysContact.0);
   ?>


`Documentation <https://www.php.net/manual/en/book.snmp.php>`__

See also https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol
