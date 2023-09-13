-- creo la base de datos
CREATE DATABASE Pokedex;
use Pokedex;

-- creo la tabla
CREATE TABLE Pokemon (
  Numero int(11) NOT NULL,
  Nombre varchar(30) NOT NULL,
  Descripcion varchar(150) NOT NULL,
  Tipo varchar (100) NOT NULL,
  Imagen varchar (100) NOT NULL
);

-- Volcado de datos

INSERT INTO Pokemon(Numero, Nombre, descripcion, Tipo, Imagen) VALUES
(1, 'Bulbasaur',"...",".\bd\tipos\planta.png",".\bd\foto\001.png"),
(2, 'Ivysaur',"...",".\bd\tipos\planta.png" ,".\bd\foto\002.png"),
(3, 'Venusaur',"...",".\bd\tipos\planta.png",".\bd\foto\003.png"),
(4, 'Charmander',"...",".\bd\tipos\fuego.png" ,".\bd\foto\004.png"),
(5, 'Charmeleon',"...",".\bd\tipos\fuego.png",".\bd\foto\005.png"),
(6, 'Charizard',"...",".\bd\tipos\fuego.png",".\bd\foto\006.png"),
(7, 'Squirtle',"...",".\bd\tipos\agua.png" ,".\bd\foto\007.png"),
(8, 'Wartortle',"...",".\bd\tipos\agua.png" ,".\bd\foto\008.png"),
(9, 'Blastoise',"...",".\bd\tipos\agua.png" ,".\bd\foto\009.png"),
(10, 'Caterpie',"...",".\bd\tipos\bicho.png",".\bd\foto\010.png"),
(11, 'Metapod',"...",".\bd\tipos\bicho.png" ,".\bd\foto\009.png"),
(12, 'Butterfree',"...",".\bd\tipos\bicho.png" ,".\bd\foto\009.png"),
(13, 'Weedle',"...",".\bd\tipos\bicho.png" ,".\bd\foto\009.png"),
(14, 'Kakuna',"...",".\bd\tipos\bicho.png" ,".\bd\foto\009.png"),
(15, 'Beedrill',"...",".\bd\tipos\bicho.png" ,".\bd\foto\009.png"),
(16, 'Pidgey',"...",".\bd\tipos\volador.png" ,".\bd\foto\009.png"),
(17, 'Pidgeotto',"...",".\bd\tipos\volador.png" ,".\bd\foto\009.png"),
(18, 'Pidgeot',"...",".\bd\tipos\volador.png" ,".\bd\foto\009.png"),
(19, 'Rattata',"...",".\bd\tipos\normal.png" ,".\bd\foto\009.png"),
(20, 'Raticate',"...",".\bd\tipos\normal.png" ,".\bd\foto\009.png"),
(21, 'Spearow',"...",".\bd\tipos\volador.png" ,".\bd\foto\009.png"),
(22, 'Fearow',"...",".\bd\tipos\volador.png" ,".\bd\foto\009.png"),
(23, 'Ekans',"...",".\bd\tipos\veneno.png" ,".\bd\foto\009.png"),
(24, 'Arbok',"...",".\bd\tipos\veneno.png" ,".\bd\foto\009.png"),
(25, 'Pikachu',"...",".\bd\tipos\electrico.png" ,".\bd\foto\009.png"),
(26, 'Raichu',"...",".\bd\tipos\electrico.png" ,".\bd\foto\009.png"),
(27, 'Sandshrew',"...",".\bd\tipos\roca.png" ,".\bd\foto\009.png"),
(28, 'Sandslash',"...",".\bd\tipos\roca.png" ,".\bd\foto\009.png"),
(29, 'Nidoran',"...",".\bd\tipos\veneno.png" ,".\bd\foto\009.png"),
(30, 'Nidorina',"...",".\bd\tipos\veneno.png" ,".\bd\foto\009.png");
