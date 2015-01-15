<?php 

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Contao',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Ajax'                      => 'system/modules/core/classes/Ajax.php',
	'Contao\Backend'                   => 'system/modules/core/classes/Backend.php',
	'Contao\BackendModule'             => 'system/modules/core/classes/BackendModule.php',
	'Contao\BackendTemplate'           => 'system/modules/core/classes/BackendTemplate.php',
	'Contao\BackendUser'               => 'system/modules/core/classes/BackendUser.php',
	'Contao\DataContainer'             => 'system/modules/core/classes/DataContainer.php',
	'Contao\DropZone'                  => 'system/modules/core/classes/DropZone.php',
	'Contao\FileUpload'                => 'system/modules/core/classes/FileUpload.php',
	'Contao\Frontend'                  => 'system/modules/core/classes/Frontend.php',
	'Contao\FrontendTemplate'          => 'system/modules/core/classes/FrontendTemplate.php',
	'Contao\FrontendUser'              => 'system/modules/core/classes/FrontendUser.php',
	'Contao\Hybrid'                    => 'system/modules/core/classes/Hybrid.php',
	'Contao\LiveUpdate'                => 'system/modules/core/classes/LiveUpdate.php',
	'Contao\Messages'                  => 'system/modules/core/classes/Messages.php',
	'Contao\PurgeData'                 => 'system/modules/core/classes/PurgeData.php',
	'Contao\RebuildIndex'              => 'system/modules/core/classes/RebuildIndex.php',
	'Contao\StyleSheets'               => 'system/modules/core/classes/StyleSheets.php',
	'Contao\Theme'                     => 'system/modules/core/classes/Theme.php',
	'Contao\Versions'                  => 'system/modules/core/classes/Versions.php',

	// Controllers
	'Contao\BackendChangelog'          => 'system/modules/core/controllers/BackendChangelog.php',
	'Contao\BackendConfirm'            => 'system/modules/core/controllers/BackendConfirm.php',
	'Contao\BackendFile'               => 'system/modules/core/controllers/BackendFile.php',
	'Contao\BackendHelp'               => 'system/modules/core/controllers/BackendHelp.php',
	'Contao\BackendIndex'              => 'system/modules/core/controllers/BackendIndex.php',
	'Contao\BackendInstall'            => 'system/modules/core/controllers/BackendInstall.php',
	'Contao\BackendMain'               => 'system/modules/core/controllers/BackendMain.php',
	'Contao\BackendPage'               => 'system/modules/core/controllers/BackendPage.php',
	'Contao\BackendPassword'           => 'system/modules/core/controllers/BackendPassword.php',
	'Contao\BackendPopup'              => 'system/modules/core/controllers/BackendPopup.php',
	'Contao\BackendPreview'            => 'system/modules/core/controllers/BackendPreview.php',
	'Contao\BackendSwitch'             => 'system/modules/core/controllers/BackendSwitch.php',
	'Contao\FrontendCron'              => 'system/modules/core/controllers/FrontendCron.php',
	'Contao\FrontendIndex'             => 'system/modules/core/controllers/FrontendIndex.php',
	'Contao\FrontendShare'             => 'system/modules/core/controllers/FrontendShare.php',

	// Drivers
	'Contao\DC_File'                   => 'system/modules/core/drivers/DC_File.php',
	'Contao\DC_Folder'                 => 'system/modules/core/drivers/DC_Folder.php',
	'Contao\DC_Table'                  => 'system/modules/core/drivers/DC_Table.php',

	// Elements
	'Contao\ContentAccordion'          => 'system/modules/core/elements/ContentAccordion.php',
	'Contao\ContentAccordionStart'     => 'system/modules/core/elements/ContentAccordionStart.php',
	'Contao\ContentAccordionStop'      => 'system/modules/core/elements/ContentAccordionStop.php',
	'Contao\ContentAlias'              => 'system/modules/core/elements/ContentAlias.php',
	'Contao\ContentArticle'            => 'system/modules/core/elements/ContentArticle.php',
	'Contao\ContentCode'               => 'system/modules/core/elements/ContentCode.php',
	'Contao\ContentDownload'           => 'system/modules/core/elements/ContentDownload.php',
	'Contao\ContentDownloads'          => 'system/modules/core/elements/ContentDownloads.php',
	'Contao\ContentElement'            => 'system/modules/core/elements/ContentElement.php',
	'Contao\ContentGallery'            => 'system/modules/core/elements/ContentGallery.php',
	'Contao\ContentHeadline'           => 'system/modules/core/elements/ContentHeadline.php',
	'Contao\ContentHtml'               => 'system/modules/core/elements/ContentHtml.php',
	'Contao\ContentHyperlink'          => 'system/modules/core/elements/ContentHyperlink.php',
	'Contao\ContentImage'              => 'system/modules/core/elements/ContentImage.php',
	'Contao\ContentList'               => 'system/modules/core/elements/ContentList.php',
	'Contao\ContentMarkdown'           => 'system/modules/core/elements/ContentMarkdown.php',
	'Contao\ContentMedia'              => 'system/modules/core/elements/ContentMedia.php',
	'Contao\ContentModule'             => 'system/modules/core/elements/ContentModule.php',
	'Contao\ContentSliderStart'        => 'system/modules/core/elements/ContentSliderStart.php',
	'Contao\ContentSliderStop'         => 'system/modules/core/elements/ContentSliderStop.php',
	'Contao\ContentTable'              => 'system/modules/core/elements/ContentTable.php',
	'Contao\ContentTeaser'             => 'system/modules/core/elements/ContentTeaser.php',
	'Contao\ContentText'               => 'system/modules/core/elements/ContentText.php',
	'Contao\ContentToplink'            => 'system/modules/core/elements/ContentToplink.php',
	'Contao\ContentYouTube'            => 'system/modules/core/elements/ContentYouTube.php',

	// Forms
	'Contao\Form'                      => 'system/modules/core/forms/Form.php',
	'Contao\FormCaptcha'               => 'system/modules/core/forms/FormCaptcha.php',
	'Contao\FormCheckBox'              => 'system/modules/core/forms/FormCheckBox.php',
	'Contao\FormExplanation'           => 'system/modules/core/forms/FormExplanation.php',
	'Contao\FormFieldset'              => 'system/modules/core/forms/FormFieldset.php',
	'Contao\FormFileUpload'            => 'system/modules/core/forms/FormFileUpload.php',
	'Contao\FormHeadline'              => 'system/modules/core/forms/FormHeadline.php',
	'Contao\FormHidden'                => 'system/modules/core/forms/FormHidden.php',
	'Contao\FormHtml'                  => 'system/modules/core/forms/FormHtml.php',
	'Contao\FormPassword'              => 'system/modules/core/forms/FormPassword.php',
	'Contao\FormRadioButton'           => 'system/modules/core/forms/FormRadioButton.php',
	'Contao\FormSelectMenu'            => 'system/modules/core/forms/FormSelectMenu.php',
	'Contao\FormSubmit'                => 'system/modules/core/forms/FormSubmit.php',
	'Contao\FormTextArea'              => 'system/modules/core/forms/FormTextArea.php',
	'Contao\FormTextField'             => 'system/modules/core/forms/FormTextField.php',

	// Library
	'Contao\Automator'                 => 'system/modules/core/library/Contao/Automator.php',
	'Contao\BaseTemplate'              => 'system/modules/core/library/Contao/BaseTemplate.php',
	'Contao\Cache'                     => 'system/modules/core/library/Contao/Cache.php',
	'Contao\ClassLoader'               => 'system/modules/core/library/Contao/ClassLoader.php',
	'Contao\Combiner'                  => 'system/modules/core/library/Contao/Combiner.php',
	'Contao\Config'                    => 'system/modules/core/library/Contao/Config.php',
	'Contao\Controller'                => 'system/modules/core/library/Contao/Controller.php',
	'Contao\Database\Installer'        => 'system/modules/core/library/Contao/Database/Installer.php',
	'Contao\Database\Mysql\Result'     => 'system/modules/core/library/Contao/Database/Mysql/Result.php',
	'Contao\Database\Mysql\Statement'  => 'system/modules/core/library/Contao/Database/Mysql/Statement.php',
	'Contao\Database\Mysql'            => 'system/modules/core/library/Contao/Database/Mysql.php',
	'Contao\Database\Mysqli\Result'    => 'system/modules/core/library/Contao/Database/Mysqli/Result.php',
	'Contao\Database\Mysqli\Statement' => 'system/modules/core/library/Contao/Database/Mysqli/Statement.php',
	'Contao\Database\Mysqli'           => 'system/modules/core/library/Contao/Database/Mysqli.php',
	'Contao\Database\Result'           => 'system/modules/core/library/Contao/Database/Result.php',
	'Contao\Database\Statement'        => 'system/modules/core/library/Contao/Database/Statement.php',
	'Contao\Database\Updater'          => 'system/modules/core/library/Contao/Database/Updater.php',
	'Contao\Database'                  => 'system/modules/core/library/Contao/Database.php',
	'Contao\Date'                      => 'system/modules/core/library/Contao/Date.php',
	'Contao\Dbafs'                     => 'system/modules/core/library/Contao/Dbafs.php',
	'Contao\DcaExtractor'              => 'system/modules/core/library/Contao/DcaExtractor.php',
	'Contao\DcaLoader'                 => 'system/modules/core/library/Contao/DcaLoader.php',
	'Contao\DiffRenderer'              => 'system/modules/core/library/Contao/DiffRenderer.php',
	'Contao\Email'                     => 'system/modules/core/library/Contao/Email.php',
	'Contao\Encryption'                => 'system/modules/core/library/Contao/Encryption.php',
	'Contao\Environment'               => 'system/modules/core/library/Contao/Environment.php',
	'Contao\Feed'                      => 'system/modules/core/library/Contao/Feed.php',
	'Contao\FeedItem'                  => 'system/modules/core/library/Contao/FeedItem.php',
	'Contao\File'                      => 'system/modules/core/library/Contao/File.php',
	'Contao\Files\Ftp'                 => 'system/modules/core/library/Contao/Files/Ftp.php',
	'Contao\Files\Php'                 => 'system/modules/core/library/Contao/Files/Php.php',
	'Contao\Files'                     => 'system/modules/core/library/Contao/Files.php',
	'Contao\Filter\SqlFiles'           => 'system/modules/core/library/Contao/Filter/SqlFiles.php',
	'Contao\Filter\SyncExclude'        => 'system/modules/core/library/Contao/Filter/SyncExclude.php',
	'Contao\Folder'                    => 'system/modules/core/library/Contao/Folder.php',
	'Contao\GdImage'                   => 'system/modules/core/library/Contao/GdImage.php',
	'Contao\Idna'                      => 'system/modules/core/library/Contao/Idna.php',
	'Contao\Image'                     => 'system/modules/core/library/Contao/Image.php',
	'Contao\Input'                     => 'system/modules/core/library/Contao/Input.php',
	'Contao\Message'                   => 'system/modules/core/library/Contao/Message.php',
	'Contao\Model\Collection'          => 'system/modules/core/library/Contao/Model/Collection.php',
	'Contao\Model\QueryBuilder'        => 'system/modules/core/library/Contao/Model/QueryBuilder.php',
	'Contao\Model\Registry'            => 'system/modules/core/library/Contao/Model/Registry.php',
	'Contao\Model'                     => 'system/modules/core/library/Contao/Model.php',
	'Contao\ModuleLoader'              => 'system/modules/core/library/Contao/ModuleLoader.php',
	'Contao\Pagination'                => 'system/modules/core/library/Contao/Pagination.php',
	'Contao\Picture'                   => 'system/modules/core/library/Contao/Picture.php',
	'Contao\Request'                   => 'system/modules/core/library/Contao/Request.php',
	'Contao\RequestToken'              => 'system/modules/core/library/Contao/RequestToken.php',
	'Contao\Search'                    => 'system/modules/core/library/Contao/Search.php',
	'Contao\Session'                   => 'system/modules/core/library/Contao/Session.php',
	'Contao\SortedIterator'            => 'system/modules/core/library/Contao/SortedIterator.php',
	'Contao\String'                    => 'system/modules/core/library/Contao/String.php',
	'Contao\System'                    => 'system/modules/core/library/Contao/System.php',
	'Contao\Template'                  => 'system/modules/core/library/Contao/Template.php',
	'Contao\TemplateLoader'            => 'system/modules/core/library/Contao/TemplateLoader.php',
	'Contao\User'                      => 'system/modules/core/library/Contao/User.php',
	'Contao\Validator'                 => 'system/modules/core/library/Contao/Validator.php',
	'Contao\Widget'                    => 'system/modules/core/library/Contao/Widget.php',
	'Contao\ZipReader'                 => 'system/modules/core/library/Contao/ZipReader.php',
	'Contao\ZipWriter'                 => 'system/modules/core/library/Contao/ZipWriter.php',

	// Models
	'Contao\ArticleModel'              => 'system/modules/core/models/ArticleModel.php',
	'Contao\ContentModel'              => 'system/modules/core/models/ContentModel.php',
	'Contao\FilesModel'                => 'system/modules/core/models/FilesModel.php',
	'Contao\FormFieldModel'            => 'system/modules/core/models/FormFieldModel.php',
	'Contao\FormModel'                 => 'system/modules/core/models/FormModel.php',
	'Contao\ImageSizeItemModel'        => 'system/modules/core/models/ImageSizeItemModel.php',
	'Contao\ImageSizeModel'            => 'system/modules/core/models/ImageSizeModel.php',
	'Contao\LayoutModel'               => 'system/modules/core/models/LayoutModel.php',
	'Contao\MemberGroupModel'          => 'system/modules/core/models/MemberGroupModel.php',
	'Contao\MemberModel'               => 'system/modules/core/models/MemberModel.php',
	'Contao\ModuleModel'               => 'system/modules/core/models/ModuleModel.php',
	'Contao\PageModel'                 => 'system/modules/core/models/PageModel.php',
	'Contao\SessionModel'              => 'system/modules/core/models/SessionModel.php',
	'Contao\StyleModel'                => 'system/modules/core/models/StyleModel.php',
	'Contao\StyleSheetModel'           => 'system/modules/core/models/StyleSheetModel.php',
	'Contao\ThemeModel'                => 'system/modules/core/models/ThemeModel.php',
	'Contao\UserGroupModel'            => 'system/modules/core/models/UserGroupModel.php',
	'Contao\UserModel'                 => 'system/modules/core/models/UserModel.php',

	// Modules
	'Contao\Module'                    => 'system/modules/core/modules/Module.php',
	'Contao\ModuleArticle'             => 'system/modules/core/modules/ModuleArticle.php',
	'Contao\ModuleArticleList'         => 'system/modules/core/modules/ModuleArticleList.php',
	'Contao\ModuleArticlenav'          => 'system/modules/core/modules/ModuleArticlenav.php',
	'Contao\ModuleBooknav'             => 'system/modules/core/modules/ModuleBooknav.php',
	'Contao\ModuleBreadcrumb'          => 'system/modules/core/modules/ModuleBreadcrumb.php',
	'Contao\ModuleCloseAccount'        => 'system/modules/core/modules/ModuleCloseAccount.php',
	'Contao\ModuleCustomnav'           => 'system/modules/core/modules/ModuleCustomnav.php',
	'Contao\ModuleFlash'               => 'system/modules/core/modules/ModuleFlash.php',
	'Contao\ModuleHtml'                => 'system/modules/core/modules/ModuleHtml.php',
	'Contao\ModuleLogin'               => 'system/modules/core/modules/ModuleLogin.php',
	'Contao\ModuleLogout'              => 'system/modules/core/modules/ModuleLogout.php',
	'Contao\ModuleMaintenance'         => 'system/modules/core/modules/ModuleMaintenance.php',
	'Contao\ModuleNavigation'          => 'system/modules/core/modules/ModuleNavigation.php',
	'Contao\ModulePassword'            => 'system/modules/core/modules/ModulePassword.php',
	'Contao\ModulePersonalData'        => 'system/modules/core/modules/ModulePersonalData.php',
	'Contao\ModuleQuicklink'           => 'system/modules/core/modules/ModuleQuicklink.php',
	'Contao\ModuleQuicknav'            => 'system/modules/core/modules/ModuleQuicknav.php',
	'Contao\ModuleRandomImage'         => 'system/modules/core/modules/ModuleRandomImage.php',
	'Contao\ModuleRegistration'        => 'system/modules/core/modules/ModuleRegistration.php',
	'Contao\ModuleRssReader'           => 'system/modules/core/modules/ModuleRssReader.php',
	'Contao\ModuleSearch'              => 'system/modules/core/modules/ModuleSearch.php',
	'Contao\ModuleSitemap'             => 'system/modules/core/modules/ModuleSitemap.php',
	'Contao\ModuleUser'                => 'system/modules/core/modules/ModuleUser.php',

	// Pages
	'Contao\PageError403'              => 'system/modules/core/pages/PageError403.php',
	'Contao\PageError404'              => 'system/modules/core/pages/PageError404.php',
	'Contao\PageForward'               => 'system/modules/core/pages/PageForward.php',
	'Contao\PageRedirect'              => 'system/modules/core/pages/PageRedirect.php',
	'Contao\PageRegular'               => 'system/modules/core/pages/PageRegular.php',
	'Contao\PageRoot'                  => 'system/modules/core/pages/PageRoot.php',

	// Widgets
	'Contao\CheckBox'                  => 'system/modules/core/widgets/CheckBox.php',
	'Contao\CheckBoxWizard'            => 'system/modules/core/widgets/CheckBoxWizard.php',
	'Contao\ChmodTable'                => 'system/modules/core/widgets/ChmodTable.php',
	'Contao\FileSelector'              => 'system/modules/core/widgets/FileSelector.php',
	'Contao\FileTree'                  => 'system/modules/core/widgets/FileTree.php',
	'Contao\ImageSize'                 => 'system/modules/core/widgets/ImageSize.php',
	'Contao\InputUnit'                 => 'system/modules/core/widgets/InputUnit.php',
	'Contao\KeyValueWizard'            => 'system/modules/core/widgets/KeyValueWizard.php',
	'Contao\ListWizard'                => 'system/modules/core/widgets/ListWizard.php',
	'Contao\MetaWizard'                => 'system/modules/core/widgets/MetaWizard.php',
	'Contao\ModuleWizard'              => 'system/modules/core/widgets/ModuleWizard.php',
	'Contao\OptionWizard'              => 'system/modules/core/widgets/OptionWizard.php',
	'Contao\PageSelector'              => 'system/modules/core/widgets/PageSelector.php',
	'Contao\PageTree'                  => 'system/modules/core/widgets/PageTree.php',
	'Contao\Password'                  => 'system/modules/core/widgets/Password.php',
	'Contao\RadioButton'               => 'system/modules/core/widgets/RadioButton.php',
	'Contao\RadioTable'                => 'system/modules/core/widgets/RadioTable.php',
	'Contao\SelectMenu'                => 'system/modules/core/widgets/SelectMenu.php',
	'Contao\TableWizard'               => 'system/modules/core/widgets/TableWizard.php',
	'Contao\TextArea'                  => 'system/modules/core/widgets/TextArea.php',
	'Contao\TextField'                 => 'system/modules/core/widgets/TextField.php',
	'Contao\TextStore'                 => 'system/modules/core/widgets/TextStore.php',
	'Contao\TimePeriod'                => 'system/modules/core/widgets/TimePeriod.php',
	'Contao\TrblField'                 => 'system/modules/core/widgets/TrblField.php',
	'Contao\Upload'                    => 'system/modules/core/widgets/Upload.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'analytics_google'    => 'system/modules/core/templates/analytics',
	'analytics_piwik'     => 'system/modules/core/templates/analytics',
	'be_changelog'        => 'system/modules/core/templates/backend',
	'be_confirm'          => 'system/modules/core/templates/backend',
	'be_diff'             => 'system/modules/core/templates/backend',
	'be_error'            => 'system/modules/core/templates/backend',
	'be_forbidden'        => 'system/modules/core/templates/backend',
	'be_help'             => 'system/modules/core/templates/backend',
	'be_incomplete'       => 'system/modules/core/templates/backend',
	'be_install'          => 'system/modules/core/templates/backend',
	'be_live_update'      => 'system/modules/core/templates/backend',
	'be_login'            => 'system/modules/core/templates/backend',
	'be_main'             => 'system/modules/core/templates/backend',
	'be_maintenance'      => 'system/modules/core/templates/backend',
	'be_navigation'       => 'system/modules/core/templates/backend',
	'be_no_active'        => 'system/modules/core/templates/backend',
	'be_no_forward'       => 'system/modules/core/templates/backend',
	'be_no_layout'        => 'system/modules/core/templates/backend',
	'be_no_page'          => 'system/modules/core/templates/backend',
	'be_no_root'          => 'system/modules/core/templates/backend',
	'be_pagination'       => 'system/modules/core/templates/backend',
	'be_password'         => 'system/modules/core/templates/backend',
	'be_picker'           => 'system/modules/core/templates/backend',
	'be_popup'            => 'system/modules/core/templates/backend',
	'be_preview'          => 'system/modules/core/templates/backend',
	'be_purge_data'       => 'system/modules/core/templates/backend',
	'be_rebuild_index'    => 'system/modules/core/templates/backend',
	'be_referer'          => 'system/modules/core/templates/backend',
	'be_switch'           => 'system/modules/core/templates/backend',
	'be_unavailable'      => 'system/modules/core/templates/backend',
	'be_welcome'          => 'system/modules/core/templates/backend',
	'be_widget'           => 'system/modules/core/templates/backend',
	'be_widget_chk'       => 'system/modules/core/templates/backend',
	'be_widget_pw'        => 'system/modules/core/templates/backend',
	'be_widget_rdo'       => 'system/modules/core/templates/backend',
	'be_wildcard'         => 'system/modules/core/templates/backend',
	'block_searchable'    => 'system/modules/core/templates/block',
	'block_section'       => 'system/modules/core/templates/block',
	'block_sections'      => 'system/modules/core/templates/block',
	'block_unsearchable'  => 'system/modules/core/templates/block',
	'ce_accordion'        => 'system/modules/core/templates/elements',
	'ce_accordion_start'  => 'system/modules/core/templates/elements',
	'ce_accordion_stop'   => 'system/modules/core/templates/elements',
	'ce_code'             => 'system/modules/core/templates/elements',
	'ce_download'         => 'system/modules/core/templates/elements',
	'ce_downloads'        => 'system/modules/core/templates/elements',
	'ce_gallery'          => 'system/modules/core/templates/elements',
	'ce_headline'         => 'system/modules/core/templates/elements',
	'ce_html'             => 'system/modules/core/templates/elements',
	'ce_hyperlink'        => 'system/modules/core/templates/elements',
	'ce_hyperlink_image'  => 'system/modules/core/templates/elements',
	'ce_image'            => 'system/modules/core/templates/elements',
	'ce_list'             => 'system/modules/core/templates/elements',
	'ce_markdown'         => 'system/modules/core/templates/elements',
	'ce_player'           => 'system/modules/core/templates/elements',
	'ce_slider_start'     => 'system/modules/core/templates/elements',
	'ce_slider_stop'      => 'system/modules/core/templates/elements',
	'ce_table'            => 'system/modules/core/templates/elements',
	'ce_teaser'           => 'system/modules/core/templates/elements',
	'ce_text'             => 'system/modules/core/templates/elements',
	'ce_toplink'          => 'system/modules/core/templates/elements',
	'form'                => 'system/modules/core/templates/forms',
	'form_captcha'        => 'system/modules/core/templates/forms',
	'form_checkbox'       => 'system/modules/core/templates/forms',
	'form_explanation'    => 'system/modules/core/templates/forms',
	'form_fieldset'       => 'system/modules/core/templates/forms',
	'form_headline'       => 'system/modules/core/templates/forms',
	'form_hidden'         => 'system/modules/core/templates/forms',
	'form_html'           => 'system/modules/core/templates/forms',
	'form_message'        => 'system/modules/core/templates/forms',
	'form_password'       => 'system/modules/core/templates/forms',
	'form_radio'          => 'system/modules/core/templates/forms',
	'form_row'            => 'system/modules/core/templates/forms',
	'form_row_double'     => 'system/modules/core/templates/forms',
	'form_select'         => 'system/modules/core/templates/forms',
	'form_submit'         => 'system/modules/core/templates/forms',
	'form_textarea'       => 'system/modules/core/templates/forms',
	'form_textfield'      => 'system/modules/core/templates/forms',
	'form_upload'         => 'system/modules/core/templates/forms',
	'form_widget'         => 'system/modules/core/templates/forms',
	'form_xml'            => 'system/modules/core/templates/forms',
	'fe_page'             => 'system/modules/core/templates/frontend',
	'gallery_default'     => 'system/modules/core/templates/gallery',
	'j_accordion'         => 'system/modules/core/templates/jquery',
	'j_colorbox'          => 'system/modules/core/templates/jquery',
	'j_mediaelement'      => 'system/modules/core/templates/jquery',
	'j_slider'            => 'system/modules/core/templates/jquery',
	'j_tablesort'         => 'system/modules/core/templates/jquery',
	'mail_default'        => 'system/modules/core/templates/mail',
	'member_default'      => 'system/modules/core/templates/member',
	'member_grouped'      => 'system/modules/core/templates/member',
	'mod_article'         => 'system/modules/core/templates/modules',
	'mod_article_list'    => 'system/modules/core/templates/modules',
	'mod_article_nav'     => 'system/modules/core/templates/modules',
	'mod_article_plain'   => 'system/modules/core/templates/modules',
	'mod_article_teaser'  => 'system/modules/core/templates/modules',
	'mod_booknav'         => 'system/modules/core/templates/modules',
	'mod_breadcrumb'      => 'system/modules/core/templates/modules',
	'mod_flash'           => 'system/modules/core/templates/modules',
	'mod_html'            => 'system/modules/core/templates/modules',
	'mod_login_1cl'       => 'system/modules/core/templates/modules',
	'mod_login_2cl'       => 'system/modules/core/templates/modules',
	'mod_logout_1cl'      => 'system/modules/core/templates/modules',
	'mod_logout_2cl'      => 'system/modules/core/templates/modules',
	'mod_message'         => 'system/modules/core/templates/modules',
	'mod_navigation'      => 'system/modules/core/templates/modules',
	'mod_password'        => 'system/modules/core/templates/modules',
	'mod_quicklink'       => 'system/modules/core/templates/modules',
	'mod_quicknav'        => 'system/modules/core/templates/modules',
	'mod_random_image'    => 'system/modules/core/templates/modules',
	'mod_search'          => 'system/modules/core/templates/modules',
	'mod_search_advanced' => 'system/modules/core/templates/modules',
	'mod_search_simple'   => 'system/modules/core/templates/modules',
	'mod_sitemap'         => 'system/modules/core/templates/modules',
	'moo_accordion'       => 'system/modules/core/templates/mootools',
	'moo_chosen'          => 'system/modules/core/templates/mootools',
	'moo_mediabox'        => 'system/modules/core/templates/mootools',
	'moo_slider'          => 'system/modules/core/templates/mootools',
	'moo_slimbox'         => 'system/modules/core/templates/mootools',
	'moo_tablesort'       => 'system/modules/core/templates/mootools',
	'nav_default'         => 'system/modules/core/templates/navigation',
	'pagination'          => 'system/modules/core/templates/pagination',
	'picture_default'     => 'system/modules/core/templates/picture',
	'rss_default'         => 'system/modules/core/templates/rss',
	'rss_items_only'      => 'system/modules/core/templates/rss',
	'search_default'      => 'system/modules/core/templates/search',
));


