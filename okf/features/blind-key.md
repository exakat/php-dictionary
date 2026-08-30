---
type: "concept"
title: "Blind Variable"
description: "A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value."
resource: "https://en.wikipedia.org/wiki/Loop_variable"
tags: ["concept", "variable", "foreach", "for"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Blind Variable

A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond.

```php
<?php

    // $key and $value are blind variables
    foreach(source() as $key => $value) {
        doSomething($key, $value);
    }
    
    
    // standard loop syntax
    for($i = 0; $i < 10; ++$i) {
        doSomething($i);
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Loop_variable](https://en.wikipedia.org/wiki/Loop_variable)

## See Also
- [When writing a 'for' loop, why does everyone name the variable as 'i'?](https://www.quora.com/When-writing-a-for-loop-why-does-everyone-name-the-variable-as-i)
- [Stop the i, j, k Confusion: A Clearer Approach to Loop Index Naming](https://dev.to/mogera551/stop-the-i-j-k-confusion-a-clearer-approach-to-loop-index-naming-2g4e)

## Related
- [foreach()](/features/foreach.md)
- [For](/features/for.md)

