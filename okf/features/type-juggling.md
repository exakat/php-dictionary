---
type: "type"
title: "Type Juggling"
description: "Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation."
resource: "https://www.php.net/manual/en/language.types.type-juggling.php"
tags: ["feature", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Juggling

Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.

```php
<?php

    $a = '35';
    echo $a + 4; // display 39
    
    echo substr($a, -1); // display 5

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.type-juggling.php](https://www.php.net/manual/en/language.types.type-juggling.php)

## See Also
- [How PHP Type Juggling Works – Explained with Code Examples](https://www.freecodecamp.org/news/how-php-type-juggling-works-explained-with-code-examples/)
- [PHP Type Juggling Vulnerability](https://medium.com/@abdelrahman0x01/php-type-juggling-vulnerability-768bca4d8b3b)
- [Type Juggling](https://swisskyrepo.github.io/PayloadsAllTheThings/Type%20Juggling/)
- [How I Chained Mass Assignment + PHP Type Juggling to Take Over Any Account on a Live Platform](https://medium.com/@angry.althaf/how-i-chained-mass-assignment-php-type-juggling-to-take-over-any-account-on-a-live-platform-8ad4b193e171)

## Related
- [Cast Operator](/features/cast.md)
- [Boolean](/features/boolean.md)
- [Comparison](/features/comparison.md)
- [Condition](/features/condition.md)
- [Magic Hash](/features/magic-hash.md)
- [Silent Behavior](/features/silent.md)
- [String Increment](/features/string-increment.md)
- [Type Checking](/features/type-checking.md)
- [Type Inference](/features/type-inference.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [Type Coercion](/features/coercion.md)
- [Capture The Flag (CTF)](/features/ctf.md)
- [Footgun](/features/footgun.md)
- [Strict](/features/strict.md)

