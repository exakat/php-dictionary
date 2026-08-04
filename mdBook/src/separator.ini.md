# Separator
Separators are specific characters that ends a previous area, and open a new one. They are used in structured dataset, to allow multiple values to be hosted.

The separator makes the building and parsing of the string easy. The separator must be forbidden in the separated values, or it must be protected to avoid confusion between a literal value and an actual separator.

Multiple separators may be used in the same format. For example, in query strings, ``&`` is used to distinguish different variables, and ``=`` is used to distinguish the name and the value.

Separators are argument in functions such as ``implode()``, ``explode()`` or ``http_build_query()``.

Some separators: 

+ ``|`` is used to separate types in a Union type
+ ``&`` is used to separate values in a query string
+ ``/`` is used to separate directory names in a file system path.
+ ``,`` is used in list of values.
```php
<?php

print join("glue", [1, 2, 3]);

?>
```

Related : [Glue](Glue), [implode()](implode()), [explode()](explode()), [http_build_query()](http_build_query()), [Numeric Separator](Numeric Separator), [Colon](Colon), [Delimiter](Delimiter)
