# include_path
The ``include_path`` directive sets the directories where the file functions look for files to read or write files. 

File functions may be ``require()``, ``include()``, ``fopen()``, ``file()``, ``readfile()``, ``file_get_contents()``.

``include_path`` default to ``.``, the current directory. It may list several directories, using ``::`` as a separator.
Related : [open_basedir](open_basedir), [file_put_contents()](file_put_contents())
