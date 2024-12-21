---
title: ECA Library - Redirects for deleted entities
version: v1
tags:
- bpmn
- library
- test models
- redirect
- create entity
---
# Redirects for deleted entities

Version v1

<script>url='bpmn_io-eca_test_0007.xml';archive='bpmn_io-eca_test_0007.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0007
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0007
```

## Purpose

When a node gets deleted, this model creates an automatic redirect config entity to redirect visitors who want to go to the deleted node to the contact form instead.

## Dependencies

- module
    - eca_content
    - redirect

## Used plugins

### Events

- [Delete content entity (Content: - any -)](/plugins/eca/content/events/content_entity_delete.md)

### Actions

- [Create redirect](/plugins/eca/content/actions/eca_new_entity.md)
- [Set source path](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set destination](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set title](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set status](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
