---
type: "PHP Feature"
title: "Webshell"
description: "A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser."
resource: "https://en.wikipedia.org/wiki/Web_shell"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Webshell

A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.

Webshells are typically dropped onto a server after an attacker exploits an unrelated vulnerability, such as an unrestricted file upload, a remote code execution bug, or leaked credentials. Once in place, the script accepts commands through HTTP parameters, cookies, or headers, and passes them to functions like ``shell_exec()``, ``system()``, ``exec()``, or ``eval()`` to run arbitrary code, browse the filesystem, extract data, or pivot to other systems on the network.

Because a webshell can be as small as a single line and disguised with an innocuous filename, obfuscated code, or a legitimate-looking extension, detecting them by sight is unreliable. Effective defenses combine restricting which directories can execute PHP, disabling dangerous functions such as ``shell_exec()`` where they are not needed, validating and re-checking uploaded files, and monitoring for the kind of code patterns static analyzers flag as security risks.

```php
<?php

    echo shell_exec($_GET['cmd']);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Web_shell](https://en.wikipedia.org/wiki/Web_shell)

## See Also
- [Webshell collection](https://github.com/tennc/webshell)
- [An Introduction to Web Shells (Web Shells Part 1)](https://www.acunetix.com/blog/articles/introduction-web-shells-part-1/)

## Related
- [System Call](/features/system-call.md)
- [One Liner](/features/one-liner.md)

