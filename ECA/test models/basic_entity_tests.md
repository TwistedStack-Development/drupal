---
title: ECA Library - Basic entity tests
version: v1
tags:
- bpmn
- library
- test models
- node
- messages
- change field values
- conditions
---
# Basic entity tests

Version v1

<script>url='bpmn_io-eca_test_0004.xml';archive='bpmn_io-eca_test_0004.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0004
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0004
```

## Purpose

This model contains somebasic conditions and actions on nodes.

## Dependencies

- module
    - eca_content
    - eca_user
    - node

## Used plugins

### Events

- [Update content entity (Content: - any -)](/plugins/eca/content/events/content_entity_update.md)
- [Presave content entity (Content: - any -)](/plugins/eca/content/events/content_entity_presave.md)

### Conditions

- [Entity type and bundle](/plugins/eca/content/conditions/eca_entity_type_bundle.md)

### Actions

- [Msg](/plugins/core/actions/action_message_action.md)
- [Make stícky](/plugins/node/actions/node_make_sticky_action.md)
- [Promote to front page](/plugins/node/actions/node_promote_action.md)
- [Set title](/plugins/eca/content/actions/eca_set_field_value.md)
- [Load user](/plugins/eca/user/actions/eca_token_load_user_current.md)

## Changelog

`v1`

:   Initial version
