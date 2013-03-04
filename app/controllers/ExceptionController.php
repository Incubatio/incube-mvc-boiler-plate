<?php
/**
 * ExceptionController handles Exceptions
 *
 * TODO: (list below)
 * - Change HTTP headers
 * - Add a Debug Mode by config file
 * - Exception Layout ?
 * @author incubatio
 */
class ExceptionController extends Incubatio_Controller_Action {

	public function indexAction() {
		$message = get_class($this->_e) . ' - ' . $this->_e->getMessage();
		switch (true) {
			case in_array("json", $this->_contentType):
				$this->_view->setLayout(null);
				return array("message" => $message);
			break;
			case in_array("xml", $this->_contentType):
				//$this->_layout->noRender();
				//return "<message>$message</message>";
			//break;
			case in_array("text", $this->_contentType):
			case in_array("html", $this->_contentType):
			case in_array("xhtml+xml", $this->_contentType):
			default:
				return $message;
		}   
    }
}
