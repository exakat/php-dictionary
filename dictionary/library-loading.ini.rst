.. _library-loading:
.. meta::
	:description:
		Library Loading: PHP has a modular structure, which allows it to load extensions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Library Loading
	:twitter:description: Library Loading: PHP has a modular structure, which allows it to load extensions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Library Loading
	:og:type: article
	:og:description: PHP has a modular structure, which allows it to load extensions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/library-loading.ini.html
	:og:locale: en


Library Loading
---------------

PHP has a modular structure, which allows it to load extensions. The extensions may be part of PHP at compilation time, and always available: this is the case for ``core``, or ``string``. 

On the other hand, some extensions are loaded dynamically, with the ``dl()`` function. This is done during execution. It usually has an impact on performance, and security, and was restricted to be used only in command line, not on web servers.

.. code-block:: php
   
   <?php
   
   if (!extension_loaded('sqlite3')) {
       dl('sqlite3.so');
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.dl.php>`__

Related : :ref:`Extensions <extension>`
