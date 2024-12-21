---
title: ECA Library - Multi value field loop
version: v1
tags:
- bpmn
- library
- use case
- loop
- multi value field
---
# Multi value field loop

Version v1

<script>url='bpmn_io-eca_lib_0006.xml';archive='bpmn_io-eca_lib_0006.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0006
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0006
```

## Purpose

This model demonstrates how to loop over all values of a multi value field without using custom events.

## Dependencies

- config
    - field.field.user.user.field_user_networks
    - field.storage.user.field_user_networks
    - taxonomy.vocabulary.networks
- module
    - eca_base
    - eca_content
    - eca_user
    - taxonomy
    - user

## Used plugins

### Events

- [Login of a user](/plugins/eca/user/events/user_login.md)

### Conditions

- [Compare number of list items](/plugins/eca/base/conditions/eca_count.md)

### Actions

- [Put list of user networks into a token](/plugins/eca/base/actions/eca_token_set_value.md)
- [Pop an item from the list](/plugins/eca/base/actions/eca_list_remove.md)
- [Print message](/plugins/core/actions/action_message_action.md)
- [Load term](/plugins/eca/content/actions/eca_token_load_entity.md)

## Changelog

`v1`

:   Initial version
