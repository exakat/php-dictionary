.. _exec:
.. meta::
	:description:
		exec: ``exec()`` use used to execute a command with the underlying operating system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: exec
	:twitter:description: exec: ``exec()`` use used to execute a command with the underlying operating system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: exec
	:og:type: article
	:og:description: ``exec()`` use used to execute a command with the underlying operating system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exec.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"exec","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:02 +0000","dateModified":"Fri, 19 Jun 2026 21:25:02 +0000","description":"``exec()`` use used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/exec.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


exec
----

``exec()`` use used to execute a command with the underlying operating system. It is the equivalent of ``shell_exec()`` and back-ticks. 

``exec()`` has specific arguments to collect both the result of the command, one line per element in an array, and the resulting code. This differs from ``shell_exec()``, which only returns the result, and as a string.

.. code-block:: php
   
   <?php
   
   $dir = exec('ls', $result);
   print_r($result);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.exec.php>`__

See also `PHP shell_exec() vs exec() Function <https://www.geeksforgeeks.org/php/php-shell_exec-vs-exec-function/>`_.

Related : :ref:`shell_exec() <shell_exec>`, :ref:`Back-tick <back-tick>`, :ref:`Back-tick <backtick>`, :ref:`Execution <execution>`, :ref:`Shell Exec <shell-exec>`, :ref:`System Call <system-call>`
