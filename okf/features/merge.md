---
type: "concept"
title: "Merge"
description: "To merge is the action of combining two things into one."
resource: "https://www.php.net/manual/en/function.array-merge.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Merge

To merge is the action of combining two things into one. There are usually two meaning associated with PHP code: 

+ Merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ Code merge, using a VCS, such as git, svn, etc.

```php
<?php

    $array1 = [1,2];
    $array2 = [3,4];
    
    array_merge($array1, $array2); // [1,2,3,4]
    $array1 + $array2;             // [1,2,3,4]

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-merge.php](https://www.php.net/manual/en/function.array-merge.php)

## See Also
- [array_merge or + in PHP](https://stitcher.io/blog/array-merge-vs+)
- [Two ways to merge arrays in PHP](https://www.amitmerchant.com/two-ways-to-merge-arrays-in-php/)

## Related
- [array_merge()](/features/array_merge.md)
- [Version Control System (VCS)](/features/vcs.md)
- [VCS Commit](/features/vcs-commit.md)

