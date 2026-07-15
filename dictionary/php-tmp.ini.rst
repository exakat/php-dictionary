.. _php-tmp:
.. meta::
	:description:
		php://tmp: ``php://tmp`` is a special read-write stream that gives access a space in memory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://tmp
	:twitter:description: php://tmp: ``php://tmp`` is a special read-write stream that gives access a space in memory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://tmp
	:og:type: article
	:og:description: ``php://tmp`` is a special read-write stream that gives access a space in memory
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-tmp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php-tmp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php-tmp.ini.html","name":"php:\/\/tmp","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``php:\/\/tmp`` is a special read-write stream that gives access a space in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/tmp.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://tmp
---------

``php://tmp`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://tmp`` stays in memory, and, when reaching a certain level, it overflows to disk. This allows this space to go beyond the maximum memory limit of PHP, without stopping the script.

.. code-block:: php
   
   <?php
   
       file_put_contents('php://tmp', $data);
       
       $data = file_get_contents('php://tmp');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.php.php>`__

See also `Speed Up CSV Write To Disk <https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html>`_.

Related : :ref:`php://memory <php-memory>`, :ref:`Stream <stream>`, :ref:`memory_limit <memory_limit>`, :ref:`file_get_contents() <file_get_contents>`, :ref:`file_put_contents() <file_put_contents>`
