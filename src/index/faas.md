# Function-as-a-Service (FaaS)
Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution. The cloud provider manages all infrastructure: provisioning, scaling, and teardown.

Each function is stateless, short-lived, and triggered by an event, such as HTTP request, queue message, scheduled cron, S3 upload. The provider scales instances automatically from zero to thousands.

PHP runs on FaaS platforms through runtime layers. The most common approach is Bref, a PHP Lambda layer for AWS Lambda that handles bootstrapping the PHP runtime, forwarding events, and returning responses. Similar support exists for Google Cloud Functions and Azure Functions.

The main drawback of FaaS for PHP is cold start latency: the first invocation after an idle period must initialise the container and PHP runtime before executing. Subsequent invocations reuse the warm container and are fast.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/faas.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/faas.html","name":"Function-as-a-Service (FaaS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:30:16 +0000","dateModified":"Fri, 24 Jul 2026 15:30:16 +0000","description":"Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Function-as-a-Service (FaaS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Function-as-a-Service (FaaS)"}]}]}</script>
```php
<?php

// AWS Lambda handler via Bref (https://bref.sh)
// File: index.php

use Bref\Context\Context;

return function (array $event, Context $context): string {
    $name = $event['name'] ?? 'world';
    return 'Hello, ' . $name . '!';
};

// template.yaml (SAM):
// Resources:
//   HelloFunction:
//     Type: AWS::Serverless::Function
//     Properties:
//       FunctionName: hello
//       Runtime: provided.al2
//       Layers:
//         - !Sub arn:aws:lambda::534081306603:layer:php-83:x
//       Handler: index.php

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Function_as_a_service)**
## See Also

+ [Bref — PHP on AWS Lambda](https://bref.sh)

## Related

+ [Serverless](serverless.html)
+ [Cold Start](cold-start.html)
+ [Event Driven](event-driven.html)
+ [Stateless](stateless.html)

## Related packages

+ [bref/bref](https://packagist.org/packages/bref/bref)
