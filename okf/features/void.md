---
type: "type"
title: "Void"
description: "Void is a return type."
resource: "https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions"
tags: ["feature", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Void

Void is a return type. It marks methods which do not return anything. 

Indeed, void methods should not use the return statement, or, when they do, use it without any argument. 

Void is only possible with methods, closures, functions and arrow functions. It makes no sense with properties or parameters.

```php
<?php

function foo() : void {}

?>
```

## Documentation
- [https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions](https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions)

## See Also
- [Type Hinting No Return(Void)](https://riptutorial.com/php/example/20542/type-hinting-no-return-void-)

## Related
- [Null](/features/null.md)
- [PHP Natives](/features/native-type.md)
- [Return Value](/features/return-value.md)
- [Special Types](/features/special-typehint.md)

## Details
- PHP since: 7.1

