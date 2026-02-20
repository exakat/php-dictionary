.. _system:
.. _os:
.. _operating-system:
.. meta::
	:description:
		System: The system, or the operating system, is the environement where PHP is running.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: System
	:twitter:description: System: The system, or the operating system, is the environement where PHP is running
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: System
	:og:type: article
	:og:description: The system, or the operating system, is the environement where PHP is running
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/system.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 18:31:33 +0000","dateModified":"Wed, 18 Feb 2026 18:31:33 +0000","description":"The system, or the operating system, is the environement where PHP is running","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/System.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


System
------

The system, or the operating system, is the environement where PHP is running. It might be Linux, MacOSX, Windows, Debian etc. The system provides specific features, such as access to the file system, or a shell to run commands.

``system()`` is also a PHP native function, which execute a system command, and immediatly display it to the standard output. It is usually recommended to use ``shell_exec()``, which returns the results, rather than display it.

.. code-block:: php
   
   <?php
   
   // use a system command to get the name of the underlying OS name
   echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');
   
   // same as above
   system('cat /etc/os-releaselsb_release –ahostnamectl');
   
   ?>


Related : :ref:`shell_exec() <shell_exec>`, :ref:`Back-tick <backtick>`
