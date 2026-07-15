.. _execution:
.. _code-execution:
.. meta::
	:description:
		Execution: Execution refers to the ability to run code or system commands dynamically at runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Execution
	:twitter:description: Execution: Execution refers to the ability to run code or system commands dynamically at runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Execution
	:og:type: article
	:og:description: Execution refers to the ability to run code or system commands dynamically at runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/execution.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/execution.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/execution.ini.html","name":"Execution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Execution refers to the ability to run code or system commands dynamically at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Execution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Execution
---------

Execution refers to the ability to run code or system commands dynamically at runtime. There is the execution of PHP code, and the execution of external code from within PHP.

Language-level code execution uses ``eval()``, which parses and executes a PHP string as code. System-level execution delegates to the operating system shell via ``exec()``, ``shell_exec()``, ``system()``, ``passthru()``, ``popen()``, or the backtick operator.

The execution of PHP code is based on the PHP engine, though it may also be achieved by other PHP runtimes, or be delegated to other engine via transpiling of the code.

The flow of execution may be hijacked by a code injection, which route the execution to arbitrary code. It is a security vulnerability.


.. code-block:: php
   
   <?php
   
       // DANGEROUS: user-controlled input passed to eval()
       $template = $_GET['tpl'];
       eval('echo ' . $template . ';');  // RCE risk
   
       // DANGEROUS: user input in a shell command
       $file = $_GET['file'];
       exec('ls ' . $file);              // command injection risk
   
       // SAFER: escape shell arguments
       $file = escapeshellarg($_GET['file']);
       exec('ls ' . $file);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.eval.php>`__

See also `PHP: exec <https://www.php.net/manual/en/function.exec.php>`_.

Related : :ref:`Eval() <eval>`, :ref:`exec <exec>`, :ref:`Shell Exec <shell-exec>`, :ref:`System <system>`, :ref:`Virtual Machine (VM) <runtime>`, :ref:`Code Injection <code-injection>`, :ref:`Remote Code Execution (RCE) <rce>`, :ref:`Lifecycle <lifecycle>`, :ref:`Order Of Execution <order-of-execution>`
