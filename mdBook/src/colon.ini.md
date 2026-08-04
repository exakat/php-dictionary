# Colon
Colons are used in a variety of situations: 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark
+ In ``include_path`` and ``open_basedir``, double-colon is used as a separator

The double colon is a distinct operator.
```php
<?php

    goto there;
    there:

    foo(a: 3); // 

    $b = $a ? 'a' : 'b';
    $c = $c ?: 'a';

?>
```

Related : [Goto](Goto), [Goto Labels](Goto Labels), [Ternary Operator](Ternary Operator), [Coalesce Operator](Coalesce Operator), [Coalesce Operator](Coalesce Operator), [Named Parameters](Named Parameters), [Scope Resolution Operator ::](Scope Resolution Operator ::), [Separator](Separator), [Scope Resolution Operator ::](Scope Resolution Operator ::), [Semicolon ;](Semicolon ;), [Static Class](Static Class)
