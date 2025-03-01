# AWS Glue code examples for the SDK for C++

## Overview

Shows how to use the AWS SDK for C++ to work with AWS Glue.

<!--custom.overview.start-->
<!--custom.overview.end-->

_AWS Glue is a scalable, serverless data integration service that makes it easy to discover, prepare, and combine data for analytics, machine learning, and application development._

## ⚠ Important

* Running this code might result in charges to your AWS account. For more details, see [AWS Pricing](https://aws.amazon.com/pricing/) and [Free Tier](https://aws.amazon.com/free/).
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites



Before using the code examples, first complete the installation and setup steps
for [Getting started](https://docs.aws.amazon.com/sdk-for-cpp/v1/developer-guide/getting-started.html) in the AWS SDK for
C++ Developer Guide.
This section covers how to get and build the SDK, and how to build your own code by using the SDK with a
sample Hello World-style application.

Next, for information on code example structures and how to build and run the examples, see [Getting started with the AWS SDK for C++ code examples](https://docs.aws.amazon.com/sdk-for-cpp/v1/developer-guide/getting-started-code-examples.html).


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Get started

- [Hello AWS Glue](hello_glue/CMakeLists.txt#L4) (`ListJobs`)


### Single actions

Code excerpts that show you how to call individual service functions.

- [Create a crawler](glue_getting_started_scenario.cpp#L871) (`CreateCrawler`)
- [Create a job definition](glue_getting_started_scenario.cpp#L871) (`CreateJob`)
- [Delete a crawler](glue_getting_started_scenario.cpp#L871) (`DeleteCrawler`)
- [Delete a database from the Data Catalog](glue_getting_started_scenario.cpp#L871) (`DeleteDatabase`)
- [Delete a job definition](glue_getting_started_scenario.cpp#L871) (`DeleteJob`)
- [Get a crawler](glue_getting_started_scenario.cpp#L871) (`GetCrawler`)
- [Get a database from the Data Catalog](glue_getting_started_scenario.cpp#L871) (`GetDatabase`)
- [Get a job run](glue_getting_started_scenario.cpp#L871) (`GetJobRun`)
- [Get runs of a job](glue_getting_started_scenario.cpp#L871) (`GetJobRuns`)
- [Get tables from a database](glue_getting_started_scenario.cpp#L871) (`GetTables`)
- [List job definitions](glue_getting_started_scenario.cpp#L871) (`ListJobs`)
- [Start a crawler](glue_getting_started_scenario.cpp#L871) (`StartCrawler`)
- [Start a job run](glue_getting_started_scenario.cpp#L871) (`StartJobRun`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

- [Get started with crawlers and jobs](glue_getting_started_scenario.cpp)


<!--custom.examples.start-->
<!--custom.examples.end-->

## Run the examples

### Instructions

An executable is built for each source file. These executables are located in the build folder and have
"run_" prepended to the source file name, minus the suffix. See the "main" function in the source file for further instructions.

For example, to run the action in the source file "my_action.cpp", execute the following command from within the build folder. The command
will display any required arguments.

```
./run_my_action
```

<!--custom.instructions.start-->
<!--custom.instructions.end-->

#### Hello AWS Glue

This example shows you how to get started using AWS Glue.



#### Get started with crawlers and jobs

This example shows you how to do the following:

- Create a crawler that crawls a public Amazon S3 bucket and generates a database of CSV-formatted metadata.
- List information about databases and tables in your AWS Glue Data Catalog.
- Create a job to extract CSV data from the S3 bucket, transform the data, and load JSON-formatted output into another S3 bucket.
- List information about job runs, view transformed data, and clean up resources.

<!--custom.scenario_prereqs.glue_Scenario_GetStartedCrawlersJobs.start-->
<!--custom.scenario_prereqs.glue_Scenario_GetStartedCrawlersJobs.end-->


<!--custom.scenarios.glue_Scenario_GetStartedCrawlersJobs.start-->
<!--custom.scenarios.glue_Scenario_GetStartedCrawlersJobs.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.



```sh
   cd <BUILD_DIR>
   cmake <path-to-root-of-this-source-code> -DBUILD_TESTS=ON
   make
   ctest
```


<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

- [AWS Glue Developer Guide](https://docs.aws.amazon.com/glue/latest/dg/what-is-glue.html)
- [AWS Glue API Reference](https://docs.aws.amazon.com/glue/latest/dg/aws-glue-api.html)
- [SDK for C++ AWS Glue reference](https://sdk.amazonaws.com/cpp/api/LATEST/aws-cpp-sdk-glue/html/annotated.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0