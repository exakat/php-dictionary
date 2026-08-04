# Asymmetric Property
An asymmetric property is a property that specify the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symmetric: identical to write and read.
```php
<?php

    class X {
        public private(set) int $property;
    }

?>
```

Related : [Asymmetric Visibility](Asymmetric Visibility)
