# Remote Code Execution (RCE)
It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system. This typically happens due to improper input validation, insecure deserialization, vulnerable eval-like functions, or unsafe file handling.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rce.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rce.html","name":"Remote Code Execution (RCE)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 19:57:48 +0000","dateModified":"Sun, 21 Jun 2026 19:57:48 +0000","description":"It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rce.html"]}],"keywords":["vulnerability","security","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-file-inclusion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Arbitrary_code_execution"},{"@type":"CreativeWork","name":"RCE via a malicious SVG in mPDF","url":"https:\/\/medium.com\/@brun0ne\/rce-via-a-malicious-svg-in-mpdf-216e613b250b"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rce"}]}]}</script>
```php
<?php

    // direct execution of the incoming 
    shell_exec($_GET['shell']);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Arbitrary_code_execution)**
## See Also

+ [RCE via a malicious SVG in mPDF](https://medium.com/@brun0ne/rce-via-a-malicious-svg-in-mpdf-216e613b250b)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related

+ [Vulnerability](vulnerability.html)
+ [Local File Inclusion](local-file-inclusion.html)
+ [Execution](execution.html)
+ [php://filter](php-filter.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Shell Exec](shell-exec.html)
