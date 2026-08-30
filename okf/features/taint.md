---
type: "concept"
title: "Taint Analysis"
description: "Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program."
resource: "https://en.wikipedia.org/wiki/Taint_checking"
tags: ["concept", "analysis", "security", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Taint Analysis

Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program. In the context of web development, taint analysis is often employed to find security vulnerabilities related to user input and data handling.

The basic idea behind taint analysis is to track and label data that originates from untrusted sources, such as user input, and then trace how this tainted data is used throughout the application. By identifying and monitoring the flow of tainted data, developers can better understand and mitigate potential security risks, such as injection attacks and other vulnerabilities.

There was a taint extension until PHP 8.0. It was not ported further.

```php
<?php

    $a = trim($_GET['a']);

    $output    = "Welcome, {$a} !!!";

    echo $output;
    //Warning: main() [function.echo]: Attempt to echo a string that might be tainted

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Taint_checking](https://en.wikipedia.org/wiki/Taint_checking)

## See Also
- [Secure Your PHP Code With Taint Analysis by Qodana](https://blog.jetbrains.com/qodana/2023/03/taint-analysis-by-qodana/)

## Related
- [Security](/features/security.md)
- [Injection](/features/injection.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [CRLF Injection](/features/crlf-injection.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [LDAP Injection](/features/ldap-injection.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Psalm](/features/psalm.md)
- [Shell Injection](/features/shell-injection.md)
- [Server-Side Request Forgery (SSRF)](/features/ssrf.md)
- [Stored XSS](/features/stored-xss.md)

## Details
- Extension: ext-taint

