<?php

###############################################################################
# This is the spanish language page for GeekLog!
# 
# Copyright (C) 2000 Jason Whittenburg
# jwhitten@securitygeeks.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

###############################################################################
# Array Format:
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# common.php

$LANG01 = array(
	1 => "Contribuido por:",
	2 => "ver m�s",
	3 => "comentarios",
	4 => "Editar",
	5 => "Encuesta",
	6 => "Resultados",
	7 => "Resultados de la encuesta",
	8 => "votos",
	9 => "Funciones del Administrador:",
	10 => "Propuestas",
	11 => "Notas",
	12 => "Bloques",
	13 => "Secciones",
	14 => "Links",
	15 => "Eventos",
	16 => "Encuestas",
	17 => "Usuarios",
	18 => "B�squeda SQL",
	19 => "Salir",
	20 => "Informaci�n del Usuario:",
	21 => "Nombre del Usuario",
	22 => "ID del Usuario",
	23 => "Nivel de Seguridad",
	24 => "An�nimo",
	25 => "Responder",
	26 => "Los siguientes comentarios son de quien sea que los haya enviado. Este sitio no es responsable por lo que dicen.",
	27 => "Envio m�s reciente",
	28 => "Borrar",
	29 => "No hay comentarios de usuarios.",
	30 => "Historias anteriores",
	31 => "Tags HTML permitidos:",
	32 => "Error, usuario inv�lido",
	33 => "Error, no fue posible escribir el log",
	34 => "Error",
	35 => "Salir",
	36 => "sobre",
	37 => "",
	38 => "",
	39 => "Actualizar",
	40 => "",
	41 => "",
	42 => "Escrito por:",
	43 => "Responder a",
	44 => "Retornar",
	45 => "Nro de Error MySQL",
	46 => "Mensaje de Error MySQL",
	47 => "Funciones de Usuario",
	48 => "Mi cuenta",
	49 => "Mis Preferencias",
	50 => "Error en una sentencia SQL",
	51 => "ayuda",
	52 => "Nuevo",
	53 => "Secci�n de Administraci�n",
	54 => "No fue posible abrir el archivo.",
	55 => "Error en",
	56 => "Vote",
	57 => "Password",
	58 => "Ingresar",
	59 => "�No tiene una cuenta todav�a? <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Inscr�base</a>",
	60 => "Agregar un comentario",
	61 => "Crear una Nueva Cuenta",
	62 => "palabras",
	63 => "Mis preferencias de comentarios",
	64 => "Enviar la Nota a un Amigo",
	65 => "Ver la versi�n para imprimir",
	66 => "Mi Calendario",
	67 => "Bienvenido a ",
	68 => "P�gina Inicial",
	69 => "contacto",
	70 => "buscar",
	71 => "contribuir",
	72 => "recursos en la web",
	73 => "encuestas pasadas",
	74 => "calendario",
	75 => "b�squeda avanzada",
	76 => "estad�sticas del sitio",
	77 => "Plugins",
	78 => "Pr�ximos Eventos",
	79 => "Novedades",
	80 => "notas (80)",
	81 => "nota (81)",
	82 => "horas",
	83 => "COMENTARIOS",
	84 => "LINKS",
	85 => "�ltimas 48 hs",
	86 => "No hay nuevos comentarios",
	87 => "�ltimas 2 semanas",
	88 => "No hay nuevos links",
	89 => "No hay pr�ximos eventos",
	90 => "P�gina Inicial",
	91 => "Esta p�gina fue creada en",
	92 => "segundos",
	93 => "Derechos de autor",
	94 => "Todas las marcas y derechos en esta p�gina son de sus respectivos due�os.",
	95 => "Powered By",
	96 => "Grupos",
        97 => "List de Palabras",
	98 => "Plug-ins",
	99 => "NOTAS",
    100 => "No hay nuevas notas",
    101 => 'Mis Eventos',
    102 => 'Eventos del sitio',
    103 => 'DB Backups',
    104 => 'por',
    105 => 'Envair Mails',
    106 => 'Vistas'
);

###############################################################################
# calendar.php

$LANG02 = array(
	1 => "Calendario de Eventos",
	2 => "Disculpe, no hay eventos para mostrar.",
	3 => "Cuando",
	4 => "Donde",
	5 => "Descripci�n",
	6 => "Agregar un Evento",
	7 => "Pr�ximos Events",
	8 => 'Al agregar este evento en su calendario usted podr� ver r�pidamente los eventos que le interesan. Para ello elija "Mi Calendario" en el �rea de Funciones del usuario.',
	9 => "Agregar a Mi Calendario",
	10 => "Sacar de Mi Calendario",
	11 => "Agregando el Evento al Calendario de {$_USER['username']}",
	12 => "Evento",
	13 => "Empieza",
	14 => "Termina",
	15 => "Volver al Calendario"
);

###############################################################################
# comment.php

$LANG03 = array(
	1 => "Agregar un Comentario",
	2 => "Tipo de envio",
	3 => "Salir",
	4 => "Crear una Cuenta",
	5 => "Nombre del Usuario",
	6 => "Este sitio requiere que tenga una cuenta para enviar un comentario. Si ya la tiene ingrese el usuario y el password. Si no tiene una cuenta puede crear una nueva en el formulario de abajo.",
	7 => "Su �ltimo comentario fue hace ",
	8 => " segundos. Este sitio requiere al menos {$_CONF["commentspeedlimit"]} segundos entre comentarios",  
	9 => "Comentario",
	10 => '',
	11 => "Enviar el Comentario",
	12 => "Por favor complete el Nombre, Email, T�tulo y Comentario, ya que son datos necesarios para el env�o.",
	13 => "Su Informaci�n",
	14 => "Vista Previa",
	15 => "",
	16 => "T�tulo",
	17 => "Error",
	18 => 'Cosas Importantes',
	19 => 'Por favor intente mantener el tema de la nota.',
	20 => 'Intente responder a los commentarios de los dem�s en lugar de comenzar una nueva discuci�n.',
	21 => 'Lea los comentarios enviados para evitar comentarios duplicados.',
	22 => 'Use un t�tulo claro que describa el contenido del mensaje.',
	23 => 'Su direcci�n de email NO ser� divulgada.',
	24 => 'Usuario Anonimo'
);

