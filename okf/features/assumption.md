---
type: "PHP Feature"
title: "Assumption"
description: "An assumption is a piece of code that makes use of knowledge that is not visible in the source."
tags: ["error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Assumption

An assumption is a piece of code that makes use of knowledge that is not visible in the source. 

Assumptions are often related to arrays: after checking that a variable is of type array, some specific indexes are used, while there is no guarantee that they are available.

Assumptions may apply to any type of data. 

Assumptions are characterized by a lack of checks, before or after. They are based on code discipline, actual or expected, and hard rules that are thought to never be violated: ``this never happens``. 

Assumptions lead to faster code, and faster coding. They also yield errors later, when the assumptions rules are violated.

Assumptions may be upgraded to assertions, by adding an explicit check on the situation.

```php
<?php

    function foo($o) {
        if ($o instanceof A) {
            print $o->getName();
        } else {
            // if $o is not an object of type A, then it is an array. Where does this come from? 
            print $o['name'];
    
            // if $o is an array, is 'name' always available?
            
        }
    }

?>
```

## See Also
- [From assumptions to assertions](https://rskuipers.com/entry/from-assumptions-to-assertions)

## Related
- [Assertions](/features/assertion.md)

