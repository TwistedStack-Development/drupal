---
title: ECA Library - Views
version: v1
tags:
- bpmn
- library
- test models
- views
- loop
- custom event
- cron
- switch user
---
# Views

Version v1

<script>url='bpmn_io-eca_test_0005.xml';archive='bpmn_io-eca_test_0005.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0005
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0005
```

## Purpose

During cron, this model switches the user context, queries a view to receive all user accounts and loops over all those users triggering a custom event for each of them to print their names in messages.

## Dependencies

- config
    - views.view.user_admin_people
- module
    - eca_base
    - eca_content
    - eca_user
    - eca_views
    - user

## Used plugins

### Events

- [ECA cron event (* * * * *)](/plugins/eca/base/events/eca_base_eca_cron.md)
- [ECA custom event (entity-aware) (x1)](/plugins/eca/content/events/content_entity_custom.md)

### Actions

- [List users](/plugins/eca/views/actions/eca_views_query.md)
- [Switch user](/plugins/eca/user/actions/eca_switch_account.md)
- [Trigger X1](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Msg](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
