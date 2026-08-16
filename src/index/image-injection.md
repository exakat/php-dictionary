# Image Injection
Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image. The attack exploits the fact that parsers and browsers use different heuristics to determine a file's type, and that image processing libraries sometimes execute embedded code.

Common image injection scenarios include:

+ Polyglot files: a file that is simultaneously a valid image and a valid script, written in HTML, PHP, ``SVG``, etc. When such a file is saved with a ``.jpg`` extension and later served or included, the server or browser may execute the embedded payload
+ ``SVG`` injection: ``SVG`` files are XML and may contain ``<script>`` elements. Displaying attacker-supplied ``SVG`` inline triggers cross-site scripting
+ Metadata injection: ``EXIF`` data embedded in a JPEG can contain PHP code that is executed if the application passes the raw file to ``eval()`` or ``include()``

Mitigation strategies include:

+ Re-encoding uploaded images with GD or ``Imagick`` to strip embedded payloads
+ Validating MIME type server-side with ``getimagesize()`` or ``finfo``
+ Storing uploads outside the document root and serving through a controller
+ Disabling ``SVG`` upload or sanitising ``SVG`` content.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image-injection.html","name":"Image Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:56:12 +0000","dateModified":"Fri, 14 Aug 2026 08:56:12 +0000","description":"Image injection is a class of attack where malicious content is embedded inside a file that is presented or processed as an image","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Image Injection.html"]}],"keywords":["security","injection","image"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-upload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/vulnerabilities\/Unrestricted_File_Upload"},{"@type":"CreativeWork","name":"Image File Upload Security \u2014 OWASP Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/File_Upload_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"Persistent PHP payloads in PNGs: How to inject PHP code in an image \u2013 and keep it there !","url":"https:\/\/www.synacktiv.com\/en\/publications\/persistent-php-payloads-in-pngs-how-to-inject-php-code-in-an-image-and-keep-it-there"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"image-injection"}]}]}</script>
```php
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
```

**[Documentation](https://owasp.org/www-community/vulnerabilities/Unrestricted_File_Upload)**
## See Also

+ [Image File Upload Security — OWASP Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html)
+ [Persistent PHP payloads in PNGs: How to inject PHP code in an image – and keep it there !](https://www.synacktiv.com/en/publications/persistent-php-payloads-in-pngs-how-to-inject-php-code-in-an-image-and-keep-it-there)

## Related

+ [Image](image.html)
+ [Injection](injection.html)
+ [Scalable Vector Graphics (SVG)](svg.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [File Upload](file-upload.html)
+ [Security](security.html)
+ [HTML Escaping](escape-html.html)
+ [LDAP Injection](ldap-injection.html)
+ [SQL Injection](sql-injection.html)
