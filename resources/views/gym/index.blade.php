@extends('app')
  @section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Registro de Actividad Física y Deportiva <?php echo " - " . date("d") . " / " . date("m") . " / " . date("Y"); ?></h1>
    </div>

 </div>

 <hr>

<?php
// Completamos el vector con frases
$vector = array(

1=> "La pelea se gana o pierde lejos de los testigos, tras las líneas, en el gimnasio, en la carretera, lejos de donde bailo bajo esas luces.",
2=> "Ningún ciudadano tiene derecho a ser un aficionado en el entrenamiento físico. Qué desgracia es para un hombre crecer sin ver la belleza y fuerza de lo que su cuerpo es capaz.",
3=> "La formula ganadora es la habilidad de aceptar que hay una gran área de potencial sin explotar más allá de lo que actualmente percibes como tu máximo potencial.",
4=> "Cuanto más sudas en el entrenamiento, menos sangras en combate. ",
5=> "Tómate tu tiempo para saber lo que realmente quieres, porque cuando lo sepas, tendrás un poder que solo unos pocos tienen. Úsalo para motivarte y obtendrás resultados inesperados.",
6=> "Las grandes recompensas esperan a los que son capaces de sufrir, arriesgarse, hacer cosas distintas. Es por ello que están destinadas a solo unos pocos.",
7=> "Lo que cuenta no es el número de horas que trabajas, sino la energía que pones en esas horas.",
8=> "Vamos a conseguir muchas más cosas si pensamos que nada es imposible.",
9=> "Para ser el número uno, tienes que entrenar como si fueras el número dos.",
10=> "Recuerda esto: tu cuerpo es tu esclavo. Trabaja para ti, no tú para el.",
11=> "Cuida de tu cuerpo. Es el único lugar que tienes para vivir.",
12=> "La pasión triunfa sobre todo.",
13=> "El dolor de la disciplina no se parece en nada al dolor de la decepción.",
14=> "Si quieres verme conseguir algo, dime que no puedo hacerlo.",
15=> "Mantener nuestro cuerpo con buena salud es un deber. De lo contrario no seremos capaces de mantener nuestras mentes fuertes y claras.",
16=> "Odié cada minuto de entrenamiento, pero dije, “no te rindas. Sufre ahora y vive el resto de tu vida como un campeón”.",
17=> "La intensidad construye inmensidad.",
18=> "La pregunta no es quien me va a dejar, es quien me va a parar.",
19=> "Si escuchas una voz dentro de ti mismo diciendo “no eres un pintor”, pinta y la voz será silenciada.",
20=> "Cada paso que das es un paso alejado de donde solías estar.",
21=> "Nuestra autoestima aumenta cuando salimos de la zona de confort y hacemos algo diferente.",
22=> "Cada vez que te encuentres al lado de la mayoría, es momento de parar y reflexionar.",
23=> "El primer paso es el más importante. Es el más crucial y más efectivo, ya que iniciará la dirección que has elegido.",
24=> "Siempre parece imposible hasta que se hace.",
25=> "Saber lo que es correcto no significa mucho al menos que hagas lo que es correcto.",
26=> "No hay secretos para el éxito. Es el resultado de la preparación, trabajo duro y aprender del fracaso.",
27=> "Si realmente quieres hacer algo, encontrarás una forma. Si no, encontrarás una excusa.",
28=> "Los que piensan que no tienen tiempo para hacer ejercicio, tarde o temprano encontrarán tiempo para estar enfermos.",
29=> "Si eres capaz de enviar un mensaje que se pueda leer entre sesiones, probablemente no estas trabajando lo suficiente.",
30=> "Un campeón es alguien que se levanta cuando otros no pueden.",
31=> "Si quieres desarrollar tu máximo potencial, debes ser consciente de que no hay atajos; si quieres tener éxito tienes que esforzarte, perseverar y luchar.",
32=> "Para mi el significado de la vida es estar con hambre continuamente. El significado de la vida no es simplemente existir, sino moverse hacia delante, levantarse, conquistar.",
33=> "El dolor es temporal, el orgullo para siempre.",
34=> "Demasiado ocupado es un mito. La gente busca tiempo para las cosas que son importantes.",
35=> "La fuerza no viene de una capacidad física. Viene de una voluntad indomable.",
36=> "La resistencia con la que te enfrentas en el gimnasio y la resistencia con la que te encuentras en la vida solo pueden construir un carácter fuerte.",
37=> "El camino a ninguna parte esta pavimentado con excusas.",
38=> "Hay más en la vida que entrenar, pero entrenar es lo que más pone en tu vida.",
39=> "El secreto del éxito es mantener una imagen de un resultado exitoso en la mente.",
40=> "No pienses en tus límites, piensa en tus posibilidades; un nuevo mundo se abrirá a tus ojos.",
41=> "Si los obstáculos son largos, salta con más energía.",
42=> "No mires atrás,no vas por ese camino.",
43=> "Se supone que debe ser difícil. Si no lo fuese, todo el mundo lo haría. Lo que lo hace grande es que es difícil.",
44=> "El dolor es la debilidad dejando el cuerpo.",
45=> "Solo los caminos duros llevan a la grandeza.",
46=> "Cuando pienses en abandonar, piensa porqué empezaste.",
47=> "No se trata de si fracasas, se trata de si eres capaz de levantarte.",
48=> "El éxito esta conectado con la acción. La gente exitosa sigue hacia delante. Cometen errores, pero no abandonan.",
49=> "Ser derrotado es a menudo una condición temporal. Rendirse es lo que lo hace permanente.",
50=> "El fracaso es solo un cambio temporal para ponerte en la dirección de tu próximo éxito.",
51=> "Si fracasas en prepararte, te preparas a fracasar.",
52=> "Lo peor que puedes ser es estar en la media.",
53=> "Lo que quieres conseguir no esta en tus manos, esta en tu cabeza. Piensa que puedes y podrás, pero espera el sufrimiento, perseverancia y disciplina.",
54=> "El secreto para conseguir todas tu metas es estar comprometido.",
55=> "Pensar en ir al gimnasio quema entre 0 y 0 calorías.",
56=> "Cuando comienza a doler es cuando comienza la sesión.",
57=> "Identifica la primera acción física que tienes que llevar a cabo y hazla.",
58=> "Para conseguir algo que nunca has conseguido antes, debes hacer algo que nunca has hecho antes.",
59=> "El trabajo duro gana al talento cuando el talento no trabaja duro.",
60=> "Mientras los ganadores entrenan, los perdedores se quejan.",
61=> "La falta de éxito es una consecuencia del miedo a arriesgarse y sentirse incómodo.",
62=> "Todo lo que duele te enseña.",
63=> "El respeto no se demanda, se gana.",
64=> "Ganar es el segundo paso, querer ganar es el primero.",
65=> "La única prueba es lo que ves al mirarte en el espejo.",
66=> "El carácter es quien eres cuando nadie mira.",
67=> "El único lugar donde el éxito viene antes del trabajo es en el diccionario.",
68=> "Esperar que el mundo te trate justamente porque eres una persona honesta es como esperar que el toro no te cornee porque eres vegetariano.",
69=> "Algunos quieren que ocurra, otros desearían que ocurra, otros hacen que ocurra.",
70=> "No preguntes si es fácil. Pregunta si es difícil, porque solo así sabrás si solo ha sido conseguido por unos pocos.",
71=> "Toda persona que ha logrado algo grande, ha sido consciente del trabajo que le esperaba y del tiempo y esfuerzo que tenía que poner en ello.",
72=> "Si no vives por algo, morirás por nada.",
73=> "Cuando te vayas a rendir, dan un paso más. Al días siguiente, ve un paso más lejos. ",
74=> "Debes haces lo que otros no hacen para conseguir lo que otros no conseguirán.",
75=> "Construye tu cuerpo, construye tu carácter.",
76=> "La mejor forma de predecir tu futuro es crearlo.",
77=> "El éxito no es un gran paso dado en el futuro, es un pequeño paso tomado justo ahora.",
78=> "Cuando no estas entrenando, alguien más lo esta haciendo.",
79=> "Si sientes que no tienes más fuerzas, piensa en la recompensa.",
80=> "El dolor de hoy es la victoria de mañana.",
81=> "Es la acción lo que crea la motivación.",
82=> "Siéntete orgulloso de lo lejos que has llegado y ten fe en lo lejos que puedes llegar.",
83=> "Si vas a por lo difícil ya has vencido a todos los que van a por lo fácil.",
84=> "Siempre intenta superarte a ti mismo porque es la única forma de saber donde esta el límite.",
85=> "Hacer cosas distintas a los demás es obtener resultados distintos a los demás. ",
86=> "Si dices que puedes, puedes. Si dices que no puedes, no puedes.",
87=> "Una vida sin dar todo lo que tienes no merece la pena.",
88=> "Rendirse es renunciar a lo que quieres. Si lo haces, es porque no lo quieres con todo tu corazón.",
89=> "No te quejes, actúa. Actúa, no critiques. No critiques, admira. Admira y podrás aprender de los demás.",
90=> "Cada gota de sudor es un metro menos en tu camino de mil kilómetros.",
91=> "Aléjate de los que dicen que no pueden, acércate a los que dicen que todo es posible. Los dos están en lo cierto.",
92=> "No interpretes la incomodidad del ejercicio como algo doloroso, interpretalo como algo que te acerca a conseguir tus metas y a desarrollarte personalmente.",
93=> "Cuidado con las excusas, son mentiras que te alejan de tus sueños.",
94=> "Ama el dolor del esfuerzo, porque si no existiese tendrías mucha más competencia.",
95=> "Lo importante es avanzar, actuar y no ponerse excusas. Tarde o temprano verás los resultados.",
96=> "Un camino de mil kilómteros comienza con un solo paso.",
97=> "La mejor forma de hacerlo no es pensar cómo lo vas a hacer. Es hacerlo, de una forma y otra, pero hacerlo.",
98=> "Un ganador no nace, se hace. Precisamente es ganador porque se esfuerza a ganar y el esfuerzo conlleva sufrimiento.",
99=> "Si no crees que puedes hacer algo, hazlo y la creencia vendrá sola.",
100=> "Una cosa es creer y otra hacer. Si crees que puedes hacer algo y no lo haces, vives en una fantasía.",
101=> "Los campeones no están hechos en el gimnasio. Los campeones están hechos de algo que tienen en su interior, un deseo, un sueño, una visión.",
102=> " Cuando el dolor es insoportable, nos destruye; cuando no nos destruye, es que es soportable. ",
103=> " No es grande aquel que nunca falla si no el que nunca se da por vencido. ",
104=> " El fracaso consiste en no persistir, en desanimarse después de un error, en no levantarse después de caer. ",
105=> " Si no te esfuerzas hasta el máximo, ¿cómo sabrás donde está tu límite?. ",
106=> " Si quieres triunfar, no te quedes mirando la escalera.  Empieza a subir, escalón por escalón, hasta que llegues arriba",
107=> " Es duro fracasar en algo, pero es mucho peor no haberlo intentado. ",
108=> " Cuando tus piernas y tu cabeza no puedan más, tu corazón hará el resto. ",
109=> " Nuestra gloria más grande no consiste en no haberse caído nunca, sino en haberse levantado después de cada caída. ",
110=> " El no querer es la causa; el no poder el pretexto. ",
111=> " El diccionario es el único lugar donde éxito aparece antes que trabajo. ",
112=> " El dolor es inevitable, pero el sufrimiento es opcional. ",
113=> " Esto es lo que te gusta hacer, esto es lo que puedes hacer bien; hazlo hasta el límite y estarás satisfecho. ",
114=> " El dolor y el sufrimiento son temporales.  Rendirse es para siempre",
115=> " La competencia es larga, pero al final solo compites contra ti mismo. ",
116=> " Es tiempo de empezar a vivir la vida que siempre quisiste. ",
117=> " Lo mejor acerca del dolor es que te das cuenta de que no estas muerto. ",
118=> " El mayor placer en la vida es hacer aquello que la gente te dice que no eres capaz de hacer. ",
119=> " Todo en la vida es temporal.  Entonces si las cosas están yendo bien, disfrútalas ya que no durarán para siempre y si las cosas van mal, no te preocupes, tampoco durarán siempre",
120=> " La felicidad se encuentra a lo largo del camino, no al final. ",
121=> " No te estoy diciendo que será fácil, te estoy diciendo que valdrá la pena. ",
122=> " Si dejas de ser el mejor a cada paso, simplemente dejas de ser bueno. ",
123=> "  La manera de como tratas tus fracasos, es la manera de como consigues tus éxitos. ",
124=> " Cuando ganes habla poco, cuando pierdas aun menos. ",
125=> " Experiecia es el nombre que damos a nuestros errores (Fred Shero). ",
126=> " La mejor manera de mejorar tu equipo es mejorar tu mismo (John Wooden). ",
127=> " Entrena y compite contra ti mismo, tu eres tu máximo rival, los demás son compañeros de los que se puede aprender mucho. ",
128=> " En el deporte no te ayuda el entrenador, te ayudas tu mismo a superarte. ",
129=> " Quien teme perder… ¡ya está vencido!. ",
130=> " Sólo al conocer el dolor de la derrota podemos aprender a dominar la frustración de un fracaso en la vida diaria. ",
131=> " La mente es el límite (Arnold Schwarzenegger). ",
132=> " Sueña lo que quieras soñar.  Ves donde quieras ir",
133=> " A veces, no hay una próxima vez, una segunda oportunidad, no hay un tiempo muerto.  A veces… es ahora o nunca",
134=> " Los campeones creen en si mismos aun cuando nadie más lo hace. ",
135=> " Puede ser un héroe lo mismo el que triunfa que el que sucumbe; pero jamás el que abandona el combate. ",
136=> " La única manera de alcanzar lo imposible es creer que es posible. ",
137=> " El recuerdo es el único paraíso del que no podemos ser expulsados, por eso tenemos que luchar por ser recordados. ",
138=> " En la vida no hay que tener nada.  Afróntalo y supéralo",
139=> " No les cortes las alas a tus sueños porque estos son los que le dan libertad a tu alma. ",
140=> " Las dificultades no existen para hacerte renunciar, sino para hacerte mas fuerte. ",
141=> " El miedo solo esta en la mente. ",
142=> " La gente no entiende tanto sacrificio, tantas caídas, derrotas, fracasos, entrenamientos, frío, pero no saben que sin eso no puedes vivir. ",
143=> " Un esfuerzo total es una victoria completa. ",
144=> " El único lugar donde debes pasar horas extra es en el gimnasio. ",
145=> " Cuando estés a punto de rendirte, acuérdate de todos aquellos que no confiaban en ti y demuéstrales lo contrario. ",
146=> " Quizá hoy no sea tu día, pero puede que sea tu año. ",
147=> " No sabemos si existe la suerte, pero si sabemos que todo esta en nuestras manos. ",
148=> " No cierres nunca los ojos, mira de frente a las adversidades. ",
149=> " Puedes elegir entre tirar la toalla o usarla para secar tu sudor en la meta. ",
150=> " Si no sueñas, nunca encontrarás lo que hay más halla de tus sueños. ",
151=> " Los obstáculos sólo son esas cosas que ves cuando quitas los ojos de la meta. ",
152=> " La vida es como una pelea de box, Por mas golpes que te den tienes que seguir de pie. ",
153=> " Llora en el entrenamiento; reirás en el podio. ",
154=> " Quien deja de luchar por su sueño abandona parte de su futuro. ",
155=> " No digas “no puedo” ni en broma, porque el inconsciente no tiene sentido del humor, lo tomará en serio y te lo recordará cada vez que lo intentes. ",
156=> " Cuando tu no te atreves a dar un paso al frente y esperas a que alguien lo de por ti, serás tú el que siga en el mismo sitio de antes y el otro empiece a avanzar dejándote a ti atrás. ",
157=> " No intentes ser mejor que los demás, intenta mejor ser que tu mismo. ",
158=> " Unos piensan que el talento es cuestión de suerte, otros piensan que la suerte es cuestión de entrenamiento. ",
159=> " Aprecia lo que tienes y lo que te dan, nunca sabes cuando te lo arrebataran. ",
160=> " Nunca desistas de un sueño. ",
161=> " Podría narrarte mis éxitos pero no busco halagos, podría contarte mis fracasos pero no busco compasión. ",
162=> " Cuando dejas de luchar, empiezas a morir. ",
163=> " Quien teme perder… Ya está perdido. ",
164=> " En ésta vida no te perdonan si te dejas ganar y te odian si ganas siempre. ",
165=> " Los campeones creen en si mismos aun cuando nadie más lo hacen. ",
166=> " Si cometes el error de creerte el mejor, ha lo posible por seguir siéndolo, no te conformes con creerlo. ",
167=> " Estoy Hecho de una vida de entrenamientos, no solo de victorias. ",
168=> " Nunca pienses en lo que te queda por correr, sino en lo que ya has recorrido. ",
169=> " Enjoy life, it’s just one. ",
170=> " Go hard or go home. ",
171=> " En el sufrimiento está la mejora. ",
172=> " Don’t quit suffer now and live the rest of your life as a champion. ",
173=> " No hay distancia que no se pueda recorrer ni meta que no se pueda alcanzar. ",
174=> " Lo primero que se rinde es la cabeza, a partir de ahí empieza tu entrenamiento. ",
175=> " Si te caes, te levantas.  Y si no quieres levantarte, al menos hazte unas flexiones",
176=> " No se trata de entrenar en tu tiempo libre, se trata de que por muy duro que sea el día, aún te queden fuerzas para hacerlo. ",
177=> " Cuando algo consigue que desconectes de tus problemas no dejes de hacerlo nunca. ",
178=> " Just believe in your dreams. ",
179=> " Las medallas se ganan en el entreno y se recogen en la carrera. ",
180=> " No importa cuanto trabajes tu cuerpo, no lograras resultados hasta que trabajes tu determinación”. ",
181=> " Aprovecha tus peores días para hacer tus mejores entrenamientos. ",
182=> " No pain, no gain. ",
183=> " Keep calm and workout hard. ",
184=> " Remember: you control your destiny and you can do what others will not. ",
185=> " La base del éxito está en la actitud y en la constancia. ",
186=> " “Jamás permitas que mentes pequeñas te convenzan de que tus sueños son demasiados grandes para ti . ",
187=> " No puedes elegir el modo de perder, pero sí puedes elegir como recuperarte para ganar la próxima vez. ",
188=> " Cada mañana, en el África, una gacela se despierta; sabe que deberá correr más rápido que el león, o éste la matará.  Cada mañana en el África, un león se despierta; sabe que deberá correr más rápido que la gacela, o morirá de hambre",
189=> " Los campeones no se hacen en los gimnasios, están hechos de algo inmaterial que tienen dentro de ellos.  Es un deseo, un sueño, una visión",
190=> " Todo fracaso es el condimento que da sabor al éxito.  Y la disciplina es su parte más importante",
191=> " Tienes que estar convencido desde el fondo de ti mismo de que vas a ganar, sin importar las influencias que puedas tener de otros. ",
192=> " Aquella persona que tiene fe en lo que está haciendo y lucha día a día por conseguir su objetivo, tendrá más fuerza que 100 que solo busquen un interés. ",
193=> " Empieza por hacer lo necesario, luego haz lo posible y de pronto te encontrarás logrando lo imposible. ",
194=> " Evitar los riesgos equivale renunciar al derecho de experimentar la mitad de las emociones que somos capaces de sentir. ",
195=> " Cada segundo en la pista es un segundo menos que te queda para llegar a meta. ",
196=> " Cada gota de sudor es una gota de felicidad y satisfacción. ",
197=> " Una de las partes más difíciles de la vida es decidir si te alejarte o intentarlo un poco más. ",
198=> " Es difícil vencer a una persona que nunca se rinde.  Se esa persona",
199=> " Para triunfar no es importante llegar el primero.  Para triunfar simplemente hay que llegar, levantándose cada vez que se cae del camino",
200=> " RECUERDA TU META. ",
201=> " No te dejes desanimar por los fracasos, aprende de ellos y sigue adelante. ",
202=> " No pares hasta que te sientas orgulloso. ",
203=> " Si has sido capaz de llegar hasta aquí, eres capaz de seguir adelante. ",
204=> " Serás del tamaño de tus pensamientos… Piensa en Grande. ",
205=> " El secreto de mi gran éxito fue rodearme de personas mejores que yo. ",
206=> " Si no confías en ti mismo siempre encontrarás una forma de no ganar. ",
207=> " Ese momento en que las piernas te dicen que no, pero tú a pesar de eso sigues hasta el final dándolo todo, y piensas: “tengo que llegar”. ",
208=> " Tu mayor rival es aquel que quieres llegar a ser. ",
209=> " Los perdedores visualizan las penas del fracaso, en cambio los ganadores visualizan las recompensas del éxito. ",
210=> " Entrenando te das cuenta de lo que te falta en la vida y lo que te sobra en el día a día. ",
211=> " Arriesgarte hace que cuando lo consigues tenga mas mérito. ",
212=> " Me da igual lo que me digan.  Me da igual que sea cierto",
213=> " A veces hay que ver si estamos en el camino que queremos.  A veces hay que frenar para poder acelerar",
214=> " Puede que no tenga mucho talento pero nadie podrá negar la pasión que le pongo. ",
215=> " Yo he venido aquí a ganar.  Para participar ya están los otros",
216=> " Nuevo día, nuevos retos. ",
217=> " No hay nada peor que aceptar rendirte. ",
218=> " Recuerda ti triunfo para soportar tu crecimiento. ",
219=> " Las grandes personas decidieron hacerlo. ",
220=> " Haz que cada día cuente. ",
221=> " Por muy mal que vaya algo rendirte no va a servir de nada.  Si no te rindes puede que no lo soluciones pero, al menos, lo diste todo",
222=> " Si sólo puedo ser una cosa, quiero ser el mejor. ",
223=> " Más, más y más.  Y cuando estés satisfecho, entonces más",
224=> " En el esfuerzo está el éxito. ",
225=> " Lo difícil se consigue, lo imposible se intenta. ",
226=> " Si lo puedes imaginar, lo puedes lograr. ",
227=> " Está prohibido rendirse, respira hondo y sigue. ",
228=> " Todos nos enfrentamos a lo mismo, pero no todos saben reaccionar igual. ",
229=> " Si no persigues tus sueños, nadie lo hará por ti. ",
230=> " Tenemos que estar seguros que nadie ha entrenado mejor que nosotros.  Puede que igual sí, pero no mejor",
231=> " Para ser el mejor, hay que entrenar como el mejor. ",
232=> " Lucha, lucha y lucha.  Cuando no puedas más, sigue luchando",
233=> " Da igual las piedras que te pongan por delante si te prometes seguir caminando. ",
234=> " Habrá momentos en los que tengas que sudar, sangrar y llorar para conseguirlo.  Asúmelo",
235=> " Quien más consigue es el que menos habla. ",
236=> " Orgulloso me siento de mis errores porque ellos han sido mi mejor maestro. ",
237=> " Mi mejor versión está por llegar. ",
238=> " Cuanto más lejos llegues, más lejos estarás de rendirte. ",
239=> " Tienes que decir sí a tus sueños. ",
240=> " La grandeza son muchas cosas pequeñas hechas bien, día tras día, entrenamiento tras entrenamiento, obediencia tras obediencia. ",
241=> " Si no lo haces ahora… ¿Cuando?. ",
242=> " Deja de frenarte a ti mismo. ",
243=> " La clave del éxito está en centrar nuestra mente en cosas que deseamos, no en cosas que tengamos miedo. ",
244=> " No lo pienses, sólo sigue.  Un paso más, una hora más, ya queda poco, es el último esfuerzo",
245=> " Pensar que no eres mejor que nadie ya te hace mejor que muchos. ",
246=> " No desistas en la lucha para conseguir tu objetivo, pues es lo que verdaderamente te hará vivir. ",
247=> " Entrenando te das cuenta lo que te falta en la vida y lo que te sobra en el día a día. ",
248=> " La motivación llega por dos lados: el primero es el entrenamiento, y el segundo la mentalidad de superar tus límites. ",
249=> " Un compañero de entreno puede ser la mejor motivación.  Sé un buen compañero",
250=> " Porque somos hombres forjados en sueños: porque si no soñamos, estamos muertos. ",
251=> " El arte de vencer se aprende en las derrotas. ",
252=> " Respira hondo y dale caña. ",
253=> " La suerte es la excusa de quienes no lo consiguen. ",
254=> " Otros irán a por mi, yo iré a por mis sueños. ",
255=> " El dolor mientras luchas se acaba olvidando, el recuerdo de no atreverse es imborrable. ",
256=> " La mejor forma de motivarse es tomando un momento para imaginar donde quieres estar dentro de un año. ",
257=> " El éxito no es la victoria en una batalla.  El éxito es una guerra continua de superación contigo mismo",
258=> " Si empiezas tu día a día saliendo a correr, todo lo demás se hace más fácil. ",
259=> " Al rendirte piensa que es un paso que otros avanzan y tú no. ",
260=> " Es difícil conocer la sensación de bienestar con el deporte, pero cuando la conoces te atrapa. ",
261=> " Llegar a la conclusión de que los días más fáciles de tu vida, son también los más duros. ",
262=> " El triatlón se basa en muchas partes: nadar, pedalear, correr y tener mente. ",
263=> " Ten paciencia con todo, pero sobre todo contigo mismo. ",
264=> " Recuerda siempre que esto es el principio, y que si te esfuerzas ahora, después lo tendrás. ",
265=> " No hay superhombres, solo super entrenamientos. ",
266=> " No soy lo que he logrado, soy lo que he superado. ",
267=> " Nunca pierdas el aliento, por muy difícil que sea el objetivo. ",
268=> " Una lesión te puede desmotivar, pero si te lo tomas como una superación lograrás que sea tu mayor motivación. ",
269=> " Deja de pensar en si caerás y ponte a pensar en cómo lo lograrás. ",
270=> " A todos nos dan golpes, lo que hay que pensar es cómo reaccionar ante esos golpes. ",
271=> " Cada segundo que inviertes pensando en los sueños de otro, estás un segundo más lejos de alcanzar los tuyos. ",
272=> " El día mas feliz de tu vida puede ser también el más duro. ",
273=> " Si la motivación es grande, el objetivo siempre será pequeño. ",
274=> " Si no persigues aquello que sueñas nunca lo conseguirás. ",
275=> " Ahora me toca jugar a mí. ",
276=> " Muchos creen, pocos lo consiguen.  Forma parte de esos pocos",
277=> " Cuando te convenzas de que puedes lograrlo, lo lograrás. ",
278=> " Trabaja mucho, trabaja muy duro, y hazlo constantemente y lo tendrás todo. ",
279=> " Cuestión de lucha, cuestión de pasión, cuestión de darlo todo.  No cuestión de suerte",
280=> " Quédate con la suerte que yo me quedaré con el esfuerzo. ",
281=> " Disfruta o no aguantarás. ",
282=> " O aguantas la tensión o poco conseguirás. ",
283=> " Disciplina lo es todo. ",
284=> " Cuanto más te acerques, más te costará.  Cuanto más te cueste… más cerca estarás",
285=> " Si haces algo, que sea hasta el final. ",
286=> " El éxito ocurre cuando tus sueños son más grandes que tus excusas. ",
287=> " No tienes que ser mejor que los demás, tienes que ser mejor de lo que piensas que puedes ser. ",
288=> " La calidad de un deportista se encuentra en la cabeza, no en su cuerpo. ",
289=> " No esperes el momento preciso.  Empieza ahora",
290=> " Más que un deporte cualquiera, running como filosofía y estilo de vida. ",
291=> " Lo más grande no es la distancia que corro… Lo más grande es mi pasión por conseguirlo. ",
292=> " Gracias a la práctica cotidiana vencemos la fatiga, conocemos el esfuerzo, la importancia de perseverar y la alegría de vencer a la dificultad. ",
293=> " El reto de mi vida es descubrir hasta donde puedo llegar. ",
294=> " Recuerda: la sensación que se obtiene de una buena carrera es mucho mejor que la de estar sentado deseando estar corriendo. ",
295=> " Lo que hace algo especial no es lo que puedes ganar, sino lo que sientes que puedes perder. ",
296=> " Esfuérzate al máximo una y otra vez.  No cedas ni un centímetro hasta que no llegues al final",
297=> " El dolor es temporal.  Puede durar un minuto, una hora, un día o un año, pero en algún momento acabará",
298=> " Todo lo que soy es gracias a mi mente. ",
299=> " Para llegar donde nunca antes has estado, tendrás que esforzarte como nunca antes lo has hecho. ",
300=> " ME EXIJO MÁS DE LO QUE NADIE PODRÍA ESPERAR DE MI. ",
301=> " Las personas que saben lo que quieren, confían en sus posibilidades y trabajan duro son las alcanzan objetivos. ",
302=> " Un triunfo es sólo un Sueño por el que nunca se dejó de luchar. ",
303=> " Cuanto más aguantes, más conseguirás. ",
304=> " Como no pelees te pasarán por encima. ",
305=> " No conseguirás mucho en la vida si sólo trabajas los días que te apetece. ",
306=> " Hagas lo que hagas… No lo hagas a medias. ",
307=> " Me exijo más de lo que nadie podría esperar de mi. ",
308=> " Siempre cuesta pero a algunos les da igual y siguen. ",
309=> " No te obsesiones con el resultado, centrate en el progreso hacia el mismo, pues el camino te dará la mejora. ",
310=> " Si haces lo que te gusta siempre podrás optar a ser el mejor.  Disfruta con lo que haces",
311=> " Si entrenas como todos, serás como todos. ",
312=> " Lo mas difícil para triunfar es asumir que vas a perseguir tus sueños por irreales que parezcan ante los demás. ",
313=> " No avanzarás hasta que no te des a de que al que ganas es a ti mismo. ",
314=> " No te creas incapaz de competir con alguien mejor, haz algo nuevo, ofrece tu 100% y llegarás a superarlo. ",
315=> " Debes proponerte constantes objetivos.  Cumple uno, disfruta y ve a por el siguiente, ni estanques tu progreso",
316=> " Preguntate si lo que estás haciendo hoy te acerca al lugar en el que quieres estar mañana. ",
317=> " Cuando sabes lo que quieres, solamente tienes que ir a por ello.  Paso a paso, sin mirar atrás",
318=> " Tu mente puede hacerte entrenar, tu cuerpo puede darte fuerza, pero sólo el corazón hará de ti un campeón. ",
319=> " Lo más grande no es la distancia que corro, lo mas grande es la pasión por conseguirlo. ",
320=> " Gracias a la practica cotidiana vencemos la fatiga, conocemos el esfuerzo, la importancia de perseverar y la alegría de vencer a la dificultad. ",
321=> " Lucha hasta que no puedas más, y será el momento en el que mas tengas que luchar. ",
322=> " Escoger un camino significa abandonar otros. ",




);

