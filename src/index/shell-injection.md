# Shell Injection
Shell injection, also called OS command injection, is a security vulnerability in which attacker-controlled data is passed unsanitised to a shell command, allowing the attacker to execute arbitrary commands on the host operating system. It is listed as a critical vulnerability class in the OWASP Top 10: ``A03: Injection``.

The vulnerability arises when PHP passes user input to ``exec()``, ``system()``, ``passthru()``, ``shell_exec()``, or the backtick operator `` \` `` without properly escaping shell metacharacters. Characters such as ``;``, ``&``, ``|``, ``$(...)``, and backticks allow an attacker to append or inject additional commands.

If ``$_GET['file']`` contains ``input.png; rm -rf /``, the shell executes both commands.

Mitigation strategies, in order of preference:

+ Avoid shell execution entirely: use native PHP libraries, ``GD``, ``Imagick``, ``ZipArchive``, or dedicated extension APIs that do not invoke a shell.
+ Use ``proc_open()`` with an array argument, via the Symfony Process component, which bypasses the shell and passes arguments directly to the OS, making injection impossible.
+ Escape every argument with ``escapeshellarg()`` individually; do not rely on ``escapeshellcmd()`` alone.
+ Validate and whitelist input before any shell call: only accept known-good values, e.g., a filename that matches ``/^[a-zA-Z0-9._-]+$/``.
+ Run the PHP process with the minimum required OS privileges; use a chroot or container to limit blast radius.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-injection.html","name":"Shell Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:40:24 +0000","dateModified":"Thu, 13 Aug 2026 05:40:24 +0000","description":"Shell injection, also called OS command injection, is a security vulnerability in which attacker-controlled data is passed unsanitised to a shell command, allowing the attacker to execute arbitrary commands on the host operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shell Injection.html"]}],"alternateName":["command-injection","os-command-injection"],"keywords":["security","vulnerability","_singleQuote"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/Command_Injection"},{"@type":"CreativeWork","name":"CWE-78: OS Command Injection","url":"https:\/\/cwe.mitre.org\/data\/definitions\/78.html"},{"@type":"CreativeWork","name":"Symfony Process component","url":"https:\/\/symfony.com\/doc\/current\/components\/process.html"},{"@type":"CreativeWork","name":"escapeshellarg() \u2014 PHP Manual","url":"https:\/\/www.php.net\/manual\/en\/function.escapeshellarg.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shell-injection"}]}]}</script>
```php
<?php

    // VULNERABLE: user input passed directly to shell
    $file   = $_GET['file'] ?? '';
    exec('convert ' . $file . ' output.png'); // shell injection risk
    
    // SAFE option 1: escapeshellarg() on each argument
    $safeFile = escapeshellarg($file);
    exec('convert ' . $safeFile . ' output.png');
    
    // SAFE option 2: Symfony Process (no shell, arguments passed as array)
    // $process = new \Symfony\Component\Process\Process(['convert', $file, 'output.png']);
    // $process->run();
    // if (!$process->isSuccessful()) {
    //     throw new \RuntimeException($process->getErrorOutput());
    // }
    
    // SAFE option 3: native PHP (no shell at all)
    $img = new \Imagick($file);
    $img->writeImage('output.png');

?>
```

**[Documentation](https://owasp.org/www-community/attacks/Command_Injection)**
## See Also

+ [CWE-78: OS Command Injection](https://cwe.mitre.org/data/definitions/78.html)
+ [Symfony Process component](https://symfony.com/doc/current/components/process.html)
+ [escapeshellarg() — PHP Manual](https://www.php.net/manual/en/function.escapeshellarg.php)

## Related

+ [Injection](injection.html)
+ [escapeshellarg()](escapeshellarg.html)
+ [escapeshellcmd()](escapeshellcmd.html)
+ [exec](exec.html)
+ [Shell Exec](shell-exec.html)
+ [System](system.html)
+ [Security](security.html)
+ [Taint Analysis](taint.html)

## Related packages

+ [symfony/process](https://packagist.org/packages/symfony/process)
