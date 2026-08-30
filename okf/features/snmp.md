---
type: "extension"
title: "Simple Network Management Protocol (SNMP)"
description: "SNMP stands for 'Simple Network Management Protocol'."
resource: "https://www.php.net/manual/en/book.snmp.php"
tags: ["extension", "acronym", "network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Simple Network Management Protocol (SNMP)

SNMP stands for 'Simple Network Management Protocol'. The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.

```php
<?php
    $syscontact = snmp2_get('127.0.0.1', 'public', 'system.SysContact.0');
?>
```

## Documentation
- [https://www.php.net/manual/en/book.snmp.php](https://www.php.net/manual/en/book.snmp.php)

## See Also
- [A Guide to the PHP SNMP Library for Simple Network Management Protocol](https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol)

## Related
- [SNMP3](/features/snmp3.md)

