.. _php-wrapper:
.. meta::
	:description:
		PHP Wrappers: A wrapper is a custom way to access remote resources.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Wrappers
	:twitter:description: PHP Wrappers: A wrapper is a custom way to access remote resources
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Wrappers
	:og:type: article
	:og:description: A wrapper is a custom way to access remote resources
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-wrapper.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Wrappers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"A wrapper is a custom way to access remote resources","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Wrappers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Wrappers
------------

A wrapper is a custom way to access remote resources. It is designed to look like accessing to file, on the file system, but using other drivers than the ones of the hard drive. It is based on a configuration string, which looks like a URL : `ftp://www.site.com/file.txt`, where the part before the `://` is the protocol.

Among the predefined PHP wrapper, there are http://, ftp://, zlib://, phar://, rar://, expect://.

.. code-block:: php
   
   <?php
   
   $html = file_get_content('http://www.php.net/');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

See also https://packagist.org/packages/laravel/socialite, https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/

Related : :ref:`Protocol <protocol>`, :ref:`Wrapper <wrapper>`, :ref:`file:// <wrapper-file>`
