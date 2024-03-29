# SrRestoreRoleTemplates ILIAS Plugin

Automatic reapply didactic or role templates to objects

This project is licensed under the GPL-3.0-only license

## Requirements

* ILIAS 6.0 - 7.999
* PHP >=7.2

## Installation

Start at your ILIAS root directory

```bash
mkdir -p Customizing/global/plugins/Services/Cron/CronHook
cd Customizing/global/plugins/Services/Cron/CronHook
git clone https://github.com/fluxfw/SrRestoreRoleTemplates.git SrRestoreRoleTemplates
```

Update, activate and config the plugin in the ILIAS Plugin Administration

## Description

### Cron jobs

This plugin has the follow cron jobs:

- Reapply didactic templates to objects
- Reapply role templates to objects (Only for courses)

![Cron jobs](./doc/images/cron_jobs.png)

### Config

![Config](./doc/images/config.png)

#### Only objects created after

By default, the plugin will always process all objects (from latest to oldest)

You can configure a date to skip very old objects

### Per object

You can also run the jobs manually per object by using the [SrRestoreRoleTemplatesUI](https://github.com/fluxfw/SrRestoreRoleTemplatesUI) plugin
