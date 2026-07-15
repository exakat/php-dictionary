.. _resource-leak:
.. _file-leak:
.. _connection-leak:
.. meta::
	:description:
		Resource Leak: A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Resource Leak
	:twitter:description: Resource Leak: A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Resource Leak
	:og:type: article
	:og:description: A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/resource-leak.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/resource-leak.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/resource-leak.ini.html","name":"Resource Leak","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:30:39 +0000","dateModified":"Fri, 10 Jul 2026 09:30:39 +0000","description":"A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Resource Leak.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Resource Leak
-------------

A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed. The resource remains allocated until the process ends or the PHP request finishes, consuming memory and system file descriptors unnecessarily.

Resource leaks are common with ``fopen()``, ``fsockopen()``, database connections opened via ``mysqli_connect()`` or PDO, and cURL handles. If the code returns early, throws an exception, or follows an unexpected path before reaching the ``fclose()`` / ``mysqli_close()`` / ``curl_close()`` call, the resource is leaked. 

In a regular code execution, function returns trigger variable cleaning, which, in turns, leads to the automatic closing of resources. So, the leak might happen when a resource is stored in a property, with a longer life-span, even though it might not be used. ``Weakmap`` are a solution to store data where it might be removed when memory gets tight. 

PHP's request lifecycle mitigates leaks for short-lived web requests: resources are released at the end of the request. However, in long-running CLI scripts, daemons, or applications using ReactPHP or Swoole, leaked resources accumulate and can exhaust system limits.

The recommended mitigation is to use ``try``/``finally`` blocks to guarantee cleanup, or to wrap resources in objects that close themselves in their destructor.

.. code-block:: php
   
   <?php
   
       // BAD: fclose() may never be reached if an exception is thrown
       $fp = fopen('data.csv', 'r');
       processLines($fp);   // may throw
       fclose($fp);         // skipped on exception → resource leak
   
       // GOOD: finally guarantees the handle is always closed
       $fp = fopen('data.csv', 'r');
       try {
           processLines($fp);
       } finally {
           fclose($fp);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Resource_leak>`__

See also `PHP: fclose <https://www.php.net/manual/en/function.fclose.php>`_ and `Handling resource leaks in PHP <https://www.php.net/manual/en/language.exceptions.php>`_.

Related : :ref:`resource <resource>`, :ref:`Exception <exception>`, :ref:`Try-catch <try-catch>`, :ref:`Finally <finally>`, :ref:`fopen() <fopen>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Weakmap <weakmap>`, :ref:`Memory Leak <memory-leak>`, :ref:`Leak <leak>`
