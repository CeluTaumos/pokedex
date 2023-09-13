-- creo la base de datos
CREATE DATABASE Pokedex;
use Pokedex;

-- creo la tabla
CREATE TABLE Pokemon (
  Numero INT(151) NOT NULL,
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
(10, 'Caterpie',"...","bd/tipos/bicho.png","bd/foto/010.png"),
(11, 'Metapod',"...","bd/tipos/bicho.png" ,"bd/foto/011.png"),
(12, 'Butterfree',"...","bd/tipos/bicho.png" ,"bd/foto/012.png"),
(13, 'Weedle',"...","bd/tipos/bicho.png" ,"bd/foto/013.png"),
(14, 'Kakuna',"...","bd/tipos/bicho.png" ,"bd/foto/014.png"),
(15, 'Beedrill',"...","bd/tipos/bicho.png" ,"bd/foto/015.png"),
(16, 'Pidgey',"...","bd/tipos/volador.png" ,"bd/foto/016.png"),
(17, 'Pidgeotto',"...","bd/tipos/volador.png" ,"bd/foto/017.png"),
(18, 'Pidgeot',"...","bd/tipos/volador.png" ,"bd/foto/018.png"),
(19, 'Rattata',"...","bd/tipos/normal.png" ,"bd/foto/019.png"),
(20, 'Raticate',"...","bd/tipos/normal.png" ,"bd/foto/020.png"),
(21, 'Spearow',"...","bd/tipos/volador.png" ,"bd/foto/021.png"),
(22, 'Fearow',"...","bd/tipos/volador.png" ,"bd/foto/022.png"),
(23, 'Ekans',"...","bd/tipos/veneno.png" ,"bd/foto/023.png"),
(24, 'Arbok',"...","bd/tipos/veneno.png" ,"bd/foto/024.png"),
(25, 'Pikachu',"...","bd/tipos/electrico.png" ,"bd/foto/025.png");
/*(26, 'Raichu',"...","bd/tipos/electrico.png" ,".\bd\foto\025.png"),
(27, 'Sandshrew',"...","bd/tipos/roca.png" ,".\bd\foto\026.png"),
(28, 'Sandslash',"...","bd/tipos/roca.png" ,".\bd\foto\027.png"),
(29, 'Nidoran-F',"...","bd/tipos/veneno.png" ,".\bd\foto\028.png"),
(30, 'Nidorina',"...","bd/tipos/veneno.png" ,".\bd\foto\029.png"),
(31, 'Nidoqueen',"...","bd/tipos/veneno.png" ,".\bd\foto\030.png"),
(32, 'Nidoran-M',"...","bd/tipos/veneno.png" ,".\bd\foto\031.png"),
(33, 'Nidorino',"...","bd/tipos/veneno.png" ,".\bd\foto\032.png"),
(34, 'Nidoking',"...","bd/tipos/veneno.png" ,".\bd\foto\033.png"),
(35, 'Clefairy',"...","bd/tipos/normal.png" ,".\bd\foto\034.png"),
(36, 'Clefable',"...","bd/tipos/normal.png" ,".\bd\foto\035.png"),
(37, 'Vulpix',"...","bd/tipos/fuego.png" ,".\bd\foto\036.png"),
(38, 'Ninetales',"...","bd/tipos/fuego.png" ,".\bd\foto\037.png"),
(39, 'Jigglypuff',"...","bd/tipos/normal.png" ,".\bd\foto\038.png"),
(40, 'Wigglytuff',"...","bd/tipos/normal.png" ,".\bd\foto\039.png"),
(41, 'Zubat',"...","bd/tipos/veneno.png" ,".\bd\foto\040.png"),
(42, 'Golbat',"...","bd/tipos/veneno.png" ,".\bd\foto\041.png"),
(43, 'Oddish',"...","bd/tipos/planta.png" ,".\bd\foto\042.png"),
(44, 'Gloom',"...","bd/tipos/planta.png" ,".\bd\foto\043.png"),
(45, 'Vileplume',"...","bd/tipos/planta.png" ,".\bd\foto\044.png"),
(46, 'Paras',"...","bd/tipos/bicho.png" ,".\bd\foto\045.png"),
(47, 'Parasect',"...","bd/tipos/bicho.png" ,".\bd\foto\046.png"),
(48, 'Venonat',"...","bd/tipos/veneno.png" ,".\bd\foto\047.png"),
(49, 'Venomoth',"...","bd/tipos/veneno.png" ,".\bd\foto\048.png"),
(50, 'Diglett',"...","bd/tipos/roca.png" ,".\bd\foto\049.png"),
(51, 'Dugtrio',"...","bd/tipos/roca.png" ,".\bd\foto\050.png"),
(52, 'Meowth',"...","bd/tipos/normal.png" ,".\bd\foto\051.png"),
(53, 'Persian',"...","bd/tipos/normal.png" ,".\bd\foto\052.png"),
(54, 'Psyduck',"...","bd/tipos/veneno.png" ,".\bd\foto\053.png"),
(55, 'Golduck',"...","bd/tipos/veneno.png" ,".\bd\foto\054.png"),
(56, 'Mankey',"...","bd/tipos/veneno.png" ,".\bd\foto\055.png"),
(57, 'Primeape',"...","bd/tipos/veneno.png" ,".\bd\foto\056.png"),
(58, 'Growlithe',"...","bd/tipos/fuego.png" ,".\bd\foto\057.png"),
(59, 'Arcanine',"...","bd/tipos/fuego.png" ,".\bd\foto\058.png"),
(60, 'Poliwag',"...","bd/tipos/agua.png" ,".\bd\foto\059.png");*/

