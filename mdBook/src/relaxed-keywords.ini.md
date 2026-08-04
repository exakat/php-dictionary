# Relaxed Keywords
The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name. 

Generally speaking, PHP keywords are not allowed as names for classes, functions, etc. This is still the case here, yet this constraint has been relaxed for method names. 

Functions and global constants do not support that feature. Closures and arrow functions are not applicable, as they have no name. Only methods do use relaxed keywords.

Property names do not have this constraints, as the ``$`` sign make them distinct. 

Using PHP keywords as names is not a commonly known feature, and generate a lot of surprise, when used. As a convention, it is recommended to avoid using PHP keywords. Yet, it may apply in specific situations.
```php
<?php

    class x {
        const function = 1;
        function function() {}
    }

?>
```

Related : [Dollar $](Dollar $)
