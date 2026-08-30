---
type: "PHP Feature"
title: "expose_php"
description: "The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver."
resource: "https://www.php.net/manual/en/ini.core.php#ini.expose_php"
tags: ["php.ini", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# expose_php

The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver.

It is considered a security leak to leave this configuration on, as it gives potential attackers information on the available technologies, and potential vulnerabilities. It is recommended to leave it off.

``expose_php`` has no impact on the code itself.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.expose_php](https://www.php.net/manual/en/ini.core.php#ini.expose_php)

## See Also
- [Hiding](https://www.php.net/manual/en/security.hiding.php)

## Related
- [php.ini](/features/php.ini.md)
- [Data Leak](/features/data-leak.md)
- [Hardening](/features/hardening.md)