###############################################################################
# users.php

$LANG04 = array(
	1 => "Perfil del Usuario para",
	2 => "Nombre del Usuario",
	3 => "Nombre Completo",
	4 => "Password",
	5 => "Email",
	6 => "Homepage",
	7 => "Biograf�a",
	8 => "Clave PGP",
	9 => "Grabar la Informaci�n",
	10 => "Ultimos 10 comentarios",
	11 => "No hay comentarios",
	12 => "Preferencias del Usuario para",
	13 => "Enviar un resumen cada nohe por Email",
	14 => "Este password es generado al azar. Se recomienda que cambie el password cuanto antes. Para cambiar el password conectese al sitio con su usuario.",
	15 => "Su cuenta en {$_CONF["site_name"]} fue creada exitosamente. Para poder usarla debe ingresar utilizando los datos dados m�s abajo. Guarde este mensaje para futuras referencias.",
	16 => "Informaci�n de su cuenta",
	17 => "La cuenta no existe",
	18 => "El email ingresado no parece ser v�lido.",
	19 => "El usuario y el email ingresados ya existen",
	20 => "El email ingresado no parece ser v�lido.",
	21 => "Error",
	22 => "Registrese en {$_CONF['site_name']}!",
	23 => "Crear una cuenta le dar� los beneficios de los usuarios de {$_CONF['site_name']} y le permitir� enviar notas, comentarios, etc. Si no tiene una cuenta s�lo lo podr� hacer an�nimamente. Queremos remarcar que su email <b><i>nunca</i></b> ser� publicado en este sitio.",
	24 => "Su password ser� enviado a la direcci�n de email que ingrese.",
	25 => "Olvid� su Password?",
	26 => "Ingrese su nombre de usuario y elija 'Enviar el Password por email' y el su nuevo password ser� enviado por email a su direcci�n",
	27 => "�Registrate ahora!",
	28 => "Enviar el password por email",
	29 => "desconectado de",
	30 => "conectado a",
	31 => "La funci�n que eligi� requiere que est� conectado",
	32 => "Firma",
	33 => "Nunca mostrado publicamente",
	34 => "Este es tu nombre real",
	35 => "Ingrese el password para cambiarlo",
	36 => "Comienza con http://",
	37 => "Aplicado a tus comentarios",
	38 => "�Todo sobre Ud.! Todos van a poder leer esto.",
	39 => "Su clave p�blica de PGP para compartir",
	40 => "No hay �conos en Secciones",
	41 => "Deseando moderar",
	42 => "Formato de fecha",
	43 => "Cantidad m�xima de Notas",
	44 => "Sin recuadros",
	45 => "Mostrar las preferencias de",
	46 => "Items excluidos para",
	47 => "Configuraci�n de Noticias para",
	48 => "Secciones",
	49 => "Sin �conos en las notas",
	50 => "No seleccione esto si no est� interesado",
	51 => "S�lo las notas nuevas",
	52 => "El valor por defecto es",
	53 => "Recibir cada noche las notas del d�a",
	54 => "Seleccione las Secciones y Autores que no desea ver.",
	55 => "Si no selecciona ninguna significa que desea la selecci�n por defecto. De seleccionar, seleccione todas las de su inter�s ya que las opciones por defecto ya no ser�n tomadas en cuenta. Las opciones por defecto se muestran resaltadas.",
	56 => "Autores",
	57 => "Modo de visualizaci�n",
	58 => "Orden",
	59 => "Limite por Comentario",
	60 => "�C�mo desea ver los comentarios?",
	61 => "�Primero los m�s viejos o los m�s nuevos?",
	62 => "El valor por defecto es 100",
	63 => "Gracias por usar {$_CONF['site_name']}. Su password a sido enviado por email y estar� llenado en unos instantes. Por favor siga las instrucciones en el mensaje.",
	64 => "Preferencias para los Comentarios de",
	65 => "Intente reingresar con su usuario",
	66 => "Los datos ingresados no son v�lidos. Intente volver conectarse aqui. �Es un <a href=\"{$_CONF['site_url']}/users.php?mode=new\">usuario nuevo</a>?",
	67 => "Miembro desde",
	68 => "Recu�rdeme para",
	69 => "�Cu�nto tiempo debemos mantenerlo activo luego que se conect�?",
	70 => "Personalize la apariencia y el contenido de {$_CONF['site_name']}",
	71 => "Una de las grandes virtudes de {$_CONF['site_name']} es que puede personalizar el contenido que recibe y la apariencia del sitio. Para poder lograr esto debe primero <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registrarse</a> en {$_CONF['site_name']}. Si ya es un miembro utilice el formulario de la izquierda para conectarse.",
	72 => "Theme",
    	73 => "Idioma",
	74 => "�Cambie la apariencia de esta p�gina!",
	75 => "Secciones enviadas por mail a",
	76 => "Si selecciona una o m�s Secciones de la lista de abajo, todas las Notas nuevas de esas Secciones le ser�n enviadas por mail al finalizar el d�a."
);

###############################################################################
# index.php

$LANG05 = array(
	1 => "No hay novedades para mostrar",
	2 => "No hay nuevas notas para mostrar. Puede que no haya novedades para esta Secci�n o que sus preferencias sean muy restrictivas.",
	3 => "para la Secci�n $topic",
	4 => "Nota del D�a",
	5 => "Pr�ximo",
	6 => "Previo"
);

###############################################################################
# links.php

$LANG06 = array(
	1 => "Links",
	2 => "No hay Links para mostrar.",
	3 => "Agregue un Link"
);

###############################################################################
# pollbooth.php

