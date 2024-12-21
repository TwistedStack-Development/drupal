---
title: ECA Library - ECA working with VBO
version: v1
tags:
- bpmn
- library
- simple
- vbo
- views
---
# ECA working with VBO

Version v1

<script>url='bpmn_io-eca_lib_0019.xml';archive='bpmn_io-eca_lib_0019.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0019
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0019
```

## Purpose

This model shows how you get Drupal views working with VBO and ECA together. The creation of this model was [recorded in a video](https://tube.tchncs.de/w/vNRrQDcmEA2QbW771acZZi) and explains a lot more detail there.

## Dependencies

- module
    - eca_vbo
    - views_bulk_operations

## Used plugins

### Events

- [VBO: Execute Views bulk operation (one by one) (Print title of nodes)](/plugins/eca/vbo/events/vbo_execute.md)
- [VBO: Custom access for Views bulk operation (Print title of nodes)](/plugins/eca/vbo/events/vbo_custom_access.md)

### Actions

- [Message](/plugins/core/actions/action_message_action.md)
- [yes](/plugins/eca/vbo/actions/eca_vbo_set_custom_access.md)

## Changelog

`v1`

:   Initial version
