# IaaS
IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.

Unlike PaaS or SaaS, IaaS gives the consumer control over the operating system, runtime, and application stack. The provider manages physical hardware and hypervisors; the consumer manages everything above.

PHP applications hosted on IaaS run on virtual machines or bare-metal instances managed by the team. Common IaaS providers include AWS EC2, Google Compute Engine, and Azure Virtual Machines. Automation tools such as Ansible, Terraform, or Chef are typically used to provision and configure the PHP runtime, web server, and database on top of the raw infrastructure.
```php
<?php

    // Interacting with IaaS resources via an SDK — AWS example
    use Aws\Ec2\Ec2Client;

    $client = new Ec2Client([
        'region'  => 'eu-west-1',
        'version' => 'latest',
    ]);

    // List running instances
    $result = $client->describeInstances([
        'Filters' => [['Name' => 'instance-state-name', 'Values' => ['running']]],
    ]);

    foreach ($result['Reservations'] as $reservation) {
        foreach ($reservation['Instances'] as $instance) {
            echo $instance['InstanceId'] . PHP_EOL;
        }
    }

?>
```

## See Also

+ [AWS EC2](https://aws.amazon.com/ec2/)
+ [Google Compute Engine](https://cloud.google.com/compute)
+ [Azure Virtual Machines](https://azure.microsoft.com/en-us/products/virtual-machines/)

Related : [PaaS](PaaS), [Software-as-a-Service (SAAS)](Software-as-a-Service (SAAS)), [Cloud](Cloud), [Application](Application), [Docker](Docker), [Hosting](Hosting), [Pay-as-you-go](Pay-as-you-go), [Serverless](Serverless)