/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2011-2013
 * @author     Cliff Parnitzky
 * @package    EfgMemberSelect
 * @license    LGPL
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'EfgMemberSelectInsertTag' => 'system/modules/EfgMemberSelect/EfgMemberSelectInsertTag.php',
	'FormMemberSelectMenu'     => 'system/modules/EfgMemberSelect/FormMemberSelectMenu.php',
	'FormMemberHiddenField'    => 'system/modules/EfgMemberSelect/FormMemberHiddenField.php',
));
 if(!defined('TL_ROOT')) die('You can not access this file directly!');

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

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Associategroups
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'AssociateGroups' => 'system/modules/associategroups/AssociateGroups.php',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

 
/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Magmell\Boxes',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'Magmell\Boxes\BoxenModel'           => 'system/modules/boxes/models/BoxenModel.php',

	// Modules
	'Magmell\Boxes\ModuleBoxes'          => 'system/modules/boxes/ModuleBoxes.php',
	
	// Boxes Content Elements
	'Magmell\Boxes\BoxesContentArticle'  => 'system/modules/boxes/BoxesContentArticle.php',
	'Magmell\Boxes\BoxesContentGallery'  => 'system/modules/boxes/BoxesContentGallery.php',
	'Magmell\Boxes\BoxesContentHeadline' => 'system/modules/boxes/BoxesContentHeadline.php',
	'Magmell\Boxes\BoxesContentModule'   => 'system/modules/boxes/BoxesContentModule.php',
	'Magmell\Boxes\BoxesContentText' 	 => 'system/modules/boxes/BoxesContentText.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_box'               => 'system/modules/boxes/templates',
	'mod_box_items'         => 'system/modules/boxes/templates',
	'boxesce_container'     => 'system/modules/boxes/templates',
	'boxesce_gallery'       => 'system/modules/boxes/templates',
	'boxesce_headline'      => 'system/modules/boxes/templates',
	'boxesce_text'          => 'system/modules/boxes/templates',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Calendar
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Calendar'            => 'system/modules/calendar/classes/Calendar.php',
	'Contao\Events'              => 'system/modules/calendar/classes/Events.php',

	// Models
	'Contao\CalendarEventsModel' => 'system/modules/calendar/models/CalendarEventsModel.php',
	'Contao\CalendarFeedModel'   => 'system/modules/calendar/models/CalendarFeedModel.php',
	'Contao\CalendarModel'       => 'system/modules/calendar/models/CalendarModel.php',

	// Modules
	'Contao\ModuleCalendar'      => 'system/modules/calendar/modules/ModuleCalendar.php',
	'Contao\ModuleEventlist'     => 'system/modules/calendar/modules/ModuleEventlist.php',
	'Contao\ModuleEventMenu'     => 'system/modules/calendar/modules/ModuleEventMenu.php',
	'Contao\ModuleEventReader'   => 'system/modules/calendar/modules/ModuleEventReader.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'cal_default'        => 'system/modules/calendar/templates/calendar',
	'cal_mini'           => 'system/modules/calendar/templates/calendar',
	'event_full'         => 'system/modules/calendar/templates/events',
	'event_list'         => 'system/modules/calendar/templates/events',
	'event_teaser'       => 'system/modules/calendar/templates/events',
	'event_upcoming'     => 'system/modules/calendar/templates/events',
	'mod_calendar'       => 'system/modules/calendar/templates/modules',
	'mod_event'          => 'system/modules/calendar/templates/modules',
	'mod_eventlist'      => 'system/modules/calendar/templates/modules',
	'mod_eventmenu'      => 'system/modules/calendar/templates/modules',
	'mod_eventmenu_year' => 'system/modules/calendar/templates/modules',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Comments
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Comments'            => 'system/modules/comments/classes/Comments.php',

	// Elements
	'Contao\ContentComments'     => 'system/modules/comments/elements/ContentComments.php',

	// Models
	'Contao\CommentsModel'       => 'system/modules/comments/models/CommentsModel.php',
	'Contao\CommentsNotifyModel' => 'system/modules/comments/models/CommentsNotifyModel.php',

	// Modules
	'Contao\ModuleComments'      => 'system/modules/comments/modules/ModuleComments.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'com_default'      => 'system/modules/comments/templates/comments',
	'ce_comments'      => 'system/modules/comments/templates/elements',
	'mod_comment_form' => 'system/modules/comments/templates/modules',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Devtools
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\ModuleAutoload'  => 'system/modules/devtools/modules/ModuleAutoload.php',
	'Contao\ModuleExtension' => 'system/modules/devtools/modules/ModuleExtension.php',
	'Contao\ModuleLabels'    => 'system/modules/devtools/modules/ModuleLabels.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'dev_autoload'   => 'system/modules/devtools/templates',
	'dev_beClass'    => 'system/modules/devtools/templates',
	'dev_beTemplate' => 'system/modules/devtools/templates',
	'dev_config'     => 'system/modules/devtools/templates',
	'dev_dca'        => 'system/modules/devtools/templates',
	'dev_default'    => 'system/modules/devtools/templates',
	'dev_extension'  => 'system/modules/devtools/templates',
	'dev_feClass'    => 'system/modules/devtools/templates',
	'dev_feDca'      => 'system/modules/devtools/templates',
	'dev_feTemplate' => 'system/modules/devtools/templates',
	'dev_htaccess'   => 'system/modules/devtools/templates',
	'dev_ini'        => 'system/modules/devtools/templates',
	'dev_labels'     => 'system/modules/devtools/templates',
	'dev_model'      => 'system/modules/devtools/templates',
	'dev_modules'    => 'system/modules/devtools/templates',
	'dev_table'      => 'system/modules/devtools/templates',
));


