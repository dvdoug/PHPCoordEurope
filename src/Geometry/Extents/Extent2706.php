<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Russia - 178.5°E to 178.5°W onshore.
 * @internal
 */
class Extent2706
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [178.5, 62.390480378663], [178.6920375824, 62.3580493927], [178.71702766418, 62.353887557983], [178.91342353821, 62.317007064819], [178.93586158752, 62.30291557312], [178.95504570007, 62.282114028931], [178.95807075501, 62.279146194458], [178.96135902405, 62.276411056519], [178.96503639221, 62.273759841919], [178.96909141541, 62.271211624146], [178.97350502014, 62.268770217896], [178.97825431824, 62.266454696656], [178.9833240509, 62.264265060425], [178.98869132996, 62.262216567993], [178.99433326721, 62.260316848755], [179.00022315979, 62.258573532105], [179.00633811951, 62.256994247436], [179.01265144348, 62.255586624146], [179.01913642883, 62.254354476929], [179.0226650238, 62.253770828247], [179.07105827332, 62.24614906311], [179.0741558075, 62.245683670044], [179.08089637756, 62.244817733765], [179.08772468567, 62.244142532349], [179.09461021423, 62.243658065796], [179.10152626038, 62.243371963501], [179.10843849182, 62.243280410767], [179.11532020569, 62.24338722229], [179.1221446991, 62.243688583374], [179.12887763977, 62.244188308716], [179.13549613953, 62.244878768921], [179.14196586609, 62.245756149292], [179.14826393127, 62.246824264526], [179.15435981751, 62.248071670532], [179.1602306366, 62.249494552612], [179.16585350037, 62.25108909607], [179.17119789124, 62.252843856812], [179.17624473572, 62.254758834839], [179.18097114563, 62.256818771362], [179.18535804749, 62.259019851685], [179.1893863678, 62.261350631714], [179.19304084778, 62.263799667358], [179.19630241394, 62.266355514527], [179.19828987122, 62.268156051636], [179.24733924866, 62.315202713013], [179.25022315979, 62.318376541138], [179.25224113464, 62.32119178772], [179.25382423401, 62.324071884155], [179.25496101379, 62.327005386353], [179.2556476593, 62.329977035523], [179.25582313538, 62.334119796753], [179.24580574036, 62.424432754517], [179.24508857727, 62.427801132202], [179.24396705627, 62.430795669556], [179.2423992157, 62.433767318726], [179.24039268494, 62.436700820923], [179.23795127869, 62.439584732056], [179.23508644104, 62.442403793335], [179.2322101593, 62.444833755493], [179.22327232361, 62.451906204224], [179.23023796082, 62.454732894898], [179.24138832092, 62.453008651733], [179.24936485291, 62.451951980591], [179.25623893738, 62.451265335083], [179.26317024231, 62.450773239136], [179.27012825012, 62.450471878052], [179.27787208557, 62.450372695923], [179.32826805115, 62.450647354126], [179.33364677429, 62.450735092163], [179.34052085876, 62.451021194458], [179.3473110199, 62.451505661011], [179.35398292542, 62.452180862427], [179.36051368713, 62.453046798706], [179.36686897278, 62.454095840454], [179.37302589417, 62.455331802368], [179.37958717346, 62.456907272339], [179.41801261902, 62.467138290405], [179.42243385315, 62.468385696411], [179.42784309387, 62.470129013062], [179.43295478821, 62.4720287323], [179.43774604797, 62.474077224732], [179.44219398499, 62.476266860962], [179.44727516174, 62.479211807251], [179.48939323425, 62.506917953491], [179.49358940125, 62.510057449341], [179.49650764465, 62.512704849243], [179.49901008606, 62.515439987183], [179.50107765198, 62.518251419068], [179.50279808044, 62.521322250366], [179.51226997375, 62.54176902771], [179.58031272888, 62.574502944946], [179.58728981018, 62.575185775757], [179.59385490417, 62.576036453247], [179.60024833679, 62.577077865601], [179.60644340515, 62.578294754028], [179.61241722107, 62.579694747925], [179.61813545227, 62.581262588501], [179.62358283997, 62.582994461059], [179.62873268127, 62.584886550904], [179.63355827332, 62.586923599243], [179.6380443573, 62.589101791382], [179.64217185974, 62.591413497925], [179.64592170715, 62.593843460083], [179.64927864075, 62.596387863159], [179.65222740173, 62.599027633667], [179.65475273132, 62.601758956909], [179.6570148468, 62.604822158814], [179.70809745789, 62.685575485229], [179.70943641663, 62.687936782837], [179.71065711975, 62.690858840943], [179.7114200592, 62.693826675415], [179.71172904968, 62.696817398072], [179.7114276886, 62.700693130493], [179.70075035095, 62.750532150269], [179.69952583313, 62.754167556763], [179.69819831848, 62.756814956665], [179.64440727234, 62.850667953491], [179.642370224, 62.853715896607], [179.63995933533, 62.856603622436], [179.63711738586, 62.859434127808], [179.6338558197, 62.862188339234], [179.63133049011, 62.864068984985], [179.58751106262, 62.895051956177], [179.58288383484, 62.898015975952], [179.57845497131, 62.900480270386], [179.57367515564, 62.902822494507], [179.5685634613, 62.905038833618], [179.56313896179, 62.907117843628], [179.55743217468, 62.909048080444], [179.55146217346, 62.910821914673], [179.54525566101, 62.912431716919], [179.53883934021, 62.913873672486], [179.53223991394, 62.915140151978], [179.52511405945, 62.916276931763], [179.44811439514, 62.927186965943], [179.44197654724, 62.927972793579], [179.43499946594, 62.928678512573], [179.42741584778, 62.929216384888], [179.39482688904, 62.930974960327], [179.36132621765, 62.969541549683], [179.34686851501, 63.001382827759], [179.34986305237, 63.006235122681], [179.35636711121, 63.010007858276], [179.35915565491, 63.009565353394], [179.36606025696, 63.008672714234], [179.37305641174, 63.007974624634], [179.38011741638, 63.007467269898], [179.3872127533, 63.007154464722], [179.3943157196, 63.007036209107], [179.40138816833, 63.007116317749], [179.4084072113, 63.007390975952], [179.41533851624, 63.007863998413], [179.42215156555, 63.008527755737], [179.42882347107, 63.009382247925], [179.43546104431, 63.010450363159], [179.45737266541, 63.014360427857], [179.4633846283, 63.015531539917], [179.46945381165, 63.016931533814], [179.47527122498, 63.01849937439], [179.48081016541, 63.020235061646], [179.48604393005, 63.022127151489], [179.49095344543, 63.024168014527], [179.49551963806, 63.026346206665], [179.49971961975, 63.028657913208], [179.50353431702, 63.031091690063], [179.50695228577, 63.03363609314], [179.50995445251, 63.036279678345], [179.51252937317, 63.039011001587], [179.51466941834, 63.041818618775], [179.51635932922, 63.044691085816], [179.51759147644, 63.047616958618], [179.51836585999, 63.050584793091], [179.51867866516, 63.053602218628], [179.52067756653, 63.135553359985], [179.52052497864, 63.138513565064], [179.51991081238, 63.141523361206], [179.51883125305, 63.144521713257], [179.51729393005, 63.147497177124], [179.51529884338, 63.150434494019], [179.51286506653, 63.153322219849], [179.50999641418, 63.156148910523], [179.50670433044, 63.158903121948], [179.50279045105, 63.161714553833], [179.42309761047, 63.214395523071], [179.41942024231, 63.216680526734], [179.41470146179, 63.219263076782], [179.38490867615, 63.234415054321], [179.38055229187, 63.23650932312], [179.37682914734, 63.238126754761], [179.33862113953, 63.253988265991], [179.33241844177, 63.256349563599], [179.30961418152, 63.264429092407], [179.30381965637, 63.266355514526], [179.29779243469, 63.268117904663], [179.26109886169, 63.27813911438], [179.25479316711, 63.279745101929], [179.25171470642, 63.280450820923], [179.11102867126, 63.311418533325], [179.11170005798, 63.314065933228], [179.11198616028, 63.317060470581], [179.11180305481, 63.320070266724], [179.11114692688, 63.323083877564], [179.11002540588, 63.326078414917], [179.10844230652, 63.329053878784], [179.10640525818, 63.331987380982], [179.10392189026, 63.334871292114], [179.10209465027, 63.336660385132], [179.07620811462, 63.360776901245], [179.07416725159, 63.362546920777], [179.01213264465, 63.413370132446], [178.95651435852, 63.465360641479], [178.94034385681, 63.482789993286], [178.92569923401, 63.501546859741], [178.89151954651, 63.555810928345], [178.88938713074, 63.584722518921], [178.88864326477, 63.588415145874], [178.88750267029, 63.591409683227], [178.88589668274, 63.594381332398], [178.88382911682, 63.597314834595], [178.88131141663, 63.600198745728], [178.87835121155, 63.603017807007], [178.87496757507, 63.605760574341], [178.8711681366, 63.608415603638], [178.8669719696, 63.610971450806], [178.86239814758, 63.61342048645], [178.85673713684, 63.61639213562], [178.8598575592, 63.619703292847], [178.86245155334, 63.622446060181], [178.86459922791, 63.625268936157], [178.86628913879, 63.628149032593], [178.86751365662, 63.63108253479], [178.86826896667, 63.634057998657], [178.86854743958, 63.637052536011], [178.86832237244, 63.640268325806], [178.85638237, 63.712392807007], [178.80407142639, 63.899263381958], [178.80286979675, 63.902463912964], [178.80148506165, 63.905054092407], [178.7726764679, 63.952615737915], [178.77047538757, 63.955736160278], [178.7679309845, 63.958620071411], [178.76494026184, 63.961439132691], [178.76151847839, 63.964181900025], [178.75767707825, 63.966836929321], [178.75343132019, 63.969392776489], [178.74880027771, 63.971837997437], [178.74380683899, 63.974164962769], [178.73847007751, 63.976362228394], [178.73280906677, 63.97841835022], [178.72685432434, 63.980325698853], [178.7206287384, 63.9820728302], [178.71353340149, 63.983800888062], [178.57126808167, 64.015256881714], [178.56582069397, 64.016386032105], [178.55893516541, 64.017618179321], [178.55188941956, 64.018663406372], [178.544713974, 64.019525527954], [178.53744697571, 64.020196914673], [178.53011131287, 64.020673751831], [178.52707481384, 64.020811080933], [178.53211784363, 64.02293586731], [178.53960990906, 64.024347305298], [178.54588890076, 64.02578163147], [178.55190086365, 64.027383804322], [178.55761909485, 64.029150009155], [178.56302452087, 64.031072616577], [178.56809043884, 64.033140182495], [178.57279396057, 64.035348892212], [178.57711982727, 64.037687301636], [178.58104515076, 64.040143966675], [178.58455467224, 64.042707443237], [178.58762931824, 64.045370101929], [178.59026145935, 64.048120498657], [178.59243965149, 64.050943374634], [178.59415245056, 64.053827285767], [178.59539222717, 64.056764602661], [178.59615135193, 64.059740066528], [178.59638786316, 64.063756942749], [178.59070396423, 64.123594284058], [178.58996009827, 64.12709236145], [178.5887966156, 64.130086898804], [178.58665275574, 64.133794784546], [178.51284599304, 64.236108779907], [178.5, 64.253424144341], [178.5, 63.942933516728], [178.5, 63.632442889115], [178.5, 63.321952261502], [178.5, 63.011461633889], [178.5, 62.700971006276], [178.5, 62.390480378663],
                ],
            ],
            [
                [
                    [181.5, 68.664910987021], [181.31697654724, 68.744478225708], [181.31401634216, 68.745695114136], [181.22963905334, 68.779104232788], [181.22515296936, 68.780794143677], [181.17377662659, 68.799077987671], [181.1684513092, 68.800874710083], [181.16163063049, 68.802930831909], [181.15443992615, 68.804834365845], [181.14691352844, 68.80658531189], [181.13908958435, 68.808172225952], [181.12993049622, 68.809755325317], [180.99898719788, 68.829961776734], [180.99423027039, 68.830659866333], [180.86718177795, 68.848302841187], [180.85789299011, 68.849443435669], [180.84917640686, 68.850297927857], [180.84034156799, 68.850965499878], [180.83141899109, 68.851434707642], [180.82202720642, 68.851716995239], [180.72427940369, 68.853410720825], [180.71570396423, 68.895570755005], [180.71399497986, 68.899774551392], [180.71204948425, 68.902738571167], [180.70850563049, 68.90668296814], [180.6663608551, 68.947111129761], [180.66430473328, 68.948957443237], [180.66066932678, 68.951765060425], [180.65649986267, 68.95449256897], [180.6511592865, 68.957471847534], [180.63152144276, 68.96885284016], [180.49990639912, 68.902413585627], [180.31982449709, 68.889959071662], [180.13396263123, 68.996820449829], [180.10422706604, 69.008749008179], [180.09784126282, 69.011121749878], [180.09124946594, 69.013280868531], [180.08426856995, 69.015295028687], [180.07692146301, 69.017156600952], [180.06924247742, 69.01886177063], [180.06126976013, 69.020399093628], [180.05704689026, 69.021413803101], [180.05031394959, 69.024305343628], [180.04413414001, 69.02659034729], [180.03977012634, 69.028047561646], [180.00362586975, 69.03957939148], [179.96180534363, 69.052923202515], [179.87207984924, 69.089612960816], [179.68242454529, 69.170160293579], [179.67846870422, 69.171758651734], [179.67527580261, 69.172956466675], [179.48674201965, 69.241117477417], [179.46679878235, 69.249509811401], [179.44631385803, 69.261304855347], [179.42644691467, 69.277997970581], [179.42206001282, 69.281232833862], [179.41769218445, 69.283937454224], [179.41280174255, 69.286546707154], [179.40741539001, 69.289056777954], [179.40155220032, 69.29144859314], [179.39523887634, 69.293714523315], [179.38850593567, 69.295846939087], [179.38137626648, 69.29783821106], [179.37388420105, 69.299673080444], [179.36606025696, 69.301347732544], [179.35793876648, 69.302858352661], [179.34955024719, 69.304193496704], [179.34572410583, 69.304731369019], [179.20562553406, 69.324495315552], [179.20452690125, 69.328382492066], [179.20294761658, 69.331365585327], [179.20078086853, 69.334318161011], [179.1980342865, 69.337228775024], [179.19471549988, 69.340078353882], [179.19084739685, 69.342855453491], [179.18578147888, 69.345918655396], [179.16241645813, 69.358671188355], [179.15879249573, 69.360548019409], [179.15336036682, 69.363050460816], [179.14662361145, 69.365743637085], [179.10775947571, 69.379957199097], [179.10306358337, 69.381597518921], [179.09627342224, 69.383718490601], [179.08802986145, 69.38596534729], [178.95533180237, 69.41888999939], [178.85181236267, 69.444059371948], [178.84768104553, 69.445024490357], [178.74236488342, 69.46873664856], [178.73356437683, 69.470560073853], [178.54686164856, 69.505765914917], [178.53989982605, 69.506994247437], [178.53138923645, 69.508291244507], [178.52265357971, 69.509405136109], [178.51359367371, 69.510351181031], [178.5, 69.511601532497], [178.5, 69.180361249142], [178.5, 68.849120965787], [178.5, 68.517880682432], [178.5, 68.186640399077], [178.5, 67.855400115722], [178.5, 67.524159832368], [178.5, 67.192919549013], [178.5, 66.861679265658], [178.5, 66.530438982303], [178.5, 66.199198698949], [178.5, 65.867958415594], [178.5, 65.536718132239], [178.5, 65.205477848884], [178.5, 64.874237565529], [178.5, 64.542997282174], [178.5155544281, 64.542295455933], [178.52130317688, 64.542093276977], [178.52881813049, 64.542001724243], [178.53630638123, 64.542108535767], [178.5437335968, 64.542409896851], [178.55144309998, 64.542940139771], [178.59117698669, 64.546293258667], [178.59763908386, 64.546922683716], [178.6047000885, 64.547800064087], [178.61157798767, 64.548864364624], [178.61824226379, 64.55011177063], [178.62300682068, 64.551145553589], [178.68541145325, 64.56548500061], [178.69239997864, 64.567270278931], [178.69857215881, 64.569120407105], [178.91069221497, 64.637853622437], [178.91586494446, 64.63963508606], [178.94576454163, 64.65065574646], [178.95083427429, 64.65265083313], [178.99497795105, 64.671342849732], [178.99817466736, 64.672758102417], [179.03764152527, 64.691007614136], [179.06450843811, 64.702100753784], [179.14518165588, 64.727827072144], [179.22563743591, 64.748098373413], [179.30258750916, 64.76503944397], [179.37899589539, 64.771841049195], [179.39700126648, 64.770383834839], [179.40405845642, 64.769899368286], [179.45038032532, 64.767339706421], [179.45718193054, 64.767042160034], [179.46475791931, 64.766897201538], [179.47231483459, 64.766946792603], [179.47981452942, 64.767194747925], [179.4872341156, 64.767641067505], [179.49453544617, 64.768278121948], [179.50168800354, 64.769105911255], [179.50866508484, 64.770120620728], [179.51543235779, 64.771318435669], [179.5219669342, 64.772691726685], [179.52823448181, 64.774240493775], [179.53420829773, 64.775953292847], [179.53986930847, 64.777822494507], [179.54518699646, 64.779844284058], [179.55014228821, 64.782007217407], [179.55509376526, 64.784509658814], [179.74448204041, 64.888605117798], [179.74792289734, 64.890600204468], [179.75041007996, 64.892213821411], [179.84702110291, 64.957872390747], [179.85156059265, 64.961400985718], [179.87974739075, 64.986829757691], [179.88275337219, 64.988451004028], [179.89460945129, 64.992109298706], [179.94857978821, 65.006769180298], [180.00893211365, 65.018323898315], [180.05588722229, 65.027311325073], [180.06153297424, 65.028470993042], [180.06792259216, 65.029993057251], [180.0740032196, 65.031675338745], [180.07976722717, 65.033521652222], [180.08519172668, 65.035516738892], [180.09025382996, 65.037652969361], [180.09290122986, 65.038900375366], [180.16881752014, 65.075983047486], [180.24622917175, 65.104097366333], [180.25098228455, 65.104551315308], [180.27151298523, 65.1045627594], [180.27533149719, 65.104589462281], [180.28294181824, 65.104787826538], [180.29047203064, 65.105184555054], [180.29789543152, 65.105772018433], [180.3051738739, 65.106554031372], [180.31228065491, 65.10751914978], [180.31918144226, 65.108671188354], [180.32585334778, 65.1100025177], [180.33226203918, 65.11150932312], [180.3383808136, 65.113180160523], [180.34418678284, 65.11501121521], [180.34955406189, 65.116952896118], [180.38430213928, 65.130418777466], [180.38946342468, 65.132562637329], [180.3941860199, 65.134820938111], [180.3985080719, 65.137205123902], [180.40240287781, 65.139703750611], [180.40529441834, 65.141851425171], [180.42351341248, 65.156354904175], [180.42740440369, 65.159898757935], [180.44798851013, 65.182142257691], [180.46412086487, 65.194501876831], [180.50968742371, 65.221231460571], [180.51369667053, 65.223775863648], [180.5172328949, 65.226419448853], [180.53817558289, 65.243524551392], [180.54110145569, 65.246129989624], [180.54366493225, 65.248903274536], [180.54574775696, 65.251749038696], [180.54734230042, 65.254652023316], [180.54865455627, 65.258527755737], [180.56681632996, 65.359052658081], [180.56985664368, 65.40069770813], [180.57279014587, 65.406167984009], [180.67942237854, 65.456155776978], [180.77366447449, 65.500101089478], [180.77921104431, 65.5030002594], [180.78322029114, 65.50548362732], [180.78678703308, 65.508073806763], [180.78989219666, 65.510759353638], [180.79252433777, 65.513525009156], [180.79467582703, 65.516363143921], [180.79633140564, 65.519258499146], [180.79748344421, 65.522203445435], [180.79813194275, 65.525182723999], [180.79826164246, 65.528345108032], [180.79287147522, 65.624185562134], [180.79252052307, 65.626863479614], [180.7916431427, 65.62986946106], [180.79025840759, 65.632856369019], [180.78837394714, 65.6358127594], [180.78599357605, 65.638723373413], [180.7831325531, 65.641584396362], [180.77980232239, 65.644376754761], [180.776014328, 65.647085189819], [180.77176475525, 65.649717330933], [180.73320579529, 65.671983718872], [180.7285861969, 65.674478530884], [180.72352409363, 65.676881790161], [180.71911048889, 65.678750991822], [180.6958026886, 65.688135147095], [180.68948173523, 65.69048500061], [180.68334007263, 65.692491531372], [180.67689323425, 65.694345474243], [180.67016792297, 65.696039199829], [180.66319084168, 65.697565078735], [180.65599250793, 65.698919296265], [180.64860725403, 65.700094223023], [180.64106178284, 65.701086044312], [180.63339042664, 65.701887130737], [180.62499427795, 65.70253944397], [180.61325263977, 65.705369949341], [180.60315513611, 65.709306716919], [180.36765861511, 65.812871932984], [180.31781196594, 65.881635665894], [180.30382347107, 65.914304733276], [180.2986125946, 65.941385269165], [180.30543708801, 65.98007774353], [180.34328651428, 66.072790145874], [180.35169410706, 66.072134017944], [180.35963630676, 66.071725845337], [180.36877632141, 66.071504592896], [180.40653800964, 66.071229934693], [180.41214561462, 66.071237564087], [180.42006111145, 66.071416854859], [180.42795372009, 66.071794509888], [180.58881187439, 66.081499099732], [180.59643745422, 66.082052230835], [180.6030254364, 66.082693099975], [180.644323349, 66.087182998657], [180.65225028992, 66.088178634644], [180.65946769714, 66.08930015564], [180.66639518738, 66.090589523316], [180.71582984924, 66.100587844849], [180.7225818634, 66.102064132691], [180.7290096283, 66.103708267212], [180.73558998108, 66.105661392212], [180.75535011292, 66.112054824829], [180.76016807556, 66.113706588745], [180.76663017273, 66.116270065308], [180.81099891663, 66.135862350464], [180.81385993958, 66.137178421021], [180.81844902039, 66.139539718628], [180.82259941101, 66.142019271851], [180.82509803772, 66.143716812134], [180.85244560242, 66.163316726685], [180.8877620697, 66.147565841675], [180.89345741272, 66.145193099976], [180.89933204651, 66.143033981323], [180.90554618835, 66.14101600647], [180.91263389587, 66.139001846314], [180.93955039978, 66.131937026978], [180.9452457428, 66.130521774292], [180.95231437683, 66.1289768219], [180.959608078, 66.127603530884], [180.96710014343, 66.12640953064], [180.97475242615, 66.125394821167], [180.98253822327, 66.12456703186], [180.98832511902, 66.124082565308], [181.0226688385, 66.121511459351], [181.03166389465, 66.120992660523], [181.03964042664, 66.1207447052], [181.04761314392, 66.120691299439], [181.05554771423, 66.120832443237], [181.0634098053, 66.121171951294], [181.06938743591, 66.121564865113], [181.12171363831, 66.125520706177], [181.1302280426, 66.126310348511], [181.13768196106, 66.127222061157], [181.14493751526, 66.128316879273], [181.15195655823, 66.129594802857], [181.15871620178, 66.131048202515], [181.16588783264, 66.132860183716], [181.25372886658, 66.156423568726], [181.24773597717, 66.152978897095], [181.22678565979, 66.142423629761], [181.2244052887, 66.141176223755], [181.2202129364, 66.138711929321], [181.21647453308, 66.136137008667], [181.21320533752, 66.133470535279], [181.21042060852, 66.130716323853], [181.20794868469, 66.12762260437], [181.17179298401, 66.074033737183], [181.17038917542, 66.07168006897], [181.16913032532, 66.068742752075], [181.16839027405, 66.065767288208], [181.16818809509, 66.062280654907], [181.16836357117, 66.053659439087], [181.16027641296, 66.055101394654], [181.15281486511, 66.056306838989], [181.14518928528, 66.057329177857], [181.13743019104, 66.058160781861], [181.12957191467, 66.058805465698], [181.12164878845, 66.059255599976], [181.11369132996, 66.059507369995], [181.10573768616, 66.059564590454], [181.09782218933, 66.059423446655], [181.08997917175, 66.059083938599], [181.082239151, 66.058553695679], [181.07464027405, 66.057825088501], [181.06720924377, 66.056909561157], [181.05998039246, 66.055810928345], [181.05298805237, 66.054525375366], [181.04626274109, 66.053068161011], [181.0398235321, 66.051443099976], [181.03371238708, 66.049654006958], [181.02794456482, 66.047708511353], [181.02254676819, 66.045618057251], [181.01754570007, 66.043390274048], [181.01296043396, 66.041036605835], [181.00881004334, 66.038564682007], [181.00427818298, 66.035318374634], [180.9788608551, 66.014215469361], [180.97535133362, 66.010782241821], [180.97310829163, 66.00795173645], [180.97136878967, 66.005056381226], [180.97014045715, 66.002119064331], [180.96943092346, 65.999143600464], [180.9692363739, 65.996145248413], [180.96956443787, 65.993135452271], [180.97041130066, 65.990133285523], [180.9721736908, 65.986452102661], [181.01508140564, 65.917764663697], [181.01859474182, 65.913412094116], [181.07829475403, 65.852338790894], [181.08246803284, 65.848711013794], [181.0847454071, 65.847021102905], [181.19881248474, 65.766042709351], [181.20329475403, 65.763162612915], [181.24555015564, 65.738046646118], [181.25039482117, 65.735376358032], [181.25541496277, 65.732957839966], [181.26082038879, 65.730657577515], [181.26658439636, 65.728487014771], [181.27268409729, 65.726461410522], [181.2795124054, 65.724466323853], [181.31881523132, 65.713838577271], [181.32466697693, 65.712343215943], [181.33160591126, 65.710783004761], [181.33876991272, 65.709398269653], [181.34612846375, 65.70818901062], [181.35364723206, 65.707159042359], [181.36129570007, 65.70631980896], [181.36903953552, 65.705667495728], [181.37685203552, 65.705209732056], [181.3846912384, 65.704946517945], [181.39253044128, 65.704881668091], [181.40033531189, 65.705011367798], [181.40733146667, 65.705297470093], [181.42566871643, 65.706258773804], [181.42587852478, 65.703454971314], [181.36807060242, 65.603395462036], [181.3187084198, 65.56036567688], [181.31556510925, 65.557210922241], [181.31334877014, 65.554384231567], [181.31163215637, 65.551496505737], [181.31041526794, 65.548559188843], [181.30970191956, 65.545587539673], [181.3094997406, 65.542589187622], [181.30980873108, 65.539583206177], [181.31062889099, 65.536581039429], [181.31202507019, 65.533452987671], [181.32622718811, 65.507356643677], [181.32789802551, 65.504674911499], [181.33020973206, 65.501752853394], [181.33300209045, 65.498888015747], [181.33625984192, 65.496088027954], [181.33997535706, 65.493364334107], [181.34412956238, 65.490728378296], [181.3486995697, 65.488195419312], [181.35367393494, 65.485773086548], [181.3590297699, 65.483472824097], [181.3647403717, 65.481302261353], [181.37016487122, 65.479467391968], [181.41948890686, 65.463697433472], [181.42651939392, 65.461610794067], [181.45884132385, 65.452749252319], [181.46469306946, 65.451234817505], [181.47155952454, 65.449674606323], [181.47864723206, 65.448282241821], [181.48129463196, 65.447816848755], [181.5, 65.444623368796], [181.5, 65.766652130619], [181.5, 66.088680892441], [181.5, 66.410709654264], [181.5, 66.732738416086], [181.5, 67.054767177909], [181.5, 67.376795939731], [181.5, 67.698824701554], [181.5, 68.020853463376], [181.5, 68.342882225199], [181.5, 68.664910987021],
                ],
            ],
            [
                [
                    [181.5, 71.604632451164], [181.49779319763, 71.604997634888], [181.4883441925, 71.606287002564], [181.47864723206, 71.607397079468], [181.47227668762, 71.608015060425], [181.29218864441, 71.624181747437], [181.28865242004, 71.624486923218], [181.2778339386, 71.625253677368], [180.98068809509, 71.642576217652], [180.97196006775, 71.643003463745], [180.96167945862, 71.643323898316], [180.9513759613, 71.643449783325], [180.94108772278, 71.64337348938], [180.93086433411, 71.643102645874], [180.92075157166, 71.642637252808], [180.9107875824, 71.641977310181], [180.9010219574, 71.641126632691], [180.89760780334, 71.640775680542], [180.74579048157, 71.624635696411], [180.73967933655, 71.623941421509], [180.73044395447, 71.622709274292], [180.72152900696, 71.621301651001], [180.71296882629, 71.619722366333], [180.70480155945, 71.617979049683], [180.69706535339, 71.616079330445], [180.68979072571, 71.614030838013], [180.68301200867, 71.611841201782], [180.67675209045, 71.609521865845], [180.67104530334, 71.607080459595], [180.66591072083, 71.604532241822], [180.66103935242, 71.601682662964], [180.53443336487, 71.610673904419], [180.4103717804, 71.621305465698], [180.40627479553, 71.621637344361], [180.39616584778, 71.622312545777], [180.3859500885, 71.622797012329], [180.37566947937, 71.623086929321], [180.36536979675, 71.623178482056], [180.35510063171, 71.623071670532], [180.34489631653, 71.622766494751], [180.33481025696, 71.622266769409], [180.32487678528, 71.621572494507], [180.31476402283, 71.620649337769], [180.04162788391, 71.592138290405], [180.03293800354, 71.591135025025], [180.02376747131, 71.589868545532], [180.01492118835, 71.588426589966], [180.00644111633, 71.586812973023], [180.00013542175, 71.585397720337], [179.99070930481, 71.58310508728], [179.9868144989, 71.582002639771], [179.983335495, 71.582048416138], [179.97460365295, 71.582094192505], [179.9643573761, 71.581964492798], [179.95418357849, 71.58164024353], [179.9441280365, 71.581117630005], [179.93423652649, 71.580404281616], [179.93229103088, 71.580232620239], [179.88138008118, 71.575742721558], [179.87417411804, 71.575048446656], [179.86473655701, 71.57395362854], [179.85558891296, 71.572679519654], [179.84676170349, 71.571226119995], [179.84168434143, 71.570283889771], [179.80440711975, 71.563028335571], [179.80103111267, 71.562353134155], [179.79512214661, 71.561067581177], [179.7601108551, 71.553033828736], [179.75142860413, 71.550840377808], [179.74428749084, 71.548749923706], [179.73764610291, 71.5465259552], [179.73153114319, 71.54416847229], [179.72514152527, 71.541288375855], [179.713804245, 71.535593032837], [179.71048164368, 71.533826828003], [179.70609855652, 71.53115272522], [179.70233345032, 71.528390884399], [179.69920158386, 71.525556564331], [179.69671440125, 71.522661209107], [179.69488716126, 71.519720077515], [179.69371986389, 71.516744613648], [179.69322395325, 71.5137424469], [179.69351005554, 71.510190963745], [179.66358757019, 71.501752853394], [179.6585483551, 71.500665664673], [179.65170097351, 71.500707626343], [179.64597892761, 71.50071144104], [179.63577842712, 71.500562667847], [179.62821769714, 71.500322341919], [179.57862663269, 71.498384475708], [179.57606697083, 71.498277664185], [179.56606864929, 71.497732162476], [179.55623435974, 71.496995925903], [179.54660987854, 71.496068954468], [179.53723335266, 71.494958877564], [179.52814292908, 71.493665695191], [179.52431297302, 71.493051528931], [179.48399162292, 71.486352920532], [179.47907066345, 71.485494613648], [179.47068214417, 71.483854293823], [179.46562004089, 71.482740402222], [179.4317150116, 71.474943161011], [179.42879676819, 71.474252700806], [179.42125892639, 71.472295761109], [179.41418647766, 71.470190048218], [179.41053962708, 71.468984603882], [179.34982872009, 71.448118209839], [179.34691429138, 71.44708442688], [179.3408870697, 71.444711685181], [179.33541297913, 71.442228317261], [179.33051490784, 71.43963432312], [179.32621574402, 71.436948776245], [179.32253074646, 71.434175491333], [179.31947898865, 71.43133354187], [179.31725883484, 71.42869758606], [179.2559299469, 71.40392112732], [179.10092353821, 71.341653823853], [179.09197807312, 71.33847618103], [179.08540153503, 71.336278915406], [178.99340248108, 71.311376571655], [178.91235542297, 71.29310798645], [178.90882301331, 71.292284011841], [178.85796928406, 71.280031204224], [178.84950065613, 71.277780532837], [178.84583854675, 71.276689529419], [178.75942802429, 71.249982833862], [178.75617408752, 71.248941421509], [178.74976921082, 71.246675491333], [178.74389457703, 71.24427986145], [178.73756980896, 71.241250991821], [178.72194480896, 71.232793807984], [178.53659629822, 71.126020431519], [178.53157615662, 71.122709274292], [178.5082988739, 71.105215072632], [178.50539207459, 71.102830886841], [178.5, 71.097945296262], [178.5, 70.97958033206], [178.50157737732, 70.977670669556], [178.55842018127, 70.922075271607], [178.60170936584, 70.8821849823], [178.63267707825, 70.831758499146], [178.63263893127, 70.807016372681], [178.6330242157, 70.80385017395], [178.63405418396, 70.800844192505], [178.63646507263, 70.79686164856], [178.64510154724, 70.786245346069], [178.64843177795, 70.782861709595], [178.65196418762, 70.780012130737], [178.65609169006, 70.777235031128], [178.66079521179, 70.774541854859], [178.66605186462, 70.771940231323], [178.67184638977, 70.769441604614], [178.67814445496, 70.767061233521], [178.68492698669, 70.764806747437], [178.69215965271, 70.762685775757], [178.69981575012, 70.760709762573], [178.70785713196, 70.758886337281], [178.71625328064, 70.757223129272], [178.72496986389, 70.755727767944], [178.73396492004, 70.754407882691], [178.74320030212, 70.753263473511], [178.75264549255, 70.752305984497], [178.76224708557, 70.75153541565], [178.7719745636, 70.750959396362], [178.78178215027, 70.750574111938], [178.79162788391, 70.750387191773], [178.80147361755, 70.750394821167], [178.81127357483, 70.750600814819], [178.82098579407, 70.751001358032], [178.8305683136, 70.751592636109], [178.83998680115, 70.752378463745], [178.84919548035, 70.753355026245], [178.85643196106, 70.754270553589], [178.88147544861, 70.757692337036], [178.89101600647, 70.759145736694], [178.89596366882, 70.760011672974], [178.91565513611, 70.763612747192], [178.91906166077, 70.764257431031], [178.92706489563, 70.76593208313], [178.93097877502, 70.766843795777], [178.94707298279, 70.770723342896], [178.95076942444, 70.771646499634], [178.95795249939, 70.773633956909], [178.96468544006, 70.775762557984], [178.96774864197, 70.776830673218], [179.00228309631, 70.789300918579], [179.02178001404, 70.795042037964], [179.07727622986, 70.808725357056], [179.13883018494, 70.821344375611], [179.16423988342, 70.82567024231], [179.30681037903, 70.842660903931], [179.31304740906, 70.841039657593], [179.32106208801, 70.839189529419], [179.32943916321, 70.837499618531], [179.33814048767, 70.835973739624], [179.34712791443, 70.834619522095], [179.35652732849, 70.833429336548], [179.39273262024, 70.829256057739], [179.4018535614, 70.828302383423], [179.41146659851, 70.8274974823], [179.42120933533, 70.82688331604], [179.43104362488, 70.826463699341], [179.4409198761, 70.826238632202], [179.45079994202, 70.826208114624], [179.46064567566, 70.826375961304], [179.47040748596, 70.826738357544], [179.47711372376, 70.827104568482], [179.55331993103, 70.831804275513], [179.55626106262, 70.831995010376], [179.56574821472, 70.832738876343], [179.57599449158, 70.833784103394], [179.73664665222, 70.852468490601], [179.74378013611, 70.853361129761], [179.75256156921, 70.854650497437], [179.76102638245, 70.856115341187], [179.76914024353, 70.857748031616], [179.77567481995, 70.859251022339], [179.80928611755, 70.867433547974], [179.81719779968, 70.869527816773], [179.82507514954, 70.871957778931], [179.83912849426, 70.876733779907], [179.84348106384, 70.878286361695], [179.84913444519, 70.880544662476], [179.87261772156, 70.890584945679], [179.87808036804, 70.893106460572], [179.88152885437, 70.894918441773], [179.91590690613, 70.914011001587], [179.92081260681, 70.917070388794], [179.92444801331, 70.919828414917], [179.92746925354, 70.922658920288], [179.93012428284, 70.925924301148], [179.93148612976, 70.927988052368], [180.00056266785, 70.944162368775], [180.03387641907, 70.951288223267], [180.18207359314, 70.925252914429], [180.33703422546, 70.897420883179], [180.41005134583, 70.878854751587], [180.41782188416, 70.876996994019], [180.42611122131, 70.875257492066], [180.43474006653, 70.873678207398], [180.44366645813, 70.872274398804], [180.45285606384, 70.871042251587], [180.4622631073, 70.869997024536], [180.47184944153, 70.869134902954], [180.48158073425, 70.868463516236], [180.48662376404, 70.86819267273], [180.65665245056, 70.859872817993], [180.66143226624, 70.859663009644], [180.67131233215, 70.859369277954], [180.68120384216, 70.859270095825], [180.69107246399, 70.859369277954], [180.70087623596, 70.859663009644], [180.70561027527, 70.859876632691], [180.7557849884, 70.862390518189], [180.76074409485, 70.862665176392], [180.77028846741, 70.863344192505], [180.7796421051, 70.864213943482], [180.78607368469, 70.864934921265], [180.8090763092, 70.867700576782], [180.81176948547, 70.868032455444], [180.82071113586, 70.869283676148], [181.0401096344, 70.902544021607], [181.04339790344, 70.90305519104], [181.12303733826, 70.915807723999], [181.12816810608, 70.916666030884], [181.13642311096, 70.91823387146], [181.14258003235, 70.919565200806], [181.20101737976, 70.932901382446], [181.23048210144, 70.935884475708], [181.29946708679, 70.941450119019], [181.41908836365, 70.949785232544], [181.5, 70.952091334437], [181.5, 71.2783618928], [181.5, 71.604632451164],
                ],
            ],
        ];
    }
}
