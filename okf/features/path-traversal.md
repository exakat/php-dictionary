---
type: "PHP Feature"
title: "Path Traversal"
description: "A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server."
resource: "https://owasp.org/www-community/attacks/Path_Traversal"
tags: ["vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Path Traversal

A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.

It happens when an application uses user input to build file paths without properly validating or restricting it.

Path traversal is also called directory traversal.

```php
<?php

    $file = $_GET['file'];
    include('pages/' . $file);

?>
```

## Documentation
- [https://owasp.org/www-community/attacks/Path_Traversal](https://owasp.org/www-community/attacks/Path_Traversal)

## See Also
- [Path traversal](https://portswigger.net/web-security/file-path-traversal)
- [How to prevent exploitation of Path Traversal vulnerabilities](https://www.ubikasec.com/en/posts/how-to-prevent-exploitation-of-path-traversal-vulnerabilities/)

## Related
- [Vulnerability](/features/vulnerability.md)
- [Attack](/features/attack.md)
- [Leak](/features/leak.md)
- [Static Application Security Testing (SAST)](/features/sast.md)

