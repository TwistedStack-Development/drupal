---
title: ECA Library - Send email on user registration with field values
version: v1
tags:
- bpmn
- library
- simple
- registration
- email
- field tokens
- conditions
---
# Send email on user registration with field values

Version v1

<script>url='bpmn_io-eca_lib_0025.xml';archive='bpmn_io-eca_lib_0025.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0025
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0025
```

## Purpose

This model sends an email to a user that has just registered on the site. That email contains field values, that the user just provided in the registration form, where one of the fields is mandatory and the other one is optional. The email message is different, depending upon the optional field being filled or not.

The creation of this model was recorded and [can be watched here](https://tube.tchncs.de/w/7oZPDv2fWfg3fpHENjCqpK).

## Dependencies

- config
    - field.field.user.user.field_country
    - field.field.user.user.field_home_town
    - field.storage.user.field_country
    - field.storage.user.field_home_town
- module
    - eca_base
    - eca_content
    - user

## Used plugins

### Events

- [Insert content entity (User: User)](/plugins/eca/content/events/content_entity_insert.md)

### Conditions

- [Entity: field value is empty](/plugins/eca/content/conditions/eca_entity_field_value_empty.md)

### Actions

- [Send email](/plugins/core/actions/action_send_email_action.md)
- [Build message](/plugins/eca/base/actions/eca_token_set_value.md)
- [Append country](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial release
