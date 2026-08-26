# Path
A path is a representation of the location of a file or directory within the directory structure. It describes the route or sequence of directories one must navigate from the root directory to reach a specific file or directory. There are two types of paths:

+ Absolute Path: this provides the complete path from the root directory to the specific file or directory. For example, in Unix-like systems, an absolute path might look like ``/home/user/documents/file.txt`` or in Windows, it might look like ``C:\Users\User\Documents\file.txt``.
+ Relative Path: this specifies the location of a file or directory relative to the current working directory. It doesn't start from the root directory but describes the path relative to the current directory . For example, if the current working directory is ``/home/user/`` and there is a file in the ``documents`` directory, the relative path might be ``documents/file.txt`` in Unix-like systems.

Paths are represented by strings. The local OS's directory separator is stored in a constant called ``DIRECTORY_SEPARATOR``. Generally, the ``/`` is converted into the local dialect when needed, although there are special cases for the ``/``, aka root, string.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html","name":"Path","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:15:37 +0000","dateModified":"Thu, 02 Jul 2026 08:15:37 +0000","description":"A path is a representation of the location of a file or directory within the directory structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dir.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dirname.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Path_(computing)"},{"@type":"CreativeWork","name":"php-path","url":"https:\/\/php-path.readthedocs.io\/en\/latest\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"path"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Path_(computing))**
## See Also

+ [php-path](https://php-path.readthedocs.io/en/latest/)

## Related

+ [Stream](stream.html)
+ [Protocol](protocol.html)
+ [Dir](dir.html)
+ [File](file.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.html)
+ [Absolute](absolute.html)
+ [dirname](dirname.html)
+ [\\. Directory](dot-directory.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.html)
+ [Relative](relative.html)
+ [\\. File](dot-file.html)
