---
type: "concept"
title: "Proprietary Source"
description: "Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions."
resource: "https://en.wikipedia.org/wiki/Proprietary_software"
tags: ["concept", "license"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Proprietary Source

Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions. Unlike open-source software, proprietary software cannot be freely studied, modified, or redistributed.

Proprietary PHP source may be distributed as encoded files, with ionCube, SourceGuardian, or Zend Guard; as compiled extensions, or simply as closed-source packages distributed through private Composer repositories.

Protecting PHP source code is challenging because PHP is an interpreted language. Encoding tools obfuscate the bytecode, but the original logic can sometimes be reverse-engineered. PHP extensions written in C can also ship precompiled as ``.so`` / ``.dll`` files and are harder to analyse.

The distinction between proprietary and open-source matters for security audits, license compliance, and vendor lock-in assessments.

```php
<?php

    // Proprietary library loaded as an encoded file (ionCube example)
    // The actual source is not readable; only the encoded .php file is shipped.
    require 'licensed-module.php';

    $service = new ProprietaryService();
    $service->run();

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Proprietary_software](https://en.wikipedia.org/wiki/Proprietary_software)

## See Also
- [ionCube PHP Encoder](https://www.ioncube.com/php_encoder.php)
- [SourceGuardian](https://www.sourceguardian.com/)
- [Zend Guard](https://www.zend.com/products/zend-guard)

## Related
- [Open Source](/features/open-source.md)
- [Obfuscation](/features/obfuscation.md)
- [Composer](/features/composer.md)
- [Free](/features/free.md)
- [Licence](/features/licence.md)

