# Class Constants Visibility
Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are: private, protected and public.
```php
<?php

class x {
    // This class can only be used in x
    private const C1 = 1;

    // This class can only be used in x and y
    protected const C2 = 1;

    // This class can be used in x, y and z
    private const C3 = 1;
}

class y extends x {
    // doSomething()
}

class z {
    // doSomething()
}

?>
```

## See Also

+ [How to add visibility to 338 Class Constants in 25 seconds](https://tomasvotruba.com/blog/how-to-add-visbility-to-338-class-constants-in-25-seconds)

Related : [Visibility](Visibility)
