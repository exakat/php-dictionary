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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Simple Network Management Protocol (SNMP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Feb 2025 00:13:14 +0000","dateModified":"Sat, 15 Feb 2025 00:13:14 +0000","description":"SNMP stands for 'Simple Network Management Protocol'","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Simple Network Management Protocol (SNMP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Simple Network Management Protocol (SNMP)
-----------------------------------------

SNMP stands for 'Simple Network Management Protocol'. The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

.. code-block:: php
   
   <?php
       $syscontact = snmp2_get(127.0.0.1, public, system.SysContact.0);
   ?>


`Documentation <https://www.php.net/manual/en/book.snmp.php>`__

See also https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol
