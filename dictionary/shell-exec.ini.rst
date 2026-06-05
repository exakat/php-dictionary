.. _shell-exec:
.. meta::
	:description:
		Shell Exec: Shell execution in PHP runs operating system commands from PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shell Exec
	:twitter:description: Shell Exec: Shell execution in PHP runs operating system commands from PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shell Exec
	:og:type: article
	:og:description: Shell execution in PHP runs operating system commands from PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shell-exec.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Shell Exec","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Shell execution in PHP runs operating system commands from PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shell Exec.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shell Exec
----------

Shell execution in PHP runs operating system commands from PHP code. Functions include ``shell_exec()``, ``exec()``, ``system()``, ``passthru()``, ``popen()``, and the backtick operator.

Using shell commands with user-supplied input without proper escaping is a critical security vulnerability enabling Remote Code Execution (RCE). Always use ``escapeshellarg()`` or ``escapeshellcmd()`` when building shell commands, or prefer purpose-built PHP functions.

.. code-block:: php
   
   <?php
   
   // Dangerous: user input in shell command
   $file = $_GET['file'];
   $output = shell_exec('cat ' . $file); // RCE vulnerability
   
   // Safe: escape the argument
   $file = escapeshellarg($_GET['file']);
   $output = shell_exec('cat ' . $file);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.shell-exec.php>`__

See also `shell_exec() <https://www.php.net/manual/en/function.shell-exec.php>`_, `escapeshellarg() <https://www.php.net/manual/en/function.escapeshellarg.php>`_ and `Command injection <https://owasp.org/www-community/attacks/Command_Injection>`_.

Related : :ref:`shell_exec() <shell_exec>`, :ref:`Shell <shell>`, :ref:`exec <exec>`, :ref:`Remote Code Execution (RCE) <rce>`, :ref:`Security <security>`, :ref:`System Call <system-call>`, :ref:`Execution <execution>`, :ref:`SplSubject <splsubject>`
