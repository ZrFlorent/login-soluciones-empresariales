<?php
    $imagen = new App\Image(['url'=>'img/avatar.png']);
    $usuario = App\User::find(1);
    $usuario -> image()->save($imagen);
   
    return $usuario;



 $usuario = App\User::find(1);
 $image = $usuario -> image;
 if($image){
     echo 'Tiene una imagen';
 }else{
     echo 'No tiene una imagen';
 }
 return $image;

 $usuario = App\User::find(1);
 return $usuario ->image->url;




$producto = App\Product::find(1);
$producto->images()->saveMany([
    new App\Image(['url'=> 'img/avatar.png']),
    new App\Image(['url'=> 'img/avatar2.png']),
    new App\Image(['url'=> 'img/avatar3.png']),


]);
return $producto->images;



$usuario = App\User::find(1);
$usuario -> image()->create([
    'url' => 'img/avatar2.png',
]);

return $usuario;






$imagen = [];
$imagen['url'] ='img/avatar3';
$usuario = App\User::find(2);
$usuario ->image()->create($imagen);
return $usuario;



//Actualizar imagen del usuaroio
$usuario = App\User::find(1);
    $usuario ->image->url= 'img/avatar.png' ;
    $usuario->push();
    return $usuario ->image;


/* Actualizar la imagen de un producto d¿en especiico dentro de un array dd imagenes pertenecientes al mimo productp */
    $producto = App\Product::find(1);
    $producto->images[0 ]->url='img/avatar3.png';
    $producto->push();
  
    return $producto->images;
  

/* Buscar un registro relacionado a la imagen */
    
$imagen = App\Image::find(16);
return $imagen -> imageable;





/* Delimitar los registros */
$producto = App\Product::find(2);
// return $producto -> images; Trae todo
return $producto -> images()->where('url','img/avatar.png')->get();






/* Ordenar  los registros que provienen de las relaciones*/
$producto = App\Product::find(2);
// return $producto -> images; Trae todo
return $producto -> images()->where('url','img/avatar.png')->orderBy('id','Desc')->get();




/* Contar los registros relacionados a los usuarios */

   $usuario = App\User::withCount('image')->get();
    $usuario = $usuario->find(2);
    return $usuario->image_count; 






    /* Contar los registro relacionados a los producto */
    $producto = App\Product::withCount('images')->get();
    $producto = $producto->find(1);
    return $producto;


    /*Otra forma Contar los registro relacionados a los producto */

    $producto = App\Product::find('2');
    return $producto->loadCount('images');


/* carga previa de imagenes tipo  eager loading  */

    $producto = App\Product::with('images')->get();
    return $producto;




/* carga previa de imagenes tipo  eager loading  */

    $usuario = App\User::with('image')->get();
    return $usuario;



/* Carga previa de multiples relaciones de todos los productos */

    $producto= App\Product::with('images','category')->get();
return $producto;




/* Carga previa de multiples relaciones de un producto especifico    */


$producto= App\Product::with('images','category')->find(2);
return $producto;


/* Delimitar la carga de los campos al consultar la tabla */
$producto= App\Product::with('images:id,imageable_id,url','category:id,nombre,slug')->find(2);
return $producto;


/* Eliminar un registro especifico (imagen) relacionada al producto */
$producto = App\Product::find(2);
$producto -> images[0]->delete();
 return $producto; 



 /* Eliminar todos lo registros (imagenes) relacionada al producto */
$producto = App\Product::find(2);
$producto -> images()->delete();
 return $producto; 










