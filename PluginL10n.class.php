<?php

/* -------------------------------------------------------------------------------------
 * @Plugin Name: L10n
 * @Plugin URI: http://livestreetcms.com/addons/view/105/
 * @Description: Allows the user to choose the interface language
 * @Author: Веб студия stfalcon.com
 * @Author URI: http://stfalcon.com
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -------------------------------------------------------------------------------------
 */

class PluginL10n extends Plugin
{

    /**
     * Указанные в массивы наследования будут переданы движку автоматически
     * перед инициализацией плагина
     */
    public $aInherits = array();

    /**
     * Активация плагина
     *
     * @return boolean
     */
    public function Activate()
    {
        $this->Cache_Clean();

        return $resutls['result'];
    }

    /**
     * Инициализация плагина
     *
     * @return void
     */
    public function Init()
    {
        // путь к папке темплейтов плагина
        $this->Viewer_Assign('sTemplateWebPathPluginL10n', Plugin::GetTemplateWebPath(__CLASS__));
    }

    /**
     * Деактивация плагина
     *
     * @return boolean
     */
    public function Deactivate()
    {
        $this->Cache_Clean();

        return $resutls['result'];
    }

}