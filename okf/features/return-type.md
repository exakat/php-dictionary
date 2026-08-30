---
type: "type"
title: "Return Type"
description: "Return types are the types used for the return value of a method or function."
resource: "https://www.php.net/manual/en/functions.returning-values.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Return Type

Return types are the types used for the return value of a method or function. 

They are the same as the argument types, with a few addition: 

+ ``void``, which means that no value is returned. No usage of return, or return with no explicit value
+ ``never``, which means that the function won't return: either it will kill the application, or it will throw an exception.

Return types are ignored when the method throws an exception. 

Return type are covariant: they get more or equally precise with each new child generation.

```php
<?php

function foo() : bool {
    if (rand(0,1)) {
        return true;
    } else {
        return false;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.returning-values.php](https://www.php.net/manual/en/functions.returning-values.php)

## See Also
- [Return Types In PHP](https://dev.to/karleb/return-types-in-php-3fip)

## Related
- [Type System](/features/type.md)
- [Return](/features/return.md)
- [Covariance](/features/type-covariance.md)
- [Generator](/features/generator.md)
- [Intersection Type](/features/intersection-type.md)
- [Property Type Declaration](/features/type-declaration-property.md)

