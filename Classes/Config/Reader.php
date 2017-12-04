<?php
namespace Classes\Config;

/**
 * Klasa odpowiedzialna za obsługę konfiguracji aplikacji
 *
 * Class Reader
 * @package Classes\Config
 */
class Reader
{
    private $settings;

    public function __construct()
    {
        $this->settings = [];
    }

    /**
     * Wczytuje plik ustawień
     *
     * @param string $fileName
     *
     * @return boolean
     */
    public function load(string $fileName)
    {
        if(file_exists(CONFIG_PATH . DIRECTORY_SEPARATOR . $fileName . '.php')) {
            $fileDataAsArray = include CONFIG_PATH . DIRECTORY_SEPARATOR . $fileName . '.php';

            $this->settings = array_merge($this->settings, $fileDataAsArray);
            return true;
        }

        return false;
    }

    /**
     * Pobiera ustawienie z pliku
     *
     * @param string $settingName
     * @param null $defaultValue
     *
     * @return mixed
     */
    public function read(string $settingName, $defaultValue = null)
    {

    }
}