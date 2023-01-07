<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Europe - 36°E to 42°E and ED50 by country.
 * @internal
 */
class Extent1640
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [36.06572339524, 35.771434987131], [35.982873010565, 35.805167217158], [35.971965975118, 35.808352631072], [35.967065058579, 35.809921889162], [35.962251358882, 35.811741188233], [35.957537623452, 35.813805710497], [35.952936334993, 35.81610998878], [35.948459678433, 35.818647920993], [35.944119508653, 35.821412786299], [35.939927319097, 35.824397262905], [35.935894211335, 35.827593447452], [35.932030865662, 35.830992875948], [35.928347512819, 35.834586546176], [35.924853906895, 35.838364941541], [35.921559299503, 35.842318056265], [35.918472415275, 35.846435421884], [35.91560142876, 35.850706134975], [35.912953942775, 35.855118886027], [35.910536968277, 35.859661989389], [35.908356905787, 35.864323414216], [35.906419528452, 35.869090816333], [35.904729966746, 35.873951570917], [35.903292694892, 35.878892805934], [35.90211151901, 35.883901436228], [35.901189567035, 35.888964198165], [35.900529280441, 35.894067684767], [35.90013240777, 35.899198381208], [35.9, 35.904342700605], [35.9, 43.43474476205], [35.900137333408, 43.439983828874], [35.900548956424, 43.445208505719], [35.901233738455, 43.450404442133], [35.902189798632, 43.455557366603], [35.903414510975, 43.460653125754], [35.904904511607, 43.465677723227], [35.906655707988, 43.47061735812], [35.908663290166, 43.475458462896], [35.910921743976, 43.480187740646], [35.913424866196, 43.484792201613], [35.916165781581, 43.489259198872], [35.919136961744, 43.493576463062], [35.92233024584, 43.497732136091], [35.925736862977, 43.501714803706], [35.929347456308, 43.50551352684], [35.933152108732, 43.50911787166], [35.937140370131, 43.512517938227], [35.941301286074, 43.515704387688], [35.945623427906, 43.518668467922], [35.950094924137, 43.521402037585], [35.954703493052, 43.523897588468], [35.95943647644, 43.52614826612], [35.964280874367, 43.528147888678], [35.969223380879, 43.529890963842], [35.974250420551, 43.531372703962], [35.979348185773, 43.53258903919], [35.984502674676, 43.533536628657], [35.98969972959, 43.534212869649], [35.994925075927, 43.534615904757], [36.000164361398, 43.534744626976], [36.151421965655, 43.534496017507], [36.182665965673, 43.534444017534], [36.187841586686, 43.534301366455], [36.193002887043, 43.533891024135], [36.198136030639, 43.533214090596], [36.20322725685, 43.532272380522], [36.208262917421, 43.531068418391], [36.213229513053, 43.529605431714], [36.218113729595, 43.527887342378], [36.438947062917, 43.443720675696], [36.659780396239, 43.359554009013], [36.88061372956, 43.27538734233], [36.885878849032, 43.27320686251], [37.167730849368, 43.146956862346], [37.449582849705, 43.020706862182], [37.731434850041, 42.894456862017], [38.013286850377, 42.768206861853], [38.295138850714, 42.641956861689], [38.566113545489, 42.520579134304], [38.773026792875, 42.482097875492], [38.991656858143, 42.441437549331], [39.021893922974, 42.435814723232], [39.027030670524, 42.434719207342], [39.30147500419, 42.368608207342], [39.575919337857, 42.302497207342], [39.847444188828, 42.23708948264], [40.147682266874, 42.183588304835], [40.450876767374, 42.129560304835], [40.457087151926, 42.128249025193], [40.463201837132, 42.126546393288], [40.722367837132, 42.045435393288], [40.726982658955, 42.043866625954], [40.73151555712, 42.042074854305], [40.735955762543, 42.040064335164], [40.740292726356, 42.037839845043], [40.744516144969, 42.0354066688], [40.938960811636, 41.9169806688], [41.133405478302, 41.7985546688], [41.315954510343, 41.687373672998], [41.552645177006, 41.621801089276], [41.584484370385, 41.616861248923], [41.585361162195, 41.616721225951], [41.740916887293, 41.591170383666], [41.746269117872, 41.590140728606], [41.751557299438, 41.588820994756], [41.756765722622, 41.58721510259], [41.761878914989, 41.585327822663], [41.766881687004, 41.583164761434], [41.77175917715, 41.580732344614], [41.776496896081, 41.578037798077], [41.781080769664, 41.575089126395], [41.81200821589, 41.553981093799], [41.827221108095, 41.545668691031], [41.835986492142, 41.555353693598], [41.839452429523, 41.558994955142], [41.843096978635, 41.56245743537], [41.846910929154, 41.565732384073], [41.85088464265, 41.568811524961], [41.855008076952, 41.571687076581], [41.859270811519, 41.574351771981], [41.907603025875, 41.602900966317], [41.912209345778, 41.605460594713], [41.916944108088, 41.607774013493], [41.921794164425, 41.60983479832], [41.926746046242, 41.61163722642], [41.931786002221, 41.613176292472], [41.936900036465, 41.614447722507], [41.942073947361, 41.615447985779], [41.947293367022, 41.616174304569], [41.952543801181, 41.616624661899], [41.973520821444, 41.617868253207], [41.978453487894, 41.618038663929], [41.983388554543, 41.617965484094], [41.988313999452, 41.61764889197], [42.008875217714, 41.615816809209], [42.014132040604, 41.615207826291], [42.019349286647, 41.614321603515], [42.024512344923, 41.61316062275], [42.029606756261, 41.61172813533], [42.034618253739, 41.610028152941], [42.039532802634, 41.608065436393], [42.044336639729, 41.605845482282], [42.049016311856, 41.603374507601], [42.05355871357, 41.600659432325], [42.057951123855, 41.597707860035], [42.062181241745, 41.594528056625], [42.066237220775, 41.591128927148], [42.070107702155, 41.587519990882], [42.073781846586, 41.58371135467], [42.077249364608, 41.579713684616], [42.080500545421, 41.575538176214], [42.083526284077, 41.571196522995], [42.086318106981, 41.566700883779], [42.08886819562, 41.562063848624], [42.091169408459, 41.55729840357], [42.09321530094, 41.552417894268], [42.095000143532, 41.547435988607], [42.096518937774, 41.542366638438], [42.097767430277, 41.537224040499], [42.098742124631, 41.53202259666], [42.099440291199, 41.52677687359], [42.099859974765, 41.521501561959], [42.1, 41.516211435305], [42.1, 37.174302240611], [42.099862855799, 37.169066781541], [42.099451799366, 37.163845682727], [42.098767958183, 37.15865326504], [42.097813207945, 37.153503770677], [42.096590167421, 37.148411324105], [42.095102191271, 37.143389893314], [42.093353360841, 37.138453251507], [42.091348472968, 37.133614939319], [42.089093026829, 37.12888822768], [42.08659320885, 37.124286081411], [42.083855875742, 37.119821123666], [42.080888535692, 37.115505601306], [42.077699327771, 37.111351351308], [42.074296999604, 37.107369768299], [42.070690883385, 37.103571773299], [42.066890870272, 37.099967783767], [42.062907383259, 37.096567685029], [42.05875134859, 37.093380803162], [42.054434165785, 37.090415879412], [42.049967676377, 37.087681046222], [42.045364131428, 37.085183804921], [42.040636157928, 37.082931005155], [42.035796724159, 37.080928826089], [42.030859104128, 37.079182759471], [42.026128879519, 37.07764815802], [42.021874078356, 37.076371523763], [41.866875299059, 37.033593508626], [41.861175614018, 37.032199047027], [41.855403952429, 37.031141287505], [41.563320212195, 36.986425406157], [41.555847975538, 36.985567607589], [41.490708205031, 36.980562724776], [41.48782280255, 36.98038294321], [41.458937914854, 36.9790020228], [41.458403120724, 36.978977890088], [41.366728316036, 36.975086898877], [41.364202900568, 36.975011657294], [41.218096180597, 36.972505401191], [41.212761361878, 36.972556225155], [41.207436845896, 36.972891491331], [41.202137787756, 36.973510245456], [41.196879270098, 36.974410726378], [41.191676260176, 36.975590371069], [41.097513176733, 36.999597323013], [40.923402474353, 37.029389253939], [40.906254552376, 37.028732505739], [40.816044682589, 37.022888538407], [40.790247743864, 37.019692068673], [40.72710788989, 37.002439671684], [40.719967043601, 36.998350417918], [40.716072372153, 36.996233330542], [40.712087702195, 36.994290927397], [40.676801752488, 36.97804794644], [40.670080601417, 36.975245905009], [40.548139988624, 36.929545831767], [40.542818630756, 36.927720520525], [40.537403047485, 36.926197343408], [40.53191037838, 36.924981121061], [40.526358006976, 36.924075702656], [40.520763505758, 36.923483953719], [40.494261125936, 36.921432583496], [40.475728757784, 36.918470092212], [40.458654339401, 36.911173383605], [40.328308997001, 36.841188322456], [40.313752446591, 36.832812167666], [40.307050502379, 36.82928653556], [40.257604396422, 36.805620153724], [40.250965101077, 36.802732942945], [40.044300062014, 36.721624849684], [40.03976293328, 36.719969490009], [39.974768121268, 36.698019721943], [39.973935807021, 36.697742697289], [39.95448848036, 36.691364523461], [39.953051989537, 36.690905362701], [39.847781603795, 36.658129483795], [39.842908719805, 36.656746673868], [39.83797206617, 36.655612384417], [39.832984308942, 36.654729525706], [39.602980952009, 36.6200005218], [39.602266183047, 36.61989523584], [39.453673715487, 36.598555598503], [39.325779703175, 36.57977202866], [39.27756784721, 36.570032698309], [39.27142507524, 36.568989817378], [39.265229279843, 36.568331510817], [39.228985841122, 36.565619261062], [39.223590510575, 36.565361792977], [39.218189148715, 36.56539602136], [39.212797514491, 36.565721846348], [39.162931791835, 36.570089674717], [39.158191242477, 36.570619109099], [39.153481333183, 36.571374002087], [39.148812780461, 36.572352636066], [39.144196206719, 36.573552784339], [39.1396421161, 36.574971716195], [39.098531123668, 36.588864843637], [39.097561290221, 36.589198141476], [39.064058834104, 36.600904179392], [39.050209798273, 36.605523776761], [39.038063469158, 36.607630702258], [39.018246805664, 36.606352146556], [38.988618171971, 36.599505281871], [38.983969030195, 36.598546551916], [38.979279628772, 36.597809533135], [38.974560534652, 36.597295886305], [38.969822381691, 36.597006768859], [38.921349023536, 36.595202417053], [38.915593096693, 36.595153940815], [38.772675463637, 36.598064554829], [38.768097706317, 36.598262781492], [38.763533834988, 36.598670500008], [38.714087729031, 36.604232328621], [38.7087352666, 36.604981358262], [38.703431088824, 36.606018468472], [38.698190689152, 36.607340629865], [38.693029374738, 36.608943980419], [38.687962221731, 36.610823836763], [38.683004031234, 36.612974707857], [38.67816928607, 36.615390311027], [38.63706973773, 36.637332449699], [38.632431893868, 36.639969832143], [38.627941312985, 36.642850815514], [38.623610777691, 36.645967198982], [38.567763609722, 36.688462926521], [38.562494671368, 36.692762804393], [38.484925600252, 36.760587818638], [38.47497436386, 36.765562746447], [38.403358402768, 36.78992136515], [38.367563542486, 36.799786878361], [38.244419087695, 36.813178644795], [38.205736910224, 36.808175475047], [38.139658462002, 36.782884447443], [38.10644296263, 36.764426332446], [38.076509465717, 36.745648704937], [38.071903928554, 36.742928469137], [38.067159529308, 36.740458381857], [38.062289842017, 36.738245510178], [38.057308799176, 36.736296185273], [38.052230651874, 36.734615984286], [38.047069929023, 36.733209714384], [38.041841395791, 36.732081398997], [38.017773232901, 36.727557538052], [37.996389096442, 36.720775705657], [37.967226850699, 36.704183293345], [37.962673396446, 36.70174596868], [37.958000175845, 36.699546990196], [37.953219654478, 36.697592223557], [37.926833393491, 36.687590087327], [37.923034751735, 36.686237097581], [37.919184651437, 36.685038353178], [37.804732289377, 36.651919151517], [37.79938150988, 36.650529864569], [37.793962133461, 36.649438389116], [37.788490722252, 36.64864806081], [37.782983997412, 36.648161294973], [37.777458788021, 36.647979579205], [37.736630083186, 36.647765956159], [37.733922247154, 36.647788453191], [37.722643768456, 36.64803490452], [37.701483489127, 36.642238767429], [37.610963431879, 36.606275945589], [37.581373394401, 36.590067883193], [37.576783367144, 36.587705600398], [37.572077549709, 36.585583334513], [37.567268482501, 36.583706741106], [37.562368981074, 36.582080821061], [37.557392101977, 36.580709907248], [37.552351107962, 36.579597652978], [37.547259432636, 36.578747022269], [37.387740237079, 36.55631278765], [37.382107592085, 36.555682830008], [37.376448303949, 36.555373000935], [37.370780552306, 36.555384295713], [37.365122543979, 36.555716678059], [37.264419503558, 36.564502108324], [37.250500664064, 36.564688037163], [37.13207203349, 36.559261609024], [37.126731071069, 36.55915971586], [37.121392288079, 36.559343176991], [37.11607091941, 36.559811468889], [37.110782150261, 36.560563255222], [37.105541072801, 36.561596390673], [37.100362643106, 36.562907927061], [37.095261638478, 36.564494121751], [37.090252615279, 36.566350448335], [37.085349867386, 36.568471609553], [37.080567385412, 36.570851552402], [37.07591881677, 36.573483485415], [37.071417426739, 36.57635989804], [36.982111549053, 36.636845737884], [36.977806217837, 36.639931112081], [36.939487523406, 36.668958116666], [36.90495801044, 36.681974086871], [36.732912277167, 36.72027154898], [36.681369750033, 36.588038947819], [36.653278266761, 36.487352085289], [36.660112574586, 36.462070632261], [36.662379256451, 36.458553446129], [36.730923640831, 36.382889040515], [36.755026460925, 36.362330939292], [36.758919879766, 36.358829944269], [36.762624712368, 36.355129958889], [36.766130801682, 36.351241126912], [36.769428535527, 36.347174109836], [36.772508872944, 36.342940057661], [36.775363368978, 36.338550578328], [36.777984197836, 36.334017705893], [36.780364174338, 36.32935386753], [36.782496773617, 36.324571849469], [36.784376149008, 36.319684761936], [36.785997148077, 36.314706003211], [36.787355326745, 36.309649222899], [36.788446961473, 36.304528284505], [36.789269059471, 36.299357227427], [36.789819366902, 36.294150228469], [36.790096375059, 36.28892156297], [36.790099324508, 36.28368556567], [36.789828207162, 36.278456591411], [36.789283766306, 36.273248975779], [36.782268538035, 36.219736402536], [36.781461518056, 36.214614563581], [36.780390103369, 36.209541439681], [36.779057174423, 36.204530669685], [36.777466314731, 36.199595724804], [36.775621801244, 36.1947498724], [36.773528592845, 36.190006140311], [36.771192317025, 36.185377281831], [36.768619254748, 36.180875741423], [36.765816323567, 36.176513621259], [36.762791059027, 36.172302648688], [36.759551594404, 36.168254144706], [36.756106638843, 36.16437899352], [36.75246545394, 36.160687613285], [36.748637828844, 36.1571899281], [36.74463405394, 36.153895341321], [36.740464893182, 36.150812710284], [36.736141555157, 36.147950322495], [36.73167566295, 36.145315873344], [36.727079222896, 36.14291644542], [36.722364592302, 36.140758489469], [36.717544446222, 36.13884780705], [36.712631743387, 36.137189534941], [36.70763969136, 36.135788131327], [36.702581711031, 36.134647363812], [36.635916061617, 36.121417993695], [36.631045956504, 36.120576068001], [36.626140201281, 36.11997579442], [36.621210779119, 36.119618639224], [36.616269731001, 36.119505474829], [36.611329126308, 36.119636577658], [36.606401033338, 36.12001162747], [36.601497489826, 36.120629708138], [36.596630473543, 36.121489309894], [36.556103997279, 36.12968457158], [36.529739293658, 36.134808667134], [36.51912158101, 36.133992998079], [36.479278340951, 36.127027935379], [36.481053788969, 36.1051677972], [36.481326167143, 36.100413433618], [36.483550135649, 36.033881298608], [36.483594279525, 36.029012276216], [36.48340135781, 36.02414687706], [36.482971827908, 36.019296636675], [36.482306708207, 36.014473054653], [36.48140757566, 36.009687567385], [36.480276562051, 36.004951520937], [36.471640087441, 35.972324415224], [36.470151606971, 35.967248019145], [36.468396755792, 35.962257441161], [36.466380444919, 35.957366647592], [36.464108317074, 35.952589325505], [36.461586730891, 35.947938844412], [36.458822743121, 35.943428218859], [36.455824088889, 35.939070071997], [36.452599160039, 35.934876600264], [36.449156981653, 35.930859539244], [36.445507186797, 35.927030130833], [36.441659989556, 35.923399091773], [36.437626156455, 35.91997658366], [36.433416976325, 35.916772184511], [36.429044228714, 35.913794861955], [36.424520150917, 35.911052948142], [36.419857403735, 35.908554116417], [36.415069036039, 35.906305359855], [36.410168448253, 35.904312971684], [36.335194388194, 35.876118544194], [36.330246856034, 35.874404449627], [36.325216385954, 35.872951671103], [36.320116769589, 35.871764191588], [36.314961988147, 35.870845266699], [36.309766174077, 35.870197415779], [36.282495117188, 35.867520017635], [36.282495117188, 35.854995727539], [36.282349016817, 35.849592142735], [36.281911142613, 35.844204347245], [36.281182774046, 35.838848084248], [36.280166039415, 35.833539004785], [36.278863909625, 35.828292622025], [36.277280189511, 35.823124265936], [36.275419506713, 35.818049038495], [36.261392864868, 35.782770718182], [36.259347845458, 35.777992833084], [36.25705735823, 35.773327647272], [36.254527589857, 35.768787761548], [36.251765373316, 35.764385438277], [36.248778169436, 35.76013256826], [36.245574046739, 35.756040638624], [36.242161659654, 35.75212070179], [36.238550225139, 35.748383345619], [36.234749497782, 35.744838664821], [36.230769743459, 35.74149623368], [36.226621711602, 35.738365080201], [36.222316606164, 35.735453661719], [36.217866055362, 35.732769842061], [36.213282080261, 35.730320870302], [36.208577062312, 35.728113361185], [36.203763709905, 35.726153277256], [36.198855024044, 35.72444591276], [36.193864263233, 35.722995879336], [36.188804907661, 35.721807093569], [36.183690622795, 35.720882766402], [36.178535222467, 35.72022539447], [36.165942906793, 35.718951285584], [36.16062074066, 35.718555916999], [36.155285061122, 35.718445045343], [36.149951065137, 35.718618986397], [36.144633944869, 35.719077244748], [36.139348844418, 35.719818515194], [36.134110816683, 35.720840686465], [36.128934780495, 35.722140847238], [36.123835478119, 35.723715294424], [36.118827433272, 35.725559543719], [36.11392490975, 35.727668342376], [36.109141870807, 35.730035684162], [36.104491939385, 35.732654826469], [36.09998835931, 35.735518309518], [36.095643957575, 35.738617977601], [36.091471107805, 35.741945002316], [36.087481695014, 35.745489907708], [36.083687081755, 35.74924259726], [36.080098075757, 35.753192382647], [36.076724899145, 35.757328014183], [36.066730127206, 35.770272383312], [36.06572339524, 35.771434987131],
                ],
            ],
            [
                [
                    [36.80680811723, 32.421928754198], [36.80883081467, 32.423435783491], [36.813336551119, 32.426428125534], [36.817997489035, 32.429172470555], [37.104885611594, 32.587802841649], [37.105163714351, 32.587956038313], [37.275470873774, 32.681419936018], [37.43846261486, 32.770869160978], [37.439681852689, 32.771740553695], [37.444119987301, 32.77457197377], [37.448700977817, 32.777165909843], [37.453412128491, 32.779515173087], [37.45824038285, 32.781613252758], [37.458358634084, 32.781657395331], [37.57728306724, 32.84621657844], [37.577710790773, 32.846447427934], [37.744657201906, 32.936027963822], [37.911603613039, 33.025608499711], [37.911974368127, 33.025806438125], [38.091993746789, 33.121429454482], [38.272013125451, 33.21705247084], [38.272543844478, 33.217332341], [38.487059982336, 33.329634394759], [38.650871339402, 33.415965655866], [38.651685315168, 33.416389872597], [38.748891430891, 33.466484477089], [38.753600178625, 33.468757328374], [38.758421287403, 33.470780955894], [38.763341577202, 33.472549827423], [38.768347596854, 33.474059107193], [38.773425660825, 33.475304669112], [38.778561886623, 33.476283108041], [38.783742232753, 33.47699174911], [38.788952537102, 33.477428655024], [38.794178555658, 33.477592631362], [38.799406001449, 33.477483229845], [38.8046205836, 33.477100749554], [38.809808046405, 33.476446236122], [38.814954208296, 33.475521478867], [38.820045000614, 33.474329005905], [38.82506650607, 33.472872077238], [38.830004996793, 33.47115467584], [38.83484697186, 33.46918149677], [38.839579194202, 33.466957934337], [38.844188726794, 33.46449006735], [38.848662968025, 33.461784642504], [38.852989686142, 33.458849055932], [38.857157052695, 33.455691332986], [38.861153674871, 33.4523201063], [38.864968626641, 33.448744592187], [38.868591478631, 33.444974565443], [38.872012326629, 33.441020332627], [38.875221818668, 33.436892703884], [38.878211180587, 33.43260296339], [38.880972240021, 33.428162838506], [38.883497448743, 33.423584467715], [38.885779903297, 33.41888036744], [38.887813363872, 33.414063397825], [38.889592271363, 33.409146727577], [38.986695390259, 33.117118936236], [39.083798509156, 32.825091144894], [39.180901628052, 32.533063353553], [39.182408104139, 32.528107640956], [39.183655957962, 32.523080572388], [39.184641841709, 32.51799563475], [39.185363110397, 32.512866470195], [39.185817828964, 32.507706839533], [39.186004777468, 32.502530585308], [39.185923454352, 32.497351594663], [39.185574077794, 32.492183762084], [39.184957585121, 32.487040952119], [39.184075630295, 32.481936962187], [39.182930579472, 32.476885485555], [39.18152550466, 32.471900074607], [39.17986417547, 32.466994104482], [39.17795104901, 32.462180737189], [39.175791257921, 32.457472886299], [39.173390596613, 32.452883182297], [39.170755505712, 32.448423938696], [39.167893054788, 32.444107119004], [39.164810923384, 32.439944304625], [39.161517380413, 32.43594666379], [39.160288573974, 32.434603407974], [39.236844926477, 32.452823911661], [39.241989657242, 32.453906304404], [39.247184163646, 32.454716817765], [39.252414088162, 32.455253211498], [39.25766497537, 32.45551400302], [39.262922311907, 32.455498471509], [39.268171566584, 32.455206659892], [39.273398230553, 32.454639374732], [39.278587857402, 32.453798183995], [39.283726103092, 32.452685412719], [39.288798765601, 32.451304136585], [39.293791824175, 32.449658173414], [39.298691478088, 32.447752072623], [39.303484184778, 32.44559110264], [39.308156697288, 32.443181236349], [39.312696100871, 32.440529134581], [39.317089848696, 32.437642127698], [39.321325796517, 32.434528195338], [39.325392236249, 32.431195944357], [39.32927792832, 32.42765458504], [39.332972132745, 32.423913905642], [39.336464638806, 32.419984245338], [39.339745793276, 32.415876465642], [39.3428065271, 32.411601920386], [39.345638380462, 32.40717242434], [39.348233526169, 32.402600220556], [39.350584791282, 32.397897946525], [39.352685676944, 32.393078599254], [39.354530376344, 32.388155499335], [39.395641368776, 32.268995800848], [39.397199989452, 32.264068749555], [39.398501998702, 32.259067759177], [39.399543919494, 32.254006184924], [39.400322969364, 32.248897543797], [39.40083706785, 32.243755478492], [39.401084842043, 32.238593720962], [39.401065630261, 32.233426055748], [39.400779483808, 32.228266283169], [39.400227166842, 32.223128182467], [39.399410154333, 32.218025475007], [39.398330628125, 32.212971787639], [39.396991471105, 32.2079806163], [39.39539625951, 32.203065289981], [39.393549253375, 32.198238935125], [39.391455385153, 32.193514440578], [39.389120246548, 32.188904423165], [39.386550073579, 32.184421193998], [39.383751729925, 32.180076725601], [39.380732688602, 32.175882619934], [39.377501011999, 32.171850077412], [39.374065330352, 32.167989866994], [39.370434818693, 32.164312297422], [39.366619172353, 32.160827189696], [39.362628581066, 32.157543850841], [39.258260395598, 32.076102409612], [39.133737232756, 31.97893825556], [39.133569224762, 31.978807448165], [39.066346629547, 31.926584242599], [39.062112263808, 31.923469635578], [39.057720085696, 31.920581833378], [39.053182231077, 31.91792881518], [39.048511238328, 31.915517911439], [39.043720013697, 31.913355783634], [39.03882179564, 31.911448405861], [39.033830118241, 31.909801048325], [39.028758773819, 31.908418262778], [38.512307258272, 31.782083214469], [38.261694122628, 31.71958047986], [38.010935815129, 31.657041539497], [37.988161336806, 31.651325062797], [37.733815636529, 31.587668077258], [37.496483436313, 31.528054911639], [37.22700983913, 31.459285981344], [37.200396979825, 31.452447181725], [37.220671843742, 31.432269490222], [37.365549266369, 31.288086424682], [37.560556590588, 31.093914519164], [37.561139010523, 31.093329788377], [37.632229708764, 31.021365524461], [37.632325047225, 31.021268883362], [38.072625035018, 30.574346581116], [38.076196959661, 30.570526042834], [38.079564244713, 30.566523974646], [38.082717678913, 30.56235132427], [38.085648635993, 30.55801950606], [38.088349098272, 30.553540369771], [38.090811678593, 30.548926168153], [38.093029640528, 30.544189523427], [38.094996916809, 30.539343392759], [38.096708125918, 30.534401032818], [38.098158586817, 30.529375963506], [38.099344331747, 30.52428193098], [38.100262117084, 30.519132870048], [38.100909432211, 30.513942866046], [38.101284506388, 30.508726116314], [38.101386313593, 30.503496891351], [38.101214575331, 30.498269495788], [38.100769761395, 30.493058229246], [38.100053088581, 30.487877347227], [38.099066517358, 30.482741022118], [38.097812746507, 30.477663304415], [38.096295205738, 30.472658084298], [38.094518046309, 30.467739053624], [38.092486129667, 30.462919668479], [38.090205014152, 30.458213112369], [38.087680939792, 30.453632260152], [38.084920811232, 30.449189642822], [38.081932178848, 30.444897413228], [38.078723218091, 30.440767312834], [38.075302707123, 30.436810639593], [38.071680002807, 30.433038217049], [38.067865015108, 30.429460364723], [38.063868179985, 30.426086869887], [38.059700430845, 30.422926960788], [38.055373168629, 30.41998928141], [38.050898230634, 30.41728186782], [38.046287858123, 30.41481212619], [37.87934144699, 30.330923118622], [37.742362711721, 30.262092587425], [37.674831622459, 30.125091118705], [37.592472308494, 29.95800737847], [37.590055253401, 29.953409049839], [37.587402662661, 29.948942446668], [37.584521694763, 29.94461962288], [37.581420124512, 29.940452244387], [37.578106322047, 29.936451557602], [37.574589230256, 29.932628359091], [37.570878340637, 29.928992966436], [37.566983667686, 29.925555190391], [37.562915721873, 29.922324308408], [37.558685481274, 29.919309039598], [37.554304361946, 29.9165175212], [37.549784187122, 29.913957286624], [37.545137155297, 29.91163524512], [37.540375807316, 29.90955766313], [37.535512992523, 29.907730147379], [37.530561834092, 29.906157629744], [37.525535693604, 29.904844353944], [37.520448134997, 29.903793864087], [37.427776920234, 29.887156070261], [37.239959525855, 29.853394102723], [37.052304011076, 29.819661234587], [36.803117606416, 29.773965076093], [36.705095930251, 29.627998683724], [36.583567304763, 29.447027538094], [36.580685544358, 29.442959167769], [36.577604595901, 29.439039481973], [36.574332117453, 29.435278223547], [36.570876243146, 29.431684741544], [36.567245562963, 29.428267967986], [36.563449101388, 29.425036395668], [36.559496294974, 29.421998057044], [36.331597670224, 29.255693402398], [36.128869398739, 29.108053174127], [36.124553450078, 29.105079911898], [36.120087654792, 29.102336852731], [36.115484279395, 29.099831531179], [36.1107559683, 29.097570828784], [36.105915709091, 29.095560955176], [36.100976796848, 29.093807431015], [36.095952797627, 29.09231507283], [36.090857511198, 29.091087979785], [36.085704933143, 29.090129522423], [36.080509216409, 29.089442333406], [36.075284632435, 29.089028300283], [36.070045531952, 29.08888856031], [36.064806305565, 29.089023497319], [36.059581344225, 29.089432740669], [36.054384999698, 29.090115166264], [35.984385304874, 29.101181142283], [35.979236250173, 29.102133941625], [35.9741441309, 29.103354970788], [35.969122909949, 29.10484088164], [35.964186355803, 29.106587599724], [35.959348004786, 29.108590335437], [35.954621123941, 29.110843597158], [35.950018674657, 29.113341206312], [35.945553277119, 29.116076314306], [35.941237175714, 29.119041421311], [35.937082205444, 29.122228396831], [35.933099759485, 29.125628501989], [35.929300757939, 29.129232413497], [35.925695617892, 29.133030249215], [35.922294224852, 29.137011595255], [35.919105905639, 29.141165534529], [35.916139402812, 29.145480676692], [35.913402850698, 29.149945189368], [35.910903753085, 29.154546830599], [35.908648962646, 29.159272982414], [35.906644662149, 29.164110685424], [35.904896347504, 29.169046674363], [35.903408812695, 29.174067414457], [35.902186136628, 29.17915913854], [35.901231671955, 29.184307884804], [35.900548035874, 29.189499535082], [35.900137102955, 29.194719853563], [35.9, 29.199954525824], [35.9, 32.665958114023], [35.900135585773, 32.67116376202], [35.900541975421, 32.676355293781], [35.901218066933, 32.681518631348], [35.902162026938, 32.686639773221], [35.903371295688, 32.691704832319], [35.904842593989, 32.696700073642], [35.906571932099, 32.701611951519], [35.908554620544, 32.706427146333], [35.910785282838, 32.711132600647], [35.91325787006, 32.715715554607], [35.915965677257, 32.720163580546], [35.918901361625, 32.724464616684], [35.922056962425, 32.728606999835], [35.925423922564, 32.732579497033], [35.928993111805, 32.736371335998], [35.932754851523, 32.739972234339], [35.936698940949, 32.743372427447], [35.940814684835, 32.746562694965], [35.945090922456, 32.749534385794], [35.94951605787, 32.752279441555], [35.954078091371, 32.754790418439], [35.958764652021, 32.757060507389], [35.963563031202, 32.759083552571], [35.968460217074, 32.760854068062], [35.973442929864, 32.762367252727], [35.97849765787, 32.763619003241], [35.983610694111, 32.764605925212], [35.988768173485, 32.765325342389], [35.993956110377, 32.765775303916], [35.999160436578, 32.765954589627], [36.004367039436, 32.765862713349], [36.009561800125, 32.765499924225], [36.014730631934, 32.764867206036], [36.01985951846, 32.763966274533], [36.024934551623, 32.762799572786], [36.029941969377, 32.761370264558], [36.034868193029, 32.759682225728], [36.039699864064, 32.757740033774], [36.044423880364, 32.755548955371], [36.049027431741, 32.753114932098], [36.053498034673, 32.750444564334], [36.057823566157, 32.747545093357], [36.061992296584, 32.744424381707], [36.0653187126, 32.741796345809], [36.0693891488, 32.738401479718], [36.073273991223, 32.734795711283], [36.076962325958, 32.730989170396], [36.080443791159, 32.726992550988], [36.083708606149, 32.722817080987], [36.086747598897, 32.718474490778], [36.089552231789, 32.713976980245], [36.09211462561, 32.709337184501], [36.094427581683, 32.704568138386], [36.112139443159, 32.665439934577], [36.140753636339, 32.62830879673], [36.153626388186, 32.62394003158], [36.154656686483, 32.623692783706], [36.154685872363, 32.623706608597], [36.159519937945, 32.625841916788], [36.164460057883, 32.627718868073], [36.169492435541, 32.629332220555], [36.174603016631, 32.630677468505], [36.179777528459, 32.631750854952], [36.185001519789, 32.632549382169], [36.190260401196, 32.633070820053], [36.19553948582, 32.633313712345], [36.200824030373, 32.633277380702], [36.206099276323, 32.63296192659], [36.211350491103, 32.632368231002], [36.216563009264, 32.631497951994], [36.221722273423, 32.630353520057], [36.226813874928, 32.628938131331], [36.231823594089, 32.627255738676], [36.236737439899, 32.625311040631], [36.241541689101, 32.623109468299], [36.246222924516, 32.62065717017], [36.250768072516, 32.617960994957], [36.367711431891, 32.544344967124], [36.373071805734, 32.540723346832], [36.378186798058, 32.536762716224], [36.410413360558, 32.510097982338], [36.415665688296, 32.505431798935], [36.443296642461, 32.479090577653], [36.495828294656, 32.475288407629], [36.50086558577, 32.474795393414], [36.505871479546, 32.474048136904], [36.510833152202, 32.473048552373], [36.515737893241, 32.471799200492], [36.520573138009, 32.470303281772], [36.525326499883, 32.468564628363], [36.529985802002, 32.466587694236], [36.542903519666, 32.460716656074], [36.653930355961, 32.448565693343], [36.658279220684, 32.4479929687], [36.739387313945, 32.435496020458], [36.744046667454, 32.434664793765], [36.80680811723, 32.421928754198],
                ],
            ],
            [
                [
                    [36.59804069214, 73.286378550703], [36.056928638244, 72.911688121953], [36.052593812723, 72.908849767995], [36.048117788774, 72.906239753608], [36.043512583163, 72.903865085889], [36.038790559471, 72.901732140099], [36.033964394898, 72.899846642552], [36.029047046231, 72.898213655235], [36.024051715059, 72.896837562225], [36.01899181233, 72.895722057913], [36.013880922349, 72.89487013709], [36.008732766303, 72.894284086904], [36.00356116543, 72.893965480724], [35.998380003908, 72.893915173909], [35.993203191584, 72.894133301518], [35.988044626628, 72.894619277945], [35.982918158222, 72.895371798491], [35.977837549378, 72.896388842865], [35.972816439988, 72.897667680613], [35.967868310208, 72.899204878444], [35.963006444265, 72.900996309448], [35.958243894793, 72.903037164175], [35.953593447792, 72.905321963551], [35.949067588303, 72.907844573582], [35.944678466883, 72.910598221826], [35.940437866992, 72.913575515573], [35.936357173354, 72.916768461693], [35.932447341393, 72.920168488094], [35.928718867822, 72.923766466738], [35.92518176246, 72.927552738142], [35.921845521363, 72.931517137319], [35.918719101324, 72.935649021058], [35.915810895834, 72.939937296506], [35.913128712541, 72.944370450944], [35.910679752293, 72.948936582698], [35.908470589807, 72.95362343309], [35.906507156012, 72.958418419349], [35.904794722133, 72.963308668392], [35.903337885534, 72.968281051384], [35.902140557381, 72.973322218985], [35.901205952136, 72.978418637191], [35.90053657893, 72.983556623664], [35.900134234828, 72.988722384471], [35.9, 72.993902051111], [35.9, 79.064563073348], [35.900138121302, 79.069817136805], [35.900552103656, 79.075056686301], [35.901240803469, 79.080267247967], [35.902202318256, 79.085434428012], [35.903433991906, 79.090543952484], [35.904932422009, 79.095581706699], [35.906693469265, 79.100533774234], [35.908712268911, 79.105386475368], [35.910983244161, 79.110126404874], [35.913500121614, 79.114740469047], [35.916255948583, 79.119215921876], [35.9192431123, 79.123540400254], [35.922453360945, 79.127701958128], [35.925877826445, 79.131689099504], [35.929507048967, 79.135490810197], [35.933331003051, 79.139096588264], [35.937339125308, 79.142496473009], [35.941520343596, 79.145681072503], [35.94586310761, 79.148641589523], [35.950355420784, 79.151369845863], [35.954984873436, 79.153858304914], [35.959738677046, 79.156100092493], [35.964603699582, 79.158089015827], [35.96956650178, 79.159819580664], [35.974613374265, 79.161287006445], [35.979730375427, 79.162487239515], [35.984903369926, 79.16341696432], [35.99011806775, 79.164073612563], [35.995360063681, 79.164455370303], [36.000614877092, 79.164561182961], [36.005867991951, 79.164390758237], [36.011104896916, 79.163944566919], [36.016311125425, 79.163223841576], [36.021472295657, 79.162230573158], [36.315131053378, 79.097669407159], [37.521472295657, 78.832454101481], [37.697199247059, 78.793820358806], [38.015554860749, 78.723829564792], [38.021472295657, 78.722528610922], [38.026528549404, 78.72127810166], [38.031512832589, 78.719766018162], [38.036411623112, 78.717996462629], [38.041211630811, 78.715974235774], [38.045899833519, 78.713704823792], [38.050463512386, 78.711194383479], [38.054890286391, 78.708449725527], [38.059168145929, 78.705478296049], [38.063285485392, 78.702288156378], [38.067231134653, 78.698887961195], [38.070994389372, 78.695286935052], [38.074565040038, 78.691494847343], [38.077933399662, 78.687521985803], [38.081090330061, 78.683379128598], [38.084027266649, 78.679077515081], [38.086736241672, 78.674628815305], [38.08920990582, 78.670045098358], [38.091441548175, 78.665338799624], [38.093425114407, 78.660522687045], [38.095155223204, 78.655609826482], [38.096627180874, 78.650613546267], [38.097836994071, 78.645547401046], [38.098781380635, 78.640425135006], [38.099457778497, 78.635260644585], [38.099864352623, 78.630067940776], [38.1, 78.624861111111], [38.1, 77.348780350821], [38.1, 77.067527146608], [38.1, 76.495844458066], [38.1, 76.166666030884], [38.1, 75.800205555556], [38.099868353395, 75.795076034111], [38.099473760195, 75.789960018348], [38.098817259338, 75.784870978389], [38.097900579347, 75.779822313331], [38.096726133776, 75.774827315966], [38.095297014863, 75.769899137782], [38.093616985379, 75.765050754339], [38.091690468728, 75.760294931101], [38.089522537299, 75.755644189827], [38.087118899107, 75.751110775604], [38.084485882767, 75.746706624604], [38.081630420835, 75.742443332656], [38.078560031547, 75.73833212472], [38.075282799029, 75.734383825326], [38.071807352012, 75.730608830079], [38.068142841113, 75.727017078286], [38.064298914739, 75.723618026784], [38.060285693689, 75.720420625046], [38.056113744499, 75.717433291612], [38.05179405163, 75.714663891931], [38.003478659145, 75.685409727037], [37.55179405163, 75.411922225264], [37.1, 75.138368456903], [37.1, 73.68634722], [37.099856279596, 73.680987796024], [37.099425531493, 73.675643777219], [37.098708993838, 73.670330524476], [37.097708726253, 73.665063310253], [37.096427603914, 73.659857274673], [37.09486930929, 73.654727382005], [37.093038321556, 73.649688377656], [37.090939903718, 73.644754745779], [37.088580087485, 73.639940667647], [37.085965655931, 73.635259980885], [37.083104124, 73.630726139696], [37.080003716903, 73.626352176191], [37.076673346475, 73.622150662925], [37.073122585559, 73.618133676762], [37.069361640492, 73.614312764159], [37.065401321764, 73.61069890798], [37.061253012947, 73.60730249592], [37.056928637975, 73.604133290655], [36.59804069214, 73.286378550703],
                ],
            ],
        ];
    }
}
