# Subnamespaces
In PHP, there is no such notion as subnamespaces. There are namespaces, which may share the same prefix than other namespaces: yet, any collaboration stops at the similarity level. 

In particular, the fallback mechanisms for functions applies to the current namespace, and then, the global, rather than any intermediate namespace.

The analogy between PHP namespaces and a file system does not applies to subnamespaces.
```php
<?php

// also known at the global namespace
namespace {
    function foo() {}
}

namespace A {
    function foo() {}
}

// sometimes refered to as subnamespace
namespace A\B {

    // This calls the global namespace definition,
    // not the one in A 
    foo();
}

?>
```

Related : [Namespaces](Namespaces), [Sub (prefix)](Sub (prefix))
