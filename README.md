# Mutation testing example

Example to execute mutation tests. 

Follow the steps in the **Setup** section to be able to execute the tests. 
After running **_Infection_**, you will have a report available in _**infection.html**_.

Remove the test and **try to kill all mutants!**

## Setup

### Requirements

* Docker

### Instructions

Follow the steps below to set up the environment that allows you to modify and test:

```
# Clone the project (or fork it)
$ git clone git@github.com:oscmarb/mutation-testing-example.git

# Build docker image and install dependencies
$ make

# Run test suite to verify code runs as expected
$ make phpunit

# Run infection - tool to run mutation tests
$ make infection
```

Makefile contains more commands, you can use ```make help``` to list them.

## Social

Follow [@oscmarb](https://twitter.com/intent/follow?screen_name=oscmarb) on Twitter.
