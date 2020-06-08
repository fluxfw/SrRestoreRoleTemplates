<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5efeb17eb25d8cb66b013b687eab8b27
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\' => 52,
            'srag\\Plugins\\SrRestoreRoleTemplates\\' => 36,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\SrRestoreRoleTemplates\\' => 32,
            'srag\\CustomInputGUIs\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrRestoreRoleTemplates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\SrRestoreRoleTemplates\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
    );

    public static $classMap = array (
        'ilSrRestoreRoleTemplatesPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrRestoreRoleTemplatesPlugin.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\CheckboxInputGUI\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrRestoreRoleTemplates\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrRestoreRoleTemplates\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\Job\\Factory' => __DIR__ . '/../..' . '/src/Job/Factory.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\Job\\Repository' => __DIR__ . '/../..' . '/src/Job/Repository.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyDidacticTemplates\\Factory' => __DIR__ . '/../..' . '/src/ReapplyDidacticTemplates/Factory.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyDidacticTemplates\\ReapplyDidacticTemplatesJob' => __DIR__ . '/../..' . '/src/ReapplyDidacticTemplates/ReapplyDidacticTemplatesJob.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyDidacticTemplates\\Repository' => __DIR__ . '/../..' . '/src/ReapplyDidacticTemplates/Repository.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyRoleTemplates\\Factory' => __DIR__ . '/../..' . '/src/ReapplyRoleTemplates/Factory.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyRoleTemplates\\ReapplyRoleTemplatesJob' => __DIR__ . '/../..' . '/src/ReapplyRoleTemplates/ReapplyRoleTemplatesJob.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\ReapplyRoleTemplates\\Repository' => __DIR__ . '/../..' . '/src/ReapplyRoleTemplates/Repository.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\SrRestoreRoleTemplates\\Utils\\SrRestoreRoleTemplatesTrait' => __DIR__ . '/../..' . '/src/Utils/SrRestoreRoleTemplatesTrait.php',
        'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\SrRestoreRoleTemplates\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5efeb17eb25d8cb66b013b687eab8b27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5efeb17eb25d8cb66b013b687eab8b27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5efeb17eb25d8cb66b013b687eab8b27::$classMap;

        }, null, ClassLoader::class);
    }
}
