<?php

use Incube\Base\Config,
    Incube\Web\Uri,
    Incube\Base\Resource,
    Incube\Web\Session;

class Bootstrap extends Resource {

    public function init_argv() {
        $shortopts = "p:";
        return getopt($shortopts);
    }

    public function init_configs() {
        //$options = $this->_load('argv');
        $config_loader = new Config();
        $configPath = ROOT_PATH . '/app/etc';
        return $config_loader->load_by_folder($configPath, true);
    }

    public function init_uri() {
        $configs = $this->_load('configs');
        $uri = new Uri($_SERVER['REQUEST_URI'], $configs->get('uri')->to_array());
        return $uri;
    }

    //public function init_data_model() {
        //$db = $config->db->{ENV};
        //$dataModel = Incube_Db_DataModel::driverFactory($db->type);
        //$dataModel->init($db->connection->toArray());
    //}

    public function init_session() {
        Session::start();
        $session = Session::getInstance();
        return $session;
    }
}

$resource = new Bootstrap();
return $resource->load();
