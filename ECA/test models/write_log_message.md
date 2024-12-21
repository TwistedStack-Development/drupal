---
title: ECA Library - Write Log Message
version: v1
tags:
- bpmn
- library
- test models
- logging
---
# Write Log Message

Version v1

<script>url='bpmn_io-eca_test_0006.xml';archive='bpmn_io-eca_test_0006.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_test_0006
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_test_0006
```

## Purpose

Write log messages.

## Dependencies

- module
    - eca_content
    - eca_log

## Used plugins

### Events

- [Presave content entity (Content: - any -)](/plugins/eca/content/events/content_entity_presave.md)

### Actions

- [Log](/plugins/eca/log/actions/eca_write_log_message.md)

## Changelog

`v1`

:   Initial version
