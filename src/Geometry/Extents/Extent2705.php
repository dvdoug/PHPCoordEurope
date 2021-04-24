<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Russia - 175.5°E to 178.5°E onshore.
 * @internal
 */
class Extent2705
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [178.5, 71.097945296262], [178.48565483093, 71.08494758606], [178.48225212097, 71.08131980896], [178.46958732605, 71.063871383667], [178.46767616272, 71.060400009155], [178.46676445007, 71.057409286499], [178.46650123596, 71.054613113403], [178.46667289734, 71.032838821411], [178.46707344055, 71.029718399048], [178.4681224823, 71.026712417603], [178.46980857849, 71.023748397827], [178.49849891663, 70.981397628784], [178.5, 70.97958033206], [178.5, 71.097945296262],
                ],
            ],
            [
                [
                    [178.5, 69.511601532496], [178.47701454163, 69.513715744019], [178.47298622131, 69.514066696167], [178.39810752869, 69.520185470581], [178.3933391571, 69.520544052124], [178.38867378235, 69.520845413208], [178.35056877136, 69.523080825806], [178.3460521698, 69.523321151734], [178.33680152893, 69.523664474487], [178.32642555237, 69.523813247681], [178.30443382263, 69.523817062378], [178.2973690033, 69.523759841919], [178.2881565094, 69.523508071899], [178.2834072113, 69.523302078247], [178.24328422546, 69.521318435669], [178.23891639709, 69.521078109741], [178.22992897034, 69.520433425903], [178.22111701965, 69.5196018219], [178.21251106262, 69.518579483032], [178.20415306091, 69.517370223999], [178.1960735321, 69.515985488892], [178.18831443787, 69.514429092407], [178.18090248108, 69.51270866394], [178.17387580872, 69.510824203491], [178.16876411438, 69.509279251099], [178.1582660675, 69.505937576294], [177.92639350891, 69.546274185181], [177.82141304016, 69.570371627808], [177.77885246277, 69.582845687866], [177.75234413147, 69.590890884399], [177.74716758728, 69.592390060425], [177.68247795105, 69.610078811646], [177.67608070374, 69.611730575562], [177.66834068298, 69.613496780396], [177.66002082825, 69.615148544312], [177.50266075134, 69.64386177063], [177.49480628967, 69.645193099976], [177.48617744446, 69.646440505982], [177.48135566711, 69.647047042847], [177.36072349548, 69.661386489868], [177.35669898987, 69.661840438843], [177.34766578674, 69.662714004517], [177.33849525452, 69.66339302063], [177.32922554016, 69.66388130188], [177.32096290588, 69.664148330689], [177.19221305847, 69.66704750061], [177.05275917053, 69.670969009399], [177.04231452942, 69.67214012146], [176.81341743469, 69.706327438354], [176.80454826355, 69.708581924439], [176.79202461243, 69.71368598938], [176.76068305969, 69.73192024231], [176.75666999817, 69.734113693237], [176.75137138367, 69.736658096314], [176.74558067322, 69.739088058472], [176.73931312561, 69.741395950317], [176.73516654968, 69.74277305603], [176.70113945007, 69.753633499146], [176.69857215881, 69.754430770874], [176.69326591492, 69.755968093872], [176.62070655823, 69.775972366333], [176.61226463318, 69.778100967407], [176.60343360901, 69.780012130737], [176.48415565491, 69.803464889526], [176.47783470154, 69.804639816284], [176.46933174133, 69.806016921997], [176.4605846405, 69.807214736939], [176.45162391663, 69.808229446411], [176.44573402405, 69.808786392212], [176.39118385315, 69.813535690308], [176.38045692444, 69.816087722778], [176.38114356995, 69.82431602478], [176.38101005554, 69.827573776245], [176.38024330139, 69.830587387085], [176.37886238098, 69.833585739136], [176.37687110901, 69.836553573608], [176.37428474426, 69.839479446411], [176.37111091614, 69.842351913452], [176.36736106873, 69.845155715942], [176.36305427551, 69.847883224487], [176.35961723328, 69.849786758423], [176.24098777771, 69.912027359009], [176.23488044739, 69.914922714234], [176.22898674011, 69.9173412323], [176.22262001038, 69.919633865356], [176.21580696106, 69.921792984009], [176.20857810974, 69.923810958862], [176.200963974, 69.925676345825], [176.19299507141, 69.927381515503], [176.18470954895, 69.928918838501], [176.17613792419, 69.930284500122], [176.16964912415, 69.931177139282], [176.13383674622, 69.935781478882], [176.12364768982, 69.936925888062], [176.11445045471, 69.937738418579], [176.1051197052, 69.938356399536], [176.09973716736, 69.938623428345], [175.97337532043, 69.944059371948], [175.96831703186, 69.944246292114], [175.77216529846, 69.9498462677], [175.76377296448, 69.950002670288], [175.72212028503, 69.950304031372], [175.71458244324, 69.95029258728], [175.7051410675, 69.950105667114], [175.69577217102, 69.949716567993], [175.68822669983, 69.949258804321], [175.5, 69.935974679844], [175.5, 69.609185662636], [175.5, 69.282396645427], [175.5, 68.955607628219], [175.5, 68.62881861101], [175.5, 68.302029593802], [175.5, 67.975240576593], [175.5, 67.648451559384], [175.5, 67.321662542176], [175.5, 66.994873524967], [175.5, 66.668084507759], [175.5, 66.34129549055], [175.5, 66.014506473342], [175.5, 65.687717456133], [175.5, 65.360928438925], [175.5, 65.034139421716], [175.5, 64.707350404507], [175.5, 64.380561387299], [175.5, 64.05377237009], [175.5, 63.726983352882], [175.5, 63.400194335673], [175.5, 63.073405318465], [175.5, 62.746616301256], [175.5, 62.419827284048], [175.5, 62.093038266839], [175.64365577698, 62.129774093628], [175.85127067566, 62.185388565064], [175.94137763977, 62.203664779663], [176.05184364319, 62.22519493103], [176.07772636414, 62.230241775513], [176.14441490173, 62.238233566284], [176.14981651306, 62.23895072937], [176.15586280823, 62.239931106567], [176.24051475525, 62.254964828491], [176.32546424866, 62.270269393921], [176.33133888245, 62.271421432495], [176.33731269836, 62.2728099823], [176.34304618835, 62.274370193482], [176.34850883484, 62.276098251343], [176.35367774963, 62.277982711792], [176.35853767395, 62.280015945435], [176.36373329163, 62.282545089722], [176.52075767517, 62.366329193115], [176.67778205872, 62.450113296509], [176.68064689636, 62.451704025269], [176.6845035553, 62.454118728638], [176.68797111511, 62.456651687622], [176.69070625305, 62.458974838257], [176.71759223938, 62.483640670776], [176.79218864441, 62.475175857544], [176.7966632843, 62.47470664978], [176.80359077454, 62.47414970398], [176.81056404114, 62.473787307739], [176.81755256653, 62.473623275757], [176.82452201843, 62.473653793335], [176.83144569397, 62.473878860474], [176.83829689026, 62.47430229187], [176.84504508972, 62.474920272827], [176.85165596008, 62.475728988647], [176.85811042786, 62.476728439331], [176.86520195007, 62.47808265686], [176.888879776, 62.483198165894], [177.06518745422, 62.505517959595], [177.11236000061, 62.508977890015], [177.16509819031, 62.512842178345], [177.20063209534, 62.515336990356], [177.2077922821, 62.515962600708], [177.21382713318, 62.516672134399], [177.27960014343, 62.525323867798], [177.28637886047, 62.52633857727], [177.29267311096, 62.527498245239], [177.2987537384, 62.528833389282], [177.30459403992, 62.530347824097], [177.31059455872, 62.53217124939], [177.31331825256, 62.531988143921], [177.32017326355, 62.531209945679], [177.32782173157, 62.530576705933], [177.35848426819, 62.528596878052], [177.36519432068, 62.528257369995], [177.47480964661, 62.524606704712], [177.47946739197, 62.524492263794], [177.48645210266, 62.524484634399], [177.49339485168, 62.524675369263], [177.500207901, 62.525060653687], [177.53576087952, 62.52756690979], [177.54300880432, 62.528192520142], [177.58820152283, 62.532915115357], [177.60461235046, 62.533056259155], [177.66160774231, 62.531282424927], [177.68813896179, 62.530332565308], [177.72527885437, 62.527803421021], [177.96608924866, 62.504060745239], [177.99810600281, 62.500787734985], [178.03344535828, 62.493719100952], [178.08612251282, 62.479162216187], [178.12148094177, 62.468919754028], [178.12621879578, 62.467622756958], [178.27411079407, 62.429903030396], [178.27818870544, 62.428907394409], [178.28457069397, 62.427530288696], [178.29006004334, 62.426511764526], [178.43676567078, 62.401159286499], [178.5, 62.390480378663], [178.5, 62.700971006276], [178.5, 63.011461633889], [178.5, 63.321952261502], [178.5, 63.632442889115], [178.5, 63.942933516728], [178.5, 64.253424144341], [178.47910881042, 64.281583786011], [178.4766254425, 64.284475326538], [178.45184135437, 64.310487747192], [178.4086894989, 64.354688644409], [178.40544700623, 64.357683181763], [178.38840293884, 64.371980667114], [178.38514518738, 64.374521255493], [178.38122749329, 64.377168655396], [178.37690162659, 64.379720687866], [178.37218284607, 64.382158279419], [178.36709785461, 64.384473800659], [178.36166191101, 64.386659622192], [178.35590553284, 64.388708114624], [178.34984397888, 64.390604019165], [178.34351158142, 64.392339706421], [178.33693122864, 64.393915176392], [178.33013343811, 64.395318984985], [178.32314491272, 64.396543502808], [178.31599617004, 64.397584915161], [178.30871772766, 64.398435592651], [178.30134391785, 64.399099349976], [178.29390144348, 64.399568557739], [178.28642845154, 64.399839401245], [178.2789516449, 64.39991569519], [178.27150917053, 64.399793624878], [178.26412391663, 64.399473190308], [178.25683784485, 64.398958206177], [178.24967384338, 64.398248672485], [178.2426700592, 64.397348403931], [178.23584938049, 64.396265029907], [178.22924613953, 64.394994735718], [178.22289085388, 64.393552780151], [178.21680259705, 64.391939163208], [178.21101570129, 64.390161514282], [178.20554924011, 64.388227462769], [178.20042991638, 64.386144638062], [178.1980342865, 64.385065078735], [177.98747062683, 64.286199569702], [177.9851360321, 64.285055160522], [177.98081016541, 64.282697677612], [177.97689628601, 64.280225753784], [177.97340202332, 64.277643203735], [177.97034645081, 64.274965286255], [177.96774482727, 64.272203445435], [177.9656047821, 64.269365310669], [177.9640712738, 64.266706466675], [177.93585014343, 64.273889541626], [177.86742210388, 64.291345596314], [177.74750328064, 64.333223342896], [177.72046470642, 64.3460521698], [177.53409004211, 64.451169967651], [177.52748680115, 64.457872390747], [177.49840736389, 64.50026512146], [177.47807884216, 64.542310714722], [177.48655128479, 64.560258865357], [177.52108192444, 64.591234207153], [177.55895805359, 64.627016067505], [177.56170463562, 64.629911422729], [177.56385231018, 64.632753372192], [177.56552314758, 64.635656356812], [177.56670188904, 64.638589859009], [177.57868385315, 64.676195144653], [177.69722557068, 64.66042137146], [177.70559120178, 64.659463882446], [177.70899391174, 64.659151077271], [177.93529319763, 64.639455795288], [177.93934440613, 64.639127731323], [177.94685554504, 64.638673782349], [177.95440101624, 64.638418197632], [177.96194648743, 64.638357162476], [177.96526908875, 64.638395309448], [178.09560585022, 64.640497207642], [178.19302940369, 64.636522293091], [178.19894218445, 64.634447097778], [178.20505714417, 64.632555007935], [178.21145057678, 64.630819320679], [178.21809196472, 64.629247665405], [178.22495079041, 64.627847671509], [178.23200035095, 64.626626968384], [178.23921012878, 64.62558555603], [178.24654579163, 64.624731063843], [178.25398445129, 64.624071121216], [178.26148796082, 64.623601913452], [178.26628303528, 64.623403549194], [178.37020683289, 64.619443893433], [178.36862754822, 64.615999221802], [178.36784172058, 64.613023757935], [178.36755180359, 64.610025405884], [178.36775398254, 64.607011795044], [178.36844825745, 64.604001998901], [178.3696308136, 64.601003646851], [178.3712978363, 64.598031997681], [178.37351417542, 64.595014572144], [178.38854026794, 64.57688331604], [178.39100837708, 64.574178695679], [178.39407157898, 64.571363449097], [178.39757728577, 64.56862449646], [178.40151405334, 64.56597328186], [178.40585899353, 64.56342124939], [178.41059684753, 64.56097984314], [178.41570472717, 64.558660507202], [178.42116355896, 64.556470870972], [178.42694664001, 64.55442237854], [178.43303108215, 64.552518844605], [178.4393901825, 64.550775527954], [178.44600105286, 64.549196243286], [178.45282936096, 64.547784805298], [178.45984840393, 64.546552658081], [178.46702766418, 64.545503616333], [178.47434043884, 64.544637680054], [178.48174858093, 64.543966293335], [178.49010658264, 64.54344367981], [178.5, 64.542997282174], [178.5, 64.874237565529], [178.5, 65.205477848884], [178.5, 65.536718132239], [178.5, 65.867958415594], [178.5, 66.199198698948], [178.5, 66.530438982303], [178.5, 66.861679265658], [178.5, 67.192919549013], [178.5, 67.524159832368], [178.5, 67.855400115722], [178.5, 68.186640399077], [178.5, 68.517880682432], [178.5, 68.849120965787], [178.5, 69.180361249142], [178.5, 69.511601532496],
                ],
            ],
        ];
    }
}