$LANG07 = array(
	1 => "Voto Grabado",
	2 => "Su voto fue computado para la encuesta",
	3 => "Vote",
	4 => "Encuestas en el sistema",
	5 => "Votos"
);

###############################################################################
# profiles.php

$LANG08 = array(
	1 => "Hubo un error al enviar su mensaje. Intente nuevamente por favor.",
	2 => "El mensaje fue enviado con �xito.",
	3 => "Por favor aseg�rese de ingresar una direcci�n de email v�lida en el campo 'Responder a'.",
	4 => "Por favor complete los campos Remitente, Responder a, T�tulo y Mensaje",
	5 => "Error: No existe el usuario.",
	6 => "Hubo un error.",
	7 => "Perfil de usuario de",
	8 => "Nombre del Usuario",
	9 => "URL del Usuario",
	10 => "Enviar mensaje a",
	11 => "Remitente:",
	12 => "Responder a:",
	13 => "T�tulo:",
	14 => "Mensaje:",
	15 => "El c�digo HTML no ser� traducido.",
	16 => "Enviar el mensaje",
	17 => "Enviar la Nota a un Amigo",
	18 => "Destinatario",
	19 => "Direcci�n de email destino",
	20 => "Remitente",
	21 => "Responder a",
	22 => "Todos los campos son requeridos",
	23 => "Este email fue enviado a Ud por $from en $fromemail porque pens� que podr�a interesarle esta Nota en  {$_CONF["site_url"]}. Esto no es SPAM y los emails involucrados en este env�o no fueron guardados para ning�n uso posterior.",
	24 => "Comentario sobre esta nota en",
	25 => "Debe conectarse para utilizar esta herramienta. Este control se realiza para evitar el mal uso del sistema.",
	26 => "Este form le permitir� enviar un email al usuario seleccionado. Todos los campos son necesarios.",
	27 => "Mensaje corto",
	28 => "$from escribi�: $shortmsg",
    29 => "Este es el res�men diario de {$_CONF['site_name']} para ",
    30 => " Diario para ",
    31 => "T�tulo",
    32 => "Fecha",
    33 => "Lea la Nota completa en",
    34 => "Fin del Mensaje"
    
);

###############################################################################
# search.php

$LANG09 = array(
	1 => "B�squeda Avanzada",
	2 => "Palabras Clave",
	3 => "Secci�n",
	4 => "Todo",
	5 => "Tipo",
	6 => "Notas",
	7 => "Comentarios",
	8 => "Autores",
	9 => "Todo",
	10 => "Buscar",
	11 => "Resultados de la b�squeda",
	12 => "resultados",
	13 => "B�squeda de Notas: No hubo coincidencias",
	14 => "No se encontraron coincidencias b�scando: ",
	15 => "Por favor intente nuevamente.",
	16 => "T�tulo",
	17 => "Fecha",
	18 => "Autor",
	19 => "Buscar en toda la base de datos de <B>{$_CONF["site_name"]}</B>",
	20 => "Fecha",
	21 => "a",
	22 => "(Formato de fecha DD-MM-YYYY)",
	23 => "Accesos",
	24 => "Se encontraron",
	25 => "coincidencias para",
	26 => "items en",
	27 => "segundos",
    28 => 'No se encontraron coincidencias en Notas y Comentarios',
    29 => 'Resultados para Notas y Comentarios'
);

###############################################################################
# stats.php

$LANG10 = array(
	1 => "Estad�sticas del sitio",
	2 => "Total de accesos al sistema",
	3 => "Notas(Comentarios) en el sistema",
	4 => "Encuestas(Respuestas) en el sistema",
	5 => "Links(Visitados) en el sistema",
	6 => "Eventos en el sistema",
	7 => "Las 10 Notas m�s vistas",
	8 => "T�tulo de la Nota",
	9 => "Accesos",
	10 => "Parecer�a que no hay Notas en este sitio o que nadie jam�s las vi�.",
	11 => "Las 10 Notas m�s comentadas",
	12 => "Comentarios",
	13 => "Parecer�a que no hay Notas en este sitio o que nadie jam�s escribi� un comentario sobre ellas.",
	14 => "Las 10 Encuestas con m�s votos",
	15 => "Pregunta",
	16 => "Votos",
	17 => "Parecer�a que no hay Encuestas en este sitio o que nadie jam�s vot�.",
	18 => "Los 10 Links m�s visitados",
	19 => "Links",
	20 => "Visitas",
	21 => "Parecer�a que en este sitio no hay Links o que nadie nuca los visita.",
	22 => "Las 10 Notas m�s enviadas por mail",
	23 => "Emails",
	24 => "Parecer�a que nadie mand� una nota por mail en este sitio."
);

###############################################################################
# article.php

$LANG11 = array(
	1 => "Relacionado con esto...",
	2 => "Enviar la Nota a un amigo",
	3 => "Versi�n para imprimir",
	4 => "Opciones de la Nota"
);

###############################################################################
# submit.php

