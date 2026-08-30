---
type: "PHP Feature"
title: "escapeshellcmd()"
description: "``escapeshellcmd()`` is a native function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``;``, ``|``, ``(``, ``)``, ``[``, ``]``, ``{``, ``}``, ``$``, `` \\` ``, ``\\``, ``\"``, ``'``, and whitespace sequences that could alter the intended command."
resource: "https://www.php.net/manual/en/function.escapeshellcmd.php"
tags: ["security", "function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# escapeshellcmd()

``escapeshellcmd()`` is a native function that escapes shell metacharacters in a full command string, preventing shell interpretation of characters such as ``&``, ``;``, ``|``, ``(``, ``)``, ``[``, ``]``, ``{``, ``}``, ``$``, `` \` ``, ``\``, ``"``, ``'``, and whitespace sequences that could alter the intended command.

Unlike ``escapeshellarg()``, which wraps a single argument in quotes, ``escapeshellcmd()`` is applied to the entire command string and escapes individual special characters with a backslash. It is suitable when the command itself is dynamic, not just its arguments.

Important caveats:

+ ``escapeshellcmd()`` does not make arbitrary shell strings safe. It is designed for use with ``exec()``, ``system()``, ``passthru()``, and ``shell_exec()``, but cannot protect against every shell injection vector. Prefer ``escapeshellarg()`` on each argument individually, as this is generally more reliable.
+ On Windows, ``escapeshellcmd()`` has different behaviour: it escapes a different set of special characters. Code relying on it must be tested on the target platform.
+ The safest approach to shell execution is to avoid building a command string at all. Use ``proc_open()`` with an array argument form, where available via wrapper libraries, or pass arguments as an explicit array, which bypasses the shell entirely.

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

## Documentation
- [https://www.php.net/manual/en/function.escapeshellcmd.php](https://www.php.net/manual/en/function.escapeshellcmd.php)

## See Also
- [escapeshellarg() — PHP Manual](https://www.php.net/manual/en/function.escapeshellarg.php)
- [Symfony Process component](https://symfony.com/doc/current/components/process.html)

## Related
- [escapeshellarg()](/features/escapeshellarg.md)
- [Shell Injection](/features/shell-injection.md)
- [Injection](/features/injection.md)
- [Shell Exec](/features/shell-exec.md)
- [exec](/features/exec.md)
- [System](/features/system.md)
- [Security](/features/security.md)
- [Escape Data](/features/escape-data.md)

## Details
- Packagist: [symfony/process](https://packagist.org/packages/symfony/process)

