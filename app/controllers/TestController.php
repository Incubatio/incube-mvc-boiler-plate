<?php
/**
 * Description of ContactController
 *
 * @author incubatio
 */
class TestController extends \Incube\Mvc\Controller\Action {

    public function pre_act() {
        parent::pre_act();
    }

	public function indexAction() {
        return 'hello test;';
	}

    public function post_act() {
        parent::post_act();
    }
}
