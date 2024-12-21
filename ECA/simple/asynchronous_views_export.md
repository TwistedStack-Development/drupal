---
title: ECA Library - Asynchronous views export
version: v1
tags:
- bpmn
- library
- simple
- views
- export
- endpoint
- queue
---
# Asynchronous views export

Version v1

<script>url='bpmn_io-eca_lib_0016.xml';archive='bpmn_io-eca_lib_0016.tar.gz'</script>
{!include/library/viewer.html!}

Instead of downloading the archive, you can download and apply this model as a recipe (Drupal 10.3 or later):

```shell
composer require drupal-eca-recipe/eca_lib_0016
cd web && php core/scripts/drupal recipe ../vendor/drupal-eca-recipe/eca_lib_0016
```

## Purpose

This model provides an endpoint `/eca/export/users` which can be published as a menu item or a link. When requested, it does this:

- Check access and only allow users with the administror role to cal that endpoint
- Enqueue a task called `export-users` and forward the email address of the current user
- Display a message to the user and redirect them back to the page where they came from

After that, the task is being queued and will be executed by the next cron of the Drupal site. This will then execute the view and export the result into a csv file. Finally, an email will be sent to the user who originally requested the export together with the link from where they can download the export.

Building this model has been recorded: [watch video](https://tube.tchncs.de/w/qpc4qAu2jPMPqcnzV8125h)

## Dependencies

- config
    - views.view.user_admin_people
- module
    - eca_access
    - eca_base
    - eca_endpoint
    - eca_queue
    - eca_user
    - eca_views
    - user

## Used plugins

### Events

- [ECA Endpoint response (export)](/plugins/eca/endpoint/events/eca_endpoint_response.md)
- [ECA Endpoint access (export)](/plugins/eca/endpoint/events/eca_endpoint_access.md)
- [ECA processing queued task ()](/plugins/eca/queue/events/eca_queue_processing_task.md)

### Conditions

- [Role of current user](/plugins/eca/user/conditions/eca_current_user_role.md)

### Actions

- [Get user&#039;s email address](/plugins/eca/base/actions/eca_token_set_value.md)
- [Enqueue the export task](/plugins/eca/queue/actions/eca_enqueue_task.md)
- [Print message](/plugins/core/actions/action_message_action.md)
- [Get the referrer URL](/plugins/eca/endpoint/actions/eca_endpoint_get_request_header.md)
- [Redirect the user](/plugins/core/actions/action_goto_action.md)
- [Allow access](/plugins/eca/access/actions/eca_access_set_result.md)
- [Run export](/plugins/eca/views/actions/eca_views_export.md)
- [Send email](/plugins/core/actions/action_send_email_action.md)
- [Switch user](/plugins/eca/user/actions/eca_switch_account.md)

## Changelog

`v1`

:   Initial version
