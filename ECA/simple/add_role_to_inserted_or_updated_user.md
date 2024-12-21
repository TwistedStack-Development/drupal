---
title: ECA Library - Add role to inserted or updated user
version: v3
tags:
- bpmn
- library
- simple
- presave
- insert
- update
- content entity
---
# Add role to inserted or updated user

Version v3

<script>url='bpmn_io-eca_lib_0029.xml';archive='bpmn_io-eca_lib_0029.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0029
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0029
```

## Purpose

This model demonstrates how to add a role to an inserted or updated user entity. There are actually 3 potential ways of doing this, only 1 of them being recommended. The recorded session (see link below) shows the issues you can run into when choosing one of the other options and it may become transparent, why the third option is the best of the available ones.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/odtnGZjaEAKtzZSVX1gdAS).

## Dependencies

- module
    - eca_base
    - eca_content
    - eca_user

## Used plugins

### Events

- [Presave content entity (User: - any -)](/plugins/eca/content/events/content_entity_presave.md)

### Conditions

- [Role of user](/plugins/eca/user/conditions/eca_user_role.md)

### Actions

- [Switch to user 1](/plugins/eca/user/actions/eca_switch_account.md)
- [Load saved user entity](/plugins/eca/base/actions/eca_token_set_value.md)
- [Print success message](/plugins/core/actions/action_message_action.md)
- [Add role to field](/plugins/eca/content/actions/eca_set_field_value.md)
- [Print fail message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Clean-up the model

`v3`

:   Do not save entity as this model acts in pre-save event
