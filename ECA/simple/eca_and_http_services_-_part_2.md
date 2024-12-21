---
title: ECA Library - ECA and http services - part 2
version: v1
tags:
- bpmn
- library
- simple
- http
- endpoint
- API
- access
---
# ECA and http services - part 2

Version v1

<script>url='bpmn_io-eca_lib_0033.xml';archive='bpmn_io-eca_lib_0033.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0033
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0033
```

## Purpose

This model is a follow up version of [ECA and http services](/library/simple/eca_and_http_services.md) and uses a self-defined services API for the HTTP Client Manager.

This module requires the services API defined in a [Custom Module](/library/simple/eca_and_http_services_-_part_2/eca_tv_demo.zip). Please download, copy to your Drupal site and enable it before importing this model.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/vUXqDxeKtqppRUB2MDWiJq).

## Dependencies

- module
    - eca_access
    - eca_base
    - eca_endpoint
    - http_client_manager

## Used plugins

### Events

- [ECA Endpoint access (tv)](/plugins/eca/endpoint/events/eca_endpoint_access.md)
- [ECA Endpoint response (tv)](/plugins/eca/endpoint/events/eca_endpoint_response.md)
- [ECA custom event (http01)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [allow access](/plugins/eca/access/actions/eca_access_set_result.md)
- [Set content](/plugins/eca/endpoint/actions/eca_endpoint_set_response_content.md)
- [Set response code](/plugins/eca/endpoint/actions/eca_endpoint_set_response_status_code.md)
- [Set json content type](/plugins/eca/endpoint/actions/eca_endpoint_set_response_content_type.md)
- [Read received data into a token](/plugins/eca/base/actions/eca_privatetempstore_read.md)
- [Print message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
