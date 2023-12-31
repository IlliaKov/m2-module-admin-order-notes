# Magento 2 – Admin Order Notes Module

## Overview
This module adds a Magento 2 plugin that modifies the comment added to an order's status history.
It adds the Name, Surname and Username of the admin user who created the comment at the end, in parentheses.

![admin_order_notes.png](images%2Fadmin_order_notes.png)

## Features

* Develops the ability to log the admin user adding a comment against an order;
* Develops the ability to display the admin user who has made a comment against an order.

## How to Recreate in Admin Panel

Sales –> Orders –> Choose Order –> Order Information –> Online Total's Comment Section –> Write Down Your Comment –> See The User Who Wrote It Down.


## Plugins
Harness the power of plugins for advanced functionality:
- [AddAdminNameToComment.php](Plugin%2FAdminhtml%2FAddAdminNameToComment.php) — This plugin modifies the comment added to an order's status history and adds the Name, Surname and Username of the admin user who created the comment at the end, in parentheses.


## Installation

Add the module repository to composer.json:

```
"repositories": [
{"type": "vcs", "url": "git@github.com:IlliaKov/m2-module-admin-order-notes.git"}
]
```

Then run the following commands:

```
$ composer require illia-nova/m2-module-admin-order-notes
$ php bin/magento setup:upgrade
```
Author – Illia Nova