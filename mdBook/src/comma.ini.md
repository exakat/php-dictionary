# Comma
Commas are syntax elements, to separate elements when provided as a list. There are several situations where a list of elements may be provided: 

+ Argument separator, including with ``echo``
+ Parameter separator
+ Trait name separator, in ``use`` expression when importing a trait in a class
+ Array element separator
+ List separator, where unused values may be omitted, leaving commas back to back

Comma are important in the CSV and JSON formats, and other such formats.

Comma do not have a value by themselves.
```php
<?php

    function foo($a, $b) {
        return [$a, 2, $b];
    }
    
    list($y, ,$z) = foo(1, 2);

    [$y, ,$z] = foo(1, 2);
    
    echo 'a', 'b', 'c';

?>
```

Related : [Parameter](Parameter), [Argument](Argument), [Array, []](Array, []), [List](List), [Comma Secparated Values (CSV)](Comma Secparated Values (CSV)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Trailing Comma](Trailing Comma)