$LANG12 = array(
	1 => "Para enviar $type debe estar conectado con su usuario.",
	2 => "Ingresar",
	3 => "Nuevo usuario",
	4 => "Enviar un Evento",
	5 => "Enviar un Link",
	6 => "Enviar una nota",
	7 => "Debe conectarse",
	8 => "Enviar",
	9 => "Cuando envia informaci�n a este sitio le pedimos que tome en cuenta los siguientes consejos: <ul><li>Complete todos los campos requeridos<li>Chequee bien los URL's<li>Brinde informaci�n completa y precisa</ul>",
	10 => "T�tulo",
	11 => "Link",
	12 => "Fecha de inicio",
	13 => "Fecha de finalizaci�n",
	14 => "Locaci�n",
	15 => "Descripci�n",
	16 => "Si otra, especifique",
	17 => "Categoria",
	18 => "Otra",
	19 => "Lea antes",
	20 => "Error: Falta la Categor�a",
	21 => "Por favor, cuando seleccione 'Otra' complete el nombre de la categor�a",
	22 => "Error: Faltan Campos",
	23 => "Por favor complete todo los campos del formulario. Todos los campos son requeridos.",
	24 => "Envio Grabado",
	25 => "Sus envios fueron grabados con �xito.",
	26 => "L�mite de Velocidad",
	27 => "Nombre del Usuario",
	28 => "Secci�n",
	29 => "Nota",
	30 => "Su �ltimo env�o fue hace ",
	31 => " segundos.  Este sitio requiere al menos {$_CONF["speedlimit"]} segundos entre env�os",
	32 => "Vista Previa",
	33 => "Prever la Nota",
	34 => "Salir",
	35 => "Los tags de HTML no son permitidos",
	36 => "Formato del texto",
	37 => "Los Eventos enviados a {$_CONF["site_name"]} se agregan al Calendario P�blico, donde el resto de los usuarios pueden agregarlo a su Calendario Personal. Esta funcionalidad <b>NO</b> est� pensada para que guarde sus eventos personales como cumplea�os, citas, etc.<br><br>Una vez enviado el evento ser� evaluado por los Administradores, de ser aprobado se mostrar� en el Calendrio P�blico", 
  	38 => "Agregar un Evento a",
  	39 => "Calendario P�blicor",
  	40 => "Calendario Personal",
  	41 => "Hora de Finalizaci�n",
  	42 => "Hora de Inicio",
  	43 => "Evento de todo el d�a",
  	44 => 'Direcci�n',
  	45 => 'Direcci�n',
  	46 => 'Ciudad/Localidad',
  	47 => 'Provincia',
  	48 => 'C�digo Postal',
  	49 => 'Tipo de Evento',
  	50 => 'Editar los Tipos de Eventos',
  	51 => 'Locaci�n',
  	52 => 'Borrar'
);


###############################################################################
# ADMIN PHRASES - These are file phrases used in end admin scripts
###############################################################################

###############################################################################
# auth.inc.php

$LANG20 = array(
	1 => "Autentificaci�n Requerida",
	2 => "�Denegado! Incorrect Login Information",
	3 => "El password ingresado es inv�lido",
	4 => "Usuario:",
	5 => "Password:",
	6 => "Todo acceso a las partes administrativas es registrado y revisado.<br>Esta p�gina es para uso exclusivo del personal autorizado.",
	7 => "Ingresar"
);

###############################################################################
# block.php

$LANG21 = array(
	1 => "No tiene derechos de Administrador",
	2 => "No tiene los derechos suficiente spara editar este bloque.",
	3 => "Editor de Bloques",
	4 => "",
	5 => "T�tulo del Bloque",
	6 => "Secci�n",
	7 => "Todo",
	8 => "Nivel de seguridad del bloque",
	9 => "Orden del Bloque",
	10 => "Tipo de bloque",
	11 => "Bloque del Sistema",
	12 => "Bloque Normal",
	13 => "Opciones para el Bloque del Sistema",
	14 => "RDF URL",
	15 => "�ltima actualizaci�n RDF",
	16 => "Opciones para el Bloque Normal",
	17 => "Contenido del Bloque",
	18 => "Por favor complete los campos T�tulo, Nivel de Seguridad y Contenido",
	19 => "Administrador",
	20 => "T�tulo",
	21 => "Nivel de Seguridad",
	22 => "Tipo",
	23 => "Nro. de Orden",
	24 => "Secci�n",
	25 => "Para modificar o borrar un bloque seleccionelo m�s abajo. Para crear uno nuevo Seleccione 'Nuevo Bloque' arriba.",
	26 => "Bloque de Layout",
	27 => "Bloque PHP",
        28 => "Opciones del Bloque PHP",
        29 => "Funciones de Bloque",
        30 => "Si desea que su bloque utilice c�digo PHP, ingrese aqui el nombre de la funci�n. La funci�n debe tener el prefijo \"phpblock_\" (ej. phpblock_getweather). De no tenerlo NO ser� invocada. Aseg�rese de no incluir los par�ntesis, \"()\", al final del nombre. Por �ltimo, se recomienda que guarde todo c�digo PHP en /path/to/geeklog/system/lib-custom.php. Esto le permitir� que su c�digo se mantenga a�n entre cambios de versiones del sistema.",
        31 => 'Error en un Bloque PHP.  La funci�n, $function, no existe.',
        32 => "Error, Faltan Campos",
        33 => "Debe ingresar el URL del archivo .rdf para los Bloques del Sistema",
        34 => "debe ingresar el T�tulo y la Funci�n en los Bloques PHP",
        35 => "Debe ingresar el T�tulo y el Contenido para los Bloques Normales",
        36 => "Debe ingresar el contenido para los Bloques de Layout",
        37 => "El nombre de la funci�n en el Bloque PHP es inv�lido",
        38 => "Las funciones para los Bloques PHP deben tener el prefijo 'phpblock_' (ej. phpblock_getweather). El prefijo es requerido por cuestiones de seguridad, para evitar que se ejecute c�digo no deseado.",
	39 => "Ubicaci�n",
	40 => "Izquierda",
	41 => "Derecha",
	42 => "Deber ingresar el nro. de orden y el nivel de seguridad para los bloques default",
	43 => "S�lo en la P�gina de Inicio",
	44 => "Acceso Denegado",
	45 => "You are trying to access a block that you don't have rights to.  This attempt has been logged. Please <a href=\"{$_CONF["site_admin_url"]}/block.php\">go back to the block administration screen</a>.",
	46 => 'Nuevo Bloque',
	47 => 'P�gina de Inicio - Administrador',
  	48 => 'Nombre del Bloque',
  	49 => ' (sin espacios y debe ser �nico)',
  	50 => 'URL del archivo de ayuda',
  	51 => 'incluir http://',
  	52 => 'Si deja este campo en blanco no se mostrar� el �cono de ayuda',
	53 => 'Habilitado'
);

###############################################################################
# event.php

