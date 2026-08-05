# escapeshellarg()
``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command.

It is used together with ``exec()``, ``system()``, ``passthru()``, or ``shell_exec()`` when the argument is derived from user input or any untrusted source.

On Windows, ``escapeshellarg()`` uses double quotes and escapes double quotes, percent signs, and exclamation marks instead.

Note that ``escapeshellarg()`` escapes a single argument only. When the full command string needs to be sanitised, ``escapeshellcmd()`` should be used, though combining both functions correctly is preferred.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escapeshellarg.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escapeshellarg.ini.html","name":"escapeshellarg()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:59:01 +0000","dateModified":"Sun, 12 Jul 2026 19:59:01 +0000","description":"``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escapeshellarg().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $filename = $_GET['file'] ?? '';
    $safe     = escapeshellarg($filename);
    
    // Safe: $safe is a quoted, escaped argument
    exec('convert ' . $safe . ' output.png', $output, $exitCode);

?>
```

**[Documentation](https://www.php.net/manual/en/function.escapeshellarg.php)**
## See Also

+ [escapeshellcmd() — PHP Manual](https://www.php.net/manual/en/function.escapeshellcmd.php)

## Related

+ [Escape Data](escape-data.ini.html)
+ [Injection](injection.ini.html)
+ [Shell Injection](shell-injection.ini.html)
+ [exec](exec.ini.html)
+ [System](system.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [escapeshellcmd()](escapeshellcmd.ini.html)
+ [Security](security.ini.html)
