# Backward Incompatible
A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in version 8.0, and is not available in previous versions.

The keyword ``throw`` can be used within expressions since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible.
```php
<?php

    check() or throw new Exception('Check failed!');

?>
```

Related : [Forward Compatible](Forward Compatible), [Backward Compatible](Backward Compatible), [Legacy](Legacy)
