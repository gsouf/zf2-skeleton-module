<?php
namespace ModuleName;


class Module{
    
    /*
    public function onBootstrap($e){
        //$config = $e->getTarget()->getConfig(); 
        //$sm = $e->getApplication()->getServiceManager();
    }
     * 
     */
    
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
    
    
    public function getServiceConfig()
    {
        return array(
          /* 'services' => array(
                '...' => new ...(),
            ),
           */
        );
    }
    
    
    public function getControllerPluginConfig()
    {
        return array(
           /* 'factories' => array(
                '...' => function($sm) {
                    return $sm->getServiceLocator()->get('AuthService');
                },
            ),*/
        );
    }
}