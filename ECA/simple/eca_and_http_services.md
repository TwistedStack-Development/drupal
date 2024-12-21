---
title: ECA Library - ECA and http services
version: v1
tags:
- bpmn
- library
- simple
- http
- API
- endpoint
- access
---
# ECA and http services

Version v1

<script>url='bpmn_io-eca_lib_0032.xml';archive='bpmn_io-eca_lib_0032.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0032
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0032
```

## Purpose

This model has 2 parts:

1. It demonstrates how to use API endpoints provided by the [http_client_manager](https://www.drupal.org/project/http_client_manager) module and accessing the data they receive from remote services.
2. It then also demonstrates how to use ECA endpoints to controll the access to that endpoint and building up a response to it.

In a follow up model, we will then show how the ECA endpoint can be made available to the HTTP Client Manager, so that one Drupal sites could be offering an API endpoint controlled by ECA, and another Drupal site then requested data from that API.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/eTrzr42LFCmpGv682rqrgz).

## Dependencies

- module
    - eca_access
    - eca_base
    - eca_endpoint
    - http_client_manager

## Used plugins

### Events

- [ECA custom event (http01)](/plugins/eca/base/events/eca_base_eca_custom.md)
- [ECA Endpoint access (tv)](/plugins/eca/endpoint/events/eca_endpoint_access.md)
- [ECA Endpoint response (tv)](/plugins/eca/endpoint/events/eca_endpoint_response.md)

### Actions

- [Store result in a token](/plugins/eca/base/actions/eca_privatetempstore_read.md)
- [Print result](/plugins/core/actions/action_message_action.md)
- [allow access](/plugins/eca/access/actions/eca_access_set_result.md)
- [Define response content](/plugins/eca/endpoint/actions/eca_endpoint_set_response_content.md)
- [Set response code](/plugins/eca/endpoint/actions/eca_endpoint_set_response_status_code.md)
- [Set json content type](/plugins/eca/endpoint/actions/eca_endpoint_set_response_content_type.md)

## Changelog

`v1`

:   Initial release.