$LANG22 = array(
	1 => "Editor de Eventos",
	2 => "",
	3 => "T�tulo",
	4 => "URL",
	5 => "Fecha de Inicio",
	6 => "Fecha de Finalizaci�n",
	7 => "Lugar",
	8 => "Descripci�n",
	9 => "(incluir http://)",
	10 => "Necesita completar todos los campos de este formulario.",
	11 => "Administrador del Evento",
	12 => "Para modificar o borrar el evento seleccionarlo m�s abajo. Para crear uno nuevo seleccionar 'Nuevo Evento' m�s arriba.",
	13 => "T�tulo",
	14 => "Fecha de Inicio",
	15 => "Fecha de Finalizaci�n",
	16 => "Acceso Denegado",
	17 => "No tiene permiso para acceder a este Evento. Todo intento de acceso ser� registrado. Por favor, vuelva a <a href=\"{$_CONF["site_admin_url"]}/event.php\">la p�gina de Administraci�n de Eventos</a>.",
	18 => 'Nuevo Evento',
	19 => 'P�gina de Inicio - Administrador'
);

###############################################################################
# link.php

$LANG23 = array(
	1 => "Editor de Links",
	2 => "",
	3 => "T�tulo",
	4 => "URL",
	5 => "Categoria",
	6 => "(incluir http://)",
	7 => "Otro",
	8 => "Cantidad de accesos",
	9 => "Descripci�n",
	10 => "Necesita completar los campos T�tulo, URL y Descripci�n.",
	11 => "Administrador",
	12 => "Para modificar o borrar un Link selecci�nelo m�s abajo. Para crear uno nuevo seleccione 'Nuevo Link' m�s arriba.",
	13 => "T�tulo",
	14 => "Categoria",
	15 => "URL",
	16 => "Acceso Denegado",
	17 => "No tiene permiso para acceder a este Link. Todo intento de acceso ser� registrado. Por favor, vuelva a <a href=\"{$_CONF["site_admin_url"]}/link.php\">la p�gina de Administraci�n de Links</a>.",
	18 => 'Nuevo Link',
	19 => 'P�gina de Inicio - Administrador',
	20 => 'Si otra/o, especifique'
);

###############################################################################
# story.php

$LANG24 = array(
	1 => "Notas Anteriores",
	2 => "Notas Siguientes",
	3 => "Modo",
	4 => "Modo de envio",
	5 => "Editor de Notas",
	6 => "",
	7 => "Autor",
	8 => "",
	9 => "",
	10 => "",
	11 => "",
	12 => "",
	13 => "T�tulo",
	14 => "Secci�n",
	15 => "Fecha",
	16 => "Introducci�n",
	17 => "Texto",
	18 => "Accesos",
	19 => "Comentarios",
	20 => "",
	21 => "",
	22 => "Listado de Notas",
	23 => "Para modificar o borrar una Nota seleccione el n�mero de nota m�s abajo. Para ver la Nota seleccione el t�tulo de la misma. Para crear una nueva Nota seleccione 'Nueva Nota' m�s arriba.",
	24 => "",
	25 => "",
	26 => "Vista Previa",
	27 => "",
	28 => "",
	29 => "",
	30 => "",
	31 => "Por favor complete los campos Autor, Introducci�n y Texto",
	32 => "Destacado",
	33 => "S�lo puede haber una Nota destacada",
	34 => "Borrador",
	35 => "S�",
	36 => "No",
	37 => "M�s de",
	38 => "M�s en",
	39 => "Emails",
	40 => "Acceso Denegado",
	41 => "Esta intentando acceder a una Nota pra la cual no tiene derechos de acceso, por lo que podr� ver la Nota pero no editarla. Por favor vuelva a la <a href=\"{$_CONF["site_admin_url"]}/story.php\">p�gina de administraci�n</a> cuando haya terminado.",
	42 => "Esta intentando acceder a una Nota pra la cual no tiene derechos de acceso. Por favor vuelva a la <a href=\"{$_CONF["site_admin_url"]}/story.php\">p�gina de administraci�n</a>.",
	43 => 'Nueva Nota',
	44 => 'P�gina de Inicio - Administrador',
	45 => 'Acceso',
        46 => '<b>NOTA:</b> si modifica esta fecha por una futura, la Nota no ser� publicada hasta esa fecha. Esto tambi�n incluye el envi� de titulares RDF, la b�squeda y las estad�sticas del sitio.',
        47 => 'Im�genes',
        48 => 'imagen',
        49 => 'der',
        50 => 'izq',
        51 => 'Para insertar una imagen en la Nota debe incluir un texto con el formato [imagenX], [imagenX_der] o [imageX_izq], donde X es el n�mero de imagen dentro de la lista. NOTA: s�lo puede utilizar las im�genes de la lista, sino la Nota no podr� ser grabada',
        52 => 'Borrar',
        53 => 'no fue usada.  Debe incluir esta imagen en la Introducci�n o el Texto para poder grabar los cambios',
        54 => 'Im�genes no utilizadas',
        55 => 'Los siguientes errores ocurriron al querer grabar su Nota. Por favor corrija los errores antes de grabar.'
);

###############################################################################
# poll.php

$LANG25 = array(
	1 => "Modo",
	2 => "",
	3 => "Fecha de creaci�n",
	4 => "Encuesta $qid grabada",
	5 => "Editar la Encuesta",
	6 => "ID",
	7 => "(no use espacios)",
	8 => "Aparece en la Portada",
	9 => "Pregunta",
	10 => "Respuestas / Votos",
	11 => "Hubo un error buscando los datos para las respuesta de la Encuesta $qid",
	12 => "Hubo un error buscando los datos para la pregunta de la Encuesta $qid",
	13 => "Crear Encuesta",
	14 => "",
	15 => "",
	16 => "",
	17 => "",
	18 => "Listado de Encuestas",
	19 => "Para modificar o borrar una Encuesta el�jala en la lista de abajo. Para crear una nueva selecione 'Nueva Encuesta' m�s arriba.",
	20 => "Votantes",
	21 => "Acceso Denegado",
	22 => "Esta intentando acceder a una Encuesta pra la cual no tiene derechos de acceso. Por favor vuelva a la <a href=\"{$_CONF["site_admin_url"]}/poll.php\">p�gina de administraci�n</a>.",
	23 => 'Nueva Encuesta',
	24 => 'P�gina de Inicio - Administrador',
	25 => 'S�',
	26 => 'No'
);

