# Dot-dot Directory ..
The ``..`` directory represents the parent directory of the current one. This directory always exists, at the root directory, aka ``/`` is also its own parent.
```php
<?php

    // lists of the files in the parent directory
    $files = glob('../*.php');

?>
```

## See Also

+ [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

Related : [Path](Path), [\. Directory](\. Directory), [\. File](\. File)
