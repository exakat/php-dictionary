# Unbacked Enum
Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentioned. The opposite is backed enum.
```php
<?php

    enum Ecclectic {
        case PHP;
        case ELEPHPANT;
        case SYNTAX_ERROR;
        case SPADE;
    }

?>
```

Related : [Enumeration (enum)](Enumeration (enum)), [Backed Enum](Backed Enum), [BackedEnum](BackedEnum)
