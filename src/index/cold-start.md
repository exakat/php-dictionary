# Cold Start
A cold start, also known as the cold start problem or cold start latency, is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request. The runtime environment, aka the container, the PHP process, the class autoloading, is not yet warm, so the first invocation takes significantly longer than subsequent ones.

In a FaaS environment, aka AWS Lambda, Google Cloud Functions, etc., a cold start involves: provisioning a container, downloading the function package, initialising the PHP runtime, and executing any bootstrap code, framework boot, DI container compilation, autoloader initialisation. For PHP, cold starts commonly range from a few hundred milliseconds to over a second depending on framework size.

Subsequent invocations reuse the warm container and execute in milliseconds. Containers are typically kept warm for a few minutes of inactivity before being torn down.

Mitigation strategies include: provisioned concurrency by pre-warming a fixed number of instances, reducing the deployment package size and bootstrap time, using slim frameworks or no framework for latency-sensitive functions, and keeping functions warm via scheduled pings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-start.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-start.html","name":"Cold Start","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:35:29 +0000","dateModified":"Sun, 30 Aug 2026 09:35:29 +0000","description":"A cold start, also known as the cold start problem or cold start latency, is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-start.html"]}],"alternateName":["cold-start-latency","cold-start-problem"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/faas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serverless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/docs.aws.amazon.com\/lambda\/latest\/dg\/lambda-concurrency.html"},{"@type":"CreativeWork","name":"Bref: Cold Start","url":"https:\/\/bref.sh\/docs\/environment\/cold-starts"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cold-start"}]}]}</script>
```php
<?php

    // Bref, PHP on Lambda, minimise cold start by avoiding heavy bootstrap
    // Bad: full Symfony kernel boot on every cold start
    $kernel = new Kernel('prod', false);
    $kernel->boot(); // loads 300+ classes, compiles DI container
    
    // Better for Lambda: pre-compiled container, minimal bootstrap
    // Or use a micro-runtime that skips the framework entirely
    return function (array $event): array {
        // Lightweight handler: only what this function needs
        $name = $event['queryStringParameters']['name'] ?? 'world';
        return [
            'statusCode' => 200,
            'body'       => json_encode(['message' => 'Hello, ' . $name . '!']),
        ];
    };
    
    // Provisioned concurrency (configured in AWS, not in PHP):
    // keeps N containers permanently warm, eliminating cold starts for baseline traffic

?>
```

**[Documentation](https://docs.aws.amazon.com/lambda/latest/dg/lambda-concurrency.html)**
## See Also

+ [Bref: Cold Start](https://bref.sh/docs/environment/cold-starts)

## Related

+ [Function-as-a-Service (FaaS)](faas.html)
+ [Serverless](serverless.html)
+ [Latency](latency.html)
+ [Performance](performance.html)
