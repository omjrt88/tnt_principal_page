<?php

return array(
    'emailStructure' => '<div><p id="name" style="margin: 0px 5px 5px 5px; "><span style=" font-weight: bold;">Nombre:</span> {fullName}</p><p id="mail" style=" margin: 0px 5px 5px 5px;"><span style=" font-weight: bold;">Email:</span> {email}</p><p id="phones" style=" margin: 0px 5px 5px 5px;"><span style=" font-weight: bold;">Teléfonos:</span> {phones}</p><p id="comment" style=" margin: 0px 5px 5px 5px;"><span style=" font-weight: bold; text-decoration: underline; display: block;">Comentario:</span>{comment}</p></div>',
    'emailStructureSearchKeys' => array('{fullName}', '{email}', '{phones}','{comment}'),
    'subject' => 'Correo desde el Site.',
    'emailTo' => 'orodriguez@tnt.cr, daniel@tnt.cr, rsantamaria@tnt.cr',#'ani@grafos.co.cr',
    'emailFrom' => 'site@tnt.com'#'ani@grafos.co.cr'
);
?>
