---
title: ECA Library - Create user entity from JSON
version: v1
tags:
- bpmn
- library
- simple
- create entity
- json
- user entity
---
# Create user entity from JSON

Version v1

<script>url='bpmn_io-eca_lib_0030.xml';archive='bpmn_io-eca_lib_0030.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0030
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0030
```

## Purpose

This model demonstrates how to create a content entity with data from a JSON string. It also shows why creating a user entity &quot;the classic way&quot; doesn&#039;t work, more about the reasons for that are explained in the video.

The creation of this module was recorded and the video with additional explanations can be [watch here](https://tube.tchncs.de/w/3z2AD4Lbmoo1QVmBqzmemc).

## Dependencies

- module
    - eca_base
    - eca_content
    - eca_render
    - eca_user
    - serialization

## Used plugins

### Events

- [ECA custom event (U1)](/plugins/eca/base/events/eca_base_eca_custom.md)
- [ECA custom event (U2)](/plugins/eca/base/events/eca_base_eca_custom.md)

### Actions

- [Create user entity specific](/plugins/eca/user/actions/eca_new_user.md)
- [Save the user](/plugins/eca/content/actions/eca_save_entity.md)
- [Success message](/plugins/core/actions/action_message_action.md)
- [Switch to user 1](/plugins/eca/user/actions/eca_switch_account.md)
- [Unserialize json for user](/plugins/eca/render/actions/eca_render_unserialize_serialization.md)
- [Save user](/plugins/eca/content/actions/eca_save_entity.md)
- [Success Message](/plugins/core/actions/action_message_action.md)

## Changelog

`v1`

:   Initial version
