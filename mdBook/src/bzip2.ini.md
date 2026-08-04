# bzip2 Extension
The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.
```php
<?php
// open file for reading
$bz = bzopen($filename, r);

// output until end of the file
echo bzread($bz);

bzclose($bz);
?>
```

## See Also

+ [Compress Files with bzip2 in PHP](https://ssojet.com/compression/compress-files-with-bzip2-in-php/)

Related : [zlib extension](zlib extension), [zip Extension](zip Extension)
