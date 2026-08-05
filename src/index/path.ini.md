# Path
A path is a representation of the location of a file or directory within the directory structure. It describes the route or sequence of directories one must navigate from the root directory to reach a specific file or directory. There are two types of paths:

+ Absolute Path: this provides the complete path from the root directory to the specific file or directory. For example, in Unix-like systems, an absolute path might look like ``/home/user/documents/file.txt`` or in Windows, it might look like ``C:\Users\User\Documents\file.txt``.
+ Relative Path: this specifies the location of a file or directory relative to the current working directory. It doesn't start from the root directory but describes the path relative to the current directory . For example, if the current working directory is ``/home/user/`` and there is a file in the ``documents`` directory, the relative path might be ``documents/file.txt`` in Unix-like systems.

Paths are represented by strings. The local OS's directory separator is stored in a constant called ``DIRECTORY_SEPARATOR``. Generally, the ``/`` is converted into the local dialect when needed, although there are special cases for the ``/``, aka root, string.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/path.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/path.ini.html","name":"Path","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:15:37 +0000","dateModified":"Thu, 02 Jul 2026 08:15:37 +0000","description":"A path is a representation of the location of a file or directory within the directory structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Path.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Path_(computing))**
## See Also

+ [php-path](https://php-path.readthedocs.io/en/latest/)

## Related

+ [Stream](stream.ini.html)
+ [Protocol](protocol.ini.html)
+ [Dir](dir.ini.html)
+ [File](file.ini.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.ini.html)
+ [Absolute](absolute.ini.html)
+ [dirname](dirname.ini.html)
+ [\\. Directory](dot-directory.ini.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.ini.html)
+ [Relative](relative.ini.html)
+ [\\. File](dot-file.ini.html)
