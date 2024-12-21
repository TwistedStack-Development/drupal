---
title: ECA Library - Route test
version: v2
tags:
- bpmn
- library
- simple
- route
- token
- node
---
# Route test

Version v2

<script>url='bpmn_io-eca_lib_0001.xml';archive='bpmn_io-eca_lib_0001.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0001
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0001
```

## Purpose

If a node page gets requested and the node is of type &quot;article&quot;, a message will be printed.

This is using the event [Controller found to handle request](https://ecaguide.org/plugins/eca/misc/events/kernel_controller/?h=controller+found+handle+request) as thiss is working even if pages are cached.

## Dependencies

- module
    - eca_content
    - eca_misc

## Used plugins

### Events

- [Controller found to handle request](/plugins/eca/misc/events/kernel_controller.md)

### Conditions

- [Route match](/plugins/eca/misc/conditions/eca_route_match.md)
- [Entity type and bundle](/plugins/eca/content/conditions/eca_entity_type_bundle.md)

### Actions

- [Add node from route to token](/plugins/eca/misc/actions/eca_token_load_route_param.md)
- [Print node title as message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Updated to latest plugin versions, fixed some typos, change the event from &quot;Start dispatching request&quot; to &quot;Controller found to handle request&quot;
