<!-- SIDEBAR -->
<aside class="sidebar">

<!-- FORMULARIO DE CONTACTO -->    
<div id="contacto_email">
	<header id="contacto_email_header"><h1 class="contacto">Solicita Informaci&oacute;n</h1></header>
  <div style="min-height: 250px; margin: 0px 0 0 10px">
    <div style="float: left;">
      <form id="contacto" name="contacto" method="post" action="<?php bloginfo("template_url"); ?>/contacto.php" onSubmit="return false;">
        <table cellpadding="0" cellspacing="10">
          <tr>
          	<td class="titulo_campo">Nombre:</td>
          </tr>
          <tr>
            <td align="left">
              <input class="campo_texto" id="nombre" name="nombre" type="text" autocomplete="off" />
            </td>
          </tr>
          <tr>
          	<td class="titulo_campo">Mail:</td>
          </tr>
          <tr>
            <td align="left">
              <input class="campo_texto" id="mail" name="mail" type="text" autocomplete="off" />
            </td>
          </tr>
          <tr>
          	<td class="titulo_campo">Teléfono:</td>
          </tr>
          <tr>
            <td align="left">
              <input class="campo_texto" type="text" name="telefono" id="telefono" autocomplete="off" onKeyPress="return soloNumeros(event);" maxlength="10" />
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" align="left;">
              <select id="opcion1" name="opcion1" style="width: 185px;">
              	<option value="no selecciona">Seleccione Carrera 1</option>
              	<option value="Administraci&oacute;n de Empresas (SP)">Adm. de Empresas (SP)</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n en Finanzas">
              		Adm. de Empresas Menci&oacute;n en Finanzas
              	</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n Recursos Humanos">
              		Adm. de Empresas Menci&oacute;n Recursos Humanos
              	</option>
              	<option value="Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e">
              		Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e
              	</option>
              	<option value="Comercio Exterior">Comercio Exterior</option>
              	<option value="Comercio Exterior (SP)">Comercio Exterior (SP)</option>
              	<option value="Contabilidad General">Contabilidad General</option>
              	<option value="Contabilidad General (SP)">Contabilidad General (SP)</option>
              	<option value="Gesti&oacute;n Financiera e Inversiones">Gesti&oacute;n Financiera e Inversiones</option>
              	<option value="Secretariado Ejecutivo Biling&uuml;e">Secretariado Ejecutivo Biling&uuml;e</option>
              	<option value="Secretariado Ejecutivo Computacional">Secretariado Ejecutivo Computacional</option>
              	<option value="T&eacute;cnico Jur&iacute;dico">T&eacute;cnico Jur&iacute;dico</option>
              	<option value="Decoraci&oacute;n de Interiores">Decoraci&oacute;n de Interiores</option>
              	<option value="Dibujo T&eacute;cnico">Dibujo T&eacute;cnico</option>
              	<option value="T&eacute;cnico en Prevenci&oacute;n de Riesgos">T&eacute;cnico en Prevenci&oacute;n de Riesgos</option>
              	<option value="An&aacute;lisis de Sistemas">An&aacute;lisis de Sistemas</option>
              	<option value="Soporte en Redes Computacionales">Soporte en Redes Computacionales</option>
              	<option value="Turismo">Turismo</option>
              	<option value="Auditor&iacute;a">Auditor&iacute;a</option>
              	<option value="Auditor&iacute;a (PET)">Auditor&iacute;a (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Administraci&oacute;n de Empresas">
              		Ing. Ejec. Administraci&oacute;n de Empresas
              	</option>
              	<option value="Ingenier&iacute;a en Administraci&oacute;n (PET)">Ing. en Administraci&oacute;n (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Comercio Internacional">Ing. Ejec. Comercio Internacional</option>
              	<option value="Ingenier&iacute;a Ejec. Industrial">Ing. Ejec. Industrial</option>
              	<option value="Ingenier&iacute;a en Prevenci&oacute;n de Riesgos">Ing. en Prevenci&oacute;n de Riesgos</option>
              	<option value="Ingenier&iacute;a Ejec. en Inform&aacute;tica">Ing. Ejec. en Inform&aacute;tica</option>
              	<option value="Ingenier&iacute;a Ejec. en Redes Menci&oacute;n Telecomunicaciones">
              		Ing. Ejec. en Redes Menci&oacute;n Telecomunicaciones
              	</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align="left">
              <select id="opcion2" name="opcion2" style="width: 185px;">
              	<option value="no selecciona">Seleccione Carrera 2</option>
              	<option value="Administraci&oacute;n de Empresas (SP)">Adm. de Empresas (SP)</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n en Finanzas">
              		Adm. de Empresas Menci&oacute;n en Finanzas
              	</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n Recursos Humanos">
              		Adm. de Empresas Menci&oacute;n Recursos Humanos
              	</option>
              	<option value="Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e">
              		Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e
              	</option>
              	<option value="Comercio Exterior">Comercio Exterior</option>
              	<option value="Comercio Exterior (SP)">Comercio Exterior (SP)</option>
              	<option value="Contabilidad General">Contabilidad General</option>
              	<option value="Contabilidad General (SP)">Contabilidad General (SP)</option>
              	<option value="Gesti&oacute;n Financiera e Inversiones">Gesti&oacute;n Financiera e Inversiones</option>
              	<option value="Secretariado Ejecutivo Biling&uuml;e">Secretariado Ejecutivo Biling&uuml;e</option>
              	<option value="Secretariado Ejecutivo Computacional">Secretariado Ejecutivo Computacional</option>
              	<option value="T&eacute;cnico Jur&iacute;dico">T&eacute;cnico Jur&iacute;dico</option>
              	<option value="Decoraci&oacute;n de Interiores">Decoraci&oacute;n de Interiores</option>
              	<option value="Dibujo T&eacute;cnico">Dibujo T&eacute;cnico</option>
              	<option value="T&eacute;cnico en Prevenci&oacute;n de Riesgos">T&eacute;cnico en Prevenci&oacute;n de Riesgos</option>
              	<option value="An&aacute;lisis de Sistemas">An&aacute;lisis de Sistemas</option>
              	<option value="Soporte en Redes Computacionales">Soporte en Redes Computacionales</option>
              	<option value="Turismo">Turismo</option>
              	<option value="Auditor&iacute;a">Auditor&iacute;a</option>
              	<option value="Auditor&iacute;a (PET)">Auditor&iacute;a (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Administraci&oacute;n de Empresas">
              		Ing. Ejec. Administraci&oacute;n de Empresas
              	</option>
              	<option value="Ingenier&iacute;a en Administraci&oacute;n (PET)">Ing. en Administraci&oacute;n (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Comercio Internacional">Ing. Ejec. Comercio Internacional</option>
              	<option value="Ingenier&iacute;a Ejec. Industrial">Ing. Ejec. Industrial</option>
              	<option value="Ingenier&iacute;a en Prevenci&oacute;n de Riesgos">Ing. en Prevenci&oacute;n de Riesgos</option>
              	<option value="Ingenier&iacute;a Ejec. en Inform&aacute;tica">Ing. Ejec. en Inform&aacute;tica</option>
              	<option value="Ingenier&iacute;a Ejec. en Redes Menci&oacute;n Telecomunicaciones">
              		Ing. Ejec. en Redes Menci&oacute;n Telecomunicaciones
              	</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align="left">
              <select id="opcion3" name="opcion3" style="width: 185px;">
              	<option value="no selecciona">Seleccione Carrera 3</option>
              	<option value="Administraci&oacute;n de Empresas (SP)">Adm. de Empresas (SP)</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n en Finanzas">
              		Adm. de Empresas Menci&oacute;n en Finanzas
              	</option>
              	<option value="Administraci&oacute;n de Empresas Menci&oacute;n Recursos Humanos">
              		Adm. de Empresas Menci&oacute;n Recursos Humanos
              	</option>
              	<option value="Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e">
              		Asistente Ejecutivo Gerencial Menci&oacute;n Biling&uuml;e
              	</option>
              	<option value="Comercio Exterior">Comercio Exterior</option>
              	<option value="Comercio Exterior (SP)">Comercio Exterior (SP)</option>
              	<option value="Contabilidad General">Contabilidad General</option>
              	<option value="Contabilidad General (SP)">Contabilidad General (SP)</option>
              	<option value="Gesti&oacute;n Financiera e Inversiones">Gesti&oacute;n Financiera e Inversiones</option>
              	<option value="Secretariado Ejecutivo Biling&uuml;e">Secretariado Ejecutivo Biling&uuml;e</option>
              	<option value="Secretariado Ejecutivo Computacional">Secretariado Ejecutivo Computacional</option>
              	<option value="T&eacute;cnico Jur&iacute;dico">T&eacute;cnico Jur&iacute;dico</option>
              	<option value="Decoraci&oacute;n de Interiores">Decoraci&oacute;n de Interiores</option>
              	<option value="Dibujo T&eacute;cnico">Dibujo T&eacute;cnico</option>
              	<option value="T&eacute;cnico en Prevenci&oacute;n de Riesgos">T&eacute;cnico en Prevenci&oacute;n de Riesgos</option>
              	<option value="An&aacute;lisis de Sistemas">An&aacute;lisis de Sistemas</option>
              	<option value="Soporte en Redes Computacionales">Soporte en Redes Computacionales</option>
              	<option value="Turismo">Turismo</option>
              	<option value="Auditor&iacute;a">Auditor&iacute;a</option>
              	<option value="Auditor&iacute;a (PET)">Auditor&iacute;a (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Administraci&oacute;n de Empresas">
              		Ing. Ejec. Administraci&oacute;n de Empresas
              	</option>
              	<option value="Ingenier&iacute;a en Administraci&oacute;n (PET)">Ing. en Administraci&oacute;n (PET)</option>
              	<option value="Ingenier&iacute;a Ejec. Comercio Internacional">Ing. Ejec. Comercio Internacional</option>
              	<option value="Ingenier&iacute;a Ejec. Industrial">Ing. Ejec. Industrial</option>
              	<option value="Ingenier&iacute;a en Prevenci&oacute;n de Riesgos">Ing. en Prevenci&oacute;n de Riesgos</option>
              	<option value="Ingenier&iacute;a Ejec. en Inform&aacute;tica">Ing. Ejec. en Inform&aacute;tica</option>
              	<option value="Ingenier&iacute;a Ejec. en Redes Menci&oacute;n Telecomunicaciones">
              		Ing. Ejec. en Redes Menci&oacute;n Telecomunicaciones
              	</option>
              </select>
            </td>
          </tr>
          <tr>
          	<td class="titulo_campo">Consulta:</td>
          </tr>
          <tr>
            <td>
              <textarea id="mensaje" name="mensaje" cols="15" rows="8" wrap="virtual"></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:center;">
              <a href="javascript:void(0);" id="enviar" onClick="validar();">
                <div class="btn_enviar"></div>
              </a>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div><!-- /contacto_email -->
<!-- /FORMULARIO DE CONTACTO -->

</aside><!-- /sidebar -->