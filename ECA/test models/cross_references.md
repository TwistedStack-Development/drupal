---
title: ECA Library - Cross references
version: v1
tags:
- bpmn
- library
- test models
- entity reference
- cross reference
---
# Cross references

Version v1

<script>url='bpmn_io-eca_test_0001.xml';archive='bpmn_io-eca_test_0001.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0001
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0001
```

## Purpose

Two different node types are referring each other. If one node gets saved with a reference to another node, the other node gets automatically updated to link back to the first node.

## Dependencies

- config
    - field.field.node.type_1.field_other_node
    - field.field.node.type_2.field_other_node
    - field.storage.node.field_other_node
    - node.type.type_1
    - node.type.type_2
- module
    - eca_base
    - eca_content
    - node

## Used plugins

### Events

- [Insert content entity (Content: - any -)](/plugins/eca/content/events/content_entity_insert.md)
- [Update content entity (Content: - any -)](/plugins/eca/content/events/content_entity_update.md)

### Conditions

- [Entity type and bundle](/plugins/eca/content/conditions/eca_entity_type_bundle.md)
- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)
- [Entity: field value is empty](/plugins/eca/content/conditions/eca_entity_field_value_empty.md)

### Actions

- [Load original entity](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Load referenced node](/plugins/eca/content/actions/eca_token_load_entity_ref.md)
- [Set Cross Ref](/plugins/eca/content/actions/eca_set_field_value.md)
- [void](/plugins/eca/base/actions/eca_void_and_condition.md)
- [Msg](/plugins/core/actions/action_message_action.md)
- [Empty Cross Ref](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