/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2014
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Dirch',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Dirch\carouFredSel\CarouFredSel' => 'system/modules/dk_caroufredsel/classes/CarouFredSel.php',

	// Elements
	'Dirch\carouFredSel\ContentCarouFredSelStart' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelStart.php',
	'Dirch\carouFredSel\ContentCarouFredSelStop' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelStop.php',
	'Dirch\carouFredSel\ContentCarouFredSelGallery' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelGallery.php',
	'Dirch\carouFredSel\ContentCarouFredSelBackground' => 'system/modules/dk_caroufredsel/elements/ContentCarouFredSelBackground.php',

	// Models
	'Dirch\carouFredSel\CarouFredSelModel' => 'system/modules/dk_caroufredsel/models/CarouFredSelModel.php',

	// Modules
	'Dirch\carouFredSel\ModuleCarouFredSel'=> 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSel.php',
	'Dirch\carouFredSel\ModuleCarouFredSelGallery' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelGallery.php',
	'Dirch\carouFredSel\ModuleCarouFredSelBackground' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelBackground.php',
	'Dirch\carouFredSel\ModuleCarouFredSelTicker' => 'system/modules/dk_caroufredsel/modules/ModuleCarouFredSelTicker.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_caroufredsel' => 'system/modules/dk_caroufredsel/templates/backend',
	'ce_caroufredsel' => 'system/modules/dk_caroufredsel/templates/elements',
	'caroufredsel_gallery' => 'system/modules/dk_caroufredsel/templates/gallery',
	'caroufredsel_thumbnails' => 'system/modules/dk_caroufredsel/templates/gallery',
	'js_caroufredsel' => 'system/modules/dk_caroufredsel/templates/jquery',
	'mod_caroufredsel' => 'system/modules/dk_caroufredsel/templates/modules',
	'mod_caroufredsel_ticker' => 'system/modules/dk_caroufredsel/templates/modules',
	'news_caroufredsel_ticker' => 'system/modules/dk_caroufredsel/templates/modules',
	'css_caroufredsel' => 'system/modules/dk_caroufredsel/templates/themes',
	'css_caroufredsel_light' => 'system/modules/dk_caroufredsel/templates/themes'
));


