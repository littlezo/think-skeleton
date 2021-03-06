<?php

namespace little\storage;

use littler\ModuleService;

class Service extends ModuleService
{
    public function loadModule()
    {
        return [__NAMESPACE__, __DIR__ . DIRECTORY_SEPARATOR];
    }

    public function loadConfig()
    {
        $config_file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
        if (file_exists($config_file)) {
            return include $config_file;
        }
    }

    public function loadModel()
    {
        $config_file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'modelMap.php';
        if (file_exists($config_file)) {
            return include $config_file;
        }
    }

    public function loadService()
    {
        $config_file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'serviceMap.php';
        if (file_exists($config_file)) {
            return include $config_file;
        }
    }

    public function loadEvents()
    {
        $event_file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'event.php';
        if (file_exists($event_file)) {
            return include $event_file;
        }
    }

    public function loadMiddleware()
    {
        $event_file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'middleware.php';
        if (file_exists($event_file)) {
            return include $event_file;
        }
    }

    public function loadCommands()
    {
        $dir_path = __DIR__ . DIRECTORY_SEPARATOR . 'command';
        if (is_dir($dir_path)) {
            return [__NAMESPACE__, $dir_path];
        }
    }

    /**
     * @return string
     */
    public function loadModuleRoute()
    {
        $route_file = __DIR__ . DIRECTORY_SEPARATOR . 'route.php';
        if (file_exists($route_file)) {
            return $route_file;
        }
    }
}
