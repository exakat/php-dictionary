# Backward Compatible
A feature is backward compatible when it can be handled by a previous version than its version of publication. It is automatically ignored by the previous versions, either by design or by luck.

For example, the attributes ``#[Attribute]`` are backward compatible: they were introduced in version 8.0, and their syntax, starting as a comment with a ``#``, is backward compatible: it is processed as a comment in previous PHP versions.

Note that this example is partially backward compatible: it may work or not. 

The contrary of a backward compatible feature is backward incompatible.
```php
<?php

    #[Attribute] // This is backward compatible
    class X {
        function foo(#[AttributeForParameter] $a) { // This is not backward compatible
        
        }
    }

?>
```

## See Also

+ [Roave: BackwardCompatibilityCheck](https://github.com/Roave/BackwardCompatibilityCheck)

Related : [Backward Incompatible](Backward Incompatible), [Forward Compatible](Forward Compatible), [Legacy](Legacy), [Migration](Migration), [Polyfill](Polyfill)
