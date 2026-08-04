# Image Injection
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

## See Also

+ [Image File Upload Security — OWASP Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html)

Related : [Image](Image), [Injection](Injection), [Scalable Vector Graphics (SVG)](Scalable Vector Graphics (SVG)), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [File Upload](File Upload), [Security](Security), [HTML Escaping](HTML Escaping), [LDAP Injection](LDAP Injection), [SQL Injection](SQL Injection)
