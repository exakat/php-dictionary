# Cloud
Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics..., over the internet. Instead of owning and maintaining physical hardware, developers and organizations rent these resources from cloud providers on a pay-as-you-go basis.

The main service models are:

+ IaaS, Infrastructure as a Service: virtual machines, storage, networking
+ PaaS, Platform as a Service: managed runtime environments, databases, deployment pipelines
+ SaaS, Software as a Service: fully managed applications

For PHP applications, cloud platforms provide hosting environments, e.g. AWS Elastic Beanstalk, Google Cloud Run, Azure App Service..., managed databases, object storage like S3, and serverless functions. The cloud enables horizontal scaling, geographic distribution, and resilience.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html","name":"Cloud","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:39:42 +0000","dateModified":"Fri, 28 Aug 2026 09:39:42 +0000","description":"Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html"]}],"alternateName":["cloud-computing"],"keywords":["concept","architecture","devops","hosting"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iaas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker-container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deploy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pay-as-you-go.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hosting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serverless.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cloud_computing"},{"@type":"CreativeWork","name":"NIST: The NIST Definition of Cloud Computing","url":"https:\/\/nvlpubs.nist.gov\/nistpubs\/legacy\/sp\/nistspecialpublication800-145.pdf"},{"@type":"CreativeWork","name":"AWS: What is Cloud Computing?","url":"https:\/\/aws.amazon.com\/what-is-cloud-computing\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cloud"}]}]}</script>
```php
<?php

    // Reading AWS S3 object using the AWS SDK
    require 'vendor/autoload.php';

    $s3 = new Aws\S3\S3Client([
        'region'  => 'eu-west-1',
        'version' => 'latest',
    ]);
    
    $result = $s3->getObject([
        'Bucket' => 'my-bucket',
        'Key'    => 'my-file.txt',
    ]);
    
    echo $result['Body'];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cloud_computing)**
## See Also

+ [NIST: The NIST Definition of Cloud Computing](https://nvlpubs.nist.gov/nistpubs/legacy/sp/nistspecialpublication800-145.pdf)
+ [AWS: What is Cloud Computing?](https://aws.amazon.com/what-is-cloud-computing/)

## Related

+ [IaaS](iaas.html)
+ [PaaS](paas.html)
+ [Software-as-a-Service (SAAS)](saas.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Microservice](microservice.html)
+ [Docker Container](docker-container.html)
+ [Deployment](deploy.html)
+ [Pay-as-you-go](pay-as-you-go.html)
+ [Docker](docker.html)
+ [Hosting](hosting.html)
+ [Serverless](serverless.html)

## Related packages

+ [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)
+ [google/cloud](https://packagist.org/packages/google/cloud)
