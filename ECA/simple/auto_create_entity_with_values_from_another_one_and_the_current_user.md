---
title: ECA Library - Auto create entity with values from another one and the current user
version: v1
tags:
- bpmn
- library
- simple
- entity
- set field values
---
# Auto create entity with values from another one and the current user

Version v1

<script>url='bpmn_io-eca_lib_0020.xml';archive='bpmn_io-eca_lib_0020.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0020
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0020
```

## Purpose

This model reacts upon creating a new page node. It then creates a new article node, its title is populated with the page auther&#039;s name, some static text and the title of the created page.

The [recorded video](https://tube.tchncs.de/w/2nSZ9TDmtZ5YYrnyFfaNUC) provides more explanation as we go on.

## Dependencies

- config
    - node.type.article
    - node.type.page
- module
    - eca_content

## Used plugins

### Events

- [Insert content entity (Content: Basic page)](/plugins/eca/content/events/content_entity_insert.md)

### Actions

- [Create a new article](/plugins/eca/content/actions/eca_new_entity.md)
- [Save](/plugins/eca/content/actions/eca_save_entity.md)
- [Message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
