<?php
/**
 * Description of ContactController
 *
 * @author incubatio
 */
class IndexController extends \Incube\Mvc\Controller\Action {

    public function pre_act() {
        parent::pre_act();
    }

	public function indexAction() {
        return 'hello world';
	}

	public function testAction() {
        echo 'test catz';
	}

    public function post_act() {
        parent::post_act();
    }
}
