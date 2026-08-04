# Explicit Boolean Comparison
The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition. 

Explicit boolean comparison may be redundant, when the compared value is already a boolean. PHP also does an implicit cast to boolean before using variables in conditions. 

On the other hand, type juggling may yield unexpected results, and lead to bugs.
```php
<?php

if ($var === true) {} 

?>
```

Related : [Yoda Condition](Yoda Condition)
