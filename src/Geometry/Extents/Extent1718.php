<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Italy - west of 12°E.
 * @internal
 */
class Extent1718
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [5.9, 40.852213519685], [5.9594442530003, 40.668745836842], [6.0188885060006, 40.485278154], [6.035833506, 40.418611154], [6.0669445060006, 40.350833153], [6.0858335060003, 40.251389153], [6.1429165060004, 40.085000153], [6.1999995060005, 39.918611153], [6.1999995060005, 39.718333153], [6.1999995060005, 39.518055153], [6.1166665060006, 39.235555152], [6.0511110060005, 39.026111152], [5.9855555060004, 38.816667152], [5.955555506, 38.697222152], [6.155403006, 38.584673152], [6.3552505060001, 38.472124152], [6.5385400060001, 38.378137152], [6.721829506, 38.284150152], [6.7483765060003, 38.276373152], [7.0205410065003, 38.1634846515], [7.2927055070004, 38.050596151], [7.5046860070003, 37.976131651], [7.7166665070002, 37.901667151], [7.8841665075003, 37.935417151], [8.0516665080005, 37.969167151], [8.2674995080004, 38.018889151], [8.4347225080001, 38.068055151], [8.7022225080004, 38.116944151001], [8.9522225083337, 38.127962817667], [9.2022225086669, 38.138981484334], [9.4522225090002, 38.150000151], [9.7677775090002, 38.118055151], [10.000555509, 38.134722151], [10.262129509334, 38.190370484667], [10.523703509667, 38.246018818334], [10.78527751, 38.301667152], [10.87694451, 38.1265281515], [10.96861151, 37.951389151001], [11.11805551, 37.817916651], [11.26749951, 37.684444151], [11.249999510001, 37.583889151], [11.5249995105, 37.442639151], [11.799999511, 37.301389151], [11.851388511, 37.267778151], [11.900555511001, 37.235000151], [11.968611511, 37.13388915], [12.035555511, 37.03444415], [12.1, 36.955292100907], [12.1, 37.233333333333], [12.1, 37.4], [12.1, 37.566666666667], [12.1, 37.733333333333], [12.1, 37.9], [12.1, 38.066666666666], [12.1, 38.233333333333], [12.1, 38.4], [12.1, 38.566666666667], [12.1, 38.733333333333], [12.1, 38.9], [12.1, 39.066666666666], [12.1, 39.233333333333], [12.1, 39.4], [12.1, 39.566666666667], [12.1, 39.733333333333], [12.1, 39.9], [12.1, 40.066666666666], [12.1, 40.233333333333], [12.1, 40.4], [12.1, 40.566666666667], [12.1, 40.733333333333], [12.1, 40.9], [12.1, 41.066666666666], [12.1, 41.233333333333], [12.1, 41.4], [12.1, 41.566666666667], [12.1, 41.733333333333], [12.1, 41.9], [12.1, 42.266666666667], [12.1, 42.433333333333], [12.1, 42.6], [12.1, 42.766666666667], [12.1, 42.933333333334], [12.1, 43.1], [12.1, 43.266666666667], [12.1, 43.433333333333], [12.1, 43.6], [12.1, 43.766666666667], [12.1, 43.933333333334], [12.1, 44.1], [12.1, 44.266666666667], [12.1, 44.433333333333], [12.1, 44.6], [12.1, 44.766666666667], [12.1, 44.933333333334], [12.1, 45.1], [12.1, 45.266666666667], [12.1, 45.433333333333], [12.1, 45.6], [12.1, 45.766666666667], [12.1, 45.933333333334], [12.1, 46.1], [12.1, 46.266666666667], [12.1, 46.433333333333], [12.1, 46.6], [12.1, 46.766666666667], [12.1, 46.933333333334], [12.1, 47.1], [12.1, 47.139962996685], [11.861249542236, 47.078187561035], [11.831109619141, 47.078885650635], [11.810137367249, 47.096383666992], [11.721943473816, 47.112775421143], [11.583888626099, 47.11416015625], [11.277151679993, 47.067357635498], [11.218055343628, 47.029992675781], [11.200554466248, 47.015412902832], [11.197082138062, 46.991593933106], [11.171387290955, 46.923467254639], [11.116804695129, 46.873330688477], [10.987777328491, 46.871110534668], [10.93416557312, 46.88694152832], [10.891666030884, 46.901383972168], [10.863262748718, 46.930551147461], [10.780137634278, 46.973813629151], [10.746944046021, 46.970414733887], [10.699721908569, 46.957772827148], [10.663610076904, 46.94888458252], [10.597776031494, 46.955270385742], [10.5761095047, 46.965692138672], [10.571235275269, 46.971353149414], [10.547498321533, 46.863053894043], [10.570832824707, 46.73582611084], [10.586526489258, 46.71735534668], [10.58569393158, 46.692636108398], [10.571874237061, 46.655759429932], [10.557530975342, 46.642503356934], [10.54972038269, 46.639161682129], [10.43722114563, 46.649438476563], [10.403610801697, 46.654859161377], [10.346318817139, 46.690412139893], [10.353609657288, 46.715966796875], [10.341804122925, 46.734441375733], [10.28111038208, 46.732217407227], [10.219165420532, 46.711381530762], [10.15138874054, 46.641522979736], [10.144444084168, 46.60263595581], [10.149685478211, 46.545587158203], [10.190693473816, 46.523748016357], [10.253888702393, 46.490274047852], [10.273956871033, 46.363118743896], [10.236387825012, 46.330690002442], [10.171768760681, 46.321797943115], [10.094998931885, 46.391664123535], [10.082220649719, 46.43304977417], [10.09041557312, 46.455201721191], [10.046943283081, 46.479581451416], [10.008054351807, 46.483190155029], [9.9527774810793, 46.469720458984], [9.9130550384523, 46.458329772949], [9.870555496216, 46.442208862305], [9.8088174819947, 46.400273895264], [9.7247215270998, 46.391938781738], [9.6819435119629, 46.396943664551], [9.4448608398438, 46.406243896484], [9.4213871002197, 46.419717407227], [9.3576377868655, 46.486245727539], [9.3502773284913, 46.526666259766], [9.3549999237063, 46.572496032715], [9.2668041229248, 46.608052825928], [9.1937831878664, 46.600827789307], [9.1506237030029, 46.54242477417], [9.17312374115, 46.525762176514], [9.1972211837769, 46.450967407227], [9.1926378250122, 46.424855804443], [9.1766666412353, 46.392495727539], [9.1410097122193, 46.333631134033], [9.0764574050905, 46.278604125977], [9.0444387435913, 46.268048858643], [9.0322212219241, 46.260270690918], [8.9833320617676, 46.221109008789], [8.935831451416, 46.157220458984], [8.9166664123536, 46.122499084473], [8.8973602294925, 46.075135803223], [8.9229854583743, 46.038953399658], [8.9730543136597, 46.019998168945], [8.984095954895, 46.002286529541], [8.9366649627686, 45.937776184082], [8.8983329772951, 45.929437255859], [8.851110839844, 45.945275878906], [8.8363183975221, 45.971871948242], [8.8266662597658, 46.000833129883], [8.797777557373, 46.052770233154], [8.7198604583743, 46.086385345459], [8.7202772140503, 46.133885955811], [8.751456642151, 46.156732177734], [8.744165802002, 46.180757141113], [8.7222217559817, 46.198609924316], [8.647220993042, 46.221109008789], [8.6288551330567, 46.208589172363], [8.6193040847781, 46.204022979736], [8.5965274810793, 46.201108551026], [8.5158323287964, 46.221246337891], [8.3605541229249, 46.333329772949], [8.3449987411498, 46.347215270996], [8.3345827102662, 46.393190002441], [8.3481239318849, 46.422978973389], [8.365970993042, 46.472634887695], [8.3608325958253, 46.548329925537], [8.3414567947389, 46.562078094482], [8.2652763366701, 46.553605651856], [8.2572216033935, 46.549996948242], [8.2037490844727, 46.522912597656], [8.0419439315796, 46.322911834717], [8.058748626709, 46.283818817139], [8.0495819091797, 46.251245117188], [7.9090265274047, 46.109300231934], [7.8730548858643, 46.096940612793], [7.8499998092651, 46.094163513184], [7.8068050384524, 46.09263381958], [7.7793048858644, 46.075135803223], [7.7663883209229, 46.04832611084], [7.7557424545289, 46.019052124024], [7.6838888168336, 46.023606872559], [7.6433328628539, 46.032220458984], [7.6091665267944, 46.043328857422], [7.5502771377563, 46.08055267334], [7.436665916443, 46.081666564941], [7.358055496216, 46.041108703613], [7.3297218322756, 46.029443359375], [7.2861103057861, 46.015412902832], [7.2388881683349, 46.020555114746], [7.1968053817749, 46.023187255859], [7.1302770614626, 45.998048400879], [7.0913886070251, 45.98069152832], [7.0032633781434, 45.983537292481], [6.9702772140502, 46.003053283691], [6.9380544662476, 46.031938171387], [6.8845132827759, 45.975896453858], [6.8438886642458, 45.958329772949], [6.8222221374512, 45.95221862793], [6.8020829200745, 45.949857330322], [6.7723602294923, 45.955968475342], [6.7133325576782, 45.934232330322], [6.6993459701538, 45.888665771484], [6.7098607063296, 45.829648590088], [6.8694442749025, 45.696939086914], [6.8954156875611, 45.625272369385], [6.9891590118408, 45.576860046387], [7.0469440460205, 45.530549621582], [7.0586103439331, 45.477494812012], [7.0277770996097, 45.359300231934], [6.9647220611572, 45.323052978516], [6.8394435882569, 45.279443359375], [6.7216662406921, 45.253053283692], [6.6663884162903, 45.268190002441], [6.5899299621583, 45.248052215576], [6.5377773284912, 45.226106262207], [6.5341209411621, 45.224000549316], [6.5239671707154, 45.21572265625], [6.561665916443, 45.139993286133], [6.6490277290344, 45.01833114624], [6.6752771377564, 45.005548095703], [6.7493051528932, 44.97041091919], [6.801665687561, 44.960412597656], [6.8423604011536, 44.97068939209], [6.8691662788393, 44.964303588867], [6.9063881874085, 44.950692749023], [6.9316658020022, 44.931382751465], [6.9283327102664, 44.844720458984], [6.8754161834717, 44.788190460205], [6.8508333206179, 44.76471862793], [6.7527774810792, 44.640832519531], [6.7536109924316, 44.617776489258], [6.7779158592224, 44.475133514404], [6.8763879776, 44.384164428711], [6.9313882827761, 44.346940612793], [7.0911103725436, 44.289231872559], [7.250832462311, 44.231523132324], [7.3209713935851, 44.226106262207], [7.3663887023926, 44.238610839844], [7.4202770233154, 44.256105041504], [7.5147212982178, 44.280274963379], [7.5622219085693, 44.270829772949], [7.5616659164429, 44.233953094482], [7.6090454101565, 44.19130859375], [7.6062497138978, 44.175828552246], [7.5586108207702, 44.106801605225], [7.4983324050903, 44.064721679688], [7.3962148666382, 43.974507904053], [7.4124998092654, 43.921105957031], [7.4319347381592, 43.882043457031], [7.431702507, 43.873706157], [7.4336435070001, 43.860116157001], [7.4373455070001, 43.845015157], [7.470561507, 43.803126157], [7.5105265070004, 43.753227156001], [7.5705755070003, 43.534778156], [7.6045805070003, 43.470835156], [7.7411645069999, 43.228769156], [7.7423015070002, 43.227345156], [7.808836507, 43.145024156], [7.9686415080003, 43.218889156001], [8.0438305080002, 43.247497156], [8.0885855080004, 43.264405156001], [8.0926435080001, 43.265971156], [8.1244545080005, 43.278252156], [8.1340315080006, 43.281602156], [8.141857508, 43.284157156001], [8.1568855080004, 43.289013156], [8.3078375080005, 43.337737156], [8.3340195080006, 43.346090156], [8.3430205080005, 43.348678156], [8.3541225080005, 43.351663156001], [8.3549465080005, 43.351947156001], [8.3554205080004, 43.352306156], [8.4094035080006, 43.393593156], [8.6042235079999, 43.539710156], [8.7295985080003, 43.620500156], [8.8264925080005, 43.683940156], [8.8935165080001, 43.730489156001], [8.9110225080005, 43.731905156], [9.1356955085003, 43.589372156], [9.3603685090001, 43.446839156], [9.3733985090005, 43.426047156], [9.728899509, 43.270079156], [9.7366725090001, 43.143412156001], [9.8049955090001, 42.969500156], [9.8799625090006, 42.885163156], [9.9077255090005, 42.657507155], [9.9454455090001, 42.559901155], [9.9683355090004, 42.275471155], [9.9788035090004, 42.261138155], [9.9918395090004, 42.244165155001], [10.012286509, 42.217604155], [10.020873509, 42.206922155001], [10.021194509, 42.206529155], [10.022419509001, 42.205055155], [10.053858509, 42.167481155], [10.054565509001, 42.166664155001], [10.074316509001, 41.944247155], [10.091088509001, 41.923827155], [10.095139509001, 41.918947155], [10.119970509, 41.886763155], [10.143833509001, 41.852755155], [10.161866509, 41.825255155001], [10.178329509, 41.798733155001], [10.201141509, 41.762219155], [10.223405509, 41.718563155], [10.241880509, 41.682343155], [10.243011509, 41.680134155], [10.279649509, 41.646982155], [10.30160551, 41.626557155], [10.307328510001, 41.621453155], [10.47585651, 41.477803155], [10.448334510001, 41.474550155], [10.43218551, 41.472633155], [10.248199509, 41.446157154], [10.028393009, 41.397053154], [9.8085865090002, 41.347949154], [9.7316665090002, 41.334667154], [9.3509995090001, 41.307500154001], [9.2174995090004, 41.237167154], [9.1708335090003, 41.192833154], [9.1197100288464, 41.203112088105], [9.0358615090003, 41.219167154], [8.7136665080003, 41.158667154001], [8.5172725080007, 41.191248154], [8.5080645080006, 41.200716154], [8.3576200080003, 41.290891654], [8.207175508, 41.381067154], [8.1594315080003, 41.395322154], [7.8622335070002, 41.484186155], [7.7669155070004, 41.515092155001], [7.6368535070001, 41.543613155], [7.3670581733335, 41.601859155001], [7.0972628396668, 41.660105155001], [6.8274675060002, 41.718351155001], [6.7102365060003, 41.653342155], [6.5812125060005, 41.585753155], [6.338065506, 41.457184155], [6.2128805060006, 41.383111154], [6.0564402530003, 41.245550243591], [5.9, 41.107989333181], [5.8349995059937, 41.050833154161], [5.9, 40.852213519685],
                ],
            ],
            [
                [
                    [12, 37.03733788079], [11.990801511, 37.038843150001], [11.974413511, 37.040638150001], [11.957913511, 37.04156615], [11.941372511, 37.041626150001], [11.924863511001, 37.04081515], [11.919270511, 37.04034215], [11.917508511, 37.04021415], [11.901101511001, 37.03853615], [11.884868511, 37.03599915], [11.870361511, 37.03296615], [11.862953511001, 37.03128615], [11.847275511, 37.02706715], [11.831978511, 37.022032150001], [11.828721511, 37.02075515], [11.824525511001, 37.01937315], [11.809675511, 37.01354415], [11.795335511001, 37.00694815], [11.781566511, 36.999611150001], [11.768428511, 36.99156715], [11.755978511001, 36.98284915], [11.744267511, 36.973496150001], [11.733348511, 36.963547150001], [11.723266511, 36.95304615], [11.714064511, 36.94203715], [11.705781511, 36.93056915], [11.705292511, 36.92983315], [11.699891511, 36.92216015], [11.692565511, 36.910281150001], [11.686225511, 36.89804215], [11.680897511001, 36.88549615], [11.676603511001, 36.87269815], [11.673361511, 36.85970115], [11.672592511001, 36.855747150001], [11.671813511, 36.85218715], [11.669637511, 36.839048150001], [11.668536511, 36.82582315], [11.668410511, 36.81633615], [11.668320511, 36.81446015], [11.668297511, 36.80120615], [11.669351511, 36.78797915], [11.669368511, 36.78784315], [11.669932511001, 36.782400150001], [11.672059511, 36.76925815], [11.675249511, 36.75625515], [11.679487511, 36.74344815], [11.684755511, 36.730891150001], [11.691030511, 36.71863815], [11.698284511, 36.70674215], [11.706487511, 36.69525215], [11.715602511, 36.68421915], [11.719739511001, 36.67985915], [11.723807511, 36.67317815], [11.732002511001, 36.66168715], [11.741108511, 36.65065115], [11.751089511, 36.64011815], [11.751872511001, 36.63939415], [11.752474511001, 36.638549150001], [11.761575511, 36.62751215], [11.771548511001, 36.616977150001], [11.782352511, 36.60698915], [11.793940511, 36.59759215], [11.796169511001, 36.59600615], [11.803106511001, 36.59037915], [11.815426511, 36.58160915], [11.828428511, 36.573508150001], [11.842056511, 36.56610715], [11.856252511, 36.55943915], [11.870956511, 36.55353315], [11.886106511, 36.54841315], [11.901636511, 36.54410115], [11.906025511, 36.543046150001], [11.911983511, 36.54149915], [11.927826511, 36.53801215], [11.943917511001, 36.53536615], [11.960188511, 36.53357315], [11.964551511, 36.53324015], [11.965157511, 36.533188150001], [11.974550511001, 36.53254715], [11.976542511001, 36.53237415], [11.992922511, 36.531438150001], [12, 36.531407117834], [12, 36.666666666667], [12, 36.833333333333], [12, 37], [12, 37.03733788079],
                ],
            ],
        ];
    }
}
