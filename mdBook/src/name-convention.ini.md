# Name Conventions
A naming convention is a way to write a name for a structure, with a specific format.

There are technical conventions, which leads the PHP engine to refuse a name, such as starting a class name with a number.

There are developer conventions, which are a community practice, that fits within the technical conventions. For example, constants are written in upper case.

Here are technical conventions for PHP: 

+ Variables, properties: they start with a ``$`` sign, followed by a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``$[a-zA-Z_][a-zA-Z0-9_]*``
+ Functions, methods: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Classes, traits, enumerations, interfaces: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Constants, global or class: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Array index: they must be valid strings or integers. 


```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

Related : [Namespaces](Namespaces), [Anonymous](Anonymous), [Case Sensitivity](Case Sensitivity), [Namespace Name](Namespace Name), [Structure](Structure), [Word Combination](Word Combination), [Close Naming](Close Naming), [Naming Conflict](Naming Conflict), [Reserved Names](Reserved Names), [Semantics](Semantics), [Static Constant](Static Constant)
