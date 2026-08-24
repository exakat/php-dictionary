# escapeshellarg()
``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command.

It is used together with ``exec()``, ``system()``, ``passthru()``, or ``shell_exec()`` when the argument is derived from user input or any untrusted source.

On Windows, ``escapeshellarg()`` uses double quotes and escapes double quotes, percent signs, and exclamation marks instead.

Note that ``escapeshellarg()`` escapes a single argument only. When the full command string needs to be sanitised, ``escapeshellcmd()`` should be used, though combining both functions correctly is preferred.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html","name":"escapeshellarg()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:59:01 +0000","dateModified":"Sun, 12 Jul 2026 19:59:01 +0000","description":"escapeshellarg() is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html"]}],"keywords":["security","function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.escapeshellarg.php"},{"@type":"CreativeWork","name":"escapeshellcmd() \u2014 PHP Manual","url":"https:\/\/www.php.net\/manual\/en\/function.escapeshellcmd.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"escapeshellarg"}]}]}</script>
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

+ [Escape Data](escape-data.html)
+ [Injection](injection.html)
+ [Shell Injection](shell-injection.html)
+ [exec](exec.html)
+ [System](system.html)
+ [Shell Exec](shell-exec.html)
+ [escapeshellcmd()](escapeshellcmd.html)
+ [Security](security.html)
