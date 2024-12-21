---
title: ECA Library - ECA Feature Demo
version: v2
tags:
- bpmn
- library
- use case
- demo
---
# ECA Feature Demo

Version v2

<script>url='bpmn_io-eca_lib_0007.xml';archive='bpmn_io-eca_lib_0007.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0007
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0007
```

## Purpose

This model demonstrates a number of smart features around user accounts:

1. When a user registers themselves or gets created by an existing user, then all existing users with the admin role get informed by email. If the current user has the admin role, a message also get displayed with a link to the mailhog application to review the emails.
2. When a user logs in, a number of actions applies: depending on their role, different redirect destinations will be used after login. Also, the assigment of the internal user role gets executed, see below.
3. When a user gets updated, the assigment of the internal user role also gets executed.

The assignment of the internal user role assigns that role to the current user if their email domain contains @example.com and removes it otherwise. It does that only if the situation had changed and also displays an according message on screen.

## Dependencies

- config
    - user.role.internal
    - views.view.user_admin_people
- module
    - eca_base
    - eca_content
    - eca_user
    - eca_views
    - user

## Used plugins

### Events

- [Login of a user](/plugins/eca/user/events/user_login.md)
- [Insert content entity (User: User)](/plugins/eca/content/events/content_entity_insert.md)
- [Update content entity (User: User)](/plugins/eca/content/events/content_entity_update.md)

### Conditions

- [Role of current user](/plugins/eca/user/conditions/eca_current_user_role.md)
- [Compare number of list items](/plugins/eca/base/conditions/eca_count.md)
- [Compare two scalar values](/plugins/eca/base/conditions/eca_scalar.md)
- [Role of user](/plugins/eca/user/conditions/eca_user_role.md)

### Actions

- [Redirect to content overview](/plugins/core/actions/action_goto_action.md)
- [Redirect to admin overview](/plugins/core/actions/action_goto_action.md)
- [Redirect to
user profile](/plugins/core/actions/action_goto_action.md)
- [Inform admins by email](/plugins/core/actions/action_send_email_action.md)
- [Load all
admin users](/plugins/eca/views/actions/eca_views_query.md)
- [Pop an admin from the list](/plugins/eca/base/actions/eca_list_remove.md)
- [Save new user as token](/plugins/eca/base/actions/eca_token_set_value.md)
- [Switch user](/plugins/eca/user/actions/eca_switch_account.md)
- [Display link to Mailhog](/plugins/eca/base/actions/eca_warning_message.md)
- [Add internal role](/plugins/user/actions/user_add_role_action.md)
- [Remove internal role](/plugins/user/actions/user_remove_role_action.md)
- [Message](/plugins/core/actions/action_message_action.md)
- [Warning](/plugins/eca/base/actions/eca_warning_message.md)
- [Save user as token](/plugins/eca/base/actions/eca_token_set_value.md)

## Changelog

`v1`

:   Initial version

`v2`

:   Do not redirect after a password reset login.