// Obtenemos un número aleatorio
$numero = rand(1,322);


?>

  <div id="tablaActivos" >

    <form class="navbar-form navbar-left" role="search" action="{{url('registro/home/searchredirect')}}" autocomplete="off">
    <div class="form-group">
      <input type="text" name="search" class="form-control" id="buscar" placeholder="Buscar...." onkeyup="es_vacio()" >
    </div>
    <button type="submit" class="btn btn-success" id="btnBuscar" disabled="true" style="margin-right: 20px">Buscar</button>

<?php
    // Imprimimos la frase
echo "$vector[$numero]";
?>
  </form>
  <br>
      <table class="table table-borderless" id="activostable" style="display: none;">
@if(isset($message))
  <!--{{($message)}}-->
  @else
    @foreach($users as $activo)
          <tr class="">
           
            <td width="300" nowrap>{{$activo->documento}}</td>
            <td>{{$activo->name}}</td>
            <td>{{$activo->email}}</td>

          </tr>
    @endforeach

  @endif
  </table>
</div>

<br>

<hr>




  <div class="form-group col-md-12">
    <div class="col-md-2">
      Documento:<input type="text" class="form-control" id="documento" name="documento"
      placeholder="Documento de Identidad" @if(isset($message1)) value="Esperando usuario..." @elseif(isset($message)) value="{{($message)}}" @else value="{{$activo->documento}}" @endif required disabled="true">
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-3">
      E-Mail:<input type="text" class="form-control" id="email" name="email"
      placeholder="Correo Institucional" @if(isset($message1)) value="Esperando usuario..." @elseif(isset($message)) value="{{($message)}}" @else value="{{$activo->email}}" @endif required disabled="true">
      <p class="error text-center alert alert-danger hidden"></p>
    </div>

    <div class="col-md-3" style="display: none">
      <input type="text" class="form-control" id="modulo" name="modulo"
      placeholder="Módulo Deportivo" required >
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
       <div class="col-md-4">
            Módulos Deportivos
            <select id="moduloSelect" class="form-control" onchange="mostrarValor(this.options[this.selectedIndex].innerHTML);">
                <option value="1">--Seleccion un Módulo Deportivo--</option>
                <option value="Gimnasio - Acondicionamiento Físico">Gimnasio - Acondicionamiento Físico</option>
                <option value="Voleibol">Voleibol</option>
                <option value="Baloncesto">Baloncesto</option>
                <option value="Fútbol">Fútbol</option>
                <option value="Futsal">Futsal</option>
                <option value="Karate DO">Karate DO</option>
                <option value="Kung FU">Kung FU</option>
                <option value="Zumba - Aeróbicos">Zumba - Aeróbicos</option>
                <option value="Tae-Bo">Tae-Bo</option>
                <option value="Hábitos Saludables">Hábitos Saludables</option>
                <option value="Tenis de Mesa">Tenis de Mesa</option>
                <option value="Atletismo">Atletismo</option>
                <option value="Natación">Natación</option>
                <option value="Rugby">Rugby</option>
                <option value="Ultimate">Ultimate</option>
                <option value="Acondionamiento Brigadas">Acondionamiento Brigadas</option>
                <option value="Defensa Personal">Defensa Personal</option>


                
            </select>
        </div>
