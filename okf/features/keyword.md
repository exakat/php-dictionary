---
type: "PHP Feature"
title: "Keyword"
description: "PHP has a list of keywords, which are also called reserved names."
resource: "https://www.php.net/manual/en/reserved.keywords.php"
tags: ["syntax", "confusion"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Keyword

PHP has a list of keywords, which are also called reserved names. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion.

```php
<?php

    class MyNamespace {
        function array() {
            return array();
        }
    }
    
    print_r((new myNamespace)->array());
    
    class X {
        const array ARRAY = array(); // possible confusion here
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.keywords.php](https://www.php.net/manual/en/reserved.keywords.php)

## See Also
- [List of other reserved words](https://www.php.net/manual/en/reserved.other-reserved-words.php)

## Related
- [Reserved Names](/features/reserved-name.md)
- [And Operator](/features/and.md)
- [Self](/features/self.md)

