# Method Signature
The signature of a method or a function is the list of arguments and constraints that apply when calling it. 

In its simplest form, signature of a method is its name, its argument's type and list, though modern syntax also includes default values, visibilities, attributes and parameter names.

Method signature also applies to functions and closures. It may also be referenced as signature.

```php
<?php

    function foo(string &$s = 'abc') {}
    
    class X {
        function foo(string &$s = 'abc') {}
    }

?>
```

Related : [Signature](Signature), [Digital Signature](Digital Signature)
