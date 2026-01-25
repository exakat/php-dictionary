.. _$_files:
.. meta::
	:description:
		$_FILES: In PHP, the ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype="multipart/form-data"`` attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_FILES
	:twitter:description: $_FILES: In PHP, the ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype="multipart/form-data"`` attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $_FILES
	:og:type: article
	:og:description: In PHP, the ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype="multipart/form-data"`` attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_files.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$_FILES","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:04:09 +0000","dateModified":"Thu, 22 Jan 2026 13:04:09 +0000","description":"In PHP, the ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype=\"multipart\/form-data\"`` attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$_FILES.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$_FILES
-------

In PHP, the ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype="multipart/form-data"`` attribute. It provides access to the uploaded file's properties such as name, size, type, and temporary location on the server.

When a file upload form is submitted, PHP populates the ``$_FILES`` variable with an array structure that contains information about the uploaded files. The array is organized based on the input field names used in the form.

+ ``$_FILES['userfile']['name']`` : the original name of the file on the client machine.
+ ``$_FILES['userfile']['type']`` : the mime type of the file, if the browser provided this information. An example would be ``"image/gif"``. This mime type is however not checked on the PHP side and therefore don't take its value for granted.
+ ``$_FILES['userfile']['size']`` : the size, in bytes, of the uploaded file.
+ ``$_FILES['userfile']['tmp_name']`` : the temporary filename of the file in which the uploaded file was stored on the server.
+ ``$_FILES['userfile']['error']`` : the error code associated with this file upload.
+ ``$_FILES['userfile']['full_path']`` : the full path as submitted by the browser. This value does not always contain a real directory structure, and cannot be trusted. Available as of PHP 8.1.0.

``$_FILES`` is associated to the functions move_uploaded_file() and is_uploaded_file().


.. code-block:: php
   
   <?php
   
       // $a->file was filled with $_FILES at some point
       move_uploaded_file($a->file['tmp_name'], $target);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.files.php>`__

See also `POST method uploads <https://www.php.net/manual/en/features.file-upload.post-method.php>`_

Related : :ref:`File Upload <upload>`, :ref:`$_GET <$_get>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`, :ref:`$_SERVER <$_server>`, :ref:`File Upload <file-upload>`, :ref:`Incoming Data <incoming-data>`
