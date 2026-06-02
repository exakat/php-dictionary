.. _shell_exec:
.. meta::
	:description:
		shell_exec(): ``shell_exec()`` executes a command with the underlying operating system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: shell_exec()
	:twitter:description: shell_exec(): ``shell_exec()`` executes a command with the underlying operating system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: shell_exec()
	:og:type: article
	:og:description: ``shell_exec()`` executes a command with the underlying operating system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shell_exec.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"shell_exec()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 10:27:11 +0000","dateModified":"Thu, 28 May 2026 10:27:11 +0000","description":"``shell_exec()`` executes a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shell_exec().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


shell_exec()
------------

``shell_exec()`` executes a command with the underlying operating system. They are the equivalent of the backtick operator \`.

The command has to be passed as a string. The result is returned also as a string, or a ``null`` when the command fails.

.. code-block:: php
   
   <?php
   
       $dir = shell_exec('ls');
   
   ?>


See also `Explain the Difference Between shell_exec() and exec() Functions <https://www.geeksforgeeks.org/php/explain-the-difference-between-shell_exec-and-exec-functions/>`_ and `PHP shell_exec Function: How to Use It [With Examples] <https://www.linuxscrew.com/php-shell-exec>`_.

Related : :ref:`Back-tick <backtick>`, :ref:`exec <exec>`
