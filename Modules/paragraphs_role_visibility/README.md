# Paragraphs Role Visibility

The Paragraphs Role Visibility module allows you to set access for viewing a
single paragraph item by roles. This is useful in cases when, for example, you
have a paragraph type that is visible to all users. And you want display the
item of that paragraph type on some separate page for authorized users only or
for anonymous users only.

## Installation

#### Install without composer

Download the zip or tgz archive of the latest release from the [project page](https://www.drupal.org/project/paragraphs_role_visibility).
Extra the archive and move the folder to the site's `modules/contrib` directory.

#### Install using composer

`composer require 'drupal/paragraphs_role_visibility'`

## How to use

After module is enabled go to edit form of needed paragraph type `admin/structure/paragraphs_type/{your_paragraph_type}` and enable "Paragraph visibility" behavior. Then on edit form of paragraph go to "Behavior" tab and select roles witch will have access to view the paragraph. Here more detailed [documentation](https://www.drupal.org/docs/contributed-modules/paragraphs-role-visibility-0) with screens.

## Requirements

This module requires the following modules:
- [Paragraphs](https://www.drupal.org/project/paragraphs)

## Maintainer

Alexander Shabanov (fromme) - https://www.drupal.org/u/fromme
