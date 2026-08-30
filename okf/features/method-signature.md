---
type: "concept"
title: "Method Signature"
description: "The signature of a method or a function is the list of arguments and constraints that apply when calling it."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["method", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Method Signature

The signature of a method or a function is the list of arguments and constraints that apply when calling it. 

In its simplest form, signature of a method is its name, its argument's type and list, though modern syntax also includes default values, visibilities, attributes and parameter names.

Method signature also applies to functions and closures. It may also be referenced as signature.

```php
<?php

    function foo(string &$s = 'abc') {}
    
    class X {
        function foo(string &$s = 'abc') {}
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [Function Signature Explained](https://www.ituonline.com/it-glossary/function-signature/)
- [Signature (functions)](https://developer.mozilla.org/en-US/docs/Glossary/Signature/Function)

## Related
- [Signature](/features/signature.md)
- [Digital Signature](/features/digital-signature.md)

