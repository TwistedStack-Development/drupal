---
title: ECA Library - Set field values
version: v1
tags:
- bpmn
- library
- test models
- fields
---
# Set field values

Version v1

<script>url='bpmn_io-eca_test_0009.xml';archive='bpmn_io-eca_test_0009.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0009
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0009
```

## Purpose

Set single and multi value fields with values, testing different variations.

## Dependencies

- config
    - field.field.node.type_set_field_value.field_text_line
    - field.field.node.type_set_field_value.field_text_lines
    - field.storage.node.field_text_line
    - field.storage.node.field_text_lines
    - node.type.type_set_field_value
- module
    - eca_content
    - node

## Used plugins

### Events

- [Presave content entity (Content: Type Set Field Value)](/plugins/eca/content/events/content_entity_presave.md)

### Conditions

- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)
- [Entity: is new](/plugins/eca/content/conditions/eca_entity_is_new.md)

### Actions

- [Set text line](/plugins/eca/content/actions/eca_set_field_value.md)
- [Set lines 1](/plugins/eca/content/actions/eca_set_field_value.md)
- [Overwrite text line](/plugins/eca/content/actions/eca_set_field_value.md)
- [Append line](/plugins/eca/content/actions/eca_set_field_value.md)
- [Append another line](/plugins/eca/content/actions/eca_set_field_value.md)
- [Reset lines](/plugins/eca/content/actions/eca_set_field_value.md)
- [Prepend line](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
