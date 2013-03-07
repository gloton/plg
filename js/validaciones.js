//valida el ingreso de solo texto





function validar(e) {





    tecla = (document.all)?e.keyCode:e.which;





    if (tecla==8) return true;





    patron = /\D/;





    te = String.fromCharCode(tecla);





    return patron.test(te); 





} 





function valida_correo(correo) {





    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){





     //   alert("verdadero");





     //return (true)





    } else {





    	alert("El email ingresado no es válido");





     //return (false);





    }





   }





