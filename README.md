Hashover Plugin for DokuWiki

This plugin add Hashover comments to DokuWiki.

It is not meant for public use - Do not use unless you understand any security implications!

Notes:
* must manually add & modify [secrets.php](https://github.com/jacobwb/hashover-next/blob/master/backend/classes/secrets.php)
* Use `~~HASHOVER~~` anywhere comments are wanted.
* Initial add of hashover:
```git
git subtree add --squash --prefix=hashover-next https://github.com/jacobwb/hashover-next.git master
```
* Update hashover:
```git
git subtree pull --squash --prefix=hashover-next https://github.com/jacobwb/hashover-next.git master
```
* documents my own settings in footer:
```php
~~NOCACHE~~
<phpwikify>
global $ACT;
$ns = strtok(getNS(cleanID(getID())), ':');
$id = getID();
$pg = end(explode(':', $id));
if ( ($ACT == 'show') && ($ns === 'public' || $ns === 'pets') && ($pg !== 'start' xor preg_match("/pets:.*:start/", $id)) ) {
    echo '~~HASHOVER~~';
}
</phpwikify>
```


If you install this plugin manually, make sure it is installed in
lib/plugins/hashover/ - if the folder is called different it
will not work!

Please refer to http://www.dokuwiki.org/plugins for additional info
on how to install plugins in DokuWiki.

----
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the COPYING file in your DokuWiki folder for details
