---
title: ECA Library - Keep 2 fields in sync
version: v1
tags:
- bpmn
- library
- simple
- recursion
- field updates
---
# Keep 2 fields in sync

Version v1

<script>url='bpmn_io-eca_lib_0018.xml';archive='bpmn_io-eca_lib_0018.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0018
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0018
```

## Purpose

This model demonstrates how a text field in a user entity can be kept in sync with a similar field in an associated profile entity. This works in both directions. Regardless which of the entities gets updated, the other one will be updated automatically as well.

Without paying attention, this could lead into an infinite loop. Therefore, the related entity only gets updated if the field values are not the same already.

The creation of that model has been recorded: [Watch the video](https://tube.tchncs.de/w/99udnEHSUb5V7Dj66zes59)

## Dependencies

- config
    - field.field.profile.contact_detail.field_real_name
    - field.field.user.user.field_real_name
    - field.storage.profile.field_real_name
    - field.storage.user.field_real_name
    - profile.type.contact_detail
- module
    - eca_base
    - eca_content
    - profile
    - user

## Used plugins

### Events

- [Update content entity (User: - any -)](/plugins/eca/content/events/content_entity_update.md)
- [Update content entity (Profile: Contact detail)](/plugins/eca/content/events/content_entity_update.md)

### Conditions

- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)

### Actions

- [Load profile entity](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Set real name in profile](/plugins/eca/content/actions/eca_set_field_value.md)
- [Load user entity](/plugins/eca/base/actions/eca_token_set_value.md)
- [Set real name in user](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
