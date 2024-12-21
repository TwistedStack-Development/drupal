---
title: ECA Library - Notifications
version: v1
tags:
- bpmn
- library
- simple
- notifications
---
# Notifications

Version v1

<script>url='bpmn_io-eca_lib_0021.xml';archive='bpmn_io-eca_lib_0021.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0021
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0021
```

## Purpose

This model responds to a number of events (user login, registration, error messages, new comments, etc.) and send notifications to a number of different channels like email, Mattermost and Alerta.

The creation of this model has been commented and [recorded on video](https://tube.tchncs.de/w/pS9U9PiczAUNjr4xRajVBa).

## Dependencies

- module
    - eca_base
    - eca_content
    - eca_crowdsec
    - eca_log
    - eca_user
    - push_framework

## Used plugins

### Events

- [Login of a user](/plugins/eca/user/events/user_login.md)
- [Insert content entity (User: - any -)](/plugins/eca/content/events/content_entity_insert.md)
- [Log message created ()](/plugins/eca/log/events/log_log_message.md)
- [IP signalled](/plugins/eca/crowdsec/events/crowdsec_signalled.md)
- [Insert content entity (Comment: - any -)](/plugins/eca/content/events/content_entity_insert.md)

### Actions

- [Notify email](/plugins/core/actions/action_send_email_action.md)
- [Notify Alerta](/plugins/push_framework/actions/push_framework_notify.md)
- [Notify Mattermost](/plugins/push_framework/actions/push_framework_notify.md)
- [Set subject](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set body](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial version
