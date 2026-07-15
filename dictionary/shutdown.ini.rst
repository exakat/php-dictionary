.. _shutdown:
.. _termination:
.. meta::
	:description:
		Shutdown: Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shutdown
	:twitter:description: Shutdown: Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shutdown
	:og:type: article
	:og:description: Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shutdown.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shutdown.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shutdown.ini.html","name":"Shutdown","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 17:41:49 +0000","dateModified":"Mon, 13 Jul 2026 17:41:49 +0000","description":"Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shutdown.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shutdown
--------

Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script.

It happens when the script reaches its natural end, or when it is interrupted early with ``exit()`` or ``die()``. It also happens after an uncaught error or a fatal error, since those stop the normal execution flow.

During shutdown, PHP calls any function registered with ``register_shutdown_function()``, then destroys the remaining objects, triggering their ``__destruct()`` method. Output buffers are flushed, and resources like open files or database connections that were not explicitly closed are released by the engine.

At the engine level, shutdown is actually split in two steps: ``RSHUTDOWN``, which cleans up the current request, and ``MSHUTDOWN``, which unloads the extensions when the whole PHP process ends. Userland code, such as shutdown functions and destructors, only runs during ``RSHUTDOWN``.

Shutdown is also the only moment when a fatal error may still be detected and logged, using ``error_get_last()`` inside a registered shutdown function, since such errors bypass regular error handlers.

.. code-block:: php
   
   <?php
   
       register_shutdown_function(function () {
           $error = error_get_last();
           if ($error !== null && $error['type'] === E_ERROR) {
               error_log($error['message']);
           }
       });
   
       class Connection {
           function __destruct() {
               echo 'Connection closed', PHP_EOL;
           }
       }
   
       $db = new Connection();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.register-shutdown-function.php>`__

See also `Learning the PHP lifecycle <https://www.phpinternalsbook.com/php7/extensions_design/php_lifecycle.html>`_ and `How to catch a fatal error in PHP <https://www.php.net/manual/en/function.error-get-last.php>`_.

Related : :ref:`Shutdown Function <shutdown-function>`, :ref:`Destructor <destructor>`, :ref:`Exit <exit>`, :ref:`Lifecycle <lifecycle>`, :ref:`Execution <execution>`, :ref:`Garbage Collection <garbage-collection>`
