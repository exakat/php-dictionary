.. _php-memory:
.. meta::
	:description:
		php://memory: ``php://memory`` is a special read-write stream that gives access a space in memory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://memory
	:twitter:description: php://memory: ``php://memory`` is a special read-write stream that gives access a space in memory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://memory
	:og:type: article
	:og:description: ``php://memory`` is a special read-write stream that gives access a space in memory
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"php:\/\/memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Apr 2026 07:39:34 +0000","dateModified":"Tue, 28 Apr 2026 07:39:34 +0000","description":"``php:\/\/memory`` is a special read-write stream that gives access a space in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://memory
------------

``php://memory`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://memory`` always stays in memory, so it may reach the memory limit of PHP.  On the other hand, ``php://tmp`` does the same, but overflows to disk when needed.

.. code-block:: php
   
   <?php
   
       file_put_contents('php://memory', $data);
       
       $data = file_get_contents('php://memory');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.php.php>`__

See also https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html

Related : , :ref:`Stream <stream>`, :ref:`memory_limit <memory_limit>`, :ref:`file_get_contents() <file_get_contents>`, :ref:`file_put_contents() <file_put_contents>`
