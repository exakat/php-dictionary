.. _escapeshellcmd:
.. meta::
	:description:
		escapeshellcmd(): ``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: escapeshellcmd()
	:twitter:description: escapeshellcmd(): ``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: escapeshellcmd()
	:og:type: article
	:og:description: ``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/escapeshellcmd.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"escapeshellcmd()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 08:34:53 +0000","dateModified":"Mon, 06 Jul 2026 08:34:53 +0000","description":"``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/escapeshellcmd().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


escapeshellcmd()
----------------

``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``;``, ``|``, ``(``, ``)``, ``[``, ``]``, ``{``, ``}``, ``$``, ````, ``\``, ``"``, ``'``, and whitespace sequences that could alter the intended command.

Unlike ``escapeshellarg()``, which wraps a single argument in quotes, ``escapeshellcmd()`` is applied to the entire command string and escapes individual special characters with a backslash. It is suitable when the command itself is dynamic, not just its arguments.

Important caveats:

+ ``escapeshellcmd()`` does not make arbitrary shell strings safe. It is designed for use with ``exec()``, ``system()``, ``passthru()``, and ``shell_exec()``, but cannot protect against every shell injection vector. Prefer ``escapeshellarg()`` on each argument individually, as this is generally more reliable.
+ On Windows, ``escapeshellcmd()`` has different behaviour: it escapes a different set of special characters. Code relying on it must be tested on the target platform.
+ The safest approach to shell execution is to avoid building a command string at all. Use ``proc_open()`` with an array argument form (where available via wrapper libraries) or pass arguments as an explicit array, which bypasses the shell entirely.

.. code-block:: php
   
   <?php
   
   $userInput = $_GET['path'] ?? '';
   
   // Escapes metacharacters in the whole command string
   $cmd = escapeshellcmd('ls -la ' . $userInput);
   exec($cmd, $output);
   
   // Preferred: escape each argument individually with escapeshellarg()
   $safeInput = escapeshellarg($userInput);
   exec('ls -la ' . $safeInput, $output);
   
   // Safest: avoid shell entirely with proc_open + array (Symfony Process component)
   // $process = new \Symfony\Component\Process\Process(['ls', '-la', $userInput]);
   // $process->run();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.escapeshellcmd.php>`__

See also `escapeshellcmd() — PHP Manual <https://www.php.net/manual/en/function.escapeshellcmd.php>`_, `escapeshellarg() — PHP Manual <https://www.php.net/manual/en/function.escapeshellarg.php>`_ and `Symfony Process component <https://symfony.com/doc/current/components/process.html>`_.

Related : :ref:`escapeshellarg() <escapeshellarg>`, :ref:`Shell Injection <shell-injection>`, :ref:`Injection <injection>`, :ref:`Shell Exec <shell-exec>`, :ref:`exec <exec>`, :ref:`System <system>`, :ref:`Security <security>`, :ref:`Escape Data <escape-data>`

Related packages : `symfony/process <https://packagist.org/packages/symfony/process>`_
