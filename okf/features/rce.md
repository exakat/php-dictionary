---
type: "acronym"
title: "Remote Code Execution (RCE)"
description: "It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system."
resource: "https://en.wikipedia.org/wiki/Arbitrary_code_execution"
tags: ["vulnerability", "security", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Remote Code Execution (RCE)

It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system. This typically happens due to improper input validation, insecure deserialization, vulnerable eval-like functions, or unsafe file handling.

```php
<?php

    // direct execution of the incoming 
    shell_exec($_GET['shell']);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Arbitrary_code_execution](https://en.wikipedia.org/wiki/Arbitrary_code_execution)

## See Also
- [RCE via a malicious SVG in mPDF](https://medium.com/@brun0ne/rce-via-a-malicious-svg-in-mpdf-216e613b250b)
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related
- [Vulnerability](/features/vulnerability.md)
- [Local File Inclusion](/features/local-file-inclusion.md)
- [Execution](/features/execution.md)
- [php://filter](/features/php-filter.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Shell Exec](/features/shell-exec.md)

