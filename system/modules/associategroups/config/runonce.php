<?php if(!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * associategroups
 * for Contao CMS
 * 
 * @copyright	backboneIT | Oliver Hoff 2013
 * @copyright	Andreas Schempp 2010-2013
 * @author		Oliver Hoff <oliver@hofff.com>
 * @author		Andreas Schempp <andreas@schempp.ch>
 * @license		http://opensource.org/licenses/lgpl-3.0.html
 */

try {
	$objDB = Database::getInstance();
	$objAssocGroups = new AssociateGroups();
	$objDB->tableExists('tl_member_to_group') || $objAssocGroups->syncAssociationTable('member');
	$objDB->tableExists('tl_user_to_group') || $objAssocGroups->syncAssociationTable('user');

} catch(Exception $e) {
	$this->log($e->getMessage(), TL_ERROR);
}
