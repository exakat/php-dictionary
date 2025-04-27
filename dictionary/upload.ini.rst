.. _upload:
.. _file-upload:
.. meta::
	:description:
		File Upload: PHP is able to receive files as part of a form submission.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Upload
	:twitter:description: File Upload: PHP is able to receive files as part of a form submission
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Upload
	:og:type: article
	:og:description: PHP is able to receive files as part of a form submission
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/upload.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"File Upload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"PHP is able to receive files as part of a form submission","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File Upload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File Upload
-----------

PHP is able to receive files as part of a form submission. 

PHP is capable of receiving file uploads from any RFC-1867 compliant browser. 

File upload code is based on the $_FILES superglobal, and move_uploaded_file() function. It also relies on several PHP directives :  ``file_uploads``, ``upload_max_filesize``, ``upload_tmp_dir``, ``post_max_size`` and ``max_input_time``. 


.. code-block:: php
   
   <?php
   $uploaddir = '/var/www/uploads/';
   $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
   
   echo '<pre>';
   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
       echo 'File is valid, and was successfully uploaded.';
   } else {
       echo 'Possible file upload attack!';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/features.file-upload.post-method.php>`__

See also `Learn Everything About File Upload in PHP With Examples <https://www.simplilearn.com/tutorials/php-tutorial/file-upload-in-php>`_

Related : :ref:`$_FILES <$_files>`
