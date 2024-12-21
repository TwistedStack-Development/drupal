---
title: ECA Library - Count user logins
version: v1
tags:
- bpmn
- library
- simple
- update entity field
---
# Count user logins

Version v1

<script>url='bpmn_io-eca_lib_0012.xml';archive='bpmn_io-eca_lib_0012.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0012
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0012
```

## Purpose

This model adds a number field to the user entity with a default value 0. It then increments that value, each time that user logs into the site.

## Dependencies

- config
    - field.field.user.user.field_number_of_logins
    - field.storage.user.field_number_of_logins
- module
    - eca_content
    - eca_tamper
    - eca_user
    - user

## Used plugins

### Events

- [Login of a user](/plugins/eca/user/events/user_login.md)

### Actions

- [Read value from user](/plugins/eca/content/actions/eca_get_field_value.md)
- [Increment value](/plugins/eca/tamper/actions/eca_tamper_math.md)
- [Write value back to the user entity](/plugins/eca/content/actions/eca_set_field_value.md)

## Changelog

`v1`

:   Initial version
