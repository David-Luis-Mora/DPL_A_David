
Debemos tener encendido el apache y el phpAdmin



Creamos el archivo insertar.php de esta forma

![alt text](imagenes/leer_insertar_update_delete/image-4.png)

Al ir a nuestro navegador se ejecutara nuestro php, se nos insertar el registro en nuestra base datos


![alt text](imagenes/leer_insertar_update_delete/image-2.png)


Vamos a nuestro phpAdmin y al mirar en la tabla de usuario vemos el registro en la base de datos

![alt text](imagenes/leer_insertar_update_delete/image-3.png)




A continuacion creamos el archivo leer.php como se muestra en la imagen


![alt text](imagenes/leer_insertar_update_delete/image.png)

Si vamos a nuestro navegador se nos mostra los dato de nuestra consulta
Se ve en el array el nombre de la persona, correo y fecha de cuando se creo


![alt text](imagenes/leer_insertar_update_delete/image-1.png)






El ultimo archivo que hay que crear es de update.php, como se muestra en la imagen. Lo que hace el codigo es buscar en la base de dato en la tabla users cambiarle el nombre a 'alex22' y el email a 'alex22@dominio.com' el registro con el id = 0

![alt text](imagenes/leer_insertar_update_delete/image-5.png)

En la imagen se muestra que dato tiene el registro en la tabla de users

![alt text](imagenes/leer_insertar_update_delete/image-7.png)

Si vamos en el navegador, se ejecutara el archivo haciendonos ver como se ve en la imagen

![alt text](imagenes/leer_insertar_update_delete/image-6.png)

Al volver a nuestra base de dato se ve que el registro se ha modificado a los cambios correspondiente
![alt text](imagenes/leer_insertar_update_delete/image-8.png)



En el mismo archivo para poder hacer la eliminacion hay que hacer pequeños cambios como se ve en la imagen. Tendremos que tener el codigo como se ve en la imagen

![alt text](imagenes/leer_insertar_update_delete/image-9.png)

Al ir al navegador se nos ejecutar el archivo y se vera como se ve en la imagen

![alt text](imagenes/leer_insertar_update_delete/image-10.png)

Si volvemos a consultar la tabla de users en la base de dato el registro ya no esta. Se abra ejecutado corectamente

![alt text](imagenes/leer_insertar_update_delete/image-11.png)










































