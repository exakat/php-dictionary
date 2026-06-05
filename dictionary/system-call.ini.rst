.. _system-call:
.. meta::
	:description:
		System Call: A system call is a call to an operating system function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: System Call
	:twitter:description: System Call: A system call is a call to an operating system function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: System Call
	:og:type: article
	:og:description: A system call is a call to an operating system function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/system-call.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"System Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"A system call is a call to an operating system function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/System Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


System Call
-----------

A system call is a call to an operating system function. In PHP, those are done with the ``shell_exec()``, ``system()`` and ``exec()`` functions; and the `` (back tick) operators.

.. code-block:: php
   
   <?php
   
       // list files
       $list = shell_exec('ls -1');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/System_call>`__

See also `Web Shells 101 Using PHP (Web Shells Part 2) <https://www.acunetix.com/blog/articles/web-shells-101-using-php-introduction-web-shells-part-2/>`_.

Related : :ref:`System <system>`, :ref:`System <os>`, :ref:`exec <exec>`, :ref:`Shell Exec <shell-exec>`, :ref:`Webshell <webshell>`
