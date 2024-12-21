---
title: ECA Library - Detect user role changes
version: v2
tags:
- bpmn
- library
- simple
- user
- roles
- loop
---
# Detect user role changes

Version v2

<script>url='bpmn_io-eca_lib_0010.xml';archive='bpmn_io-eca_lib_0010.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0010
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0010
```

## Purpose

When a user entity gets saved, this model compares the list of original and current roles of that user and finds out, which ones got added and which ones got removed.

This involves 2 loops where we first go through the list of current roles to see if one of them is missing from the list of original roles. Then we gro through the list of original roles to see if ones of them is missing in the list of current roles.

For each missing role, this model shows a message on screen.

## Dependencies

- module
    - eca_base
    - eca_content
    - user

## Used plugins

### Events

- [Presave content entity (User: User)](/plugins/eca/content/events/content_entity_presave.md)

### Conditions

- [Compare number of list items](/plugins/eca/base/conditions/eca_count.md)
- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)

### Actions

- [Load the original user entity](/plugins/eca/content/actions/eca_token_load_entity.md)
- [Get next role](/plugins/eca/base/actions/eca_list_remove.md)
- [Message that the role is new](/plugins/core/actions/action_message_action.md)
- [Join original IDs](/plugins/eca/base/actions/eca_token_set_value.md)
- [Join current IDs](/plugins/eca/base/actions/eca_token_set_value.md)
- [Message that role has been removed](/plugins/eca/base/actions/eca_warning_message.md)
- [Get the list of original roles](/plugins/eca/content/actions/eca_get_field_value.md)
- [Get the list of current roles](/plugins/eca/content/actions/eca_get_field_value.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Replace &quot;Token: set value&quot; actions by &quot;Entity: get field value&quot; actions
