# Execution
Execution refers to the ability to run code or system commands dynamically at runtime. There is the execution of PHP code, and the execution of external code from within PHP.

Language-level code execution uses ``eval()``, which parses and executes a PHP string as code. System-level execution delegates to the operating system shell via ``exec()``, ``shell_exec()``, ``system()``, ``passthru()``, ``popen()``, or the backtick operator.

The execution of PHP code is based on the PHP engine, though it may also be achieved by other PHP runtimes, or be delegated to other engine via transpiling of the code.

The flow of execution may be hijacked by a code injection, which route the execution to arbitrary code. It is a security vulnerability.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html","name":"Execution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Execution refers to the ability to run code or system commands dynamically at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Execution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Execution"}]}]}</script>
```php
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
```

**[Documentation](https://www.php.net/manual/en/function.eval.php)**
## See Also

+ [PHP: exec](https://www.php.net/manual/en/function.exec.php)

## Related

+ [Eval()](eval.html)
+ [exec](exec.html)
+ [Shell Exec](shell-exec.html)
+ [System](system.html)
+ [Virtual Machine (VM)](runtime.html)
+ [Code Injection](code-injection.html)
+ [Remote Code Execution (RCE)](rce.html)
+ [Lifecycle](lifecycle.html)
+ [Order Of Execution](order-of-execution.html)
