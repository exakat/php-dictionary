---
type: "PHP Feature"
title: "Logarithm"
description: "The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``."
resource: "https://en.wikipedia.org/wiki/Logarithm"
tags: ["math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Logarithm

The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``. There are two logarithm functions: the natural logarithm, where ``log(M_E) == 1``, and the base-10 logarithm, where ``log(10) == 1``.

PHP also offers ``log1p($x) == log(1 + $x)``. This function exists because ``log($x)`` is very close to 0 when ``$x`` is close to 1. To avoid rounding errors, ``log1p()`` is dedicated to this calculations and immediately yields the decimal part of the logarithm.

The opposite function of the logarithm is exponential, ``exp()``, and the ``**`` operator. 

A logarithm is not the same as an algorithm, or a log file.

```php
<?php

    echo log(M_E);
    print PHP_EOL;  // 1
    
    echo log(1); 
    print PHP_EOL;  // 0
    
    echo log(1.001); 
    print PHP_EOL;  // 0.00099950033308342
    
    echo log1p(0.001); //0.00099950033308353
    print PHP_EOL;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Logarithm](https://en.wikipedia.org/wiki/Logarithm)

## See Also
- [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

## Related
- [Algorithm](/features/algorithm.md)
- [Exponential](/features/exponential.md)
- [Floating Point Numbers](/features/float.md)
- [zero](/features/zero.md)
- [one](/features/one.md)
- [Log File](/features/log-file.md)
- [E](/features/e.md)
- [Log](/features/log.md)

