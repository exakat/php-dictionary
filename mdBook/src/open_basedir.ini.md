# open_basedir
The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories. That directive can only be set in the ``php.ini``.

Functions such as ``fopen()``, ``file_get_contents``, ``file_put_contents``, ``curl_get()`` when working on local files, ``zip_open()``, etc. are affected.
## See Also

+ [What is open_basedir in PHP and How to Configure It Securely](https://serveravatar.com/configure-open-basedir/)

Related : [include_path](include_path), [php\.ini](php\.ini), [\.htaccess](\.htaccess)
