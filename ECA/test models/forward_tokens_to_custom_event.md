---
title: ECA Library - Forward tokens to custom event
version: v1
tags:
- bpmn
- library
- test models
- custom event
- token
---
# Forward tokens to custom event

Version v1

<script>url='bpmn_io-eca_test_0010.xml';archive='bpmn_io-eca_test_0010.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0010
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0010
```

## Purpose

Demonstrates how okens can be forwarded to triggered custom events.

## Dependencies

- module
    - eca_base
    - eca_content
    - eca_user

## Used plugins

### Events

- [Presave content entity (Content: - any -)](/plugins/eca/content/events/content_entity_presave.md)
- [ECA custom event (CE1)](/plugins/eca/base/events/eca_base_eca_custom.md)
- [ECA custom event (CE2)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Add current user to token](/plugins/eca/user/actions/eca_token_load_user_current.md)
- [Trigger custom event without tokens](/plugins/eca/base/actions/eca_trigger_custom_event.md)
- [Trigger custom event with tokens](/plugins/eca/base/actions/eca_trigger_custom_event.md)
- [Msg](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