/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   masonry
 * @author    Dirk Klemmt
 * @license   MIT
 * @copyright Dirk Klemmt 2013-2014
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Dirch',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Dirch\masonry\Masonry'					=> 'system/modules/dk_masonry/classes/Masonry.php',

	// Elements
	'Dirch\masonry\ContentMasonryGallery'	=> 'system/modules/dk_masonry/elements/ContentMasonryGallery.php',
	'Dirch\masonry\ContentMasonryStart'		=> 'system/modules/dk_masonry/elements/ContentMasonryStart.php',
	'Dirch\masonry\ContentMasonryStop'		=> 'system/modules/dk_masonry/elements/ContentMasonryStop.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_masonry'		=> 'system/modules/dk_masonry/templates/backend',
	'ce_masonry'		=> 'system/modules/dk_masonry/templates/elements',
	'masonry_gallery'	=> 'system/modules/dk_masonry/templates/gallery',
	'js_masonry'		=> 'system/modules/dk_masonry/templates/jquery'
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Faq
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'Contao\FaqCategoryModel' => 'system/modules/faq/models/FaqCategoryModel.php',
	'Contao\FaqModel'         => 'system/modules/faq/models/FaqModel.php',

	// Modules
	'Contao\ModuleFaq'        => 'system/modules/faq/modules/ModuleFaq.php',
	'Contao\ModuleFaqList'    => 'system/modules/faq/modules/ModuleFaqList.php',
	'Contao\ModuleFaqPage'    => 'system/modules/faq/modules/ModuleFaqPage.php',
	'Contao\ModuleFaqReader'  => 'system/modules/faq/modules/ModuleFaqReader.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_faqlist'   => 'system/modules/faq/templates/modules',
	'mod_faqpage'   => 'system/modules/faq/templates/modules',
	'mod_faqreader' => 'system/modules/faq/templates/modules',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Listing
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\ModuleListing' => 'system/modules/listing/modules/ModuleListing.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'info_default' => 'system/modules/listing/templates/info',
	'list_default' => 'system/modules/listing/templates/listing',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\News'              => 'system/modules/news/classes/News.php',

	// Models
	'Contao\NewsArchiveModel'  => 'system/modules/news/models/NewsArchiveModel.php',
	'Contao\NewsFeedModel'     => 'system/modules/news/models/NewsFeedModel.php',
	'Contao\NewsModel'         => 'system/modules/news/models/NewsModel.php',

	// Modules
	'Contao\ModuleNews'        => 'system/modules/news/modules/ModuleNews.php',
	'Contao\ModuleNewsArchive' => 'system/modules/news/modules/ModuleNewsArchive.php',
	'Contao\ModuleNewsList'    => 'system/modules/news/modules/ModuleNewsList.php',
	'Contao\ModuleNewsMenu'    => 'system/modules/news/modules/ModuleNewsMenu.php',
	'Contao\ModuleNewsReader'  => 'system/modules/news/modules/ModuleNewsReader.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_newsarchive'   => 'system/modules/news/templates/modules',
	'mod_newslist'      => 'system/modules/news/templates/modules',
	'mod_newsmenu'      => 'system/modules/news/templates/modules',
	'mod_newsmenu_day'  => 'system/modules/news/templates/modules',
	'mod_newsmenu_year' => 'system/modules/news/templates/modules',
	'mod_newsreader'    => 'system/modules/news/templates/modules',
	'news_full'         => 'system/modules/news/templates/news',
	'news_latest'       => 'system/modules/news/templates/news',
	'news_short'        => 'system/modules/news/templates/news',
	'news_simple'       => 'system/modules/news/templates/news',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Newsletter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Newsletter'                => 'system/modules/newsletter/classes/Newsletter.php',

	// Models
	'Contao\NewsletterChannelModel'    => 'system/modules/newsletter/models/NewsletterChannelModel.php',
	'Contao\NewsletterModel'           => 'system/modules/newsletter/models/NewsletterModel.php',
	'Contao\NewsletterRecipientsModel' => 'system/modules/newsletter/models/NewsletterRecipientsModel.php',

	// Modules
	'Contao\ModuleNewsletterList'      => 'system/modules/newsletter/modules/ModuleNewsletterList.php',
	'Contao\ModuleNewsletterReader'    => 'system/modules/newsletter/modules/ModuleNewsletterReader.php',
	'Contao\ModuleSubscribe'           => 'system/modules/newsletter/modules/ModuleSubscribe.php',
	'Contao\ModuleUnsubscribe'         => 'system/modules/newsletter/modules/ModuleUnsubscribe.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_newsletter'        => 'system/modules/newsletter/templates/modules',
	'mod_newsletter_list'   => 'system/modules/newsletter/templates/modules',
	'mod_newsletter_reader' => 'system/modules/newsletter/templates/modules',
	'nl_default'            => 'system/modules/newsletter/templates/newsletter',
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Repository
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Repository'              => 'system/modules/repository/classes/Repository.php',
	'RepositoryBackendModule' => 'system/modules/repository/classes/RepositoryBackendModule.php',
	'RepositoryBackendTheme'  => 'system/modules/repository/classes/RepositoryBackendTheme.php',
	'RepositoryCatalog'       => 'system/modules/repository/classes/RepositoryCatalog.php',
	'RepositoryManager'       => 'system/modules/repository/classes/RepositoryManager.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'repository_catlist' => 'system/modules/repository/templates',
	'repository_catview' => 'system/modules/repository/templates',
	'repository_mgredit' => 'system/modules/repository/templates',
	'repository_mgrinst' => 'system/modules/repository/templates',
	'repository_mgrlist' => 'system/modules/repository/templates',
	'repository_mgruist' => 'system/modules/repository/templates',
	'repository_mgrupdt' => 'system/modules/repository/templates',
	'repository_mgrupgd' => 'system/modules/repository/templates',
));
