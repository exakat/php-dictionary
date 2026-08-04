# . File
The ``.`` files are files whose name start with a dot. By convention, they are considered hidden files, and are not listed when scanning a directory. Otherwise, they may be files or directories: ``.env``, ``.ssh``, ``.git``, etc.
```php
<?php

    // files
    $files = glob('./*');

    // hidden files
    $files = glob('./.*');

?>
```

Related : [Path](Path), [\. Directory](\. Directory), [Dot-dot Directory \.\.](Dot-dot Directory \.\.)
