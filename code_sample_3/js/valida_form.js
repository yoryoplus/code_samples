function valida_form(){ 

	
if (document.form1.aps.value.length==0){
       alert("Tiene que escribir su nombre y apellidos")	        
       document.form1.apellido1.focus()
       return false;
    } 	
	
if (document.form1.dni.value.length==0){
       alert("Tiene que escribir su DNI")	        
       document.form1.apellido2.focus()
       return false;
    } 	
	
if (document.form1.edad.value.length==0){
       alert("Tiene que escribir su edad")	        
       document.form1.correo.focus()
       return false;
    } 
	
if (document.form1.genero.value.length==0){
       alert("Tiene que escribir su género")	        
       document.form1.dni.focus()
       return false;
    } 
	
if (document.form1.estudios.value == "Selecciona"){
       alert("Tiene que elegir estudios")	        
       document.form1.centro.focus()
       return false;
    } 
	
if (document.form1.profesion.value.length==0){
       alert("Tiene que escribir su profesion")	        
       document.form1.dni.focus()
       return false;
    } 
		
else {
	document.form1.submit();
	}

}//--FIN valida_form()--
