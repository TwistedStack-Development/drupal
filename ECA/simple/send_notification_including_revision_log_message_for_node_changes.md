---
title: ECA Library - Send notification including revision log message for node changes
version: v2
tags:
- bpmn
- library
- simple
- form field
- tokens
- token browser
- email
- node update
---
# Send notification including revision log message for node changes

Version v2

<script>url='bpmn_io-eca_lib_0017.xml';archive='bpmn_io-eca_lib_0017.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0017
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0017
```

## Purpose

This model sends an email when any node got updated. That email contains a couple of tokens, e.g. the name of the user who edited the node and the link to the node. It also contains the the revision log message that the user has left in the edit form.

As the author may skip the revision log, this model also makes that field required.

The creation of that model has been recorded and there have actually some unexpected difficulties, that you can watch live, how they got resolved: [Watch the video](https://tube.tchncs.de/w/dzL382ZCTE2RzLSbMQHJk5)

In version 2 of this model, we&#039;ve added content moderation functionality and a section field for a wiki page content type, such that email notifications get sent to different recipients depending on state and section of the updated node.

The creation of this model&#039;s enhancement has also been recorded: [Watch the second video](https://tube.tchncs.de/w/s3yX3pWuZhMA5WPYQNpnyp)

## Dependencies

- config
    - node.type.wiki
- module
    - eca_base
    - eca_content
    - eca_form
    - menu_ui

## Used plugins

### Events

- [Update content entity (Content: - any -)](/plugins/eca/content/events/content_entity_update.md)
- [Build form ()](/plugins/eca/form/events/form_form_build.md)
- [Update content entity (Content: Wiki)](/plugins/eca/content/events/content_entity_update.md)

### Conditions

- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)

### Actions

- [Send email to admin](/plugins/core/actions/action_send_email_action.md)
- [Make revision log required](/plugins/eca/form/actions/eca_form_field_require.md)
- [Set role to reviewers](/plugins/eca/base/actions/eca_token_set_value.md)
- [Send email](/plugins/core/actions/action_send_email_action.md)
- [Set role to publisher](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set role to admin](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set email to original author](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set email to products](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set email to departments](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set email to markets](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Adding moderation states and sections
