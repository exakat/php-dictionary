---
type: "PHP Feature"
title: "Parameter Removal"
description: "Parameter removal is the operation to remove a parameter in a method's signature."
resource: "https://www.php.net/manual/en/language.functions.php"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Parameter Removal

Parameter removal is the operation to remove a parameter in a method's signature. 

This may happen in two ways: 

+ Between versions of the code. A method may see one of its parameter being deprecated then removed.
+ In a function relay, where the method doesn't transmit all its incoming parameters to the next.

```php
<?php

// get_defined_functions's only paramter was removed in PHP 8.4
$list = get_defined_functions(false); 

class x {
    public function foo($a, $b) {
        // $b is ignored, and set to a fixed value.
        // $b is actually removed for 'public' usage
        $this->goo($a, 2);
    }
    
    private function goo($a, $b = 1) {
        // do Something
    }
}
?>
```

## Documentation
- [https://www.php.net/manual/en/language.functions.php](https://www.php.net/manual/en/language.functions.php)

## See Also
- [Refactoring function signature maintaining backward compatibility](https://dev.to/schirrel/refactoring-function-signature-maintaining-backward-compatibility-mnp)
- [.NET API changes that affect compatibility](https://learn.microsoft.com/en-us/dotnet/core/compatibility/library-change-rules)

## Related
- [Functions](/features/function.md)

