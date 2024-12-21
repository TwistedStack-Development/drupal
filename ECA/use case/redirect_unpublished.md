---
title: ECA Library - Redirect unpublished
version: v1
tags:
- bpmn
- library
- use case
- redirect
---
# Redirect unpublished

Version v1

<script>url='bpmn_io-eca_lib_0003.xml';archive='bpmn_io-eca_lib_0003.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0003
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0003
```

## Purpose

If a user requests an unpublished article node, but doesn&#039;t have the permission to view unpublished nodes, then the request gets redirected to the contact form.

## Dependencies

- module
    - eca_content
    - eca_misc
    - eca_user

## Used plugins

### Events

- [Start dispatching request](/plugins/eca/misc/events/kernel_request.md)

### Conditions

- [Route match](/plugins/eca/misc/conditions/eca_route_match.md)
- [Entity type and bundle](/plugins/eca/content/conditions/eca_entity_type_bundle.md)
- [Entity: compare field value](/plugins/eca/content/conditions/eca_entity_field_value.md)
- [Current user has permission](/plugins/eca/user/conditions/eca_current_user_permission.md)

### Actions

- [Add node from route to token](/plugins/eca/misc/actions/eca_token_load_route_param.md)
- [Print node title as message](/plugins/core/actions/action_message_action.md)
- [Redirect](/plugins/core/actions/action_goto_action.md)
- [Switch User](/plugins/eca/user/actions/eca_switch_account.md)

## Changelog

`v1`

:   Initial version
