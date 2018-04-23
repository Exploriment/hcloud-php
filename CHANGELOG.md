# Changelog

## v1.1.3 - 2018-04-24
* **[Bugfix]** composer.json fix

## v1.1.2 - 2018-04-12
* **[Bugfix]** `ActionPasswordReset` will now return the proper response as documented in the wiki

## v1.1.1 - 2018-04-03
* **[Enhancement]** `$server->getPublicNet()` now returns all data.
* **[Enhancement]** Added `->toArray()` to all objects.

## v1.1.0 - 2018-04-02
* **[Feature]** Added `Servers::changeProtection`
* **[Feature]** Added `Servers::RequestConsole`
* **[Update]** Updated the `Servers::changeDnsPtr` to reflect the changes made in the latest API version. Issue #3
* **[Bugfix]** Objects `ImageCreation` was extending the `Action` object instead of the `BaseObject`

## v1.0.3 - 2018-04-02
* **[Bugfix]** Fixed `root must be an object`. Issue #2

## v1.0.2 - 2018-03-28
* **[Bugfix]** When creating an image the response returned in the ImageCreation class is no longer null. Similar to issue #1.

## v1.0.1 - 2018-03-28
* **[Bugfix]** Renamed Object class to BaseObject to fix the 'Cannot use 'Object' as class name as it is reserved' error in PHP 7.2+
* **[Bugfix]** When creating a server the response returned in the ServerCreation class is no longer null. Issue #1

## v1.0.0 - 2018-02-04
* Initial release