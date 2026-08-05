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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell-injection.ini.html","name":"Shell Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:05:33 +0000","dateModified":"Sun, 02 Aug 2026 06:05:33 +0000","description":"Shell injection, also called OS command injection, is a security vulnerability in which attacker-controlled data is passed unsanitised to a shell command, allowing the attacker to execute arbitrary commands on the host operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Shell Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // VULNERABLE: user input passed directly to shell
    $file   = $_GET['file'] ?? '';
    exec('convert ' . $file . ' output.png'); // shell injection risk
    
    // SAFE option 1: escapeshellarg() on each argument
    $safeFile = escapeshellarg($file);
    exec('convert ' . $safeFile . ' output.png');
    
    // SAFE option 2: Symfony Process (no shell — arguments passed as array)
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

+ [Injection](injection.ini.html)
+ [escapeshellarg()](escapeshellarg.ini.html)
+ [escapeshellcmd()](escapeshellcmd.ini.html)
+ [exec](exec.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [System](system.ini.html)
+ [Security](security.ini.html)
+ [Taint Analysis](taint.ini.html)

## Related packages

+ [symfony/process](https://packagist.org/packages/symfony/process)
