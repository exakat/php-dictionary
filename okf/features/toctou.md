---
type: "acronym"
title: "Time Of Check To Time Of Use (TOCTOU)"
description: "``TOCTOU``, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it."
resource: "https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use"
tags: ["security", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Time Of Check To Time Of Use (TOCTOU)

``TOCTOU``, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it. This interval may be used by an attacker to replace the checked resource, and fool the code.

```php
<?php

    function foo($file) {
        // Checking is the file exists
        if (!file_exists($file)) {
            return false;
        }
        
        $fp = fopen($file, 'r');
        // $fp should be available, because it was checked just before
        // The TOCTOU is here
        $string = fget($fp, 1000);
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use](https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use)

## See Also
- [Practical Race Condition Vulnerabilities in Web Applications](https://defuse.ca/race-conditions-in-web-applications.htm)

## Related
- [Security](/features/security.md)
- [Race Condition](/features/race-condition.md)

