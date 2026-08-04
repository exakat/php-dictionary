# Throwable
``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.
```php
<?php

class x extends \Exception implements \Throwable {}

throw new X();

?>
```

Related : [Catch](Catch), [Exception](Exception), [Error](Error), [Type Error](Type Error), [PHP Native Interfaces](PHP Native Interfaces)
