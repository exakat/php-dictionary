---
type: "PHP Feature"
title: "Code Injection"
description: "A code injection is a vulnerability, where external data is used as PHP code."
resource: "https://owasp.org/www-community/attacks/Code_Injection"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Code Injection

A code injection is a vulnerability, where external data is used as PHP code.

In the example below, ``$_GET`` is directly used in the ``eval()`` function. By using a clever string, as shown in the illustration below, it is possible to assign the variable, and run the ``phpinfo()`` command.

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.

Some PHP functions are sensitive to this kind of attack: ``eval()``, ``include()``, ``include_once()``, ``require()``, ``require_once()``. Dynamic calls are also susceptible to code injection.

```php
<?php

// $_GET['x'] = '1; phpinfo()';
eval($myvar = $x);

// $_GET['method'] = 'getSafe';
// Any method may be called on the safe object
$data->$method();

?>
```

## Documentation
- [https://owasp.org/www-community/attacks/Code_Injection](https://owasp.org/www-community/attacks/Code_Injection)

## See Also
- [PHP Security 2: Directory Traversal & Code Injection](https://www.acunetix.com/websitesecurity/php-security-2/)
- [PHP code injection](https://beaglesecurity.com/blog/vulnerability/php-code-injection.html)

## Related
- [Eval()](/features/eval.md)
- [Inclusions](/features/inclusion.md)
- [Dynamic Call](/features/dynamic-call.md)
- [Execution](/features/execution.md)
- [Injection](/features/injection.md)