<br>
    <div class="col-md-2">
      <button class="btn btn-warning" type="submit" id="add" >
        <span class="glyphicon glyphicon-plus"></span> Registrar
      </button>
    </div>
  </div>



<br>
</div>


<script>
    /**
    * Array con las imagenes que se iran mostrando en la web
    */
    var imagenes=new Array(
        'http://localhost:8000/img_gifs/benchpress.mp4',
        'http://localhost:8000/img_gifs/burpees.mp4',
        'http://localhost:8000/img_gifs/deadlift.mp4',
        'http://localhost:8000/img_gifs/abdominales.mp4',
        'http://localhost:8000/img_gifs/ares.mp4',
        'http://localhost:8000/img_gifs/benchpress.mp4',
        'http://localhost:8000/img_gifs/bentrows.mp4',
        'http://localhost:8000/img_gifs/burpees.mp4',
        'http://localhost:8000/img_gifs/deadlift.mp4',
        'http://localhost:8000/img_gifs/dominadas.mp4',
        'http://localhost:8000/img_gifs/fazerclimbers.mp4',
        'http://localhost:8000/img_gifs/hades.mp4',
        'http://localhost:8000/img_gifs/handstandpushups.mp4',
        'http://localhost:8000/img_gifs/jacknives.mp4',
        'http://localhost:8000/img_gifs/jumpingjacks.mp4',
        'http://localhost:8000/img_gifs/leglever.mp4',
        'http://localhost:8000/img_gifs/motivational.mp4',
        'http://localhost:8000/img_gifs/pushups.mp4',
        'http://localhost:8000/img_gifs/squats.mp4',
        'http://localhost:8000/img_gifs/yourbest.mp4',
        'http://localhost:8000/img_gifs/zeus.mp4'
        
    );
 
    /**
    * Funcion para cambiar la imagen
    */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));
 
        // cambiamos la imagen
        document.getElementById("imagen").src=imagenes[index];
    }
 
    /**
    * Función que se ejecuta una vez cargada la página
    */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,75000);
    }


