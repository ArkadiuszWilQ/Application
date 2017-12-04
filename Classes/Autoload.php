<?php

/**
 * Klasa odpowiadająca za ładowanie klas w aplikacji
 *
 * Class Autoload
 */
class Autoload
{
    public function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    /**
     * Metoda rejestrująca ścieżki, z których mają być ładowane klasy
     *
     * @param string[] $paths
     */
    public function registerPaths(array $paths)
    {
        foreach($paths as $path) {
            $this->registerPath($path);
        }
    }

    /**
     * Metoda ładująca ścieżkę, z której mają być ładowane klasy
     *
     * @param string $path
     */
    public function registerPath(string $path)
    {
        set_include_path(get_include_path() . PATH_SEPARATOR . $path);
    }

    /**
     * Metoda odpowiadająca za ładowanie klas.
     *
     * @param $className
     */
    public function load($className)
    {
        foreach(explode(PATH_SEPARATOR, get_include_path()) as $path) {
            if(file_exists($path . DIRECTORY_SEPARATOR . $className . '.php')) {
                include_once $path . DIRECTORY_SEPARATOR . $className . '.php';

                return;
            }
        }
    }
}