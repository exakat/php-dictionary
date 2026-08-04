# Backslash \
``\`` is character, used in various situations: 

+ Starts of a escape sequence, in a string
+ Escape character, in various languages
+ Directory separator in path, on Windows systems. It is accepted by PHP, but not recommended.
+ Name separator in a namespace.
```php
<?php

    namespace A\B\C;

    echo \\\\n\\n;  // displays a \n followed by a new line

?>
```

Related : [Slash /](Slash /), [Escape Character](Escape Character), [fnmatch()](fnmatch())
