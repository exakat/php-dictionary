---
type: "concept"
title: "Zombie Code"
description: "Zombie code refers to sections of code that are executed, but whose results are discarded."
resource: "https://www.calculquebec.ca/en/communiques/zombie-code/"
tags: ["concept", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Zombie Code

Zombie code refers to sections of code that are executed, but whose results are discarded. It is essentially dead or unused code that serves no purpose and can negatively impact the codebase.

Zombie code slows down the application, yet are logged as being used. They are a various of dead code.

```php
<?php

    // $capitalized is calculated from $name
    $capitalized = ucfirst(strtolower($name));
    
    // $capitalized is not used later in the code. 
    echo "Hello $name\n";

?>
```

## Documentation
- [https://www.calculquebec.ca/en/communiques/zombie-code/](https://www.calculquebec.ca/en/communiques/zombie-code/)

## See Also
- [Code Smells: Dead Code](https://refactoring.guru/smells/dead-code)
- [Locating Dead Code](https://blog.jetbrains.com/phpstorm/2019/04/locating-dead-code/)

## Related
- [Dead Code](/features/dead-code.md)

