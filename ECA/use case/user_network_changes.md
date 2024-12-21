---
title: ECA Library - User network changes
version: v1
tags:
- bpmn
- library
- use case
- loop
- custom event
---
# User network changes

Version v1

<script>url='bpmn_io-eca_lib_0005.xml';archive='bpmn_io-eca_lib_0005.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0005
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0005
```

## Purpose

Users have references to a number of networks and when one gets added or deleted, this model recognizes the exact change and displays different messages about it.

For further reading, please [go to this tutorial](/resources/tutorials/btown-1/).

## Dependencies

- config
    - field.field.user.user.field_user_networks
    - field.storage.user.field_user_networks
    - taxonomy.vocabulary.networks
- module
    - eca_base
    - eca_content
    - eca_tamper
    - taxonomy
    - user

## Used plugins

### Events

- [Update content entity (User: User)](/plugins/eca/content/events/content_entity_update.md)
- [ECA custom event (entity-aware) (additions)](/plugins/eca/content/events/content_entity_custom.md)
- [ECA custom event (entity-aware) (deletions)](/plugins/eca/content/events/content_entity_custom.md)

### Conditions

- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)

### Actions

- [Load original version of user (unchanged)](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Show Message: no changes](/plugins/core/actions/action_message_action.md)
- [Serialize new networks](/plugins/eca/tamper/actions/eca_tamper_encode.md)
- [Serialize orig networks](/plugins/eca/tamper/actions/eca_tamper_encode.md)
- [Custom event: additions](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Custom event: deletions](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Load item provided by custom event](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Message:
new item](/plugins/core/actions/action_message_action.md)
- [Message:
item exists](/plugins/core/actions/action_message_action.md)
- [Message:
deleted item](/plugins/core/actions/action_message_action.md)
- [Message:
item remains](/plugins/core/actions/action_message_action.md)
- [Get field value: new networks](/plugins/eca/content/actions/eca_get_field_value.md)
- [Get field value: orig networks](/plugins/eca/content/actions/eca_get_field_value.md)

## Changelog

`v1`

:   Initial version
