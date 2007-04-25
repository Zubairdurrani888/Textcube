<?php
/// Copyright (c) 2004-2007, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
define('__TEXTCUBE_MOBILE__', true);
define('ROOT', '../..');
require ROOT . '/lib/includeForBlog.php';
if (false) {
	fetchConfigVal();
}
list($entries, $paging) = getEntryWithPaging($owner, $suri['id']);
$entry = $entries ? $entries[0] : null;
printMobileHtmlHeader();
?>
<div id="content">
	<h2><?php echo htmlspecialchars($entry['title']);?></h2>	
	<hr />
	<?php printMobileEntryContentView($owner, $entry, getKeywordNames($owner)); ?>
</div>
<?php
printMobileNavigation($entry, true, true, $paging);
printMobileHtmlFooter();
?>