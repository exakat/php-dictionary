.. _image-injection:
.. meta::
	:description:
		Image Injection: Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Image Injection
	:twitter:description: Image Injection: Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Image Injection
	:og:type: article
	:og:description: Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/image-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/image-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/image-injection.ini.html","name":"Image Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:51:12 +0000","dateModified":"Thu, 09 Jul 2026 08:51:12 +0000","description":"Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Image Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Image Injection
---------------

Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image. The attack exploits the fact that parsers and browsers use different heuristics to determine a file's type, and that image processing libraries sometimes execute embedded code.

Common image injection scenarios include:

+ Polyglot files: a file that is simultaneously a valid image and a valid script, written in HTML, PHP, SVG, etc. When such a file is saved with a ``.jpg`` extension and later served or included, the server or browser may execute the embedded payload
+ SVG injection: ``SVG`` files are XML and may contain ``<script>`` elements. Displaying attacker-supplied SVG inline triggers cross-site scripting
+ Metadata injection: ``EXIF`` data embedded in a JPEG can contain PHP code that is executed if the application passes the raw file to ``eval()`` or ``include()``

Mitigation strategies include:

+ Re-encoding uploaded images with GD or Imagick to strip embedded payloads
+ Validating MIME type server-side with ``getimagesize()`` or ``finfo``
+ Storing uploads outside the document root and serving through a controller
+ Disabling SVG upload or sanitising SVG content.

.. code-block:: php
   
   <?php
   
       // Re-encoding strips EXIF and any embedded code
       function sanitizeImage(string $path): bool {
           $info = getimagesize($path);
           if ($info === false) {
               return false;
           }
       
           [$width, $height, $type] = $info;
       
           $src = match ($type) {
               IMAGETYPE_JPEG => imagecreatefromjpeg($path),
               IMAGETYPE_PNG  => imagecreatefrompng($path),
               IMAGETYPE_GIF  => imagecreatefromgif($path),
               default        => false,
           };
       
           if ($src === false) {
               return false;
           }
       
           imagejpeg($src, $path, 90);
           imagedestroy($src);
       
           return true;
       }
   
   ?>


`Documentation <https://owasp.org/www-community/vulnerabilities/Unrestricted_File_Upload>`__

See also `Image File Upload Security — OWASP Cheat Sheet <https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html>`_.

Related : :ref:`Image <image>`, :ref:`Injection <injection>`, :ref:`Scalable Vector Graphics (SVG) <svg>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`File Upload <file-upload>`, :ref:`Security <security>`, :ref:`HTML Escaping <escape-html>`, :ref:`LDAP Injection <ldap-injection>`, :ref:`SQL Injection <sql-injection>`
