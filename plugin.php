<?php
/* Plugin config */
//the plugin title
$plugin_info['title'] = 'Redireccion personalizada';
//the comments that go with the plugin
$plugin_info['comment'] = "Redirecciona a una url personalizada a un usuario en concreto";
//the plugin version
$plugin_info['version'] = '0.1';
//the plugin author
$plugin_info['author'] = 'Enrique Alcaraz';

require_once __DIR__.'/lib/redireccion.class.php';

if (isset($_POST["submit_button"])) {
    Redireccion::insert($_POST["user_id"], $_POST["url"]);
}

$form = new FormValidator('redirection_form');
$form->addElement('text', 'user_id', get_lang('user_id'));
$form->addElement('text', 'url', get_lang('url'));
$form->addButtonSave(get_lang('Save'), 'submit_button');

$plugin_info['settings_form'] = $form;