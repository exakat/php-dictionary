---
type: "PHP Feature"
title: "Hard Coded"
description: "Hard coded data in code happens when a value is set as a literal in the code, and can't be changed through any directives or parameters."
resource: "https://en.wikipedia.org/wiki/Hard_coding"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hard Coded

Hard coded data in code happens when a value is set as a literal in the code, and can't be changed through any directives or parameters.

Hard-code becomes a security problem, when the hard-coded value is a password or a hash of it. This secret is now readable in the code.

```php
<?php 

// This is hard-coded
$a = 1;

// $b has a default value, but may also be changed at execution time
function foo($b = 2) {
    echo $b;
}

 ?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Hard_coding](https://en.wikipedia.org/wiki/Hard_coding)

## See Also
- [CWE-798: Use of Hard-coded Credentials](https://cwe.mitre.org/data/definitions/798.html)

## Related
- [Constants](/features/constant.md)
- [Magic Numbers](/features/magic-number.md)
- [Security](/features/security.md)
- [Password](/features/password.md)
- [Configuration](/features/configuration.md)

