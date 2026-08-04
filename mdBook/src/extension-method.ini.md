# Extension Method
An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String.shout() = this.uppercase() + '!'`` adds a ``shout()`` method callable on every ``String``, including strings from the standard library. The compiler resolves the call statically, based on the static type of the receiver, and injects it as if it were a real member.

Extension methods are typically used to attach domain-specific behavior to library or built-in types, or to gradually retrofit an interface's default methods onto existing implementations.

PHP has no extension method mechanism. Methods can only be added to a class by editing its source, extending it, or mixing in a trait, all of which require access to the class declaration or the willingness to create a subclass; a built-in type such as ``string`` or a final third-party class cannot receive new methods at all. The common workaround is a free function or a static helper class, called as ``Str::shout($value)`` instead of ``$value->shout()``.
```php
<?php

    // PHP has no way to add shout() to string itself.
    final class Str {
        public static function shout(string $s): string {
            return strtoupper($s) . '!';
        }
    }
    
    echo Str::shout('hello'); // HELLO!, not 'hello'->shout()

?>
```

Related : [Trait](Trait), [Class](Class), [Mixin](Mixin), [Static Method](Static Method)