</script>



<br>
<br>


  <div class="row">
    <div class="table-responsive col-md-5">
    <table class="table table-borderless" id="headtable">
            <!--  <th>No.</th>
          <th>Title</th>-->
          <th width="200" nowrap style="font-size: 20px">Usuario</th>
          <th width="150" nowrap style="font-size: 20px">modulo</th>
          <th style="font-size: 20px">Registro</th>
         <!-- <th>Actions</th>-->
      <table class="table table-borderless" id="table">
        <!--<tr>
          <th>No.</th>
          <th>Title</th>-->
          <!--<th>Usuario</th>
          <th>Registro</th>-->
         <!-- <th>Actions</th>
        </tr>-->
        {{ csrf_field() }}

        @foreach($registros as $registro)
          <tr class="item{{$registro->id}}">
 
            <td width="160" nowrap>{{$registro->email}}</td>
             <td width="170" nowrap>{{$registro->modulo}}</td>
            <td>{{$registro->created_at}}</td>

          </tr>
        @endforeach
      </table>



    </div>

      <div id="imagendiv">
    <!--<img src="" id="imagen">-->

    <video src="" id="imagen" autoplay="true" muted></video>


      </div>

  </div>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-documento"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="id">ID :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fid" disabled>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="documento">Documento:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="t">
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-Mail:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="d">
            </div>
          </div>
          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="documento"></span> ?
            <span class="hidden id"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop