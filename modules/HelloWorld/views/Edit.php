<?php

class HelloWorld_Edit_View extends Vtiger_Index_View {

    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);
        $viewer->view('Edit.tpl', $request->getModule());
    }

}
