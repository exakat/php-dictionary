# DateTimeInterface
``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type hint in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.
```php
<?php

    function formatDate(DateTimeInterface $date): string {
        return $date->format('Y-m-d');
    }
    
    // both classes satisfy the type hint
    echo formatDate(new DateTime('2024-01-15'));
    echo formatDate(new DateTimeImmutable('2024-06-03'));

?>
```

Related : [DateTime](DateTime), [DateTime](DateTime), [Interface](Interface), [Dates](Dates), [DateInterval](DateInterval), [PHP Native Interfaces](PHP Native Interfaces)
