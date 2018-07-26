<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Slides Manager');

define('TABLE_HEADING_SLIDE_IMAGE', 'Image');
define('TABLE_HEADING_SLIDES', 'Slide');
define('TABLE_HEADING_GROUPS', 'Group');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Acction');

define('TEXT_SLIDES_TITLE', 'T&iacute;tulo del Slide:');
define('TEXT_SLIDES_URL', 'URL del Slide:');
define('TEXT_SLIDES_URL_INFO', '&nbsp; Información sobre Url mas abajo.');
define('TEXT_SLIDES_GROUP', 'Grupo del sLIDE:');
define('TEXT_SLIDES_NEW_GROUP', ', o introduzca un grupo nuevo');
define('TEXT_SLIDES_IMAGE', 'Imagen:');
define('TEXT_SLIDES_IMAGE_LOCAL', ', o introduzca un fichero local');
define('TEXT_SLIDES_IMAGE_TARGET', 'Destino de la Imagen (Grabar en):');
define('TEXT_SLIDES_DESCRIPTION', 'Descripcion:');

define('TEXT_SLIDES_SLIDER_NOTE', '<strong>Notas sobre la Url:</strong><ul><li>Para enlazar a un producto use solamente la p y la id del producto: ej. p24</li><li>Para enlazar a una categoria o subcategoria use solamente la c y la id de la categoria o subcategoria: ej. c21 o c3_10</li><li>Para enlazar a una pagina exterior use la url completa, incluido http://, ej: http://www.oscommerce.com</li></ul>');
define('TEXT_SLIDES_INSERT_NOTE', '<strong>Notas sobre la Imagen:</strong><ul><li>&iexcl;El directorio donde suba la imagen debe de tener configurados los permisos de escritura necesarios!</li><li>No rellene el campo \'Grabar en\' si no va a subir una imagen al servidor (como cuando use una imagen ya existente en el servidor -fichero local).</li><li>El campo \'Grabar en\' debe de ser un directorio que exista y terminado en una barra (por ejemplo: slides/).</li></ul>');

define('TEXT_SLIDES_DATE_ADDED', 'A&ntilde;adido el:');
define('TEXT_SLIDES_STATUS_CHANGE', 'Cambio Estado: %s');

define('TEXT_SLIDES_DATA', 'D<br />A<br />T<br />O<br />S');

define('TEXT_INFO_DELETE_INTRO', 'Seguro que quiere eliminar este slide ?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen');
define('TEXT_DISPLAY_NUMBER_OF_SLIDES', 'Viendo del <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> slides)');
define('IMAGE_NEW_SLIDE', 'Nuevo Slide');

define('SUCCESS_SLIDE_INSERTED', 'Exito: El slide ha sido insertado.');
define('SUCCESS_SLIDE_UPDATED', 'Exito: El slide ha sido actualizado.');
define('SUCCESS_SLIDE_REMOVED', 'Exito: El slide ha sido eliminado.');
define('SUCCESS_SLIDE_STATUS_UPDATED', 'Exito: El estado del slide ha sido actualizado.');

define('ERROR_SLIDE_TITLE_REQUIRED', 'Error: Se necesita un t&iacute;tulo para el slide.');
define('ERROR_SLIDE_GROUP_REQUIRED', 'Error: Se necesita un grupo para el slide.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de destino no existe: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de destino: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: La imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: La imagen no se puede borrar.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estado desconocido.');

?>