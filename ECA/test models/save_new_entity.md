---
title: ECA Library - Save new entity
version: v1
tags:
- bpmn
- library
- test models
- create entity
---
# Save new entity

Version v1

<script>url='bpmn_io-eca_test_0008.xml';archive='bpmn_io-eca_test_0008.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0008
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0008
```

## Purpose

Create new tag with the same label as the triggering node.

## Dependencies

- module
    - eca_content

## Used plugins

### Events

- [Insert content entity (Content: - any -)](/plugins/eca/content/events/content_entity_insert.md)

### Actions

- [Load node](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Create new tag](/plugins/eca/content/actions/eca_new_entity.md)
- [Save tag](/plugins/eca/content/actions/eca_save_entity.md)

## Changelog

`v1`

:   Initial version
