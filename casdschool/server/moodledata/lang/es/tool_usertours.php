<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_usertours', language 'es', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_stepdata'] = 'Lista de pasos del tour para usuarios';
$string['cachedef_tourdata'] = 'Lista de información de tours para usuario habilitados que son buscados en cada página';
$string['confirmtourremovalquestion'] = '¿Está seguro de querer quitar este tour?';
$string['confirmtourremovaltitle'] = 'Confirmar eliminación de tour';
$string['endtour'] = 'Terminar tour';
$string['event_tour_ended'] = 'Tour terminado';
$string['event_tour_reset'] = 'Tour reiniciado';
$string['event_tour_started'] = 'Tour iniciado';
$string['exporttour'] = 'Exportar tour';
$string['filter_header'] = 'Filtros del tour';
$string['filter_help'] = 'Selecione las condiciones bajo las que se mostrará el tour. Todos los filtros deben de coincidir para que un tour se le muestre a un usuario.';
$string['filter_role_help'] = 'Un tour puede estar restringido a usuarios con roles seleccionados en el contexto en donde se muestra el tour. Por ejemplo, el restringir un tour del Área personal a usuarios con el rol de estudiante no funcionará si los usuarios tienen el rol de estudiante en un curso (como generalmente sucede). Un tour del Área personal solamente puede restringirse a usuarios con un rol del sistema.';
$string['filter_theme_help'] = 'Mostrar el tour cuando el usuario esté usando uno de los temas seleccionados.';
$string['importtour'] = 'Importar tour';
$string['modifyshippedtourwarning'] = 'Este es un tour para usuario que se ha incluido con Moodle. Cualquier modificación que  haga puede ser anulada durante su siguiente actualización del sitio.';
$string['movetourdown'] = 'Mover tour hacia abajo';
$string['movetourup'] = 'Mover tour hacia arriba';
$string['newtour'] = 'Crear nuevo tour';
$string['pathmatch_help'] = 'Los tours serán mostrados en cualquier página cuya URL coincida con este valor.

Puede usar el caracter  % como un comodín para significar cualquier cosa. Algunos valores de ejemplo incluyen:

* /my/% - para coincidir con el Área Personal
* /course/view.php?id=2 - para coincidir con un curso específico
* /mod/forum/view.php% - para coincidir con la lista de discusión del foro
* /user/profile.php% - para coincidir con la página del perfil del usuario

Si quisiera mostrar un tour en la Página inicial del Sitio (hogar/portada), Usted puede usar el valor: "FRONTPAGE".';
$string['pluginname'] = 'Tours para usuarios';
$string['resettouronpage'] = 'Reiniciar tour para usuario en esta página';
$string['sharedtourslink'] = 'Repositorio de tours';
$string['tour1_content_end'] = 'Este ha sido un tour para usuario, una característica nueva de Moodle 3.2. No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. ¡Cómo administrador también puede crear sus propios tours como éste!';
$string['tour1_title_end'] = 'Fin del tour';
$string['tour2_content_end'] = 'Este ha sido un tour para usuario, una característica nueva de Moodle 3.2. No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. El administrador del sitio también puede crear otros tours.';
$string['tour2_title_end'] = 'Fin del tour';
$string['tourconfig'] = 'Archivo de configuración de tour a importar';
$string['tourisenabled'] = 'El Tour está habilitado';
$string['tourlist_explanation'] = 'Puede crear tantos tours como desee y habilitarlos para diferentes partes de Moodle. Solamente puede crearse un tour por página.';
$string['tour_resetforall'] = 'El estado del tour ha sido reiniciado. Se mostrará nuevamente a todos los usuarios.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours para usuario';
$string['usertours:managetours'] = 'Crear, editar, y eliminar tours para usuarios';
$string['viewtour_edit'] = 'Puede <a href="{$a->editlink}">editar los valores por defecto del tour</a> y <a href="{$a->resetlink}">forzar a que se muestre el tourl</a> nuevamente a todos los usuarios.';
$string['viewtour_info'] = 'Este es el tour \'{$a->tourname}\'. Aplica a la ruta \'{$a->path}\'.';
