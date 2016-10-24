<?php

namespace PHPAnt\Core;

/**
 * App Name: PHPAnt Login Form
 * App Description: Provides the user / pass login form for authentication at a specific URL.
 * App Version: 1.0
 * App Action: login-user       -> loginUser                  @ 50
 *
 * App URI: "#^\/login\/.*#"    -> login-user
 */

 /**
 * This app adds the PHPAnt Login Form and commands into the CLI by adding in
 * the grammar for commands into an array, and returning it up the chain.
 *
 * @package      PHPAnt
 * @subpackage   Core
 * @category     UI
 * @author       Michael <michael@highpoweredhelp.com>
 */ 


class LoginForm extends \PHPAnt\Core\AntApp implements \PHPAnt\Core\AppInterface  {

    /**
     * Instantiates an instance of the LoginForm class.
     * Example:
     *
     * <code>
     * $appLoginForm = new LoginForm();
     * </code>
     *
     * @return void
     * @author Michael <michael@highpoweredhelp.com>
     **/

    function __construct() {
        $this->appName = 'PHPAnt Login Form';
        $this->canReload = true;
        $this->path = __DIR__;
    }

    /**
     * Callback for the cli-load-grammar action, which adds commands specific to this plugin to the CLI grammar.
     * Example:
     *
     * @return array An array of CLI grammar that will be merged with the rest of the grammar. 
     * @author Michael <michael@highpoweredhelp.com>
     **/

    function loadLoginForm() {
        $grammar = [];

        $this->loaded = true;
        
        $results['grammar'] = $grammar;
        $results['success'] = true;
        return $results;
    }

    //Uncomment this function and the following function to enable the autoloader for this plugin.
    function LoginFormAutoLoader() {
        //REGISTER THE AUTOLOADER! This has to be done first thing! 
        spl_autoload_register(array($this,'loadLoginFormClasses'));
        return ['success' => true];

    }

    public function loadLoginFormClasses($class) {
        $baseDir = $this->path;

        $candidate_files = array();

        //Try to grab it from the classes directory.
        $candidate_path = sprintf($baseDir.'/classes/%s.class.php',$class);
        array_push($candidate_files, $candidate_path);

        //Loop through all candidate files, and attempt to load them all in the correct order (FIFO)
        foreach($candidate_files as $dependency) {
            if($this->verbosity > 14) printf("Looking to load %s",$dependency) . PHP_EOL;

            if(file_exists($dependency)) {
                if(is_readable($dependency)) {

                    //Print debug info if verbosity is greater than 9
                    if($this->verbosity > 9) print "Including: " . $dependency . PHP_EOL;

                    //Include the file!
                    include($dependency);
                }
            }
        }
        return ['success' => true];
    }
    
    /**
     * Callback function that prints to the CLI during cli-init to show this plugin has loaded.
     * Example:
     *
     * @return array An associative array declaring the status / success of the operation.
     * @author Michael <michael@highpoweredhelp.com>
     **/

    function declareMySelf() {
        if($this->verbosity > 4 && $this->loaded ) print("PHPAnt Login Form app loaded.\n");

        return ['success' => true];
    }

    function processCommand($args) {
        $cmd = $args['command'];

        return ['success' => true];
    }

    function loginUser($args) {
        include(__DIR__ . '/resources/login.php');
        return ['success' => true];
    }
}