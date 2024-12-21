---
title: ECA Library - Entity Events Part 2
version: v1
tags:
- bpmn
- library
- test models
- custom event
---
# Entity Events Part 2

Version v1

<script>url='bpmn_io-eca_test_0003.xml';archive='bpmn_io-eca_test_0003.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0003
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0003
```

## Purpose

Implements 2 custom events that get triggered by another model, see also &quot;Entity Events Part 1&quot;

## Dependencies

- module
    - eca_content

## Used plugins

### Events

- [ECA custom event (entity-aware) (C2)](/plugins/eca/content/events/content_entity_custom.md)
- [ECA custom event (entity-aware) (C3)](/plugins/eca/content/events/content_entity_custom.md)

### Actions

- [Msg](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
