<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

// snippet-start:[ec2.php.describe_vpc_endpoint.complete]
// snippet-start:[ec2.php.describe_vpc_endpoint.import]

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
// snippet-end:[ec2.php.describe_vpc_endpoint.import]
/**
 * Describe VPC Endpoint
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[ec2.php.describe_vpc_endpoint.main]
$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'us-west-2',
    'version' => '2016-11-15',
    'profile' => 'default'
]);

$result = $ec2Client->describeVpcEndpoints();

var_dump($result);
 
 
// snippet-end:[ec2.php.describe_vpc_endpoint.main]
// snippet-end:[ec2.php.describe_vpc_endpoint.complete]

