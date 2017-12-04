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

    /**
     * Wczytuje plik ustawień
     *
     * @param string $fileName
     *
     * @return boolean
     */
    public function load(string $fileName)
    {
        //TODO załadować zawartość podanego pliku do $this->settings (użyć merge -> nowe klucze są ważniejsze niż już istniejące)
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
        return null;
    }
}