<?php

/**
 * Class cmsAction
 * @property cmsRequest $request
 * @property cmsTemplate $cms_template
 * @property cmsModel $model
 * @property cmsDatabase $cms_database
 * @property cmsForm $cms_form
 * @property cmsCore $cms_core
 * @property modelUsers $model_users
 * @property string $name Controller name
 * @property string $current_action Current action name
 * @property cmsController $controller
 * @property cmsUser $cms_user
 * @property modelModeration $model_moderation
 * @property moderation $controller_moderation
 *
 * @method redirectToAction($action='', $params=array(), $query=array()) 
 * @see cmsController::redirectToAction
 *
 * @method redirectBack()
 * @see cmsController::redirectBack
 *
 * @method json(array $data)
 * @method jsonError($err)
 *
 * @method redirectToHome()
 * @see cmsController::redirectToHome
 *
 * @method redirectTo($controller, $action='', $params=array(), $query=array(), $code=303)
 * @see cmsController::redirectTo
 */

class cmsAction {

    /** @var cmsController */
    protected $controller;
    protected $params;

    public function __construct($controller, $params=array()){
        $this->controller = $controller;
        $this->params = $params;
    }

    public function __get($name) {
        return $this->controller->$name;
    }

    public function __set($name, $value) {
        $this->controller->$name = $value;
    }

    public function __isset($name) {
        return isset($this->controller->$name);
    }

    public function __unset($name) {
        unset($this->controller->$name);
    }

    public function __call($name, $arguments) {
        return call_user_func_array(array($this->controller, $name), $arguments);
    }

}
