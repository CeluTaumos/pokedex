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
(1, 'Bulbasaur',"...","bd/tipos/planta.png","bd/foto/001.png"),
(2, 'Ivysaur',"...","bd/tipos/planta.png" ,"bd/foto/002.png"),
(3, 'Venusaur',"...","bd/tipos/planta.png","bd/foto/003.png"),
(4, 'Charmander',"...","bd/tipos/fuego.png" ,"bd/foto/004.png"),
(5, 'Charmeleon',"...","bd/tipos/fuego.png","bd/foto/005.png"),
(6, 'Charizard',"...","bd/tipos/fuego.png","bd/foto/006.png"),
(7, 'Squirtle',"...","bd/tipos/agua.png" ,"bd/foto/007.png"),
(8, 'Wartortle',"...","bd/tipos/agua.png" ,"bd/foto/008.png"),
(9, 'Blastoise',"...","bd/tipos/agua.png" ,"bd/foto/009.png"),
(10, 'Caterpie',"...","bd/tipos/bicho.png","bd/foto7010.png"),
(11, 'Metapod',"...","bd/tipos/bicho.png" ,"bd/foto/009.png"),
(12, 'Butterfree',"...","bd/tipos/bicho.png" ,"bd/foto/009.png"),
(13, 'Weedle',"...","bd/tipos/bicho.png" ,"bd/foto/009.png"),
(14, 'Kakuna',"...","bd/tipos/bicho.png" ,"bd/foto/009.png"),
(15, 'Beedrill',"...","bd/tipos/bicho.png" ,"bd/foto/009.png"),
(16, 'Pidgey',"...","bd/tipos/volador.png" ,"bd/foto/009.png"),
(17, 'Pidgeotto',"...","bd/tipos/volador.png" ,"bd/foto/009.png"),
(18, 'Pidgeot',"...","bd/tipos/volador.png" ,"bd/foto/009.png"),
(19, 'Rattata',"...","bd/tipos/normal.png" ,"bd/foto/009.png"),
(20, 'Raticate',"...","bd/tipos/normal.png" ,"bd/foto/009.png"),
(21, 'Spearow',"...","bd/tipos/volador.png" ,"bd/foto/009.png"),
(22, 'Fearow',"...","bd/tipos/volador.png" ,"bd/foto/009.png"),
(23, 'Ekans',"...","bd/tipos/veneno.png" ,"bd/foto/009.png"),
(24, 'Arbok',"...","bd/tipos/veneno.png" ,"bd/foto/009.png"),
(25, 'Pikachu',"...","bd/tipos/electrico.png" ,"bd/foto/009.png");
/*(26, 'Raichu',"...","bd/tipos/electrico.png" ,".\bd\foto\009.png"),
(27, 'Sandshrew',"...","bd/tipos/roca.png" ,".\bd\foto\009.png"),
(28, 'Sandslash',"...","bd/tipos/roca.png" ,".\bd\foto\009.png"),
(29, 'Nidoran-F',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(30, 'Nidorina',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(31, 'Nidoqueen',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(32, 'Nidoran-M',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(33, 'Nidorino',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(34, 'Nidoking',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(35, 'Clefairy',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(36, 'Clefable',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(37, 'Vulpix',"...","bd/tipos/fuego.png" ,".\bd\foto\009.png"),
(38, 'Ninetales',"...","bd/tipos/fuego.png" ,".\bd\foto\009.png"),
(39, 'Jigglypuff',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(40, 'Wigglytuff',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(41, 'Zubat',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(42, 'Golbat',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(43, 'Oddish',"...","bd/tipos/planta.png" ,".\bd\foto\009.png"),
(44, 'Gloom',"...","bd/tipos/planta.png" ,".\bd\foto\009.png"),
(45, 'Vileplume',"...","bd/tipos/planta.png" ,".\bd\foto\009.png"),
(46, 'Paras',"...","bd/tipos/bicho.png" ,".\bd\foto\009.png"),
(47, 'Parasect',"...","bd/tipos/bicho.png" ,".\bd\foto\009.png"),
(48, 'Venonat',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(49, 'Venomoth',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(50, 'Diglett',"...","bd/tipos/roca.png" ,".\bd\foto\009.png"),
(51, 'Dugtrio',"...","bd/tipos/roca.png" ,".\bd\foto\009.png"),
(52, 'Meowth',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(53, 'Persian',"...","bd/tipos/normal.png" ,".\bd\foto\009.png"),
(54, 'Psyduck',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(55, 'Golduck',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(56, 'Mankey',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(57, 'Primeape',"...","bd/tipos/veneno.png" ,".\bd\foto\009.png"),
(58, 'Growlithe',"...","bd/tipos/fuego.png" ,".\bd\foto\009.png"),
(59, 'Arcanine',"...","bd/tipos/fuego.png" ,".\bd\foto\009.png"),
(60, 'Poliwag',"...","bd/tipos/agua.png" ,".\bd\foto\009.png");
*/