<?php
/// Copyright (c) 2004-2007, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
define('ROOT', '../..');
require ROOT . '/lib/includeForBlog.php';
if (false) {
	fetchConfigVal();
}
list($entries, $paging) = getEntryWithPaging($owner, $suri['id'], true);
require ROOT . '/lib/piece/blog/begin.php';
require ROOT . '/lib/piece/blog/entries.php';
require ROOT . '/lib/piece/blog/end.php';
?>
