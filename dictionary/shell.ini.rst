.. _shell:
.. meta::
	:description:
		Shell: A shell is a program that provides an interface for users to interact with the operating system (OS) and execute commands.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shell
	:twitter:description: Shell: A shell is a program that provides an interface for users to interact with the operating system (OS) and execute commands
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shell
	:og:type: article
	:og:description: A shell is a program that provides an interface for users to interact with the operating system (OS) and execute commands
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shell.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Shell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 02 Feb 2026 10:25:03 +0000","dateModified":"Mon, 02 Feb 2026 10:25:03 +0000","description":"A shell is a program that provides an interface for users to interact with the operating system (OS) and execute commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shell.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shell
-----

A shell is a program that provides an interface for users to interact with the operating system (OS) and execute commands. It acts as a command interpreter, taking input from the user, interpreting it, and then executing the appropriate actions.

PHP is able to relay commands to the OS using dedicated local functions, such as ``shell_exec()``, ``exec()``, ``system()``, ``passthru()`` and the back-tick operator (`). It is also able to access remote shells with the ``ssh://`` protocol.

Shells provide a important access to the underlying OS: they are considered as a critical point of entry for security attacks.

.. code-block:: php
   
   <?php
   
   $output = shell_exec('ls -lart');
   echo <pre>$output</pre>;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Shell_(computing)>`__

Related : :ref:`Process Control (pcntl) <pcntl>`

Related packages : `psy/psysh <https://packagist.org/packages/psy/psysh>`_
