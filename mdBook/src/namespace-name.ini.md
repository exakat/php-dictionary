# Namespace Name
Namespaces names are strings of characters that can be used as namespaces names. Such names may be validated with the following regex: ``/^(?:[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff0-9]*)(?:\\[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff]*)*$/``.

In particular, namespaces names accept ``\`` character, and allows vast ranges of Unicode characters.
```php
<?php

namespace A\B {}

namespace 我\是\PHP {}

?>
```

Related : [Namespaces](Namespaces), [Name](Name), [Name Conventions](Name Conventions)
