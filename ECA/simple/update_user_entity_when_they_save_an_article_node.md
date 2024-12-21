---
title: ECA Library - Update user entity when they save an article node
version: v1
tags:
- bpmn
- library
- simple
- entity reference
- update entity field
---
# Update user entity when they save an article node

Version v1

<script>url='bpmn_io-eca_lib_0027.xml';archive='bpmn_io-eca_lib_0027.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0027
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0027
```

## Purpose

This model appends a comment to the author of a node when they create a new one or update an existing one.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/7jPP8ZXuhahq5K87L2cSrn).

## Dependencies

- config
    - field.field.user.user.field_author_comments
    - field.storage.user.field_author_comments
- module
    - eca_content
    - user

## Used plugins

### Events

- [Insert content entity (Content: - any -)](/plugins/eca/content/events/content_entity_insert.md)
- [Update content entity (Content: - any -)](/plugins/eca/content/events/content_entity_update.md)

### Actions

- [Load authors user entity](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Set author comment in the user entity](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
