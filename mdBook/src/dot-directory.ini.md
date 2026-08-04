# . Directory
The ``.`` directory represents the current directory. It is useful to designate the current directory, and apply an operation on all the files in that directory. It is also used in ``php.ini`` directives, to that a path at the current directory.
```php
<?php

    // lists of the files in the current directory
    $files = glob('./*.php');

?>
```

## See Also

+ [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

Related : [Path](Path), [Concatenation \.](Concatenation \.), [Dot-dot Directory \.\.](Dot-dot Directory \.\.), [\. File](\. File)