###############################################################################
# topic.php

$LANG27 = array(
	1 => "Editor dse Secciones",
	2 => "ID",
	3 => "Nombre",
	4 => "Imagen",
	5 => "(no use espacios)",
	6 => "Al borrar una Secci�n se borrar�n todas sus Notas y Bloques asociados",
	7 => "Por favor complete los campos ID y Nombre",
	8 => "Administrador de Secciones",
	9 => "Para modificar o borrar una Secci�n el�jala en la lista de abajo. Para crear una nueva selecione 'Nueva Secci�n' m�s arriba. Entre par�ntesis figura el nivel de acceso que posee.",
	10=> "Nro. de Orden",
	11 => "Notas/P�gina",
	12 => "Acceso Denegado",
	13 => "Esta intentando acceder a una Secci�n pra la cual no tiene derechos de acceso. Por favor vuelva a la <a href=\"{$_CONF["site_admin_url"]}/topic.php\">p�gina de administraci�n</a>.",
	14 => "Ordenamiento",
	15 => "alfab�tico",
	16 => "por defecto es",
	17 => "Nueva Secci�n",
	18 => "P�gina de Inicio - Administrador"
);

###############################################################################
# user.php

$LANG28 = array(
	1 => "Editor de Usuarios",
	2 => "ID",
	3 => "Nombre de Usuario",
	4 => "Nombre Completo",
	5 => "Password",
	6 => "Nivel de Seguridad",
	7 => "Direcci�n de Email",
	8 => "P�gia de Inicio",
	9 => "(no use espacios)",
	10 => "Por favor complete los campos Nombre de Usuario, Nombre Completo, Nivel de Seguridad y Direcci�n de Email",
	11 => "Administrador de Usuarios",
	12 => "Para modificar o borrar un Usuario el�jalo en la lista de abajo. Para crear uno nuevo selecione 'Nuevo Usuario' m�s arriba.",
	13 => "SecLev",
	14 => "Reg. Date",
	15 => 'Nuevo Usuario',
	16 => 'P�gina de Inicio - Administrador',
	17 => 'Cambiar-Password',
	18 => 'Cancelar',
	19 => 'Borrar',
	20 => 'Grabar',
	18 => 'Cancelar',
	19 => 'Borrar',
	20 => 'Grabar',
    21 => 'El Nombre de Uusario propuesto ya existe.',
    22 => 'Error',
    23 => 'Importaci�n Masiva',
    24 => 'Importaci�n masiva de Usuarios',
    25 => 'Puede importar una lista de Usuarios a '.$_CONF["site_name"].'. El archivo con la lista de usuarios debe tener un registro por l�nea y los campos separados por TAB. Los campos deben estar en el siguiente orden: Nombre Completo, Nombre de Usuario, Direcci�n de Mail. A cada usuario agragdo se le enviar� por mail un password generado al azar, que podr�n cambiar al ingresar al sitio. Por favor, chequee bien el archivo de importaci�n ya que los errores encontrados pueden llegar a necesaitar arreglaos manuales.',
    26 => 'Buscar',
    27 => 'Limitar los resultados'
);


###############################################################################
# moderation.php

$LANG29 = array(
	1 => "Aprobar",
	2 => "Borrar",
	3 => "Editar",
	34 => "P�gina de administraci�n",
	35 => "Envios de Notas",
	36 => "Envios de Links",
	37 => "Envios de Eventos",
	38 => "Enviar",
	39 => "No hay envios para moderar en este momento"
);

###############################################################################
# calendar.php

$LANG30 = array(
	1 => "Domingo",
	2 => "Lunes",
	3 => "Martes",
	4 => "Mi�rcoles",
	5 => "Jueves",
	6 => "Viernes",
	7 => "S�bado",
	8 => "Agregar un Evento",
	9 => "Evento de Argos",
	10 => "Eventos para",
	11 => "Calendario Maestro",
	12 => "Mi Calendario",
	13 => "Enero",
	14 => "Febrero",
	15 => "Marzo",
	16 => "Abril",
	17 => "Mayo",
	18 => "Junio",
	19 => "Julio",
	20 => "Agosto",
	21 => "Septiembre",
	22 => "Octubre",
	23 => "Noviembre",
	24 => "Deciembre",
	25 => "Volver a ",
    26 => "Todo el d�a",
    27 => "Semana",
    28 => "Calendario Personal para",
    29 => "Calendario Publico",
    30 => "borrar evento",
    31 => "Agregar",
    32 => "Evento",
    33 => "Fecha",
    34 => "Hora",
    35 => "Agregado r�pido",
    36 => "Enviar",
    37 => "Disculpe, la opci�n de calendario personal no se encuentra habilitada en este sitio",
    38 => "Editor Personal de Eventos"
);

###############################################################################
# admin/mail.php
$LANG31 = array(
 	1 => "Mail",
 	2 => "De",
 	3 => "Responder a",
 	4 => "T�tulo",
 	5 => "Mensaje",
 	6 => "Enviar a:",
 	7 => "Todos los usuarios",
 	8 => "Administrador",
	9 => "Opciones",
	10 => "HTML",
 	11 => "�Mensaje Urgente!",
 	12 => "Enviar",
 	13 => "Reiniciar",
 	14 => "Ignorar las preferencias del usuario",
 	15 => "Error al mandar a: ",
	16 => "Se ha enviado con �xito a: ",
	17 => "<a href=" . $_CONF["site_admin_url"] . "/mail.php>Enviar otro mensaje</a>",
        18 => "Para",
        19 => "NOTA: si desea enviar un mensaje a todos los miembros del sitio, seleccione el grupo Logged-In Users en la lista.",
        20 => "Se han enviado <successcount> mensajes con �xito y <failcount> han fallado.  Si desea, los detalles de cada env�o figuran abajo. Tambien puede <a href=\"" . $_CONF['site_admin_url'] . "/mail.php\">enviar otro mensaje</a> o volver a <a href=\"" . $_CONF['site_admin_url'] . "/moderation.php\">la p�gina de administraci�n</a>.",
        21 => 'Fallidos',
        22 => 'Exitosos',
        23 => 'No hubo env�os fallidos',
        24 => 'No hubo env�os exitosos'	
);


