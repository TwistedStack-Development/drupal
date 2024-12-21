---
title: ECA Library - Send email to users of a given role
version: v1
tags:
- bpmn
- library
- simple
- views
- loop
- custom event
- switch user
- email
---
# Send email to users of a given role

Version v1

<script>url='bpmn_io-eca_lib_0024.xml';archive='bpmn_io-eca_lib_0024.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0024
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0024
```

## Purpose

This model sends an email to all users of a certain role. It contains a view with a contextual filter to limit the list of users to those of the given role.

The creation of this model was recorded with lots of additional explanations (e.g. how to use an existing model as a starting point) and [can be watched here](https://tube.tchncs.de/w/8dZuXYZHmuDTutddrTZUfE).

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

- [ECA custom event (email)](/plugins/eca/base/events/eca_base_eca_custom.md)
- [ECA custom event (entity-aware) (x1)](/plugins/eca/content/events/content_entity_custom.md)

### Actions

- [List users](/plugins/eca/views/actions/eca_views_query.md)
- [Switch user](/plugins/eca/user/actions/eca_switch_account.md)
- [Trigger X1](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Email](/plugins/core/actions/action_send_email_action.md)

## Changelog

`v1`

:   Initial version
