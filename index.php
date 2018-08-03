<?php
    # Include the configuration settings
    require_once("config.php");

    # Setup ActiveRecord
    require_once('activerecord/ActiveRecord.php');
    ActiveRecord\Config::initialize(function($cfg)
    {
        global $config;
        $cfg->set_model_directory('models');
        $cfg->set_connections([
            'production'  => 'mysql://'.$config["db"]["user"].':'.$config["db"]["pass"].'@'.$config["db"]["host"].'/'.$config["db"]["base"]
        ]);
        $cfg->set_default_connection('production');
    });

    # Include the controller for handling actions
    require_once("router.php");
?>