###############################################################################
# confirmation and error messages

$MESSAGE = array (
	1 => "Su password a sido enviado por mail y debe llegar en unos instantes. Por favor siga las indicaciones del mensaje. Gracias por usar " . $_CONF["site_name"],
	2 => "Gracias por enviar su Nota a {$_CONF["site_name"]}. La Nota se encuentra en proceso de aprobaci�n. De ser aprobada podr� ser leida por todos los visitantes del sitio.",
	3 => "Gracias por enviar su Link a {$_CONF["site_name"]}. El Link se encuentra en proceso de aprobaci�n. De ser aprobado podr� ser visto por todos los visitantes del sitio.",
	4 => "Gracias por enviar su Evento a {$_CONF["site_name"]}. El Evento se encuentra en proceso de aprobaci�n. De ser aprobado podr� ser visto por todos los visitantes del sitio.",
	5 => "La informaci�n de su cuenta ha sido grabada con �xito.",
	6 => "Sus preferencias han sido grabadas con �xito.",
	7 => "Sus preferencias para Comentarios han sido grabadas con �xito.",
	8 => "Se ha descontectado con �xito.",
	9 => "Su Nota ha sido grabada con �xito.",
	10 => "La Nota ha sido borrada con �xito.",
	11 => "Su Bloque ha sido grabado con �xito.",
	12 => "El Bloque ha sido borrado con �xito.",
	13 => "Su Secci�n ha sido borrado con �xito.",
	14 => "La Secci�n junto con todas sus Notas y Bloques ha sido borrado con �xito.",
	15 => "Su link fue grabado con �xito.",
	16 => "El link fue borrado con �xito.",
	17 => "Su Evento fue grabado con �xito.",
	18 => "El Evento fue borrado con �xito.",
	19 => "Su Encuesta fue grabada con �xito.",
	20 => "La encuesta fue borrada con �xito.",
	21 => "El nuevo Usuario fue grabado con �xito.",
	22 => "El Usuario fue borrado con �xito",
	23 => "Error al grabar el Evento en su Calendario. No fue pasado el ID.",
	24 => "El Evento fue grabado en su Calendario",
	25 => "No puede acceder a su Calendario Personal antes de conectarse con su usuario",
	26 => "El Evento fue borrado de su Calendario Personal",
	27 => "Mensaje enviado con �xito.",
	28 => "El Plug-In fue grabado con �xito",
	29 => "Disculpe, los Calendarios Personales no est�n habilitados en este sitio",
	30 => "Acceso Denegado",
	31 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Notas. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	32 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Secciones. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	33 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Bloques. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	34 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Links. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	35 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Eventos. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	36 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Encuestas. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	37 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Usuarios. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	38 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Plug-ins. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	39 => "Disculpe, no tiene acceso a la p�gina de administraci�n de Mail. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
	40 => "Mensaje del Sistema",
        41 => "Disculpe, no tiene acceso a la p�gina de Reemplazo de Palabras. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor.",
        42 => "La Palabra fue grabada con �xito.",
	43 => "La Palabra fue borrada con �xito.",
        44 => 'El Plug-In fue instalado con �xito.',
        45 => 'El Plug-In fue borrado con �xito.',
        46 => "Disculpe, no tiene acceso a la herramienta de Backup de la base. Aclaramos que todo acceso sin autorizaci�n queda registrado en el servidor."
);

// for plugins.php

$LANG32 = array (
	1 => "Instalar plugins puede da�ar su instalaci�n de Geeklog y, posiblemente, su sistema. Es importante que s�lo instale plugins obtenidos de <a href=\"http://www.geeklog.net\" target=\"_blank\">Geeklog</a> ya que han sido testeados en varios entornos. Es tambi�n importante que entienda que la instalaci�n del plugin requiere la ejecuci�n de comandos del sistema que pueden traer problemas de seguridad. A�n con esta advertencia, no garabtizamos el �xito de la instalaci�n del plugin ni nos hacemos responsables por cualquier da�o causado durante la instalaci�n (o posterior a la misma). En otras palabras, instale el plugin a su propio riesgo. Las instrucciones particulares de instalaci�n vienen dentro de cada plugin.", 
	2 => "Advertencia de la Instalaci�n del Plug-in",
	3 => "Formulario de instalaci�n del Plug-in",
	4 => "Archivo del Plug-in",
	5 => "Listado de Plug-ins",
	6 => "Advertencia: �El Plug-in ya est� instalado!",
	7 => "El plugin que intenta instalar ya existe. Por favor borre el plugin antes de reinstalarlo.",
	8 => "Fall� el chequeo de compatibilidad del Plugin",
	9 => "Este Plug-in requiere una versi�n m�s nueva de Geeklog. Puede obtener una copia actualizada de <a href=http://www.geeklog.net>Geeklog</a> o instalar otra versi�n del Plug-in.",
	10 => "<br><b>No hay Plugins instalados.</b><br><br>",
	11 => "Para modificar o borrar un plugin seleccione el n�mero a la izquierda del mismo. Para acceder a la p�gina de sus creadores seleccione en el t�tulo del plugin. Para instalar un nuevo plugin seleccione 'Nuevo Plugin' m�s arriba.",
	12 => 'no fue dado un nombre de plugin a la funci�n plugineditor()',
	13 => 'Editor de Plugins',
	14 => 'Nuevo Plug-in',
	15 => 'P�gina de Inicio - Administrador',
	16 => 'Plug-in Name',
	17 => 'Versi�n',
	18 => 'Versi�n de Geeklog',
	19 => 'Habilitado',
	20 => 'S�',
	21 => 'No',
	22 => 'Instalar',
    23 => 'Guardar',
    24 => 'Cancelar',
    25 => 'Borrar',
    26 => 'Nombre',
    27 => 'Homepage',
    28 => 'Versi�n',
    29 => 'Versi�n de Geeklog',
    30 => 'Borrar el Plug-in?',
    31 => '�Est� seguro/a que desea borrar este Plug-in? Al hacerlo borrar� todos los archivos, estructuras y datos asociados. Si est� seguro/a seleccione "Borrar" en el formulario de abajo.' 
);

