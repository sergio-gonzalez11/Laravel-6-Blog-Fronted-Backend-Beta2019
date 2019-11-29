<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\User;
use App\Category;
use App\Comment;
use App\Post;
use App\State;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // Evita duplicar datos

        //User::truncate();
        
        $user = new User();
        $user->name = "sergio";
        $user->last_name = "ruano";
        $user->image = "uploads/user1.jpg";
        $user->email = "sergio@hotmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "luis";
        $user->last_name = "suarez";
        $user->image = "uploads/user2.jpg";
        $user->email = "aa@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "Alexia";
        $user->last_name = "martínez";
        $user->image = "uploads/user3.jpg";
        $user->email = "alexia@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "Carmen";
        $user->last_name = "perez";
        $user->image = "uploads/user4.jpg";
        $user->email = "carmen@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "Sandra";
        $user->last_name = "González";
        $user->image = "uploads/avatar-3.jpg";
        $user->email = "sandra@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "Leo";
        $user->last_name = "Scaloni";
        $user->image = "uploads/avatar-2.jpg";
        $user->email = "leo@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();


        //Category::truncate(); // Evita duplicar datos

        $category = new Category();
        $category->name_category = "viajes";
        $category->save();

        $category = new Category();
        $category->name_category = "festivales";
        $category->save();

        $category = new Category();
        $category->name_category = "playas";
        $category->save();

        $category = new Category();
        $category->name_category = "gastronomía";
        $category->save();


        $state = new State();
        $state->id = 1;
        $state->name = "Publicado";
        $state->save();

        $state = new State();
        $state->id = 2;
        $state->name = "Despublicado";
        $state->save();


        //Post::truncate(); // Evita duplicar datos

        $post = new Post();
        $post->image = "uploads/tongariro.jpg";
        $post->title = "Nueva Zelanda en 36 días";
        $post->description_post = "Este viaje a Nueva Zelanda en 36 días nos llevará a conocer el País de la Nube Blanca y adentrarnos en uno de los destinos más increíbles y soñados por los viajeros.
        Relativamente pequeño, Nueva Zelanda cuenta con una población de poco más de cuatro millones de habitantes, algo que también lo hace un país poco poblado, en el que su mayor atractivo está en la diversidad de paisajes que posee, que convierten cualquier viaje a Nueva Zelanda, en un momento único e inolvidable.
        Además de esta increíble variedad de paisajes, entre los que destacan increíbles lagos, bosques, montañas, playas infinitas y fiordos épicos, en Nueva Zelanda destaca la facilidad para viajar, sea cuál sea tu condición.
        Extremadamente preparada para recorrerla sobre ruedas, no podemos olvidar que es uno de los mejores viajes en autocaravana del mundo, Nueva Zelanda es conocida también por ser un país tranquilo, en el que todo funciona correctamente y en el que la seguridad es la gran protagonista.
        Si estás interesado en hacer este tipo de viaje, te recomendamos mirar la página Motorhome Republic en la que podrás ver todas las opciones disponibles, los precios y hacer la reserva directamente.
        
        Antes de empezar a planificar el viaje a Nueva Zelanda es importante conocer algunos datos muy básicos, como que este está formado por dos islas principales; la Isla Norte y la Isla Sur, pobladas en sus inicios por maoríes para después, en el año 1840 pasar a ser colonia británica hasta el año 1907, en el que Nueva Zelanda volvió a ser independiente.

        Aunque podríamos decir que cualquier época es perfecta para un viaje a Nueva Zelanda, es necesario saber que debido a su ubicación geográfica, las estaciones son invertidas a las de España. Es decir, los meses más calurosos en Nueva Zelanda son enero y febrero, mientras que los más fríos se sitúan entre los meses de junio y julio.
        A parte de este aspecto, también conviene determinar que tipo de actividades quieras realizar en el destino, ya que según estas, habrá una época más adecuada que otra para realizar el viaje a Nueva Zelanda.
        – Temporada alta (diciembre-febrero): La temporada alta en Nueva Zelanda coincide con los meses de verano, en los que el buen tiempo y el sol son los grandes protagonistas. Hay que tener en cuenta que con esto también se disparan los precios, tanto de alojamientos como alquiler de coche o alquiler de autocaravana y los lugares que ver en Nueva Zelanda imprescindibles, suelen estar mucho más frecuentados.
        – Temporada media (marzo-abril, septiembre-noviembre): La temporada media en Nueva Zelanda comprende las épocas de primavera y otoño, cuando el tiempo suele ser estable y benigno y los colores típicos de estos momentos del año, tiñen los paisajes más característicos del país.
        Aunque los precios son más bajos que en temporada alta, últimamente estos no tienen bajadas muy significativas, por lo que merece la pena reservar con antelación el alojamiento, el coche o la autocaravana.
        Lo mejor de planear un viaje a Nueva Zelanda en esta época además del tiempo, es la posibilidad de ver los lugares de interés sin mucho turismo, algo que en Nueva Zelanda, es un auténtico privilegio.
        – Temporada baja (mayo-agosto): Empieza el invierno y el frío en Nueva Zelanda. Según el tipo de viaje o actividades que quieras hacer, este puede ser el mejor momento para viajar a Nueva Zelanda. Precios mucho más ajustados, poca gente y los paisajes más extremos.
        
        Pese a todo lo dicho anteriormente, algo importante es saber que en Nueva Zelanda el tiempo suele ser imprevisible, pudiéndote encontrar las 4 estaciones del año en un solo día. Teniendo esto en mente, merece la pena contar con algún día extra o un plan B en tu viaje a Nueva Zelanda para poder adaptarte al tiempo en caso de que este no sea el esperado o el idóneo para realizar alguna actividad.";
        $post->recomendations = "sublime";
        // $post->date = Carbon::now();
        $post->user_id = 1;
        $post->category_id = 1;
        $post->state_id = 1;
        $post->save();


        $post = new Post();
        $post->image = "uploads/marina-bay-sands-museo-ciencia-arte.jpg";
        $post->title = "Singapur en 6 días";
        $post->description_post = "Este Singapur en 6 días nos llevará a conocer por fin, uno de los rincones del mundo que más ganas teníamos de disfrutar y que siempre, por un motivo u otro, habíamos ido dejando pasar. Con 63 islas, Singapur su capital, es la ciudad perfecta para pasar unos días, ya sea como viaje único o como escala entre vuelos y es la que nosotros visitaremos y conoceremos durante 4 días completos.

        Conocido por muchos como uno de los países más ricos del mundo y su capital como una de las ciudades más caras, Singapur es un lugar en continuo movimiento, que parece aspirar a convertirse en la primera ciudad de Asia, mostrando infinidad de matices, muchas veces enfrentados, entre los que destacan la increíble riqueza cultural fruto de su población multirracial, con la opulencia propia de uno de los países más ricos del mundo..";
        $post->recomendations = "exagerao";
        // $post->date = Carbon::now();
        $post->user_id = 4;
        $post->category_id = 1;
        $post->state_id = 2;
        $post->save();



        $post = new Post();
        $post->image = "uploads/big-ben-cabina-londres.jpg";
        $post->title = "Guía de viaje a Londres";
        $post->description_post = "Aunque tal y como pasa en muchas ciudades europeas, podríamos decir que cualquier momento es bueno para hacer una escapada a Londres, hay ciertos matices importantes que deberías tener en cuenta si quieres disfrutar al máximo de la ciudad.

        Temporada alta: Comprendida entre los meses de junio y mediados de septiembre, estos son los meses en los que viajan más turísticas a Londres, los precios son más altos, pero también el clima suele ser más bueno, incluyendo días más cálidos y con menos precipitaciones.
        Otra época que se incluye en la temporada alta es el periodo de la Navidad, momento en el que la ciudad se engalana de luces y árboles para vivir estos días de la manera más mágica.
        Temporada media: La primavera y el otoño son momentos en los que las lluvias y los cielos grises suelen estar más presentes, aunque también hay menos turistas y los precios suelen ser más ajustados. Si no te importa conocer la ciudad con cierto riesgo de precipitaciones, sin lugar a dudas, viajar a Londres en esta época es un acierto.
        Temporada baja: Los meses que comprende el invierno, son los más duros para visitar Londres. Con bajas temperaturas, precipitaciones habituales e incluso nieve, enero y febrero serían los meses menos recomendables para hacer un viaje a Londres.";
        $post->recomendations = "Si no quieres pagar comisiones al sacar dinero de los cajeros y tener siempre el cambio actual, te recomendamos utilizar la tarjeta N26 para pagar y la tarjeta BNEXT para sacar dinero, nuestras dos tarjetas favoritas para viajar.";
        // $post->date = Carbon::now();
        $post->user_id = 6;
        $post->category_id = 1;
        $post->state_id = 1;
        $post->save();


        $post = new Post();
        $post->image = "uploads/tailandia.jpg";
        $post->title = "Guía de viaje a Tailandia";
        $post->description_post = "Podríamos decir, sin temor a equivocarnos, que se puede viajar a Tailandia en cualquier época del año y disfrutarlo al máximo. Pero entendemos que una respuesta tan extensa y poco definida de poco te puede ayudar, así que vamos a hacer un resumen, por zonas más turísticas del país, según los mejores momentos para viajar, teniendo en cuenta sobre todo, las épocas del monzón.

        Zona norte: Chiang Mai y Chiang Rai
        En esta zona del país, podríamos decir a nivel general que los meses de marzo a junio son los más calurosos, seguidos de la época de julio a septiembre que son los más lluviosos y de octubre a febrero, los más frescos, aunque se alcanzar temperaturas siempre superiores a los 25 grados.
        
        Teniendo todo lo anterior en cuenta, creemos que los meses de noviembre y diciembre son los mejores para viajar el norte de Tailandia, algo que lo hace uno de los mejores viajes para otoño.
        
        Zona este: Koh Samui, Koh Phangan, Koh Tao
        En esta zona de la costa de Tailandia, los meses más calurosos son de abril a septiembre, seguidos de la época más lluviosa del año, que son los meses de octubre y noviembre y la época más fría que suele ir desde diciembre a febrero.
        
        Con estos datos, la mejor época para hacer un viaje a la zona este de Tailandia sería entre los meses de diciembre y marzo, cuando llueve menos y las temperaturas son más benignas.
        
        Zona oeste: Phuket, Krabi y la zona del Mar de Andaman
        La zona oeste de Tailandia podríamos dividirla en dos épocas bien diferenciadas. De mayo a octubre, que es la época de lluvias, sobre todo en julio y agosto, y el resto del año, en el que las son mucho menos frecuentes.
        Con estas consideraciones, la mejor época para viajar a la zona oeste de Tailandia, sería entre los meses de diciembre a marzo, especialmente en diciembre y enero, que son meses en los que no hace un calor muy sofocante y son perfectos para disfrutar de largas jornadas en la playa.";
        $post->recomendations = "Si quieres tener internet en Tailandia una buena opción es comprar una tarjeta SIM de Holafly, con la que tendrás internet desde el momento en el que aterrices, varios Gb de datos, conservando tu número de WhatsApp y servicio de asistencia en español";
        // $post->date = Carbon::now();
        $post->user_id = 1;
        $post->category_id = 1;
        $post->state_id = 2;
        $post->save();

        
        $post = new Post();
        $post->image = "uploads/Festivales-primavera-2019.png";
        $post->title = "Spring Festival";
        $post->description_post = "Otra de las grandes estrellas de esta primavera es el Spring Festival, que se celebra el fin de semana del 24 y 25 de mayo. Por sus escenarios pasarán los mejores artistas de indie, pop y por supuesto, lo último en moda, los ritmos urbanos. Además la música electrónica también estará presente en el festival. Este año nos traen una novedad, un nuevo espacio al aire libre que permitirá ampliar el aforo y además una mejora en el sonido.

        Pero esto no es todo amigos … además de conciertos de bandas tan conocidas como Love of Lesbian, Rozalén o Fangoria, habrá una serie de conciertos en la sala Stereo con las mejores bandas independientes de nuestro país, exposiciones y conciertos gratuitos por Alicante y … ¡ojo al dato! Rutas gastronómicas en las que podremos conocer los locales y restaurantes más atractivos y significativos de la ciudad.";
        $post->recomendations = "las mejores bandas independientes de nuestro país, exposiciones y conciertos gratuitos por Alicante";
        // $post->date = Carbon::now();
        $post->user_id = 2;
        $post->category_id = 2;
        $post->state_id = 1;
        $post->save();

        $post = new Post();
        $post->image = "uploads/Festivales-primavera-2019-4.jpg";
        $post->title = "Microsonidos 2019";
        $post->description_post = "Durante los meses de enero y abril en Murcia se celebra el festival Microsonidos 2019,  donde la ciudad un año más, tras un recorrido de 12 años, da el pistoletazo de salida a las noches de conciertos. Alrededor de 80 bandas de diferentes estilos musicales expondrán su música en 7 diferentes salas de Murcia durante nada mas y nada menos que 59 noches.

        El primer protagonista musical será el pop y el rock del panorama nacional, aunque bandas de gran nombre internacionales también tocarán durante este festival, sin por supuesto dejar atrás la música alternativa y los principales referentes musicales del país. Todos ellos se juntarán esta primavera para dejarnos alucinados durante 4 meses.";
        $post->recomendations = "7 diferentes salas de Murcia durante nada mas y nada menos que 59 noches.";
        // $post->date = Carbon::now();
        $post->user_id = 1;
        $post->category_id = 2;
        $post->state_id = 2;
        $post->save();

        $post = new Post();
        $post->image = "uploads/Festivales-primavera-2019-1.jpg";
        $post->title = "SanSan Festival";
        $post->description_post = "Otra de las fechas que todo festivalero debe tener apuntada en su agenda es la del SanSan Festival, donde durante el 18, 19 y 20 de abril, en plenas vacaciones de semana santa se da comienzo a la época de los festivales primaverales, y el San San de Benicásim hace los honores. Además de poder disfrutar de 3 días de conciertos non-stop, podremos disfrutar de la playa, gastronomía y unas vacaciones diferentes con nuestros amigos, familia o compañeros de clase.";
        $post->recomendations = "3 días de conciertos non-stop.";
        // $post->date = Carbon::now();
        $post->user_id = 3;
        $post->category_id = 2;
        $post->state_id = 1;
        $post->save();


        $post = new Post();
        $post->image = "uploads/Festivales-primavera-2019-2.jpg";
        $post->title = "Esmorga Fest";
        $post->description_post = "Lo que empezó siendo un cumpleaños a lo grande hoy es uno de los festivales más conocidos de la primavera en Galicia, estamos hablando del Esmorga Fest. Este festival se celebra durante los días 14 y 15 de marzo en Sarria, y lo mejorcito del panorama underground estará allí para todos los que quieran ir a una de las fiestas más divertidas de marzo. Si te mueres de ganas de empezar la época de festivales tienes que saber que en Lugo empiezan la época festivalera bien pronto … y lo hacen por todo lo alto ¿os lo vais a perder?";
        $post->recomendations = "Se celebra durante los días 14 y 15 de marzo en Sarria.";
        // $post->date = Carbon::now();
        $post->user_id = 4;
        $post->category_id = 2;
        $post->state_id = 2;
        $post->save();


        $post = new Post();
        $post->image = "uploads/DSC_0712-compressor-1024x680.jpg";
        $post->title = "Bocas del Toro – Panamá";
        $post->description_post = "Seguimos en Panamá. Pero ahora nos vamos hasta la frontera con Costa Rica. Es ahí donde está Bocas del Toro, una región ligada a los descubridores españoles incluso en su nombre o en el de las islas de la zona. Cadenero, Isla Colón o Isla Zapatilla son algunos de los lugares que se pueden conocer en Bocas del Toro.";
        $post->recomendations = "Pero si me tengo que quedar con una playa de esta parte de Panamá, creo que elijo la Playa de las Estrellas. Los colores de sus palmeras y esa bahía de aguas turquesa la convierten en una de las playas más bonitas del mundo. Aunque en este caso encuentro como pega que recibe mucho turismo. Por ello la playa está llena de puestos de bebida, pequeños chiringuitos y muchos cubos de basura. pero si la ves en la distancia, no hay duda de que te enamoras de ella.";
        // $post->date = Carbon::now();
        $post->user_id = 2;
        $post->category_id = 3;
        // $post->comment_id = 0;
        $post->state_id = 1;
        $post->save();


        $post = new Post();
        $post->image = "uploads/DSC_0180-compressor-1024x680.jpg";
        $post->title = "San Blas – Panamá";
        $post->description_post = "Al norte de Panamá, en el Caribe, se puede pasar un día en las islas de San Blas. En esta zona viven uno de los grupos indígenas más representativos de Panama, los Guna. Ellos gestionan la entrada a las islas. Los barcos, restaurantes o alojamiento también es tema que llevan ellos. El archipiélago tiene 400 islas, algunas ocupadas por comunidades Guna. Pero la mayoría son pequeños paraísos en los que disfrutar del agua del Caribe más transparente que puedas imaginar.";
        $post->recomendations = "La arena de las islas es fina y muy blanca. Algunas palmeras ofrecen sombra en los momentos de más calor. Y el agua turquesa invitar a nadar o bucear en busca de peces de colores o estrellas de mar. Sin duda estas islas ofrecen algunas de las playas más bonitas del mundo.";
        // $post->date = Carbon::now();
        $post->user_id = 4;
        $post->category_id = 3;
        $post->state_id = 2;
        $post->save();


        $post = new Post();
        $post->image = "uploads/indonesia-arturo-098-1024x768.jpg";
        $post->title = "Gili Meno -Indonesia";
        $post->description_post = "Indonesia con sus 17.000 islas ofrece playas para todos los gustos. Desde las más turísticas de Bali a las más elitistas de Lombok. Cuando nosotros viajamos a Indonesia sin embargo nos decantamos por pasar unos días en una de las Islas Gili. de la que poco sabíamos: Gili Meno. Es un paraíso de tranquilidad, en ella no hay coches y un paseo por su perímetro lleva poco más de una hora. Sus playas son de arena blanca y corales. El agua es cálida, aunque hay que tener precaución con las corrientes. Es el lugar perfecto para desconectar de todo y disfrutar de una de las playas más bonitas del mundo. Solo te tienes que llevar un buen libro y dejar que el tiempo pase mientras escuchas la brisa y el ruido de las olas.";
        $post->recomendations = "La mejor época para visitar esta parte de Indonesia es de mayo a octubre, su temporada seca.";
        // $post->date = Carbon::now();
        $post->user_id = 5;
        $post->category_id = 3;
        $post->state_id = 1;
        $post->save();


        $post = new Post();
        $post->image = "uploads/DSC_1018-min-1024x680.jpg";
        $post->title = "Dalmacia – Croacia";
        $post->description_post = "El color turquesa del mar en Croacia no deja indiferente a nadie. Sus playas son blancas, pero de piedra. Si eso no te importa podrás disfrutar de algunas de las playas más bonitas del mundo. Y también singulares. En la isla de Korcula encontrarás playas donde acaban los viñedos. Cerca de Dubrovnik descubrirás preciosas y limpias playas tras las cuales se levantan antiguos hoteles que quedaron destruidos durante la guerra de los Balcanes. Si conduces hacia Sibenik podrás parar en la bonita playa de Primosten. Circulando por la carretera de la costa, bajo cualquier mirador, descubrirás un preciosa playa que pide a gritos que bajes a darte un baño en ella. Sin olvidar por supuesto una de las playas más bonitas del mundo y la más famosa de Croacia: Zlatni rat, en la isla de Brac.";
        $post->recomendations = "un 10";
        // $post->date = Carbon::now();
        $post->user_id = 2;
        $post->category_id = 3;
        $post->state_id = 2;
        $post->save();



        $post = new Post();
        $post->image = "uploads/mno_cesar_correia_casa_guedes.jpg";
        $post->title = "Casa Guedes, Oporto";
        $post->description_post = "Casa Guedes es uno de los mejores restaurantes donde comer en Oporto barato al ofrecer increíbles bocatas desde 3 euros. Sus emparedados de carne de cerdo asada con salsa o el de pernil son toda una institución en la ciudad. También tienes la opción de añadir queso y una ración de patatas fritas caseras por unos pocos euros más.
        El restaurante es bastante pequeño, en caso de encontrártelo lleno puedes ir al otro local situado en el número 76 de la Praça dos Poveiros o llevarte el bocata para comerlo fuera.";
        $post->recomendations = "Dirección: Praca Poveiros, 130.
        Horario: todos los días de 10h a 00h, menos los domingos que abre de 11h a 21h.";
        // $post->date = Carbon::now();
        $post->user_id = 3;
        $post->category_id = 4;
        $post->state_id = 1;
        $post->save();



        $post = new Post();
        $post->image = "uploads/FELLINA-by-ES-10-1024x708.jpg";
        $post->title = "Fellina restaurante, Madrid.";
        $post->description_post = "Fellina restaurante es la nueva trattoria del grupo empresarial Le Cocò, también famoso por sus locales como El Columpio, uno de mis preferidos de Madrid.

        Con este nuevo formato de restaurante buscan acercar con buenas raciones, la verdadera cocina de la nonna italiana y es que por ejemplo haciendo honor a tan importante figura familiar, entre sus platos estrellas destaca su torta della nonna, una tarta típica de Cerdeña cuyo ingrediente principal es el arroz. ¡Muero por probarla!
        
        Entre sus antipasti creo que no me iré sin probar el tartar de atún y la burrata con pomodoro. La burrata es sin duda uno de mis quesos frescos italianos preferidos. ¡Qué cosa tan rica!  En carta también podéis encontrar un montón de pastas diferentes, pizzas y clásicas recetas italianas de pescado y carne. Mi elección: polpette di manzo (albondigas de ternera).
        Y que no panda el único (cunda el pánico según mi tío), los amantes del tiramisú podrán disfrutar de este must de la cocina italiana.";
        $post->recomendations = "Ticket medio: 25-30 euros";
        // $post->date = Carbon::now();
        $post->user_id = 4;
        $post->category_id = 4;
        $post->state_id = 1;
        $post->save();



        $post = new Post();
        $post->image = "uploads/4nxkhlcrklo-jorge-zapata-750x500.jpg";
        $post->title = "Cómo hacer pasta casera";
        $post->description_post = "¡Hola gastrónomos!

        ¿Qué tal? Hoy quiero compartir la receta de pasta casera que yo hago, Cuando vivía en Italia en la época de exámenes mi compañera MariaSole y yo solíamos dedicarnos a hacer este tipo de trabajos artesanos con tal de no estudiar. ¡Qué poco nos costaba desenfundar la Imperia y alejar los libros!
    
        La Imperia es esa maquinita taaaaan Italiana que aparece en la foto y de la cual se dice que:  «non c’è una casa italiana senza una Imperia» (no hay casa sin una Imperia). Aunque parezca mentira aun mucha gente sigue haciendo su pasta fresca casera en Italia, y cada día lo entendemos más… ¡No hay color entre una pasta y otra! Y encima es fácil y rápido.
        
        No os preocupéis si no tenéis la maquina de pasta por que también pondremos la explicación de como hacer la pasta de manera manual. En el caso de que queráis tenerla haciendo click aquí encontraréis una página donde comprarla online. También se puede encontrar en Amazon o Ebay o en alguna ferretería sorprendentemente modernilla.
        
        Ingredientes
        Y bien para la pasta  en sí se necesitan muy pocos ingredientes:
        
        Harina de trigo*
        Huevo
        Sal
        Aceite
    
        *En Italia usan la 00, una harina de fuerza pero suave. Nosotros en esta receta utilizamos la harina de trigo normal y corriente que se encuentra en el súper y también nos quedo muy bien.
        
        Proporciones
        Por cada 100 gramos de harina añadiremos un huevo. Pondremos la harina sobre una superficie preferiblemente de madera y haremos un huequito en el centro dejándola como un volcán, en ese agujerito colocaremos los huevos. Amasaremos con máquina o a mano hasta obtener una pasta homogénea. En el caso de que la pasta estuviera muy pringosa añadiríamos más harina..";
        $post->recomendations = "Dirección: Praca Poveiros, 130.
        Horario: todos los días de 10h a 00h, menos los domingos que abre de 11h a 21h.";
        // $post->date = Carbon::now();
        $post->user_id = 1;
        $post->category_id = 4;
        $post->state_id = 2;
        $post->save();



        $post = new Post();
        $post->image = "uploads/MG_8525.jpg";
        $post->title = "Abastos 2.0: “La belleza de lo simple”";
        $post->description_post = "En pleno casco histórico de la capital de Galicia, situado en el centro del mercado de abastos compostelano, se encuentra un local innovador y diferente. Una alternativa interesante a la cocina del autor y al tapeo. Una manera distinta de entender la cocina sin menús prefabricados ni cartas cerradas. Si se entiende la cocina como arte, innovación, diversión y profesionalidad, Abastos 2.0 es el estandarte de cocina en Santiago.
        
        Un local actual pero tradicional, confortable pero simple. Dividido en restaurante y zona de tapas y vinos. La madera toma presencia en mesas, taburetes y elementos ornamentales. Sorprende el perfecto equilibrio entre lo rural y lo moderno. 
        
        El servicio ha sido atento, sin buscar  agradar o embelesar. Directo y ameno. Explicando en detalle la composición de cada plato. Los tiempos de espera entre estos, casi nulos.
        
        La presentación de los platos goza de una exquisita atención al detalle. Muy elaborados pero con pocos ingredientes, presentados todos en soportes cotidianos como  tablas de madera, cuencos y vajilla cotidiana y tradicional.
        
        La idea del restaurante es saborear Galicia. La tierra, el mar, la carne… y con una filosofía propia, personal y llevada a rajatabla. Pocos ingredientes por plato. Un elemento principal y básico y compañía al uso. De ahí su situación estratégica en el mercado. Cada mañana son comprados en la propia plaza productos exclusivos de las tierras gallegas, variando estos según el día y sobre todo la temporada. Los platos cambian según cambia Galicia.
        Alta cocina que no pretende serlo, precios populares para platos sobresalientes. Atención y mimo por la comida. Pasión y orgullo por una nueva manera de entender la cocina. Abastos 2.0 es la mejor manera de saborear Galicia, del mercado directamente al plato. Productos frescos y de calidad. Productos gallegos.";
        $post->recomendations = "Pudimos degustar y saborear el mar en varios platos";
        // $post->date = Carbon::now();
        $post->user_id = 2;
        $post->category_id = 4;
        $post->state_id = 1;
        $post->save();



         //Comment::truncate(); // Evita duplicar datos

         $comment = new Comment();
         $comment->user_id = 2;
         $comment->description = "Genial el post";
         $comment->date = Carbon::now();
         $comment->post_id = 1;
         $comment->save();
 
         $comment = new Comment();
         $comment->user_id = 3;
         $comment->description = "Gracias por la info";
         $comment->date = Carbon::now();
         $comment->post_id = 1;
         $comment->save();
 
         $comment = new Comment();
         $comment->user_id = 1;
         $comment->description = "Bien hecho.";
         $comment->date = Carbon::now();
         $comment->post_id = 2;
         $comment->save();

         
         $comment = new Comment();
         $comment->user_id = 3;
         $comment->description = "Thanksss";
         $comment->date = Carbon::now();
         $comment->post_id = 3;
         $comment->save();
 
    }
}
