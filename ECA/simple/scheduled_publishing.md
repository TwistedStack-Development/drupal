---
title: ECA Library - Scheduled publishing
version: v1
tags:
- bpmn
- library
- simple
- cron
- views
- schedule
---
# Scheduled publishing

Version v1

<script>url='bpmn_io-eca_lib_0023.xml';archive='bpmn_io-eca_lib_0023.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0023
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0023
```

## Purpose

This model demonstrates how to automatically publish and unpublish nodes by scheduled dates and times.

The creation of this module was recorded and the video with additional explanations [can be watch here](https://tube.tchncs.de/w/5cs5Du3579Nwau1m9Rv92G).

## Dependencies

- config
    - views.view.due_nodes_for_publishing
- module
    - datetime
    - eca_base
    - eca_content
    - eca_user
    - eca_views
    - node
    - user

## Used plugins

### Events

- [ECA cron event (* * * * *)](/plugins/eca/base/events/eca_base_eca_cron.md)
- [ECA custom event (entity-aware) (publish)](/plugins/eca/content/events/content_entity_custom.md)
- [ECA custom event (entity-aware) (unpublish)](/plugins/eca/content/events/content_entity_custom.md)
- [ECA custom event (auto-publish)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Switch user](/plugins/eca/user/actions/eca_switch_account.md)
- [View: get due nodes for publishing](/plugins/eca/views/actions/eca_views_query.md)
- [Trigger publish event](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Publish node](/plugins/core/actions/entity_publish_action_node.md)
- [Message](/plugins/core/actions/action_message_action.md)
- [View: get due nodes for unpublishing](/plugins/eca/views/actions/eca_views_query.md)
- [Trigger unpublish event](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Unpublish node](/plugins/core/actions/entity_unpublish_action_node.md)

## Changelog

`v1`

:   Initial release
