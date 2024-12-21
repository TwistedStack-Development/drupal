---
title: ECA Library - Redirect 403 to Login Page
version: v1
tags:
- bpmn
- library
- use case
- redirect
- redirect 403
---
# Redirect 403 to Login Page

Version v1

<script>url='bpmn_io-eca_lib_0008.xml';archive='bpmn_io-eca_lib_0008.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0008
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0008
```

## Purpose

This module redirects page requests, that would normaly respond with a &quot;403 Access denied&quot; page, to the login form. Very much like the module &quot;Redirect 403 To Login Page&quot; which can be replaced with this model.

Note: this model requires ECA 1.2, or you need to apply the patch from https://www.drupal.org/project/eca/issues/3332859 if you want to use it on ECA 1.1

## Dependencies

- module
    - eca_base
    - eca_misc
    - eca_user

## Used plugins

### Events

- [Response created](/plugins/eca/misc/events/kernel_response.md)

### Conditions

- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)
- [Role of current user](/plugins/eca/user/conditions/eca_current_user_role.md)

### Actions

- [AND](/plugins/eca/base/actions/eca_void_and_condition.md)
- [Redirect](/plugins/core/actions/action_goto_action.md)

## Changelog

`v1`

:   Initial version
