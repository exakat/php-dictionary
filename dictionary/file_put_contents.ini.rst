.. _file_put_contents:
.. meta::
	:description:
		file_put_contents(): ``file_put_contents()`` is a PHP native function, which stores data in a file, in one call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: file_put_contents()
	:twitter:description: file_put_contents(): ``file_put_contents()`` is a PHP native function, which stores data in a file, in one call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: file_put_contents()
	:og:type: article
	:og:description: ``file_put_contents()`` is a PHP native function, which stores data in a file, in one call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file_put_contents.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"file_put_contents()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:11:00 +0000","dateModified":"Fri, 04 Jul 2025 14:11:00 +0000","description":"``file_put_contents()`` is a PHP native function, which stores data in a file, in one call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/file_put_contents().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


file_put_contents()
-------------------

``file_put_contents()`` is a PHP native function, which stores data in a file, in one call. The function requires only the file name, with its path of storage in the file system, and the actual data to store.

The function also include options to handle concurency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_put_contents()`` accepts about any type of data, to store them on a file, yet strings are the best fitted for that. Scalar types are converted to a string; arrays are imploded without any separator and objects are converted to string, when the magic method ``__toString()`` is available, otherwise, they are ignored.


`Documentation <https://www.php.net/manual/en/function.file-put-contents.php>`__

See also https://reintech.io/blog/practical-guide-php-file-put-contents-function, https://php-tips.readthedocs.io/en/latest/tips/file_put_array.html

Related : , , , , , 
