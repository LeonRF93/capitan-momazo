-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 04:05:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capitan_momazo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historietas`
--

CREATE TABLE `historietas` (
  `Id_Historieta` int(10) NOT NULL,
  `nombre_historieta` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `year` int(4) NOT NULL,
  `portada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historietas`
--

INSERT INTO `historietas` (`Id_Historieta`, `nombre_historieta`, `tipo`, `precio`, `editorial`, `stock`, `descripcion`, `year`, `portada`) VALUES
(1, 'One Piece', 'Manga', 15000, 'Shueisha', 40, 'Las aventuras de un joven pirata y su búsqueda del tesoro.', 1997, 'portadas/onepiece.jpeg'),
(2, 'Naruto', 'Manga', 14000, 'Shueisha', 35, 'Las aventuras de un joven ninja en busca de reconocimiento.', 1999, 'portadas/naruto.png'),
(3, 'Dragon Ball', 'Manga', 15000, 'Shueisha', 30, 'Las aventuras de un guerrero en su búsqueda de las esferas del dragón.', 1984, 'portadas/dragonball.png'),
(4, 'My Hero Academia', 'Manga', 14000, 'Shueisha', 30, 'Un joven con sueños de ser héroe en un mundo lleno de superpoderes.', 2014, 'portadas/mha.jpeg'),
(5, 'Attack on Titan', 'Manga', 12000, 'Kodansha', 25, 'La lucha de la humanidad contra gigantes devoradores.', 2009, NULL),
(6, 'Death Note', 'Manga', 10000, 'Shueisha', 40, 'Un joven encuentra un cuaderno que puede matar a cualquier persona cuyo nombre escriba en él.', 2003, NULL),
(7, 'Demon Slayer', 'Manga', 13000, 'Shueisha', 35, 'Un joven lucha contra demonios para salvar a su hermana.', 2016, NULL),
(8, 'Tokyo Ghoul', 'Manga', 11000, 'Shueisha', 30, 'La vida de un joven que se convierte en mitad ghoul y debe adaptarse a un nuevo mundo.', 2011, NULL),
(9, 'Fullmetal Alchemist', 'Manga', 13000, 'Square Enix', 30, 'La búsqueda de dos hermanos para recuperar lo que han perdido usando la alquimia.', 2001, NULL),
(10, 'One Punch Man', 'Manga', 10000, 'Shueisha', 35, 'Un héroe que derrota a todos sus enemigos de un solo golpe.', 2012, NULL),
(11, 'Bleach', 'Manga', 9000, 'Shueisha', 40, 'Las aventuras de un joven que se convierte en un Shinigami.', 2001, NULL),
(12, 'Fairy Tail', 'Manga', 12000, 'Kodansha', 30, 'Las aventuras de un gremio de magos.', 2006, NULL),
(13, 'Berserk', 'Manga', 15000, 'Hakusensha', 20, 'La historia de un guerrero en un mundo oscuro.', 1989, NULL),
(14, 'Slam Dunk', 'Manga', 9000, 'Shueisha', 50, 'La historia de un joven que se une a un equipo de baloncesto.', 1990, NULL),
(15, 'Cardcaptor Sakura', 'Manga', 9500, 'Kodansha', 45, 'Las aventuras de Sakura, una chica que captura cartas mágicas.', 1996, NULL),
(16, 'Kaguya-sama: Love Is War', 'Manga', 9500, 'Shueisha', 40, 'Una batalla de ingenio entre dos estudiantes que se enamoran.', 2015, NULL),
(17, 'Your Lie in April', 'Manga', 9500, 'Kodansha', 35, 'Una historia de amor y música entre dos jóvenes.', 2011, NULL),
(18, 'Nausicaä del Valle del Viento', 'Manga', 13000, 'Hayakawa Publishing', 35, 'Una chica lucha por proteger su mundo de la destrucción.', 1982, NULL),
(19, 'Made in Abyss', 'Manga', 13000, 'Kodansha', 20, 'Las aventuras de una niña y su amigo en un abismo misterioso.', 2012, NULL),
(20, 'Batman: Year One', 'Cómic', 9000, 'DC Comics', 50, 'La historia de los inicios de Batman en Gotham City.', 1987, NULL),
(21, 'Spider-Man: Homecoming', 'Cómic', 12000, 'Marvel Comics', 30, 'Las aventuras de Spider-Man mientras navega su vida como adolescente y superhéroe.', 2017, NULL),
(22, 'Blue Exorcist', 'Manga', 10000, 'Shueisha', 35, 'Un joven descubre que es el hijo de Satanás y lucha contra demonios.', 2009, NULL),
(23, 'Gintama', 'Manga', 9500, 'Shueisha', 40, 'Las locuras de un samurái en un mundo lleno de alienígenas.', 2004, NULL),
(24, 'Vinland Saga', 'Manga', 12000, 'Kodansha', 25, 'La historia de un joven guerrero vikingo.', 2005, NULL),
(25, 'Mob Psycho 100', 'Manga', 9500, 'Shogakukan', 40, 'Las aventuras de un joven psíquico.', 2012, NULL),
(26, 'Fairy Tail: 100 Years Quest', 'Manga', 9500, 'Kodansha', 40, 'Las nuevas aventuras del gremio Fairy Tail.', 2018, NULL),
(27, 'Tokyo Revengers', 'Manga', 11000, 'Kodansha', 30, 'Un joven viaja en el tiempo para salvar a su novia.', 2017, NULL),
(28, 'Noragami', 'Manga', 8000, 'Kodansha', 50, 'Las aventuras de un dios menor en busca de seguidores.', 2011, NULL),
(29, 'Shingeki no Kyojin: Before the Fall', 'Manga', 12000, 'Kodansha', 30, 'Una precuela del famoso Attack on Titan.', 2011, NULL),
(30, 'KonoSuba', 'Manga', 9000, 'KADOKAWA', 50, 'Las desventuras de un joven en un mundo de fantasía.', 2013, NULL),
(31, 'Jujutsu Kaisen', 'Manga', 10000, 'Shueisha', 35, 'Un joven se une a una escuela de hechicería para luchar contra maldiciones.', 2018, NULL),
(32, 'Fate/Zero', 'Manga', 12000, 'TYPE-MOON', 25, 'La historia de la guerra por el Santo Grial.', 2006, NULL),
(33, 'The Promised Neverland', 'Manga', 11000, 'Shueisha', 30, 'Un grupo de niños descubre un oscuro secreto.', 2016, NULL),
(34, 'Komi Can’t Communicate', 'Manga', 9000, 'Shogakukan', 50, 'La historia de una chica con problemas para comunicarse.', 2016, NULL),
(35, 'Parasyte', 'Manga', 12000, 'Kodansha', 25, 'Un joven lucha contra parásitos que controlan a los humanos.', 1988, NULL),
(36, 'Steins;Gate', 'Manga', 9500, 'Kadokawa', 40, 'Un grupo de amigos descubre cómo enviar mensajes al pasado.', 2010, NULL),
(37, 'Rave Master', 'Manga', 8000, 'Kodansha', 50, 'Un joven busca las piezas de un antiguo artefacto.', 2001, NULL),
(38, 'Horimiya', 'Manga', 9000, 'Square Enix', 45, 'La historia de amor entre dos estudiantes.', 2011, NULL),
(39, 'Nanbaka', 'Manga', 9500, 'Shueisha', 40, 'Las aventuras de prisioneros en una cárcel.', 2014, NULL),
(40, 'Ao Haru Ride', 'Manga', 9500, 'Shueisha', 40, 'Una historia de amor y amistad en la escuela secundaria.', 2011, NULL),
(41, 'Kaguya-sama: Love is War', 'Manga', 8500, 'Shueisha', 50, 'Una guerra de ingenio entre dos estudiantes que se enamoran.', 2015, NULL),
(42, 'Skip Beat!', 'Manga', 9500, 'Hakusensha', 40, 'La historia de una chica que busca venganza en la industria del entretenimiento.', 2002, NULL),
(43, 'Magi: The Labyrinth of Magic', 'Manga', 11000, 'Kodansha', 30, 'Las aventuras de Aladdin y sus amigos en un mundo mágico.', 2009, NULL),
(44, 'Kono Oto Tomare!', 'Manga', 8500, 'Shueisha', 50, 'Un grupo de estudiantes se une para aprender a tocar el koto.', 2012, NULL),
(45, 'Yona of the Dawn', 'Manga', 9000, 'Hakusensha', 40, 'La historia de una princesa que se convierte en guerrera.', 2009, NULL),
(46, 'Btooom!', 'Manga', 9500, 'Shogakukan', 40, 'Un joven es atrapado en un juego mortal.', 2009, NULL),
(47, 'Kimi ni Todoke', 'Manga', 9000, 'Shueisha', 40, 'La historia de una chica que lucha por hacer amigos.', 2005, NULL),
(48, 'Genshiken', 'Manga', 9000, 'Kodansha', 40, 'Un grupo de otakus explora la cultura del anime y manga.', 2002, NULL),
(49, 'Akame ga Kill!', 'Manga', 10000, 'Square Enix', 35, 'La lucha de un grupo de asesinos contra un imperio corrupto.', 2010, NULL),
(50, 'Golden Kamuy', 'Manga', 10000, 'Shueisha', 35, 'La búsqueda de un tesoro escondido en el norte de Japón.', 2014, NULL),
(51, 'Yu Yu Hakusho', 'Manga', 10000, 'Shueisha', 30, 'Las aventuras de un joven que se convierte en un detective del inframundo.', 1992, NULL),
(52, 'Kimi wa Petto', 'Manga', 8500, 'Shogakukan', 40, 'La historia de una mujer que vive con un hombre que actúa como su mascota.', 2000, NULL),
(53, 'Owari no Seraph', 'Manga', 11000, 'Kodansha', 30, 'Un mundo post-apocalíptico donde los vampiros dominan.', 2012, NULL),
(54, 'Karakai Jouzu no Takagi-san', 'Manga', 9000, 'Kodansha', 50, 'Las travesuras de dos estudiantes de secundaria que juegan a hacerse bromas.', 2013, NULL),
(55, 'Nana', 'Manga', 12000, 'Shōjo Beat', 35, 'La historia de dos chicas llamadas Nana que se convierten en mejores amigas.', 2002, NULL),
(56, 'Re:Zero - Starting Life in Another World', 'Manga', 10000, 'KADOKAWA', 30, 'Un joven es transportado a otro mundo y descubre un poder especial.', 2014, NULL),
(57, 'Akira', 'Manga', 15000, 'Kodansha', 40, 'Una historia de ciencia ficción post-apocalíptica en Tokio.', 1984, NULL),
(58, 'Hellboy', 'Cómic', 12000, 'Dark Horse Comics', 25, 'Las aventuras de un demonio que lucha contra criaturas sobrenaturales.', 1993, NULL),
(59, 'Sandman', 'Cómic', 15000, 'DC Comics', 30, 'La historia de Morfeo, el rey de los sueños.', 1989, NULL),
(60, 'Saga', 'Cómic', 13000, 'Image Comics', 40, 'Una épica de ciencia ficción sobre amor y guerra.', 2012, NULL),
(61, 'Locke & Key', 'Cómic', 13000, 'IDW Publishing', 30, 'Un grupo de hermanos enfrenta los secretos de su familia en una casa mágica.', 2008, NULL),
(62, 'The Walking Dead', 'Cómic', 12000, 'Image Comics', 50, 'La lucha de los sobrevivientes en un mundo infestado de zombis.', 2003, NULL),
(63, 'Ms. Marvel', 'Cómic', 10000, 'Marvel Comics', 40, 'La historia de una joven musulmana que se convierte en superhéroe.', 2014, NULL),
(64, 'Hellsing', 'Manga', 11000, 'Shōnen Jump', 25, 'Una organización que lucha contra vampiros en el Reino Unido.', 1997, NULL),
(65, 'Claymore', 'Manga', 9500, 'Shueisha', 35, 'Guerreras mitad humanas, mitad demonios luchan contra monstruos.', 2001, NULL),
(66, 'D.Gray-man', 'Manga', 10000, 'Shueisha', 30, 'Un joven exorcista lucha contra demonios en un mundo en guerra.', 2004, NULL),
(67, 'Skip Beat!', 'Manga', 9000, 'Hakusensha', 40, 'Una joven se convierte en actriz para vengarse de su exnovio.', 2002, NULL),
(68, 'Fairy Tail: 100 Years Quest', 'Manga', 9500, 'Kodansha', 40, 'Las nuevas aventuras del gremio Fairy Tail.', 2018, NULL),
(69, 'Your Name', 'Manga', 11000, 'Kodansha', 30, 'La historia de dos jóvenes que intercambian cuerpos.', 2016, NULL),
(70, 'Mob Psycho 100', 'Manga', 10000, 'Shogakukan', 35, 'Las aventuras de un joven psíquico en su vida cotidiana.', 2012, NULL),
(71, 'Bunny Drop', 'Manga', 9500, 'Enterbrain', 40, 'La vida de un hombre que se convierte en el cuidador de una niña.', 2005, NULL),
(72, 'Chobits', 'Manga', 9000, 'Kodansha', 40, 'Una historia de amor entre un hombre y una chica androide.', 2000, NULL),
(73, 'Tokyo Ghoul:re', 'Manga', 11000, 'Shueisha', 30, 'Continuación de la historia de Tokyo Ghoul con nuevos personajes.', 2014, NULL),
(74, 'One-Punch Man', 'Manga', 10000, 'Shueisha', 35, 'Las aventuras de un héroe que puede derrotar a cualquier enemigo de un solo golpe.', 2012, NULL),
(75, 'Seven Deadly Sins', 'Manga', 12000, 'Kodansha', 30, 'Un grupo de caballeros que luchan contra el mal.', 2012, NULL),
(76, 'Fruits Basket', 'Manga', 9500, 'Tokyopop', 50, 'La vida de una chica que se involucra con una familia maldita.', 1998, NULL),
(77, 'A Silent Voice', 'Manga', 9000, 'Kodansha', 40, 'Un joven busca redimirse por haber acosado a una niña sorda.', 2013, NULL),
(78, 'Toradora!', 'Manga', 9500, 'ASCII Media Works', 35, 'Una comedia romántica sobre un chico y una chica con problemas.', 2006, NULL),
(79, 'Land of the Lustrous', 'Manga', 10000, 'Kodansha', 30, 'Una historia sobre gemas que luchan contra seres misteriosos.', 2012, NULL),
(80, 'Bleach: Can´t Fear Your Own World', 'Manga', 9500, 'Shueisha', 40, 'Una historia alternativa en el mundo de Bleach.', 2016, NULL),
(81, 'The Boys', 'Cómic', 12000, 'Dynamite Entertainment', 30, 'Un grupo que controla a los superhéroes corruptos.', 2006, NULL),
(82, 'Invincible', 'Cómic', 13000, 'Image Comics', 30, 'Las aventuras de un joven superhéroe que descubre secretos sobre su familia.', 2003, NULL),
(83, 'Transmetropolitan', 'Cómic', 12000, 'DC Comics', 30, 'Un periodista en un futuro distópico.', 1997, NULL),
(84, 'The Flash: Rebirth', 'Cómic', 10000, 'DC Comics', 30, 'El regreso de un héroe veloz.', 2009, NULL),
(85, 'X-Men: Days of Future Past', 'Cómic', 12000, 'Marvel Comics', 30, 'Una historia en un futuro distópico con los X-Men.', 1981, NULL),
(86, 'Wonder Woman: Dead Earth', 'Cómic', 13000, 'DC Comics', 30, 'La historia de Wonder Woman en un mundo post-apocalíptico.', 2020, NULL),
(87, 'Green Lantern: Rebirth', 'Cómic', 10000, 'DC Comics', 30, 'El renacer de Green Lantern y su lucha contra el mal.', 2004, NULL),
(88, 'Deadpool: The Good, The Bad, and The Ugly', 'Cómic', 12000, 'Marvel Comics', 30, 'Las locuras de Deadpool en su búsqueda de redención.', 2013, NULL),
(89, 'Catwoman: When in Rome', 'Cómic', 11000, 'DC Comics', 30, 'Las aventuras de Catwoman en Roma.', 2005, NULL),
(90, 'Fables', 'Cómic', 12000, 'DC Comics', 30, 'Los personajes de cuentos de hadas viven en el mundo moderno.', 2002, NULL),
(91, 'Black Hole', 'Cómic', 13000, 'Drawn & Quarterly', 30, 'Un grupo de adolescentes se enfrenta a una enfermedad que causa mutaciones.', 2005, NULL),
(92, 'Hellblazer', 'Cómic', 11000, 'DC Comics', 30, 'Las aventuras de John Constantine, un detective de lo oculto.', 1988, NULL),
(93, 'Shutter', 'Cómic', 12000, 'Image Comics', 30, 'La historia de una fotógrafa en un mundo lleno de maravillas y peligros.', 2014, NULL),
(94, 'Sex Criminals', 'Cómic', 13000, 'Image Comics', 30, 'Dos personas que pueden detener el tiempo cuando tienen sexo.', 2013, NULL),
(95, 'Snotgirl', 'Cómic', 10000, 'Image Comics', 30, 'Las vivencias de una influencer con problemas de identidad.', 2016, NULL),
(96, 'Bitch Planet', 'Cómic', 12000, 'Image Comics', 30, 'Una distopía feminista en una prisión para mujeres no conformistas.', 2014, NULL),
(97, 'The Umbrella Academy', 'Cómic', 13000, 'Dark Horse Comics', 30, 'Un grupo de hermanos con habilidades especiales se reúnen tras la muerte de su padre.', 2007, NULL),
(98, 'American Vampire', 'Cómic', 12000, 'DC Comics', 30, 'La historia de vampiros a través de diferentes épocas de la historia.', 2010, NULL),
(99, 'Y: The Last Man', 'Cómic', 12000, 'Vertigo', 30, 'La historia de un hombre y su mascota que son los últimos sobrevivientes de un apocalipsis.', 2002, NULL),
(100, 'The Wicked + The Divine', 'Cómic', 13000, 'Image Comics', 30, 'Un grupo de dioses reencarnados como estrellas de pop que deben enfrentar su destino.', 2014, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_Pedido` int(10) NOT NULL,
  `ID_Usuario` int(10) NOT NULL,
  `ID_Historieta` int(10) NOT NULL,
  `Fecha_pedido` date DEFAULT NULL,
  `Fecha_entrega` date DEFAULT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Id_Pedido`, `ID_Usuario`, `ID_Historieta`, `Fecha_pedido`, `Fecha_entrega`, `cantidad`) VALUES
(2, 1, 23, '2024-01-16', '2024-01-21', 1),
(18, 2, 16, '2024-02-12', '2024-02-17', 5),
(17, 3, 31, '2024-02-11', '2024-02-16', 2),
(9, 4, 5, '2024-02-03', '2024-02-08', 3),
(1, 5, 12, '2024-01-15', '2024-01-20', 2),
(12, 6, 8, '2024-02-06', '2024-02-11', 1),
(11, 7, 3, '2024-02-05', '2024-02-10', 2),
(3, 8, 37, '2024-01-17', '2024-01-22', 3),
(14, 9, 11, '2024-02-08', '2024-02-13', 2),
(6, 10, 15, '2024-01-20', '2024-01-25', 2),
(10, 11, 2, '2024-02-04', '2024-02-09', 1),
(4, 12, 45, '2024-01-18', '2024-01-23', 1),
(15, 13, 18, '2024-02-09', '2024-02-14', 4),
(13, 14, 21, '2024-02-07', '2024-02-12', 3),
(8, 15, 34, '2024-02-02', '2024-02-07', 5),
(20, 16, 39, '2024-02-14', '2024-02-19', 1),
(19, 17, 33, '2024-02-13', '2024-02-18', 3),
(7, 18, 41, '2024-02-01', '2024-02-06', 1),
(16, 19, 27, '2024-02-10', '2024-02-15', 1),
(5, 20, 29, '2024-01-19', '2024-01-24', 4),
(21, 21, 28, '2024-02-15', '2024-02-20', 2),
(22, 22, 25, '2024-02-16', '2024-02-21', 4),
(23, 23, 10, '2024-02-17', '2024-02-22', 1),
(24, 24, 24, '2024-02-18', '2024-02-23', 3),
(25, 25, 19, '2024-02-19', '2024-02-24', 1),
(26, 26, 4, '2024-03-01', '2024-03-06', 2),
(27, 27, 1, '2024-03-02', '2024-03-07', 4),
(28, 28, 6, '2024-03-03', '2024-03-08', 1),
(29, 29, 42, '2024-03-04', '2024-03-09', 3),
(30, 30, 38, '2024-03-05', '2024-03-10', 5),
(31, 31, 30, '2024-03-06', '2024-03-11', 2),
(32, 32, 43, '2024-03-07', '2024-03-12', 1),
(33, 33, 14, '2024-03-08', '2024-03-13', 2),
(34, 34, 44, '2024-03-09', '2024-03-14', 4),
(35, 35, 40, '2024-03-10', '2024-03-15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `nombre_usuario`, `password`) VALUES
(1, 'SpidermanFan', 'WebShooter123'),
(2, 'SailorMoonLover', 'MoonTiaraMagic!'),
(3, 'BatmanWatcher', 'DarkKnight1989'),
(4, 'NarutoNinja', 'RamenLover!'),
(5, 'WonderWomanWarrior', 'AmazonianStrength'),
(6, 'OnePieceExplorer', 'PirateKingGolD!'),
(7, 'DragonBallFan', 'Kamehameha!'),
(8, 'XMenMutant', 'MutantPower99'),
(9, 'DaredevilDaredevil', 'BlindJustice!'),
(10, 'DeathNoteWatcher', 'ShinigamiPower!'),
(11, 'GokuUltraInstinct', 'SpiritBomb!'),
(12, 'HarleyQuinnFan', 'JokerLovesMe#'),
(13, 'AttackOnTitanFan', 'TitanSlayer!'),
(14, 'MangaMaster', 'OtakuLife@2024'),
(15, 'ThorHammerHero', 'Mjolnir!123'),
(16, 'SupermanFan', 'KryptonianStrength'),
(17, 'MyHeroAcademiaFan', 'PlusUltra@2024'),
(18, 'AvengersAssemble', 'InfinityWar!'),
(19, 'FairyTailMage', 'MagicPower!123'),
(20, 'YuGiOhDuelist', 'DuelMonsters@!'),
(21, 'BleachSoulReaper', 'Zangetsu!'),
(22, 'FlashSpeedster', 'FastestManAlive!'),
(23, 'WolverineClaw', 'Snikt!123'),
(24, 'OnePunchManFan', 'SaitamaPower@'),
(25, 'SpideySense', 'FriendlyNeighborhood!'),
(26, 'FullmetalAlchemist', 'AlchemyRules@2024'),
(27, 'VenomFan', 'SymbioteLife!'),
(28, 'ScoobyDooFan', 'MysteryMachine!'),
(29, 'JusticeLeagueHero', 'SuperPowerTeam!'),
(30, 'GothamGuardian', 'CrimeFighter@'),
(31, 'InuyashaFan', 'HalfDemonPower!'),
(32, 'SwordArtOnlineFan', 'VirtualReality@!'),
(33, 'DeathStarPilot', 'MayTheForceBeWithYou!'),
(34, 'NarutoSage', 'ShadowCloneJutsu!'),
(35, 'CaptainAmericaHero', 'ShieldOfJustice!'),
(36, 'MangaMagician', 'SpellCaster@2024'),
(37, 'AkiraFan', 'NeoTokyo!'),
(38, 'DeadpoolFan', 'MercWithAMouth!'),
(39, 'KonoSubaFan', 'Explosion@2024'),
(40, 'ZeldaHero', 'Triforce!'),
(41, 'PokemonTrainer', 'Pikachu!@'),
(42, 'TokyoGhoulFan', 'GhoulLife!'),
(43, 'BerserkFan', 'BrandOfSacrifice!'),
(44, 'GhibliLover', 'SpiritedAway@!'),
(45, 'JujutsuKaisenFan', 'CurseTechnique!'),
(46, 'BlackWidowHero', 'AssassinSkills!'),
(47, 'AvatarFan', 'WaterEarthFireAir!'),
(48, 'OnePunchHero', 'SeriousPunch!'),
(49, 'KenshinRurouni', 'BattousaiPower@'),
(50, 'GhibliMagic', 'CastleInTheSky@!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historietas`
--
ALTER TABLE `historietas`
  ADD PRIMARY KEY (`Id_Historieta`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD KEY `ID_Historieta` (`ID_Historieta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historietas`
--
ALTER TABLE `historietas`
  MODIFY `Id_Historieta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`Id_Usuario`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ID_Historieta`) REFERENCES `historietas` (`Id_Historieta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
