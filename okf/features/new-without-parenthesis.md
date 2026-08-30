---
type: "PHP Feature"
title: "New Without Parenthesis"
description: "The ``new`` operator may be called without using the parenthesis after the class name."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["feature", "object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# New Without Parenthesis

The ``new`` operator may be called without using the parenthesis after the class name.

The parenthesis are necessary when the constructor requires at least one argument. They are optional when no argument is necessary.

It is usually recommended to always use the parenthesis, to keep the syntax consistent across various situations.

This should not be confused with chaining new without parenthesis, where the parenthesis are enclosing the ``new`` call.

```php
<?php

    class X { } // no constructor, no argument
    
    new X;
    new X();
    new X(2); // possible, but useless
    
    class Y { 
        function __construct($i = 0) {}
    } 
    
    new Y;
    new Y();
    new Y(2); 
    
    class Z { 
        function __construct($h, $i = 0) {}
    } 
    
    new Y(1);
    new Y(1, 2);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [New without parentheses in PHP 8.4](https://stitcher.io/blog/new-with-parentheses-php-84)
- [PHP 8.4: New Without Parentheses — A Small Syntax Change with Big Impact](https://medium.com/codetodeploy/php-8-4-new-without-parentheses-a-small-syntax-change-with-big-impact-94e265b47afe)

## Related
- [new](/features/new.md)
- [__invoke() Method](/features/__invoke.md)
- [Chaining New Without Parenthesis](/features/chaining-new-without-parenthesis.md)

