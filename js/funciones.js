//Función que elimina los espacios al principio y al final de un texto
function trim(texto)
{
  return texto.replace(/\s+/g, '');
}

function validarEmail(mail)
{
	var exr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return exr.test(mail);
}

function soloNumeros(eventObj)
{
	var keycode;
	
	//IE
	if(eventObj.keyCode)
	{
		keycode = eventObj.keyCode;
	}
	//FIREFOX
	else if(eventObj.Which)
	{
		keycode = eventObj.Which;
	}
	//OTROS BROWSERS
	else
	{
		keycode = eventObj.charCode;
	}
	
	if(keycode != 8)
	{
		//Si no es un número se deshabilita
		if(keycode < 48 || keycode > 57)
		{
			if(keycode == 9)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return true;
		}
	}        
}

function validar()
{
	var nombre = document.getElementById('nombre');
	var mail = document.getElementById('mail');
	var telefono = document.getElementById('telefono');
	var mensaje = document.contacto.mensaje;
	
	if(trim(nombre.value) == '')
	{
		alert('Por favor ingresa tu nombre');
		nombre.value = '';
		nombre.focus();
	}
	else if(trim(mail.value) == '')
	{
		alert('Por favor ingresa tu mail');
		mail.value = '';
		mail.focus();
	}
	else if(validarEmail(mail.value) == false)
	{
		alert('Por favor ingresa un mail válido');
		mail.focus();
	}
	else if(trim(telefono.value) == '')
	{
		alert('Por favor ingresa tu teléfono');
		telefono.value = '';
		telefono.focus();
	}
	else if(trim(mensaje.value) == '')
	{
		alert('Por favor ingresa una consulta');
		mensaje.value = '';
		mensaje.focus();
	}
	else
	{
		document.getElementById('contacto').submit();
	}
}