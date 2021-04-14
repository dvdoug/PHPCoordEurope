<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/France - mainland - 48°N to 50°N.
 * @internal
 */
class Extent3552
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [7.6157061617258, 48], [7.5838880538942, 48.027221679688], [7.5704922676089, 48.044105529785], [7.5693054199222, 48.087219238281], [7.5783786773683, 48.117198944092], [7.60772895813, 48.164184570313], [7.6933326721194, 48.276382446289], [7.7487053871157, 48.335792541504], [7.743055343628, 48.371109008789], [7.7366657257081, 48.394023895264], [7.7454032897951, 48.424949645996], [7.8022212982178, 48.575828552246], [7.8799991607668, 48.664161682129], [7.961943626404, 48.724159240723], [8.0922222137453, 48.803604125977], [8.1051378250124, 48.819442749023], [8.111388206482, 48.843605041504], [8.1216659545901, 48.86499786377], [8.1374988555909, 48.89319229126], [8.198331832886, 48.955413818359], [8.2260780334473, 48.964416503906], [8.1555538177491, 48.976387023926], [8.0458316802981, 49.008190155029], [7.9359717369081, 49.048881530762], [7.8213882446291, 49.04638671875], [7.7374992370607, 49.042770385742], [7.668888092041, 49.042221069336], [7.6520891189575, 49.044937133789], [7.6280550956727, 49.067218780518], [7.4869441986084, 49.164161682129], [7.4255552291873, 49.176452636719], [7.3786106109622, 49.172359466553], [7.3690147399902, 49.16877746582], [7.3640270233157, 49.15193939209], [7.2897214889529, 49.111663818359], [7.1516666412356, 49.121109008789], [7.0905551910401, 49.127494812012], [7.0194435119631, 49.187492370606], [6.9298605918884, 49.220203399658], [6.8460760116579, 49.212043762207], [6.8563537597657, 49.181762695313], [6.8340964317323, 49.155067443848], [6.7292356491088, 49.167633056641], [6.7150688171389, 49.187286376953], [6.6869440078738, 49.244995117188], [6.5947217941287, 49.363052368164], [6.5412497520449, 49.423885345459], [6.5083332061769, 49.442771911621], [6.4683332443239, 49.461387634277], [6.4137496948242, 49.475692749024], [6.3621702194216, 49.45938873291], [6.3283329010011, 49.469161987305], [6.3027772903445, 49.476661682129], [6.2473182678224, 49.505973815918], [6.2347216606143, 49.508052825928], [6.1606941223146, 49.504299163818], [6.1202425956728, 49.476001739502], [6.0924997329715, 49.453605651856], [5.9795827865601, 49.448467254639], [5.8552770614626, 49.501106262207], [5.8386106491091, 49.51416015625], [5.810832977295, 49.537635803223], [5.8078804016113, 49.545043945313], [5.7922220230105, 49.545829772949], [5.7022218704225, 49.54305267334], [5.6319437026979, 49.535827636719], [5.593333244324, 49.526382446289], [5.5224995613098, 49.509998321533], [5.4727773666381, 49.508884429932], [5.4749298095703, 49.53589630127], [5.432499408722, 49.603469848633], [5.4068055152896, 49.61735534668], [5.3923053741458, 49.622550964356], [5.3311109542848, 49.656661987305], [5.1608328819276, 49.730134963989], [4.9905548095704, 49.803607940674], [4.9591665267946, 49.802215576172], [4.9372911453248, 49.791873931885], [4.909721374512, 49.789302825928], [4.8684720993044, 49.802219390869], [4.820833206177, 49.992774963379], [4.8225409617866, 50], [4.6769105327522, 50], [4.6766662597656, 49.999160766602], [4.5105552673342, 49.947494506836], [4.458124637604, 49.939231872559], [4.4300069808963, 49.945007324219], [4.4133329391479, 49.949165344238], [4.3172216415408, 49.969718933105], [4.239583015442, 49.963466644287], [4.2152605056764, 49.959602355957], [4.1786170005801, 49.978134155273], [4.1492376327517, 49.978370666504], [4.1478587301277, 50], [3.8454322738725, 50], [3.5430058176173, 50], [3.240579361362, 50], [2.9381529051068, 50], [2.6357264488516, 50], [2.3332999925963, 50], [2.0308735363411, 50], [1.7284470800858, 50], [1.4260206238306, 50], [1.1235941675754, 50], [1.044642227432, 49.97388913787], [0.87321860920548, 49.949385792769], [0.70179499097901, 49.924882447669], [0.68294117612305, 49.923915915413], [0.67932050595527, 49.923674773867], [0.66953573663477, 49.922457116914], [0.62066800152547, 49.914234256277], [0.61573604465769, 49.913285825313], [0.61285513372047, 49.912622932129], [0.55743281106072, 49.899044156313], [0.55188052183252, 49.897469674034], [0.5482912991904, 49.896262782667], [0.5253362449655, 49.888039074222], [0.52180263148011, 49.886673455273], [0.3866976748655, 49.831070135256], [0.2771804994905, 49.789817738883], [0.2380982488142, 49.779740665224], [0.18173724533005, 49.764871066708], [0.17691915157639, 49.763460814235], [0.17246936201377, 49.761918547966], [0.16818548032813, 49.760191868341], [0.16408587719275, 49.758288189592], [0.1596224259161, 49.75588783496], [0.13391929758603, 49.740693477545], [0.13137303145226, 49.739116227724], [0.12793033216604, 49.736732752123], [0.12473667453509, 49.734209207295], [0.12262580271943, 49.732336427919], [0.10597256361154, 49.716801724248], [0.10290866856718, 49.713640688603], [0.10054108198193, 49.710763766912], [0.097904012466131, 49.706850729041], [0.0033642161372427, 49.53894576403], [0.0016062557820078, 49.535242240878], [0.0004811489407075, 49.532067918666], [-0.00032111747020735, 49.528853002684], [-0.00079717155193748, 49.525611264547], [-0.00094504004414375, 49.522356587933], [-0.00076415565791876, 49.519102909105], [-0.00025535837710322, 49.515864157239], [0.00057910925738724, 49.512654194848], [0.0017356128395249, 49.509486758524], [0.0032091427054297, 49.506375400274], [0.0049933363626451, 49.503333429679], [0.0070805066310413, 49.500373857145], [0.0094616753622176, 49.49750933845], [0.012366412387735, 49.494525262984], [0.050221290759396, 49.459301624712], [0.052435874575281, 49.45734323485], [0.055628416864636, 49.45483427631], [0.059066943232665, 49.452466316802], [0.062736728636196, 49.450249474769], [0.066622066308582, 49.448193221829], [0.070706334881891, 49.446306342573], [0.073176048590824, 49.445286218955], [0.084973897273358, 49.440615122956], [0.063806204668026, 49.429145395437], [0.059339445727005, 49.42645687693], [0.055920127855131, 49.424071891379], [0.051871350085548, 49.420769487476], [0.031664707696677, 49.402134044652], [0.021204629692932, 49.394250162133], [-0.03750521554548, 49.372108188719], [-0.072524161345541, 49.359626497504], [-0.099857679486945, 49.352225968783], [-0.11793268701791, 49.348378718733], [-0.21973386366614, 49.335399919249], [-0.26242552859645, 49.347349501763], [-0.3341182752531, 49.3699164729], [-0.38370016275849, 49.386047701359], [-0.38880198106318, 49.387528366587], [-0.39350574359833, 49.388644994686], [-0.39831253775009, 49.38955903959], [-0.4032017233161, 49.390266577348], [-0.40815230349222, 49.390764570888], [-0.41084939942965, 49.390945888709], [-0.49763835204305, 49.395726578109], [-0.50397746088277, 49.395846191551], [-0.58147338686553, 49.395008195138], [-0.61841826968077, 49.394755982307], [-0.71591669736085, 49.401031459569], [-0.81230084567073, 49.410510128437], [-0.83421544181391, 49.413973208338], [-0.85384727525263, 49.419881877949], [-0.87405342845972, 49.431726931816], [-0.87886521436803, 49.43425502974], [-0.88298477864964, 49.436106577897], [-0.88728292226284, 49.43777896667], [-0.89174120617645, 49.439265016652], [-0.89634049853328, 49.440558348084], [-0.90106105727557, 49.441653408457], [-0.90588261549135, 49.442545496529], [-0.91078446910637, 49.443230782668], [-0.91574556652751, 49.443706325412], [-0.91910899548765, 49.443907314732], [-0.972344328894, 49.446303093768], [-0.97817799859587, 49.446382622983], [-0.98392682025678, 49.446173341295], [-1.0870574197439, 49.439236278563], [-1.0905633016835, 49.438945517821], [-1.0954967971368, 49.438353340096], [-1.1003604405817, 49.437552974984], [-1.1036150448588, 49.436891989641], [-1.1068735677043, 49.439069214712], [-1.1809502459145, 49.503114554371], [-1.1940899912031, 49.517315308912], [-1.2199949802213, 49.546950079863], [-1.2228896250476, 49.553325645937], [-1.2104916161556, 49.559897990882], [-1.2073447408328, 49.561659731923], [-1.2036595098053, 49.563989009747], [-1.1733635437712, 49.584512259008], [-1.1701601063007, 49.586820713181], [-1.1670427566405, 49.589377632927], [-1.1641900578803, 49.592060591651], [-1.1616142524787, 49.594858119862], [-1.1593264048579, 49.597758256032], [-1.157336353439, 49.600748597512], [-1.1556526678067, 49.603816353362], [-1.1542826111984, 49.606948398881], [-1.1532321084905, 49.61013133161], [-1.1525057198371, 49.61335152855], [-1.1521066200887, 49.616595204394], [-1.152036584097, 49.619848470476], [-1.1522959779898, 49.623097394226], [-1.152980553915, 49.62672116112], [-1.1630366800123, 49.665346606799], [-1.1646351326123, 49.669705312724], [-1.1661899366281, 49.672798540215], [-1.1680552020827, 49.675819153925], [-1.170222987463, 49.678754202667], [-1.1720160255264, 49.680863081214], [-1.1978820644915, 49.70957966624], [-1.2009636269527, 49.712669436786], [-1.2039818838217, 49.715273208715], [-1.2072583592194, 49.717743730955], [-1.2107790297858, 49.720070402615], [-1.2145288177643, 49.722243238822], [-1.2184916555943, 49.724252913845], [-1.2219858717908, 49.72581417091], [-1.2467766605855, 49.736241870392], [-1.2514480899357, 49.738037330398], [-1.2559465838658, 49.739507723595], [-1.2605853240233, 49.740784976511], [-1.2661945612892, 49.742029395464], [-1.301249829664, 49.748582537435], [-1.3044092920935, 49.749125359436], [-1.3094479184803, 49.749803369767], [-1.3633461498978, 49.755792055139], [-1.368145113623, 49.756224383159], [-1.3731790647114, 49.756467081349], [-1.3782273774338, 49.756496875566], [-1.3826815623497, 49.756345964941], [-1.4173194155867, 49.7545177284], [-1.42262434326, 49.754104511724], [-1.4275852431257, 49.753497025251], [-1.4324741911605, 49.752681630397], [-1.4372701954764, 49.751661831222], [-1.4431496352552, 49.750084528175], [-1.5101201323745, 49.72915622789], [-1.5155885057275, 49.727200154853], [-1.5198081615916, 49.725412764552], [-1.5238375647405, 49.723451330147], [-1.5276594457425, 49.721324272248], [-1.5312574324249, 49.719040721006], [-1.5349474689081, 49.716350780194], [-1.5469763790448, 49.706793545932], [-1.6143300116385, 49.705161682772], [-1.6370543062258, 49.708062244377], [-1.6756957838998, 49.72295594357], [-1.6785152338221, 49.723990379819], [-1.6830252674827, 49.725443547871], [-1.6863249307603, 49.726361307594], [-1.8165449618331, 49.760169486732], [-1.8219937129459, 49.761394517781], [-1.8256883868085, 49.762060353852], [-1.9036421203953, 49.774734793232], [-1.9091805213105, 49.77546762474], [-1.9141855622975, 49.775898046606], [-1.9192241883218, 49.776116519542], [-1.9242747566209, 49.776122107298], [-1.9293155731357, 49.775914788089], [-1.9343249865562, 49.775495454653], [-1.9392814821648, 49.774865910341], [-1.9441637750578, 49.774028861264], [-1.949001442474, 49.772975688561], [-1.9691408088145, 49.768095338101], [-1.9737101927718, 49.766878606647], [-1.9782448088018, 49.765443345476], [-1.9826241406842, 49.763820168192], [-1.9868294049823, 49.762016045391], [-1.9908425716741, 49.760038723506], [-1.9946464417422, 49.757896691274], [-1.9982247210613, 49.755599143021], [-2.0015620902609, 49.753155938913], [-2.0046442702637, 49.750577562359], [-2.007458083221, 49.747875074762], [-2.0099915085867, 49.745060067795], [-2.0122337340972, 49.742144613441], [-2.0141752014452, 49.739141211996], [-2.0158076464668, 49.736062738264], [-2.0171241336778, 49.732922386197], [-2.0181190850302, 49.729733612196], [-2.0187883027794, 49.72651007734], [-2.0191168971983, 49.723476231393], [-2.0218337845855, 49.67871643122], [-2.0218508938358, 49.675359542312], [-2.0215323515282, 49.672114834362], [-2.0208856361887, 49.668890874828], [-2.0199135803337, 49.665701461471], [-2.0186204064151, 49.662560241533], [-2.0170117077157, 49.659480653477], [-2.0150944234476, 49.656475869659], [-2.0128768081784, 49.653558740178], [-2.0103683957253, 49.650741738138], [-2.0075799576923, 49.648036906553], [-2.0045234568309, 49.645455807116], [-2.0012119954384, 49.643009471046], [-1.9976597590184, 49.640708352217], [-1.9938819554483, 49.638562282764], [-1.9898947499173, 49.636580431348], [-1.9857151959116, 49.634771264256], [-1.9813611625381, 49.633142509494], [-1.976586746241, 49.631624213], [-1.9445385011905, 49.622392254112], [-1.9404225497218, 49.621297014698], [-1.9356609113896, 49.620246625573], [-1.9304559796519, 49.619347976404], [-1.9237604663909, 49.618317021337], [-1.9186048760942, 49.606329055345], [-1.9176734618932, 49.583039618026], [-1.9222465104837, 49.501454052581], [-1.9222652446254, 49.498218134723], [-1.9219564577867, 49.494972781536], [-1.9211142607235, 49.490992657992], [-1.884001370778, 49.366027648508], [-1.8824561357072, 49.362043833618], [-1.8808690690898, 49.358961527885], [-1.8789750302797, 49.355953603283], [-1.876782173853, 49.353032923561], [-1.8742999272835, 49.350211977225], [-1.8715389499383, 49.347502824379], [-1.8685110869237, 49.344917045414], [-1.8652293179878, 49.342465691773], [-1.8617077017033, 49.340159238988], [-1.8579613151766, 49.338007542195], [-1.8540061895381, 49.336019794293], [-1.8498592414946, 49.334204486941], [-1.8455382012274, 49.332569374536], [-1.8410615369435, 49.331121441338], [-1.8364483763939, 49.329866871854], [-1.8317184256823, 49.328811024629], [-1.8268918857036, 49.327958409531], [-1.821989366552, 49.327312668634], [-1.8185482232217, 49.326987209667], [-1.8135055744722, 49.326586008247], [-1.8013403312602, 49.320638932303], [-1.7689978841615, 49.290249683142], [-1.7458330659, 49.267904567749], [-1.6860216881581, 49.201459241112], [-1.6860906886262, 49.088747675312], [-1.6857928188903, 49.084870242483], [-1.6851210115113, 49.081396551277], [-1.672488384812, 49.031997960906], [-1.671680305386, 49.029297089265], [-1.6702593562586, 49.025776088264], [-1.6555379997466, 48.99485736732], [-1.6543269694612, 48.992519223792], [-1.652464484063, 48.989506370221], [-1.6503048914173, 48.986580107413], [-1.647857476263, 48.983752948049], [-1.645132748685, 48.981036979097], [-1.6421423986018, 48.978443810383], [-1.6388992453309, 48.975984525227], [-1.6356219383039, 48.973805765634], [-1.639731173849, 48.919117222053], [-1.6505400998674, 48.869751050646], [-1.6509745438872, 48.86730079021], [-1.6541743406849, 48.840668959037], [-1.6543037282503, 48.836488854539], [-1.6539056413701, 48.832500657107], [-1.6374386932812, 48.74208292056], [-1.6363369244807, 48.738015395622], [-1.6351019423773, 48.73486768407], [-1.6335566720451, 48.731780364103], [-1.6317077793133, 48.728766641759], [-1.629563224466, 48.725839406001], [-1.6271322274237, 48.723011173807], [-1.6239977211126, 48.719902302279], [-1.5901824458256, 48.689378054643], [-1.5952637483629, 48.689189935546], [-1.6001676301833, 48.688788880277], [-1.6050219284759, 48.688177339189], [-1.6098057988667, 48.687357940777], [-1.6144987025014, 48.686334205995], [-1.6190804949177, 48.685110532963], [-1.6235315131419, 48.683692177894], [-1.6278326606256, 48.682085232301], [-1.6319654896499, 48.68029659661], [-1.6359122808234, 48.678333950276], [-1.6386429405131, 48.676809783362], [-1.6563997758182, 48.666410205518], [-1.6605512290384, 48.665189093734], [-1.7268652772921, 48.660784929688], [-1.7743637547088, 48.660369674675], [-1.7721785305631, 48.663237062983], [-1.7702538088982, 48.66623592343], [-1.7686304146617, 48.669310731939], [-1.7673153510905, 48.672448333019], [-1.7663143054178, 48.67563529986], [-1.7656316235673, 48.678857991667], [-1.7652702905297, 48.682102611975], [-1.7652319165275, 48.685355267655], [-1.7655167290433, 48.688602028397], [-1.7662413431282, 48.692293407657], [-1.7734782090948, 48.71910605104], [-1.7750672584245, 48.72338414715], [-1.7766209519473, 48.726469216956], [-1.7784785020398, 48.729480241177], [-1.7806319973278, 48.732404309804], [-1.7830722527075, 48.735228883546], [-1.7857888480482, 48.737941847839], [-1.7887701723055, 48.740531565046], [-1.7920034728641, 48.742986924643], [-1.7954749099046, 48.745297391156], [-1.7991696155685, 48.747453049635], [-1.8030717576656, 48.74944464848], [-1.8071646076545, 48.75126363941], [-1.8114306126, 48.752902214411], [-1.8158514707944, 48.754353339495], [-1.82040821071, 48.755610785118], [-1.8250812729362, 48.756669153126], [-1.8298505947379, 48.757523900101], [-1.8346956968587, 48.758171357012], [-1.8395957721825, 48.75860874508], [-1.844529775857, 48.758834187785], [-1.8494765164759, 48.758846718962], [-1.8544147479089, 48.758646286953], [-1.8593232613717, 48.75823375479], [-1.8630542467804, 48.757774763342], [-1.9486947077879, 48.745731627692], [-1.9523484848844, 48.745121427924], [-2.0089866424096, 48.734655756571], [-2.0143323270333, 48.733489580798], [-2.0189083767684, 48.732249822445], [-2.0233519364509, 48.730815912681], [-2.0276439420072, 48.729194009812], [-2.0317659854693, 48.727391078465], [-2.0357003942945, 48.725414859433], [-2.0394303074058, 48.72327383618], [-2.0429397476202, 48.720977198153], [-2.0462136901505, 48.718534801062], [-2.0492381268859, 48.715957124322], [-2.0520001261782, 48.713255225815], [-2.0544878878803, 48.710440694207], [-2.0566907934071, 48.707525598994], [-2.0583295484757, 48.704982554157], [-2.0759976208969, 48.675284866936], [-2.0854242667634, 48.679562732772], [-2.0882861437969, 48.680798851189], [-2.0925549455334, 48.682426652448], [-2.096977366528, 48.683866661949], [-2.1015344283009, 48.685112697898], [-2.1046255321802, 48.685830334362], [-2.2616635887196, 48.719630575142], [-2.2652657818214, 48.720312935287], [-2.2890402690352, 48.724365248046], [-2.2948693836989, 48.725151097287], [-2.2997701111071, 48.725568393855], [-2.3047028065117, 48.725773681204], [-2.309646284138, 48.725766079794], [-2.3145793119717, 48.725545624492], [-2.3194807037663, 48.725113264382], [-2.3243294108345, 48.724470858618], [-2.3291414657665, 48.723613738572], [-2.440389537348, 48.701081249701], [-2.4449927021028, 48.7000383831], [-2.4495550296463, 48.698781605388], [-2.4539833018175, 48.697331245004], [-2.4582585207334, 48.695693530852], [-2.462567274104, 48.693777476385], [-2.5103499377175, 48.670742136519], [-2.5148970516633, 48.668355581507], [-2.6737928793412, 48.574966540015], [-2.750487888697, 48.643080972271], [-2.8174508909951, 48.70761472494], [-2.8203417028725, 48.710143974544], [-3.0023629417909, 48.858043833451], [-3.0060568664433, 48.86077352985], [-3.0092623008126, 48.862843457191], [-3.073048913607, 48.901590112453], [-3.0769773163253, 48.90380090262], [-3.0809435816625, 48.905745403868], [-3.0850965878138, 48.907515299465], [-3.0894185218216, 48.909102991939], [-3.0938908401575, 48.910501665609], [-3.0984943487508, 48.911705316055], [-3.1032092859164, 48.912708776091], [-3.1080154078129, 48.913507738116], [-3.1128920760531, 48.914098772742], [-3.1183952294141, 48.914508492067], [-3.2207371355652, 48.919120662431], [-3.2245386636667, 48.919227379181], [-3.2295009060802, 48.919178533416], [-3.2344485585318, 48.918917092983], [-3.2393603718953, 48.918444183129], [-3.2442152528477, 48.917761837298], [-3.2489923552272, 48.916872988276], [-3.2536711702757, 48.915781455446], [-3.2581070737613, 48.914530262882], [-3.3808449717119, 48.876748068853], [-3.4574666476927, 48.889195308097], [-3.4635129041646, 48.88994771054], [-3.4684393800314, 48.890312911954], [-3.4733928011767, 48.890465988696], [-3.4783518924144, 48.890406285614], [-3.4843475413538, 48.890043528578], [-3.5232177198348, 48.88633907577], [-3.5260195160253, 48.886035642027], [-3.530867312177, 48.885341200956], [-3.5356362089333, 48.884440499963], [-3.5403057330694, 48.883337409339], [-3.5448558421803, 48.882036668106], [-3.5492670113079, 48.880543863472], [-3.5535203172479, 48.878865406601], [-3.556593441974, 48.877490100221], [-3.5812671014294, 48.865848414164], [-3.5856507403984, 48.863579377424], [-3.5894330801714, 48.861314226836], [-3.5939700807447, 48.860602081572], [-3.5987355280278, 48.859698837751], [-3.6034014128076, 48.858593267605], [-3.6079477084005, 48.8572901208], [-3.6123549063193, 48.855794994859], [-3.6166041005061, 48.854114310898], [-3.6206770688682, 48.852255285807], [-3.6245563517602, 48.850225901005], [-3.6288257882973, 48.847643406782], [-3.6335887567421, 48.844476899795], [-3.6358305480392, 48.842916470634], [-3.6386654071709, 48.840733003487], [-3.6419116250268, 48.838080407137], [-3.6450421915763, 48.835312193836], [-3.6477222453457, 48.832574754149], [-3.6501238101571, 48.829728772043], [-3.6522366392676, 48.826786451129], [-3.6540517287813, 48.823760405661], [-3.6555613554555, 48.820663606269], [-3.6567591089275, 48.817509324201], [-3.6576399182358, 48.814311074318], [-3.6582000725393, 48.811082557088], [-3.6584372359636, 48.807837599837], [-3.658350456528, 48.804590097496], [-3.6579740741319, 48.801548666725], [-3.6573881158191, 48.79812493784], [-3.6566393153278, 48.794816637071], [-3.6555889891073, 48.79164464167], [-3.6543063130459, 48.787572496557], [-3.6542915349223, 48.783349141781], [-3.6538819398636, 48.78011295308], [-3.6529272315229, 48.776163991749], [-3.6457748609133, 48.754301366699], [-3.6441118328117, 48.75033358516], [-3.6424418922127, 48.747279728141], [-3.6404713350855, 48.744304761576], [-3.6382086398801, 48.74142140754], [-3.6356635292841, 48.738641994315], [-3.6325332828429, 48.735507868223], [-3.6427258746291, 48.738601021684], [-3.6851712812698, 48.754607132933], [-3.6885064304378, 48.755791338052], [-3.6929809015562, 48.757166070884], [-3.6975839073867, 48.758345190625], [-3.7031939260712, 48.759481252824], [-3.7918112763541, 48.774232267691], [-3.794816840074, 48.774688183609], [-3.7996875516811, 48.77524965034], [-3.8046049166487, 48.775600473864], [-3.8095478153133, 48.775739149675], [-3.8144950178877, 48.775665084515], [-3.8194252764633, 48.775378598903], [-3.8243174170807, 48.774880925707], [-3.8291504314637, 48.774174204756], [-3.8339035679989, 48.773261473532], [-3.8385564215573, 48.772146653965], [-3.8430890217549, 48.770834535413], [-3.8474819192612, 48.769330753884], [-3.8517162697693, 48.767641767604], [-3.856176823423, 48.765573489453], [-3.8779759674586, 48.754527205097], [-3.8810323923901, 48.75289247715], [-3.8846836308624, 48.750693776888], [-3.8881085629288, 48.748343360531], [-3.8912925291742, 48.745851314008], [-3.8942219102224, 48.743228329102], [-3.8972293701581, 48.74009500446], [-3.9032934634585, 48.733364165931], [-3.9056729986706, 48.736393985945], [-3.9082330504868, 48.739166651707], [-3.911064600218, 48.741822704334], [-3.9141555407575, 48.744350749417], [-3.9174926461478, 48.746739940226], [-3.921061628043, 48.74898002453], [-3.925503152154, 48.751391020155], [-3.9482504568552, 48.762566334659], [-3.9509256691795, 48.763820207612], [-3.9550966236546, 48.765557158142], [-3.9594329123934, 48.767110750864], [-3.963915929315, 48.768474316515], [-3.9685264336327, 48.769642001468], [-3.9732446329977, 48.770608793049], [-3.9780502691017, 48.771370541215], [-3.982922705356, 48.771923976503], [-3.9878410162596, 48.772266724154], [-3.9927840780523, 48.772397314371], [-3.9977306602482, 48.772315188647], [-4.0026595176397, 48.772020702143], [-4.0075494823575, 48.77151512211], [-4.0123795555762, 48.770800622355], [-4.0146798341381, 48.770368478326], [-4.1868896203932, 48.736309340115], [-4.3629477425131, 48.723416292953], [-4.3684353175563, 48.722847206863], [-4.3732555507095, 48.722117562083], [-4.3765226953063, 48.721496571077], [-4.5625538020424, 48.682957896192], [-4.5679164311761, 48.681655591845], [-4.5724217973308, 48.680315149453], [-4.5767849777857, 48.678784064056], [-4.5809872568067, 48.677068911021], [-4.5858411931857, 48.674746688299], [-4.6130320577577, 48.660232276273], [-4.6177271467579, 48.657411295935], [-4.6211117361565, 48.655040232346], [-4.6242537917907, 48.65252918684], [-4.6271398750168, 48.649888932393], [-4.6297576511406, 48.647130794232], [-4.6320959418239, 48.644266601013], [-4.6341447724104, 48.641308633861], [-4.6363077117819, 48.637428037005], [-4.6415136947854, 48.62870015498], [-4.7140245258008, 48.619486574246], [-4.7190830674639, 48.618709773484], [-4.7238052940063, 48.617760634255], [-4.728424066623, 48.6166103475], [-4.7329195623746, 48.615263854834], [-4.7382929845663, 48.613323633657], [-4.7695745587512, 48.600507051552], [-4.7746599061485, 48.598151594067], [-4.7784739508258, 48.596085223386], [-4.7820752023251, 48.59385948712], [-4.7854482395829, 48.591483937497], [-4.7888571438677, 48.58872642341], [-4.8112051742793, 48.56902668763], [-4.8135207944507, 48.56686699117], [-4.8155509942329, 48.564749257078], [-4.8415020840487, 48.536086401146], [-4.8441108323406, 48.532896316686], [-4.8461438051869, 48.529935140505], [-4.8478789480064, 48.526893422047], [-4.8493088805564, 48.523784198334], [-4.8504275340848, 48.52062079305], [-4.8513590077955, 48.516689360835], [-4.8650877869916, 48.427706308721], [-4.8653622509834, 48.423574204939], [-4.8651253021735, 48.419681091288], [-4.8566724125067, 48.358849146151], [-4.8557133012586, 48.354684722218], [-4.8546017530762, 48.351526835862], [-4.8531802511136, 48.348424654906], [-4.8514549316895, 48.345391449489], [-4.8496878500709, 48.342785007222], [-4.8280045989493, 48.313108793962], [-4.8255709651133, 48.310079092691], [-4.8229868088759, 48.307328554914], [-4.8201360762372, 48.304696499527], [-4.8170309904343, 48.302194176692], [-4.813684855927, 48.299832280658], [-4.8101120012944, 48.297620904331], [-4.8063277178805, 48.295569496412], [-4.8023481944573, 48.293686821291], [-4.7981904481791, 48.29198092186], [-4.79387225212, 48.290459085394], [-4.7894120596978, 48.289127812646], [-4.7848289262992, 48.287992790289], [-4.7801424284302, 48.287058866793], [-4.7753725807263, 48.286330031876], [-4.7705397511607, 48.285809399573], [-4.765664574803, 48.285499195026], [-4.7615716073806, 48.28540234628], [-4.7119825078045, 48.285117745777], [-4.7066832243332, 48.285228330099], [-4.7014493643003, 48.285584208081], [-4.6959315760921, 48.286093408905], [-4.6964285714135, 48.282850418629], [-4.6966025924811, 48.279606119591], [-4.6964560654448, 48.276362131938], [-4.6959896792203, 48.273132343024], [-4.6952054908319, 48.269930576725], [-4.6941069155808, 48.266770534356], [-4.6926987114432, 48.26366573616], [-4.6909869577784, 48.260629463608], [-4.6893741627611, 48.258216999929], [-4.6138746551031, 48.152687252559], [-4.6114582793564, 48.149643763716], [-4.6088956957176, 48.146887330209], [-4.6060668060632, 48.144248854194], [-4.6029837403663, 48.141739613451], [-4.5996597091387, 48.139370331956], [-4.5961089467219, 48.137151134325], [-4.5923466503303, 48.135091502815], [-4.5891057383665, 48.133542804727], [-4.7200116722656, 48.116718344289], [-4.7249859706538, 48.115947905305], [-4.7296628713287, 48.115000449846], [-4.7342377151201, 48.113851793818], [-4.7386908682577, 48.112506871644], [-4.7430032241224, 48.110971459894], [-4.7471562857057, 48.109252152243], [-4.7511322453458, 48.107356330915], [-4.754914061385, 48.105292134732], [-4.7584855314175, 48.103068423906], [-4.7618313618061, 48.100694741739], [-4.7649372331705, 48.098181273394], [-4.7677898615653, 48.095538801932], [-4.7703770550883, 48.092778661788], [-4.7726877656817, 48.089912689913], [-4.7751961096334, 48.086139598882], [-4.7923613305975, 48.055729646027], [-4.794167306371, 48.051914652948], [-4.7952847039015, 48.048751842375], [-4.7960891574826, 48.04554811486], [-4.7965772815279, 48.042317193524], [-4.7967470465714, 48.039072915208], [-4.796597786917, 48.035829171204], [-4.7961302024416, 48.032599847784], [-4.7953463545583, 48.029398766814], [-4.7942496563805, 48.026239626674], [-4.7928448571392, 48.02313594376], [-4.7911380209434, 48.020100994799], [-4.7891364999849, 48.017147760237], [-4.7868489023182, 48.014288868918], [-4.7842850543666, 48.011536544307], [-4.7814559583254, 48.008902552462], [-4.7783737446515, 48.006398151998], [-4.7750516198516, 48.004034046216], [-4.771503809798, 48.001820337637], [-4.7681728039005, 48], [-4.4422812521734, 48], [-4.1163897004464, 48], [-3.7904981487194, 48], [-3.4646065969924, 48], [-3.1387150452654, 48], [-2.8128234935384, 48], [-2.4869319418114, 48], [-2.1610403900844, 48], [-1.8351488383574, 48], [-1.5092572866304, 48], [-1.1833657349034, 48], [-0.85747418317637, 48], [-0.53158263144937, 48], [-0.20569107972236, 48], [0.12020047200465, 48], [0.44609202373165, 48], [0.77198357545866, 48], [1.0978751271857, 48], [1.4237666789127, 48], [1.7496582306397, 48], [2.0755497823667, 48], [2.4014413340937, 48], [2.7273328858207, 48], [3.0532244375477, 48], [3.3791159892747, 48], [3.7050075410017, 48], [4.0308990927287, 48], [4.3567906444557, 48], [4.6826821961827, 48], [5.0085737479097, 48], [5.3344652996368, 48], [5.6603568513638, 48], [5.9862484030908, 48], [6.3121399548178, 48], [6.6380315065448, 48], [6.9639230582718, 48], [7.2898146099988, 48], [7.6157061617258, 48],
                ],
            ],
        ];
    }
}
