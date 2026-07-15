.. _escapeshellarg:
.. meta::
	:description:
		escapeshellarg(): ``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: escapeshellarg()
	:twitter:description: escapeshellarg(): ``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: escapeshellarg()
	:og:type: article
	:og:description: ``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/escapeshellarg.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/escapeshellarg.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/escapeshellarg.ini.html","name":"escapeshellarg()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:59:01 +0000","dateModified":"Sun, 12 Jul 2026 19:59:01 +0000","description":"``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/escapeshellarg().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


escapeshellarg()
----------------

``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command.

It is used together with ``exec()``, ``system()``, ``passthru()``, or ``shell_exec()`` when the argument is derived from user input or any untrusted source.

On Windows, ``escapeshellarg()`` uses double quotes and escapes double quotes, percent signs, and exclamation marks instead.

Note that ``escapeshellarg()`` escapes a single argument only. When the full command string needs to be sanitised, ``escapeshellcmd()`` should be used, though combining both functions correctly is preferred.

.. code-block:: php
   
   <?php
   
       $filename = $_GET['file'] ?? '';
       $safe     = escapeshellarg($filename);
       
       // Safe: $safe is a quoted, escaped argument
       exec('convert ' . $safe . ' output.png', $output, $exitCode);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.escapeshellarg.php>`__

See also `escapeshellcmd() — PHP Manual <https://www.php.net/manual/en/function.escapeshellcmd.php>`_.

Related : :ref:`Escape Data <escape-data>`, :ref:`Injection <injection>`, :ref:`Shell Injection <shell-injection>`, :ref:`exec <exec>`, :ref:`System <system>`, :ref:`Shell Exec <shell-exec>`, :ref:`escapeshellcmd() <escapeshellcmd>`, :ref:`Security <security>`
