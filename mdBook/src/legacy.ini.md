# Legacy
Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current. It typically predates modern PHP features such as namespaces, type declarations, object-oriented design, or PSR standards.

Common PHP legacy patterns include procedural scripts, the use of ``mysql_*`` functions, which was removed in version 7.0, the ``var`` keyword for properties, global variables, ``register_globals``, the absence of autoloading, and short open tags.

Maintaining and evolving legacy code requires careful refactoring to avoid regressions, since test coverage is often absent or incomplete. Static analysis tools can help identify outdated constructs.
```php
<?php

    // Legacy PHP 4/5 style
    global $db;
    var $property;
    mysql_connect('localhost', 'root', '');

?>
```

## See Also

+ [Working Effectively with Legacy Code (book)](https://www.goodreads.com/book/show/44919.Working_Effectively_with_Legacy_Code)

Related : [Var](Var), [Deprecated](Deprecated), [Backward Compatible](Backward Compatible), [Backward Incompatible](Backward Incompatible), [Refactoring](Refactoring), [Dead Code](Dead Code), [Technical Debt](Technical Debt), [Upgrade](Upgrade), [Global Variables](Global Variables), [Register Globals](Register Globals), [Maintenance](Maintenance), [Total Cost Of Ownership (TCO)](Total Cost Of Ownership (TCO))
