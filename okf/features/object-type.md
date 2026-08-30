---
type: "type"
title: "Object Type"
description: "``object`` is a PHP type, which represents an object of any class, including anonymous classes."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Type

``object`` is a PHP type, which represents an object of any class, including anonymous classes. 

``object`` may be used with properties, arguments and returntype, but not with ``instanceof``.

```php
<?php

foreach([11,12,13] as $id => $value) {
    print "$id => $value\n";
}

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$i = 10;
while ($i <= 10) {
    echo $i++;  
}

$i = 10;
do {
    echo $i++;  
} while ($i <= 10);

$a = new A;
var_dump($a instanceof object);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [TYPE HINT ALL THE THINGS!](https://thecodingmachine.io/type-hint-all-the-things)

## Related
- [Magic Methods](/features/magic-method.md)
- [Clone](/features/clone.md)
- [Type System](/features/type.md)
- [instanceof](/features/instanceof.md)

