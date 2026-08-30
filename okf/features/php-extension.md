---
type: "PHP Feature"
title: "PHP Extensions"
description: "Extensions are PHP engine module system."
resource: "https://packagist.org/search/"
tags: ["engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Extensions

Extensions are PHP engine module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PIE repository. They were used to be published in the PECL repository, but it is being sunset at the moment.

Some are available by default, in the PHP standard configuration.

```php
<?php

    // Example with the ext/pspell extensions, for orthographic checks
    $pspell = pspell_new("en");
    
    if (pspell_check($pspell, "testt")) {
        echo "This is a valid spelling";
    } else {
        echo "Sorry, wrong spelling";
    }

?>
```

## Documentation
- [https://packagist.org/search/](https://packagist.org/search/)

## See Also
- [PECL repository (deprecated)](https://pecl.php.net/)

