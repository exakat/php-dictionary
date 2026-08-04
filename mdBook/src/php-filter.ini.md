# php://filter
``php://filter`` is a meta-wrapper that allows applying one or more filter chains to a stream before the data is read or written. It is part of the ``php://`` family of built-in stream wrappers.

A filter chain is specified in the URL itself: ``php://filter/read=<filters>/resource=<target>``. Built-in filters include string conversions ``string.toupper``, encoding transforms ``convert.base64-encode``, ``convert.iconv.*``, and compression ``zlib.deflate``.

While legitimately used to read or transform stream data on-the-fly, ``php://filter`` is widely exploited in Local File Inclusion vulnerabilities. By using ``convert.base64-encode``, an attacker can read the raw PHP source of any included file instead of executing it, leaking credentials and logic. Advanced exploit chains using ``iconv`` filters can even achieve remote code execution from an LFI alone.
```php
<?php

    // Legitimate use: read a file and base64-encode its contents on the fly
    $encoded = file_get_contents('php://filter/read=convert.base64-encode/resource=config.php');
    
    // Attacker use (LFI context): exfiltrate PHP source code via include
    // include($_GET['page']);
    // => ?page=php://filter/read=convert.base64-encode/resource=index.php
    // Returns base64 of index.php source instead of executing it

?>
```

## See Also

+ [LFI to RCE via php://filter](https://www.synacktiv.com/publications/php-filters-chain-what-is-it-and-how-to-use-it.html)
+ [PHP filter chains: file read from error-based oracle](https://github.com/synacktiv/php_filter_chain_generator)

Related : [php://](php://), [Wrapper](Wrapper), [Stream](Stream), [Local File Inclusion](Local File Inclusion), [Remote Code Execution (RCE)](Remote Code Execution (RCE)), [filter](filter), [Security](Security), [Base 64 Encoding](Base 64 Encoding)
