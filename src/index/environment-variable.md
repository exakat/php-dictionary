# Environment Variables
Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed. These variables are part of the operating system's environment and can be used to retrieve information about the server, the operating system, or custom configuration parameters that are set for a particular application. PHP provides a way to access these variables through the ``$_ENV`` superglobal array.

The environment variables are set in the operating system before the execution of the script, using commands such as ``export``, ``setenv``, or else, depending on the OS. They may also be provided at the start of containerized images.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment-variable.html","name":"Environment Variables","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment-variable.html"]}],"keywords":["os","variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/env-file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Environment_variable"},{"@type":"CreativeWork","name":"Working with Environment Variables in PHP","url":"https:\/\/www.twilio.com\/blog\/working-with-environment-variables-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"environment-variable"}]}]}</script>
```php
<?php

    // print all available environment variables at the start of the script
    // it may be empty
    print_r($_ENV);
    
    // retrieve an environment variable 
    var_dump(getenv('MY_VARIABLE'));
    
    // sets an environment variable 
    var_dump(setenv('MY_VARIABLE', 2));

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Environment_variable)**
## See Also

+ [Working with Environment Variables in PHP](https://www.twilio.com/blog/working-with-environment-variables-in-php)

## Related

+ [\\.env File](env-file.html)
