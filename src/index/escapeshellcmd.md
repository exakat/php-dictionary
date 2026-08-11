# escapeshellcmd()
``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``;``, ``|``, ``(``, ``)``, ``[``, ``]``, ``{``, ``}``, ``$``, `` \` ``, ``\``, ``"``, ``'``, and whitespace sequences that could alter the intended command.

Unlike ``escapeshellarg()``, which wraps a single argument in quotes, ``escapeshellcmd()`` is applied to the entire command string and escapes individual special characters with a backslash. It is suitable when the command itself is dynamic, not just its arguments.

Important caveats:

+ ``escapeshellcmd()`` does not make arbitrary shell strings safe. It is designed for use with ``exec()``, ``system()``, ``passthru()``, and ``shell_exec()``, but cannot protect against every shell injection vector. Prefer ``escapeshellarg()`` on each argument individually, as this is generally more reliable.
+ On Windows, ``escapeshellcmd()`` has different behaviour: it escapes a different set of special characters. Code relying on it must be tested on the target platform.
+ The safest approach to shell execution is to avoid building a command string at all. Use ``proc_open()`` with an array argument form, where available via wrapper libraries, or pass arguments as an explicit array, which bypasses the shell entirely.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html","name":"escapeshellcmd()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:29:57 +0000","dateModified":"Fri, 24 Jul 2026 15:29:57 +0000","description":"``escapeshellcmd()`` is a PHP function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"escapeshellcmd"}]}]}</script>
```php
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
```

**[Documentation](https://www.php.net/manual/en/function.escapeshellcmd.php)**
## See Also

+ [escapeshellarg() — PHP Manual](https://www.php.net/manual/en/function.escapeshellarg.php)
+ [Symfony Process component](https://symfony.com/doc/current/components/process.html)

## Related

+ [escapeshellarg()](escapeshellarg.html)
+ [Shell Injection](shell-injection.html)
+ [Injection](injection.html)
+ [Shell Exec](shell-exec.html)
+ [exec](exec.html)
+ [System](system.html)
+ [Security](security.html)
+ [Escape Data](escape-data.html)

## Related packages

+ [symfony/process](https://packagist.org/packages/symfony/process)
