.. _snmp3:
.. meta::
	:description:
		SNMP3: ``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SNMP3
	:twitter:description: SNMP3: ``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SNMP3
	:og:type: article
	:og:description: ``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/snmp3.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SNMP3","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SNMP3.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SNMP3
-----

``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

.. code-block:: php
   
   <?php
   $syscontact = snmp2_get('127.0.0.1', 'public', 'system.SysContact.0');
   ?>


`Documentation <https://www.php.net/manual/en/book.snmp.php>`__

See also https://www.net-snmp.org/
