---
type: "classic bug"
title: "Magic Hash"
description: "A magic hash is a hash string which is mistakenly compared to another hash."
resource: "https://github.com/spaze/hashes"
tags: ["classic bug", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Hash

A magic hash is a hash string which is mistakenly compared to another hash. 

In the example below, the same MD5 hash is taken for two distinct strings, which ends up being identical, per ``==``. 

In reality, the two hashes are different strings: ``0e462097431906509019562988736854`` and ``0e830400451993494058024219903391`` respectively. When they are compared, as strings, PHP identifies the initial 0 of the strings, and assume the comparison should be an integer comparison.

Each string is turned into a int, which are 0 in both cases. Hence, the comparison succeeds, yet it wrong.

The protection against magic hashes is to use the identity operator ``===``, rather than the equality. It makes a type comparison and do not apply type juggling, which leads to the two hashes above different. 

This example is applicable with any hash algorithm which produces a string that starts with 0. Check the magic hash repository for examples with SHA256, HAVAL, PHOTON, RIPEMD or SPONGENT.

There are PHP functions and operators that perform safe comparisons ,such as ``===``, ``!==`` and ``hash_equals()``.

```php
<?php

    var_dump(md5('240610708') == md5('QNKCDZO'));
    
    //md5('240610708')
    //0e462097431906509019562988736854
    //md5('QNKCDZO')
    //0e830400451993494058024219903391

?>
```

## Documentation
- [https://github.com/spaze/hashes](https://github.com/spaze/hashes)

## See Also
- [Magic Hashes](https://www.whitehatsec.com/blog/magic-hashes/)
- [Can you find the bug in this piece of php code?](https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l)

## Related
- [Hash](/features/hash.md)
- [Comparison](/features/comparison.md)
- [Type Juggling](/features/type-juggling.md)
- [Magic Bytes](/features/magic-byte.md)

