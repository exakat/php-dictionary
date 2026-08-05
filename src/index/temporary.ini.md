# Temporary
Temporary describes resources, values, or storage that exist only for a bounded duration and are automatically discarded when that boundary is crossed. The boundary may be the end of a script execution, the end of a variable's scope, or an explicit time-to-live.

PHP exposes several built-in mechanisms for temporary storage:

+ ``php://tmp``: a read-write stream that lives in memory and spills to disk when data exceeds the memory limit. It is destroyed at the end of execution.
+ ``php://memory``: a purely in-memory read-write stream, never written to disk. Also destroyed at the end of execution.
+ ``tmpfile()``: creates a real temporary file on disk. The file descriptor is returned and the file is deleted automatically when the handle is closed or the script ends.
+ ``tempnam()``: generates a unique temporary filename in a given directory. Unlike ``tmpfile()``, the file is not deleted automatically; the caller is responsible for cleanup.
+ SQLite in-memory database: opening SQLite3 with the special name ``:memory:`` creates a fully functional relational database that vanishes when the connection is closed.
+ Variables: local variables are temporary by nature: they exist for the duration of the function or script that defines them and are released at the end of scope.
+ Sessions: sessions store temporary per-user state across requests, but that state expires once the session is destroyed or times out.
+ Cookies: a cookie without an explicit ``Expires`` or ``Max-Age`` attribute is a session cookie: the browser discards it when the session ends.
+ Cache entries: cached values are temporary by design, governed by a TTL after which they are invalidated and regenerated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/temporary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/temporary.ini.html","name":"Temporary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:16:49 +0000","dateModified":"Mon, 06 Jul 2026 10:16:49 +0000","description":"Temporary describes resources, values, or storage that exist only for a bounded duration and are automatically discarded when that boundary is crossed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Temporary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

   // Temporary in-memory stream
   $stream = fopen('php://memory', 'r+');
   fwrite($stream, 'hello');
   rewind($stream);
   echo stream_get_contents($stream); // hello
   fclose($stream);                   // gone

   // Temporary file on disk
   $tmp = tmpfile();
   fwrite($tmp, 'world');
   fclose($tmp); // file deleted here

   // Temporary in-memory SQLite database
   $db = new SQLite3(':memory:');
   $db->exec('CREATE TABLE t (v TEXT)');
   $db->close(); // database gone

?>
```

**[Documentation](https://www.php.net/manual/en/function.tmpfile.php)**
## See Also

+ [tempnam()](https://www.php.net/manual/en/function.tempnam.php)
+ [SQLite3 in-memory](https://www.php.net/manual/en/sqlite3.construct.php)

## Related

+ [php://tmp](php-tmp.ini.html)
+ [php://memory](php-memory.ini.html)
+ [SQLite3](sqlite3.ini.html)
+ [Session](session.ini.html)
+ [Cookie](cookie.ini.html)
+ [Cache](cache.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
+ [Variables](variable.ini.html)
+ [Temporary Expression](temporary-expression.ini.html)
