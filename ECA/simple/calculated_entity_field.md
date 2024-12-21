---
title: ECA Library - Calculated entity field
version: v1
tags:
- bpmn
- library
- simple
- entity fields
- math
- tamper
- calculated field
---
# Calculated entity field

Version v1

<script>url='bpmn_io-eca_lib_0022.xml';archive='bpmn_io-eca_lib_0022.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0022
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0022
```

## Purpose

This model calculates a field value and stores it with a node, each time that node gets either created or updated. This shows in a simple example, how the contrib module &quot;Calculated Field&quot; can be replaced with ECA models.

The creation of this module was recorded with lots of additional explanations and can be [watched here](https://tube.tchncs.de/w/3gDpeV9TynLeoxk4XQfZ7c).

## Dependencies

- config
    - field.field.node.carpet.field_area
    - field.field.node.carpet.field_length
    - field.field.node.carpet.field_width
    - field.storage.node.field_area
    - field.storage.node.field_length
    - field.storage.node.field_width
    - node.type.carpet
- module
    - eca_content
    - eca_tamper
    - menu_ui
    - node

## Used plugins

### Events

- [Presave content entity (Content: Carpet)](/plugins/eca/content/events/content_entity_presave.md)

### Actions

- [Calculate area](/plugins/eca/tamper/actions/eca_tamper_math.md)
- [Store area value](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version.
