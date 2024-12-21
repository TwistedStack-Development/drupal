---
title: ECA Library - Entity Events Part 1
version: v1
tags:
- bpmn
- library
- test models
- custom event
---
# Entity Events Part 1

Version v1

<script>url='bpmn_io-eca_test_0002.xml';archive='bpmn_io-eca_test_0002.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0002
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0002
```

## Purpose

Triggers custom events in the same model and in another model, see also &quot;Entity Events Part 2&quot;

## Dependencies

- module
    - eca_base
    - eca_content
    - eca_user

## Used plugins

### Events

- [Presave content entity (Content: - any -)](/plugins/eca/content/events/content_entity_presave.md)
- [ECA custom event (entity-aware) (C1)](/plugins/eca/content/events/content_entity_custom.md)
- [Set current user](/plugins/eca/user/events/user_set_user.md)
- [ECA custom event ()](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Msg](/plugins/core/actions/action_message_action.md)
- [Trigger C1](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Trigger C2](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Load current user](/plugins/eca/user/actions/eca_token_load_user_current.md)
- [Trigger C3](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Trigger Cplain](/plugins/eca/base/actions/eca_trigger_custom_event.md)

## Changelog

`v1`

:   Initial version
