## hideuserinfo
*Hide XOOPS core's userinfo.php from anonymous visitors*

### Introduction
*hideuserinfo* is a simple XOOPS hack/module which implements a simple SPAM
registration discouraging feature, preventing the `htdocs/userinfo.php`
script from displaying any information to anonymous visitors by
intercepting the `core.userinfo.start` event.

One motivation for SPAM registrations is to put information into the user profile
which will be indexed by search engines. Even if the spammer never posts on your
site, the direct link to the user page may be posted elsewhere by the spammer to
try and use your site's reputation to increase exposure of whatever target they
are promoting. Hideuserinfo stops the search engines from seeing the profiles.

You can achieve the same effect by directly hacking on the userinfo.php script,
but using this module frees you from having to maintain that change through
future XoopsCore upgrades.

### Notes

The "profile" module has this capability, so this module is only useful if your
site uses the basic user management built in to XoopsCore.

If you need legitimate anonymous users to be able to see the user profiles, this won't
work for your needs -- sorry.

### Installation
Copy the *hideuserinfo* directory to the modules directory of your site, then
install like any other module in your site's administration area.

### Requirements
This module requires XOOPS version 2.5.9 or higher.
