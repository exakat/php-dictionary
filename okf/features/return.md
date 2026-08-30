---
type: "keyword"
title: "Return"
description: "``return`` ends the current method, and sends back a produced value to the calling module."
resource: "https://www.php.net/manual/en/function.return.php"
tags: ["keyword", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Return

``return`` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation.

``return`` may be typed: the returned value is then checked against that type, by static analysis or by the PHP engine, at execution time. 

The ``return`` type may not always be returned: this is the case for ``never``, which indicates that the method will not return. 

``return`` types are covariant: one may return a more precise type, aka a child class, than typed, but not more general, aka a parent class.

``return`` is optional: when omitted, PHP returns automatically ``null``. The returned value of ``return`` is also optional: in that case, PHP returns ``null``, but it also returns a distinct value when the method is typed with the return type ``void``.

``return`` does not prevent ``finally`` from being executed, when the ``return`` command is in a ``try`` block.

``return`` is considered a jump, as it stops the current sequential execution, and moves the pointer to another part of the code. This is similar to ``if-then``, ``goto``, ``for``, ``yield``, etc.

```php
<?php

    function foo() {
        if (rand(0, 1)) {
            return 'tail';
        }
        
        return 'face';
    }
    echo foo();
    
    interface X {
        function m(Y $z): X;
    }

    interface Y extends X {
      function m(X $z): Y;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.return.php](https://www.php.net/manual/en/function.return.php)

## See Also
- [PHP return Keyword](https://zetcode.com/php/return-keyword/)

## Related
- [Functions](/features/function.md)
- [Method](/features/method.md)
- [Closure](/features/closure.md)
- [Control Flow](/features/control-flow.md)
- [Impure Function](/features/impure-function.md)
- [Jump](/features/jump.md)
- [Pure Function](/features/pure-function.md)
- [Return Type](/features/return-type.md)
- [Covariance](/features/type-covariance.md)

