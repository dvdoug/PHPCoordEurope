<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Russia - 172.5°E to 175.5°E onshore.
 * @internal
 */
class Extent2704
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [175.5, 69.935974679844], [175.48612785339, 69.934995651245], [175.47620201111, 69.934144973755], [175.46732139587, 69.933168411255], [175.45867729187, 69.932008743286], [175.45030784607, 69.930665969849], [175.44224739075, 69.929151535034], [175.43453407288, 69.927465438843], [175.42719459534, 69.925622940064], [175.4202671051, 69.923624038696], [175.41377449036, 69.921480178833], [175.40775108337, 69.919206619263], [175.40221595764, 69.916803359985], [175.39719963074, 69.91428565979], [175.39272117615, 69.911664962769], [175.38879966736, 69.908952713013], [175.38648796082, 69.907083511353], [175.37521934509, 69.897348403931], [175.36718940735, 69.895750045776], [175.34902000427, 69.893808364868], [175.30387687683, 69.892454147339], [175.29186820984, 69.892301559448], [175.21778297424, 69.893064498901], [175.16239356995, 69.894083023071], [175.05458641052, 69.897367477417], [175.04356575012, 69.897554397583], [174.88624382019, 69.897840499878], [174.88360023499, 69.897836685181], [174.72669029236, 69.897054672241], [174.64044761658, 69.900014877319], [174.49137687683, 69.906476974487], [174.4704990387, 69.909608840942], [174.4381313324, 69.916158676148], [174.39637947083, 69.924268722534], [174.38682365418, 69.925943374634], [174.3781375885, 69.927221298218], [174.36922264099, 69.928316116333], [174.36011695862, 69.92922782898], [174.35085868835, 69.929944992066], [174.34148597717, 69.930467605591], [174.33204078674, 69.930795669556], [174.32256507874, 69.930925369263], [174.31876564026, 69.930921554566], [174.08242988586, 69.929536819458], [174.07675743103, 69.92946434021], [174.06734275818, 69.92918586731], [174.06237983704, 69.928956985474], [173.99793815613, 69.925607681274], [173.99358177185, 69.925355911255], [173.98439598084, 69.924680709839], [173.97538566589, 69.92381477356], [173.9665851593, 69.922758102417], [173.95803260803, 69.921522140503], [173.94976615906, 69.92010307312], [173.94182395935, 69.918516159058], [173.93424034119, 69.916761398315], [173.92748069763, 69.914972305298], [173.88875389099, 69.904043197632], [173.8817653656, 69.901918411255], [173.87905311584, 69.901006698608], [173.82187461853, 69.907125473022], [173.77944755554, 69.92193031311], [173.77315330505, 69.923997879028], [173.58244895935, 69.982053756714], [173.57648658752, 69.983766555786], [173.5689868927, 69.985677719116], [173.56111717224, 69.987432479858], [173.55291938782, 69.989023208618], [173.54442024231, 69.990438461304], [173.54099845886, 69.990949630737], [173.51585197449, 69.994565963745], [173.51051139832, 69.995294570923], [173.50152397156, 69.996347427368], [173.49234962463, 69.997213363648], [173.48303031921, 69.997888565064], [173.47360801697, 69.998365402222], [173.46412086487, 69.998647689819], [173.45460700989, 69.998727798462], [173.44511222839, 69.998613357544], [173.43567466736, 69.998300552368], [173.42633628845, 69.997789382935], [173.42324256897, 69.997575759888], [173.40039253235, 69.995908737183], [173.39428901672, 69.995416641235], [173.38691902161, 69.99469947815], [173.18681907654, 69.973173141479], [173.17721366882, 69.97198677063], [173.17057609558, 69.97101020813], [173.13778114319, 69.96584892273], [173.12861061096, 69.964239120483], [173.12071037292, 69.962610244751], [173.11317634583, 69.960821151733], [173.10603904724, 69.958871841431], [173.09932899475, 69.956777572632], [173.09307289124, 69.954542160034], [173.08729743958, 69.952180862427], [173.08202934265, 69.949697494507], [173.07728767395, 69.947107315063], [173.07309913635, 69.944417953491], [173.06936073303, 69.941549301148], [173.03878211975, 69.915353775025], [172.96005821228, 69.930025100708], [172.93229484558, 69.937841415405], [172.91926765442, 69.948644638062], [172.91596031189, 69.951166152954], [172.91173362732, 69.953905105591], [172.90696144104, 69.956552505493], [172.90165901184, 69.959096908569], [172.89584922791, 69.961530685425], [172.88956260681, 69.963842391968], [172.88282203674, 69.966020584106], [172.87565803528, 69.968053817749], [172.86738014221, 69.970102310181], [172.72099494934, 70.003271102905], [172.7144908905, 70.00465965271], [172.70621681213, 70.0062084198], [172.69765663147, 70.007585525513], [172.68883705139, 70.008783340454], [172.67980384827, 70.009794235229], [172.67059135437, 70.010618209839], [172.66124153137, 70.011247634888], [172.65179252625, 70.011682510376], [172.64229011536, 70.011919021606], [172.63276863098, 70.011957168579], [172.62327384949, 70.011796951294], [172.61384010315, 70.011438369751], [172.60919380188, 70.011190414429], [172.52337837219, 70.006067276001], [172.5, 70.005692039482], [172.5, 69.677503812264], [172.5, 69.349315585046], [172.5, 69.021127357828], [172.5, 68.69293913061], [172.5, 68.364750903392], [172.5, 68.036562676174], [172.5, 67.708374448956], [172.5, 67.380186221738], [172.5, 67.05199799452], [172.5, 66.723809767302], [172.5, 66.395621540084], [172.5, 66.067433312866], [172.5, 65.739245085648], [172.5, 65.41105685843], [172.5, 65.082868631212], [172.5, 64.754680403994], [172.5, 64.426492176775], [172.5, 64.098303949557], [172.5, 63.770115722339], [172.5, 63.441927495121], [172.5, 63.113739267903], [172.5, 62.785551040685], [172.5, 62.457362813467], [172.5, 62.129174586249], [172.5, 61.800986359031], [172.5, 61.472798131813], [172.5, 61.144609904595], [172.50595664978, 61.14337348938], [172.50991249084, 61.142595291138], [172.51628684998, 61.141511917114], [172.52277946472, 61.140615463257], [172.5293712616, 61.13991355896], [172.53602409363, 61.139402389526], [172.54271888733, 61.139089584351], [172.54942131042, 61.138971328735], [172.55610466003, 61.139051437378], [172.56162071228, 61.139268875122], [172.66149330139, 61.144422531128], [172.66861534119, 61.14492225647], [172.67507362366, 61.145586013794], [172.68140220642, 61.146444320679], [172.6875743866, 61.147485733032], [172.69355964661, 61.148714065552], [172.69933509827, 61.150117874146], [172.70487785339, 61.151697158814], [172.7101650238, 61.153440475464], [172.71516990662, 61.155340194702], [172.71986961365, 61.157392501831], [172.72425270081, 61.159585952759], [172.72829246521, 61.161909103394], [172.73083305359, 61.163557052612], [172.83104133606, 61.231695175171], [172.83477973938, 61.231397628784], [172.84161567688, 61.231061935425], [172.87058067322, 61.230089187622], [172.87705039978, 61.229963302612], [172.88375282288, 61.230024337769], [172.8904132843, 61.230283737183], [172.89699745178, 61.230741500855], [172.90348243713, 61.231393814087], [172.90983390808, 61.232236862183], [172.91515541077, 61.233106613159], [172.93962669373, 61.237478256226], [172.9460811615, 61.238771438599], [172.95189094543, 61.240163803101], [172.95746803284, 61.24172782898], [172.96278572083, 61.243459701538], [172.96562004089, 61.2444896698], [173.02555274963, 61.267114639282], [173.03140068054, 61.269582748413], [173.03582572937, 61.271760940552], [173.03990745544, 61.274072647095], [173.04363059998, 61.27650642395], [173.04698371887, 61.279054641724], [173.04994773865, 61.281702041626], [173.05250740051, 61.284440994263], [173.05465888977, 61.287260055542], [173.05638694763, 61.290143966675], [173.0576877594, 61.293081283569], [173.05854988098, 61.296060562134], [173.05897712708, 61.299070358276], [173.05896568298, 61.302095413208], [173.05851173401, 61.305124282837], [173.0571269989, 61.309293746948], [173.03935813904, 61.346933364868], [173.04614830017, 61.346162796021], [173.08065223694, 61.342824935913], [173.08745384216, 61.34227180481], [173.09418296814, 61.341924667359], [173.10092735291, 61.341775894165], [173.10765647888, 61.341825485229], [173.11434364319, 61.342073440552], [173.12095832825, 61.342515945435], [173.12747383118, 61.343152999878], [173.1338596344, 61.343980789185], [173.140417099, 61.345060348511], [173.179895401, 61.352338790894], [173.18528938293, 61.35341835022], [173.19113349915, 61.354795455933], [173.19674491882, 61.35634803772], [173.20210075378, 61.358064651489], [173.20450401306, 61.358922958374], [173.22863578796, 61.367799758911], [173.23225593567, 61.369207382202], [173.34874153137, 61.417718887329], [173.3516330719, 61.418970108032], [173.35610771179, 61.421136856079], [173.36024284363, 61.423433303833], [173.36401939392, 61.425855636597], [173.36742210388, 61.428392410278], [173.37043571472, 61.431032180786], [173.37322807312, 61.433973312378], [173.40166282654, 61.467695236206], [173.40350151062, 61.470079421997], [173.40528297424, 61.472955703735], [173.40663719177, 61.475889205933], [173.40754890442, 61.478860855103], [173.40802574158, 61.481866836548], [173.40805625916, 61.484891891479], [173.40764427185, 61.487916946411], [173.4065952301, 61.491445541382], [173.40077018738, 61.505788803101], [173.40305137634, 61.507566452026], [173.46492576599, 61.505823135376], [173.47066688538, 61.505693435669], [173.47743415833, 61.50572013855], [173.4841632843, 61.505945205688], [173.49081993103, 61.506364822388], [173.49737739563, 61.506978988647], [173.50381278992, 61.507787704468], [173.51009178162, 61.508783340454], [173.51619148254, 61.509965896606], [173.52208518982, 61.51132774353], [173.52775001526, 61.512861251831], [173.53315544128, 61.514562606812], [173.53828620911, 61.516424179077], [173.54334068298, 61.518537521362], [173.57008171082, 61.530633926392], [173.57413673401, 61.532587051392], [173.57830619812, 61.534875869751], [173.58212089539, 61.537286758423], [173.58555793762, 61.53981590271], [173.58860588074, 61.542448043823], [173.59125328064, 61.545171737671], [173.59348487854, 61.547975540161], [173.59529304504, 61.550848007202], [173.59667015076, 61.553777694702], [173.59761238098, 61.556749343872], [173.59810829163, 61.55975151062], [173.59812355042, 61.563268661499], [173.59428977966, 61.60048866272], [173.59995079041, 61.649656295776], [173.61857032776, 61.69236946106], [173.70707893372, 61.663801193237], [173.72925758362, 61.651796340942], [173.73163795471, 61.650548934937], [173.7363986969, 61.648283004761], [173.74147224426, 61.646150588989], [173.74682807922, 61.644163131714], [173.7524471283, 61.642328262329], [173.7583065033, 61.640657424927], [173.76437950134, 61.639150619507], [173.77063941956, 61.637823104858], [173.77706336975, 61.636671066284], [173.78361701965, 61.635705947876], [173.79027748108, 61.634931564331], [173.79701805115, 61.634347915649], [173.80097770691, 61.634099960327], [173.86655235291, 61.630498886109], [173.86937904358, 61.630361557007], [173.8761844635, 61.630167007446], [173.88297843933, 61.630170822143], [173.88973808289, 61.630373001099], [173.89642906189, 61.630769729614], [173.90302467346, 61.63136100769], [173.90949821472, 61.632146835327], [173.91581916809, 61.63311958313], [173.92196464539, 61.634279251099], [173.92790412903, 61.635618209839], [173.93361473083, 61.637132644653], [173.93641471863, 61.637964248657], [174.05187797546, 61.673463821411], [174.05454444885, 61.674314498901], [174.05973625183, 61.676149368286], [174.06463050842, 61.678136825562], [174.06920814514, 61.68027305603], [174.07429695129, 61.68305015564], [174.09240913391, 61.694097518921], [174.09457588196, 61.695478439331], [174.09808540344, 61.697988510132], [174.10120201111, 61.700605392456], [174.10468482971, 61.704214096069], [174.14762687683, 61.757783889771], [174.1498966217, 61.761140823364], [174.15135002136, 61.764059066773], [174.15236091614, 61.767023086548], [174.15293312073, 61.770021438599], [174.15305519104, 61.773038864136], [174.15273094177, 61.776063919067], [174.15196037292, 61.779085159302], [174.15029716492, 61.782892227173], [174.1542224884, 61.783311843872], [174.15884590149, 61.783010482788], [174.30525779724, 61.774923324585], [174.31138038635, 61.774686813355], [174.37525749207, 61.773054122925], [174.40950965881, 61.765253067017], [174.41448402405, 61.76418876648], [174.42090415955, 61.763006210327], [174.42746543884, 61.762006759644], [174.43413352966, 61.761198043823], [174.44088935852, 61.760580062866], [174.44769477844, 61.76015663147], [174.45108222961, 61.760019302368], [174.45924186707, 61.759748458862], [174.462682724, 61.759656906128], [174.4695110321, 61.759630203247], [174.47630119324, 61.759798049927], [174.48303031921, 61.760160446167], [174.48967170715, 61.760721206665], [174.49618721008, 61.761472702026], [174.50215339661, 61.7623462677], [174.55535697937, 61.770975112915], [174.56150245667, 61.772085189819], [174.64038658142, 61.787641525269], [174.64652061462, 61.788969039917], [174.65220832825, 61.790418624878], [174.73301887512, 61.812623977661], [174.73860740662, 61.814279556275], [174.74387168884, 61.816083908081], [174.74752235413, 61.817495346069], [174.77069282532, 61.826921463013], [174.77600669861, 61.829298019409], [174.78032493591, 61.831537246704], [174.78428459167, 61.833906173706], [174.7878742218, 61.836393356323], [174.79124259949, 61.839136123657], [174.81817054749, 61.863290786743], [174.82063484192, 61.865678787231], [174.82302284241, 61.868452072144], [174.8249874115, 61.871297836304], [174.82655525208, 61.874300003052], [174.8305683136, 61.87575340271], [174.83555793762, 61.87770652771], [174.84022712708, 61.879808425903], [174.84455680847, 61.882043838501], [174.84853172302, 61.884412765503], [174.85213661194, 61.886896133423], [174.85415077209, 61.888471603394], [174.87197685242, 61.90288734436], [174.90487861633, 61.910516738892], [174.96415138245, 61.922521591187], [174.99577522278, 61.927824020386], [175.00143623352, 61.928865432739], [175.21957969666, 61.973459243774], [175.22358131409, 61.974317550659], [175.22943305969, 61.97576713562], [175.23503303528, 61.977380752564], [175.23828697205, 61.978437423706], [175.28275108337, 61.993497848511], [175.28883171082, 61.995794296265], [175.29355812073, 61.997873306274], [175.29794883728, 62.000093460083], [175.30092048645, 62.001791000366], [175.33144569397, 62.020147323608], [175.33553886414, 62.022863388062], [175.39595222473, 62.066431045532], [175.5, 62.093038266839], [175.5, 62.419827284048], [175.5, 62.746616301256], [175.5, 63.073405318465], [175.5, 63.400194335673], [175.5, 63.726983352882], [175.5, 64.05377237009], [175.5, 64.380561387299], [175.5, 64.707350404508], [175.5, 65.034139421716], [175.5, 65.360928438925], [175.5, 65.687717456133], [175.5, 66.014506473342], [175.5, 66.34129549055], [175.5, 66.668084507759], [175.5, 66.994873524967], [175.5, 67.321662542176], [175.5, 67.648451559385], [175.5, 67.975240576593], [175.5, 68.302029593802], [175.5, 68.62881861101], [175.5, 68.955607628219], [175.5, 69.282396645427], [175.5, 69.609185662636], [175.5, 69.935974679844],
                ],
            ],
            [
                [
                    [172.5, 60.996837985982], [172.52282142639, 61.005796432495], [172.52840232849, 61.008226394653], [172.53273963928, 61.010427474976], [172.53674125671, 61.012758255005], [172.54038047791, 61.015214920044], [172.54364967346, 61.017778396607], [172.54657173157, 61.020483016968], [172.57602500916, 61.05034828186], [172.57843589783, 61.053022384644], [172.58051490784, 61.055852890015], [172.58217430115, 61.058744430542], [172.58340644836, 61.061693191528], [172.58420753479, 61.064680099487], [172.58456993103, 61.067693710327], [172.58449745178, 61.070718765259], [172.58398628235, 61.073747634888], [172.58304023743, 61.076765060425], [172.58166694641, 61.079759597778], [172.5798625946, 61.082712173462], [172.5776424408, 61.085618972778], [172.57501792908, 61.088460922241], [172.57198905945, 61.091226577759], [172.56858253479, 61.093908309937], [172.5648021698, 61.096490859985], [172.56066703796, 61.098962783814], [172.55620002747, 61.101316452026], [172.5514125824, 61.103540420532], [172.54633140564, 61.105623245239], [172.54097175598, 61.10756111145], [172.53845405579, 61.108388900757], [172.5, 61.120636623525], [172.5, 60.996837985982],
                ],
            ],
        ];
    }
}