$LANG_ACCESS = array(
	access => "Acceso",
    ownerroot => "Propietario/Root",
    group => "Grupo",
    readonly => "S�lo-Lectura",
	accessrights => "Derechos de acceso",
	owner => "Propietario",
	grantgrouplabel => "Establecer los derechos del Grupo",
	permmsg => "NOTA: miembros son todos los miembros conectados y los usuarios an�nimos en el sitio.",
	securitygroups => "Grupos de Seguridad",
	editrootmsg => "Even though you are a User Administrator, you can't edit a root user without first being a root user yourself.  You can edit all other users except root users. Please note that all attempts to illegally edit root users are logged.  Please go back to the <a href=\"{$_CONF["site_admin_url"]}/user.php\">User Administration page</a>.",
	securitygroupsmsg => "Select the checkboxes for the groups you want the user to belong to.",
	groupeditor => "Editor de Grupo",
	description => "Descripci�n",
	name => "Nombre",
 	rights => "Derechos",
	missingfields => "Campos faltantes",
	missingfieldsmsg => "Debe ingresar un nombre y una descripci�n para el Grupo.",
	groupmanager => "Administrador de Grupos",
	newgroupmsg => "Para modificar o borrar un grupo seleccione el grupo aqu� abajo. Para crear un grupo seleccione 'Nuevo Grupo' aqu� arriba. Tenga en cuenta que los Grupos del Sistema no pueden ser borrados.",
	groupname => "Nombre del Grupo",
	coregroup => "Grupo del Sistema? ",
	yes => "S�",
	no => "No",
	corerightsdescr => "Este grupo es un Grupo de Sistema de {$_CONF["site_name"]}, y por ende sus derechos no pueden ser editados. A continuaci�n se muestra una lista no editable de los derechos de acceso de este grupo.",
	groupmsg => "Los Grupos de Seguridad en este sitio son jer�rquicos. Al agregar este grupo a cualquiera de los de abajo le estar� dando los mismos derechos que esos grupos posean. De ser posible, se recomienda utilizar los grupos ya creados para dar los derechos a un nuevo grupo. Si necesita modificar los derechos del grupo, puede seleccionarlos en la secci�n llamada 'Derechos'. Para agregar este grupo a cualquiera de los de abajo simplemente marque los grupos que quiera.",
	coregroupmsg => "Este grupo es un Grupo de Sistema de {$_CONF["site_name"]}, y por ende los grupos que pertenezcan a este grupo no podr�n ser editados. A continuaci�n se muestar una lista (no editable) de los grupos a los cuales este grupo pertenece.",
	rightsdescr => "A groups access to a certain right below can be given directly to the group OR to a different group that this group is a part of.  The ones you see below without a checkbox are the rights that have been given to this group because it belongs to another group with that right.  The rights with checkboxes below are rights that can be given directly to this group.",
	lock => "Bloqueo",
	members => "Miembros",
	anonymous => "An�nimo",
	permissions => "Permisos",
	permissionskey => "R = lectura, E = edici�n, los permisos de edici�n suponen permisos de lectura",
	edit => "Editar",
	none => "Ninguno",
	accessdenied => "Acceso Denegado",
	storydenialmsg => "No tiene acceso para ver esta Nota. Esto puede ser porque no es miembro de {$_CONF["site_name"]}. Por favor <a href=users.php?mode=new>convi�rtase en un miembro</a> de {$_CONF["site_name"]} para tener acceso.", 
	eventdenialmsg => "No tiene acceso para ver este Evento. Esto puede ser porque no es miembro de {$_CONF["site_name"]}. Por favor <a href=users.php?mode=new>convi�rtase en un miembro</a> de {$_CONF["site_name"]} para tener acceso.", 
	nogroupsforcoregroup => "Este grupo no pertenece a ninguno de los otros grupos",
	grouphasnorights => "Este grupo no tiene acceso a las funciones de administraci�n",
	newgroup => 'Nuevo Grupo',
	adminhome => 'P�gina de Administraci�n',
	save => 'Grabar',
	cancel => 'Cancelar',
	canteditroot => 'Ha intentado editar el Grupo Root. Como no es miembro del grupo no tiene acceso al mismo. Si cree que esto ha sido un error por favor contacte al administrador del sistema.'
);

#admin/word.php
$LANG_WORDS = array(
    editor => "Editor de Palabras de Reemplazo",
    wordid => "ID de la Palabra",
    intro => "Para modificar o borrar una palabra selecci�nela. Para agregar una palabra utilice el bot�n 'Nueva Palabra', a la izquierda.",
    wordmanager => "Administrador de Palabras",
    word => "Palabra",
    replacmentword => "Palabra de Reemplazo",
    newword => "Nueva Palabra"
);

$LANG_DB_BACKUP = array(
    last_ten_backups => '�ltimos 10 Back-ups',
    do_backup => 'Hacer un Backup',
    backup_successful => 'El back up de la base se ha realizado con �xito.',
    no_backups => 'No hay backups en el sistema',
    db_explanation => 'Para crear un backup del sistema utilice el bot�n de abajo'
);

?>
