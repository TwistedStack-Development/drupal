---
title: ECA Library - ECA and Views
version: v1
tags:
- bpmn
- library
- simple
- views
---
# ECA and Views

Version v1

<script>url='bpmn_io-eca_lib_0034.xml';archive='bpmn_io-eca_lib_0034.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0034
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0034
```

## Purpose

This model shows the difference between the [Views: Execute Query](/plugins/eca/views/actions/eca_views_query) action and the [Render: Views](/plugins/eca/render/actions/eca_render_views_views) action. The first one always returns a list of entities (more about in the video, see link below) and the second one returns the rendered result.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/jnzoru2XFHgpoToQB5P6AT).

## Dependencies

- config
    - views.view.eca_content_count
- module
    - eca_base
    - eca_content
    - eca_render
    - eca_tamper
    - eca_user
    - eca_views
    - node
    - user

## Used plugins

### Events

- [ECA custom event (views)](/plugins/eca/base/events/eca_base_eca_custom.md)
- [ECA custom event (entity-aware) (Print View Result)](/plugins/eca/content/events/content_entity_custom.md)

### Actions

- [Switch to user 1](/plugins/eca/user/actions/eca_switch_account.md)
- [Query ECA Content Count](/plugins/eca/views/actions/eca_views_query.md)
- [Trigger Print View Result](/plugins/eca/content/actions/eca_trigger_content_entity_custom_event.md)
- [Message](/plugins/core/actions/action_message_action.md)
- [Render ECA Content Count](/plugins/eca/render/actions/eca_render_views_views.md)
- [Trim the result](/plugins/eca/tamper/actions/eca_tamper_trim.md)
- [Strip tags](/plugins/eca/tamper/actions/eca_tamper_strip_tags.md)

## Changelog

`v1`

:   Initial version
