---
title: ECA Library - Grant new user role after 3 conditions are met
version: v2
tags:
- bpmn
- library
- simple
- user role assignment
- multiple conditions
---
# Grant new user role after 3 conditions are met

Version v2

<script>url='bpmn_io-eca_lib_0026.xml';archive='bpmn_io-eca_lib_0026.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0026
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0026
```

## Purpose

This model automatically adds or removes a role from a user, when this gets updated, depending upon 3 conditions that are stored with the user entity. Only if all 3 conditions are met, the role gets added. In all other cases the role gets removed.

The creation of this module was recorded and the video with additional explanations can be [watched here](https://tube.tchncs.de/w/jTSnTrBF2YkUJHEtEoZVrW).

## Dependencies

- config
    - user.role.moderator
- module
    - eca_base
    - eca_content
    - user

## Used plugins

### Events

- [Update content entity (User: - any -)](/plugins/eca/content/events/content_entity_update.md)

### Conditions

- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)

### Actions

- [Add role](/plugins/user/actions/user_add_role_action.md)
- [Remove role](/plugins/user/actions/user_remove_role_action.md)

## Changelog

`v1`

:   Initial release

`v2`

:   Replace role content_moderator with new role moderator to avoid extra dependencies that are derived from permissions
