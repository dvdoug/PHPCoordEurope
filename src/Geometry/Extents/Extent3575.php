<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Germany - East Germany - west of 12°E.
 * @internal
 */
class Extent3575
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [12, 54.22610693981], [11.972143713502, 54.222657131944], [11.738487049173, 54.206060343578], [11.67893292947, 54.202939795979], [11.672512129601, 54.202418808916], [11.667064163679, 54.201740556731], [11.661704011818, 54.200854453171], [11.656454698776, 54.199764305727], [11.65133876818, 54.198474798191], [11.64637818488, 54.19699147033], [11.641594239896, 54.195320693851], [11.63700745841, 54.193469644782], [11.632637511197, 54.191446272369], [11.628503129888, 54.189259264646], [11.623761476198, 54.186346276684], [11.592971367257, 54.159543797793], [11.562440470424, 54.137539652193], [11.553303661464, 54.135516609882], [11.539779808317, 54.130403395681], [11.526062421335, 54.124480882922], [11.51541597396, 54.12000335932], [11.508706514145, 54.116192399515], [11.503742647634, 54.112341708574], [11.499987905924, 54.107255694669], [11.497330339052, 54.103755075076], [11.495433889277, 54.097882646526], [11.493962318896, 54.096117715681], [11.490779867085, 54.091266265109], [11.488428415151, 54.088010158196], [11.482972094823, 54.082755626838], [11.479830508978, 54.078387024588], [11.476146078267, 54.075270599088], [11.471579393583, 54.073413553146], [11.46722958346, 54.071384469107], [11.463115292765, 54.069192059413], [11.459254146953, 54.066845736339], [11.45566267647, 54.064355571278], [11.451996397899, 54.062811795609], [11.448269444691, 54.061505969436], [11.442335570122, 54.058650629265], [11.42519659048, 54.050403976365], [11.38137799401, 54.038100888332], [11.357939826715, 54.032310945702], [11.340774118622, 54.027040853114], [11.329982503532, 54.016413998749], [11.321612248428, 54.00359203997], [11.317376474166, 53.982984146658], [11.306862350749, 53.983190137972], [11.257660644158, 54.036116317936], [11.254621213213, 54.039099628676], [11.251449620278, 54.041782824688], [11.24798659287, 54.044338198649], [11.24424694235, 54.046754784451], [11.240246675492, 54.049022209864], [11.236002926054, 54.051130741368], [11.231533881352, 54.053071326243], [11.226858704122, 54.054835631741], [11.221997450029, 54.056416081164], [11.216970981172, 54.057805886675], [11.211800875971, 54.058999078716], [11.206509335833, 54.059990531878], [11.201119089017, 54.060775987128], [11.195653292122, 54.061352070276], [11.190135429641, 54.061716306608], [11.186213926272, 54.061845135471], [11.096478881704, 54.063529783801], [11.090115648675, 54.06347300219], [11.084584609324, 54.06319203341], [11.079097119275, 54.062698502789], [11.073115166029, 54.061907727534], [11.033185474043, 54.055558612972], [11.028980011257, 54.054819511426], [11.023765173305, 54.053702986193], [11.018548093506, 54.052348619468], [10.976038933099, 54.040224761695], [10.973503464101, 54.039469759649], [10.930103061457, 54.026045529068], [10.904222057957, 53.977706760373], [10.897429252059, 53.966627578182], [10.896505136695, 53.95973814536], [10.897963477991, 53.951567370033], [10.890751121359, 53.9365508575], [10.864905385211, 53.915669539089], [10.818534851074, 53.89005279541], [10.77499961853, 53.874443054199], [10.768888473511, 53.871109008789], [10.766666412354, 53.86888885498], [10.762498855591, 53.864166259766], [10.756942749023, 53.856941223145], [10.755277633667, 53.854438781738], [10.753887176514, 53.851661682129], [10.752777099609, 53.848609924316], [10.750831604004, 53.842498779297], [10.750555038452, 53.839164733887], [10.751110076904, 53.836387634277], [10.768054962158, 53.77416229248], [10.811109542847, 53.724159240723], [10.817220687866, 53.717498779297], [10.846109390259, 53.703605651855], [10.856109619141, 53.698883056641], [10.861387252808, 53.698883056641], [10.86555480957, 53.699714660645], [10.869720458984, 53.700553894043], [10.878610610962, 53.701942443848], [10.883333206177, 53.702499389648], [10.888332366943, 53.702499389648], [10.890832901001, 53.702499389648], [10.894721984863, 53.702499389648], [10.89999961853, 53.701942443848], [10.905277252197, 53.701385498047], [10.909721374512, 53.700553894043], [10.914164543152, 53.699440002441], [10.921388626099, 53.696937561035], [10.942499160767, 53.681663513184], [10.946664810181, 53.677215576172], [10.95583152771, 53.6552734375], [10.956388473511, 53.652770996094], [10.956665039062, 53.650276184082], [10.956285476685, 53.647636413574], [10.929164886475, 53.580276489258], [10.921943664551, 53.573883056641], [10.918888092041, 53.572494506836], [10.914999008179, 53.571105957031], [10.880277633667, 53.570831298828], [10.845275878906, 53.572776794434], [10.816387176514, 53.513610839844], [10.762777328491, 53.488609313965], [10.759721755981, 53.48722076416], [10.754999160767, 53.486663818359], [10.750276565552, 53.486106872559], [10.705554962158, 53.479995727539], [10.645832061768, 53.456382751465], [10.640554428101, 53.452499389648], [10.638053894043, 53.450553894043], [10.634998321533, 53.445274353027], [10.633054733276, 53.439163208008], [10.628332138062, 53.419998168945], [10.626943588257, 53.413604736328], [10.626388549805, 53.409996032715], [10.626110076904, 53.407493591309], [10.626388549805, 53.404159545898], [10.626943588257, 53.401382446289], [10.627777099609, 53.39860534668], [10.628610610962, 53.39582824707], [10.628332138062, 53.39249420166], [10.627777099609, 53.38916015625], [10.626388549805, 53.386383056641], [10.601110458374, 53.365829467773], [10.613609313965, 53.36833190918], [10.617776870728, 53.369163513184], [10.62194442749, 53.369995117188], [10.626388549805, 53.370552062988], [10.631109237671, 53.371109008789], [10.636388778687, 53.371109008789], [10.690277099609, 53.369438171387], [10.696109771729, 53.369163513184], [10.704999923706, 53.367218017578], [10.70888710022, 53.366104125977], [10.718053817749, 53.361106872559], [10.723331451416, 53.357498168945], [10.728054046631, 53.353332519531], [10.729999542236, 53.351387023926], [10.731388092041, 53.34888458252], [10.732221603394, 53.316108703613], [10.731943130493, 53.312774658203], [10.733331680298, 53.310272216797], [10.734722137451, 53.307777404785], [10.73722076416, 53.30583190918], [10.742498397827, 53.302215576172], [10.806943893433, 53.27082824707], [11.002222061157, 53.189437866211], [11.117498397827, 53.156944274902], [11.119998931885, 53.158882141113], [11.122776031494, 53.160827636719], [11.131387710571, 53.165832519531], [11.138610839844, 53.168327331543], [11.14333152771, 53.168609619141], [11.148611068726, 53.168609619141], [11.153610229492, 53.16805267334], [11.158054351807, 53.167221069336], [11.161943435669, 53.166107177734], [11.230833053589, 53.145553588867], [11.264999389648, 53.124992370605], [11.412221908569, 53.076942443848], [11.42166519165, 53.077774047852], [11.436109542847, 53.078605651855], [11.445833206177, 53.079162597656], [11.451665878296, 53.078887939453], [11.459999084473, 53.078048706055], [11.464443206787, 53.077217102051], [11.468887329102, 53.076385498047], [11.581314086914, 53.037033081055], [11.582311630249, 53.036880493164], [11.582221984863, 53.033050537109], [11.579999923706, 53.02693939209], [11.578609466553, 53.02416229248], [11.562498092651, 53.005554199219], [11.418609619141, 52.909164428711], [11.412498474121, 52.906105041504], [11.408887863159, 52.904998779297], [11.33749961853, 52.888610839844], [11.317220687866, 52.884162902832], [11.297498703003, 52.880554199219], [11.26222038269, 52.874717712402], [11.256666183472, 52.874992370605], [11.252222061157, 52.876106262207], [11.248332977295, 52.877220153809], [11.245832443237, 52.879165649414], [11.24388885498, 52.881103515625], [11.243055343628, 52.884162902832], [11.241664886475, 52.886383056641], [11.238609313965, 52.888053894043], [11.214166641235, 52.898048400879], [11.089443206787, 52.914993286133], [11.084444046021, 52.915550231934], [11.044443130493, 52.915550231934], [11.039164543152, 52.915550231934], [11.008333206177, 52.911109924316], [11.004720687866, 52.909996032715], [11.001665115356, 52.908332824707], [10.999165534973, 52.906387329102], [10.997220993042, 52.904159545898], [10.995553970337, 52.901382446289], [10.99361038208, 52.89527130127], [10.979442596436, 52.877777099609], [10.951387405396, 52.856384277344], [10.945276260376, 52.853332519531], [10.941110610962, 52.852493286133], [10.874165534973, 52.853881835938], [10.799444198608, 52.849159240723], [10.795276641846, 52.848327636719], [10.770554542542, 52.843330383301], [10.762498855591, 52.841659545898], [10.759443283081, 52.839996337891], [10.757499694824, 52.837776184082], [10.756109237671, 52.789443969727], [10.756387710571, 52.786109924316], [10.757221221924, 52.783332824707], [10.79972076416, 52.718048095703], [10.801109313965, 52.716110229492], [10.878053665161, 52.663055419922], [10.919998168945, 52.620552062988], [10.929164886475, 52.612495422363], [10.946664810181, 52.586387634277], [10.984998703003, 52.498054504395], [10.980554580688, 52.498886108398], [10.976110458374, 52.499717712402], [10.971109390259, 52.499717712402], [10.966388702393, 52.499160766602], [10.96249961853, 52.498329162598], [10.955275535583, 52.496109008789], [10.952220916748, 52.494438171387], [10.94972038269, 52.492492675781], [10.947776794434, 52.490272521973], [10.938888549805, 52.475555419922], [10.938888549805, 52.463050842285], [10.939165115356, 52.459999084473], [10.940280914307, 52.455871582031], [10.994443893433, 52.413887023926], [11.041110992432, 52.213882446289], [11.019444465637, 52.186103820801], [11.059720993042, 52.174163818359], [11.063055038452, 52.172492980957], [11.064998626709, 52.170272827148], [11.065277099609, 52.164161682129], [11.064165115356, 52.161109924316], [11.0622215271, 52.155830383301], [11.060832977295, 52.153053283691], [11.058886528015, 52.150833129883], [10.96861076355, 52.063049316406], [10.966110229492, 52.061103820801], [10.963054656982, 52.059440612793], [10.959999084473, 52.058052062988], [10.955554962158, 52.057495117188], [10.950553894043, 52.057495117188], [10.945554733276, 52.057495117188], [10.726387023926, 52.05249786377], [10.721387863159, 52.052215576172], [10.693332672119, 52.050277709961], [10.666666030884, 52.046943664551], [10.662498474121, 52.046104431152], [10.658609390259, 52.045272827148], [10.654998779297, 52.044166564941], [10.651388168335, 52.04305267334], [10.586387634277, 52.009994506836], [10.620277404785, 51.946105957031], [10.638332366943, 51.907775878906], [10.641942977905, 51.896942138672], [10.642221450806, 51.893608093262], [10.642499923706, 51.887496948242], [10.641387939453, 51.884437561035], [10.629165649414, 51.870826721191], [10.607498168945, 51.856941223145], [10.604442596436, 51.855270385742], [10.600831985474, 51.854164123535], [10.627222061157, 51.74333190918], [10.664164543152, 51.688049316406], [10.670555114746, 51.665550231934], [10.697347640991, 51.637107849121], [10.693054199219, 51.636665344238], [10.647220611572, 51.621109008789], [10.643888473511, 51.619720458984], [10.640832901001, 51.61833190918], [10.628053665161, 51.604438781738], [10.628332138062, 51.601387023926], [10.508333206177, 51.559440612793], [10.365833282471, 51.541381835938], [10.363887786865, 51.539161682129], [10.295276641846, 51.491386413574], [10.291666030884, 51.48999786377], [10.138053894043, 51.431663513184], [10.075553894043, 51.418884277344], [10.009164810181, 51.416938781738], [10.008888244629, 51.413604736328], [10.006942749023, 51.411109924316], [9.9899997711182, 51.398048400879], [9.9491653442383, 51.381660461426], [9.9311103820801, 51.373886108398], [9.9283332824707, 51.372215270996], [9.9238872528076, 51.368049621582], [9.9230537414551, 51.36499786377], [9.9222221374512, 51.358055114746], [9.9230537414551, 51.355270385742], [9.9291648864746, 51.339164733887], [9.9741649627686, 51.288055419922], [10.072496414185, 51.224159240723], [10.164443969727, 51.14860534668], [10.124998092651, 51.144439697266], [10.12194442749, 51.142776489258], [10.121110916138, 51.139717102051], [10.139165878296, 51.05638885498], [10.141109466553, 51.054443359375], [10.171388626099, 51.04638671875], [10.175554275513, 51.045555114746], [10.12389755249, 50.997764587402], [10.045555114746, 50.941368103027], [9.9419441223145, 50.79638671875], [9.9369430541992, 50.744163513184], [10.008604049683, 50.676483154297], [10.072219848633, 50.617088317871], [10.048324584961, 50.582901000977], [10.043846130371, 50.52759552002], [10.044393539429, 50.521492004395], [10.044668197632, 50.518432617188], [10.046335220337, 50.516212463379], [10.050226211548, 50.515098571777], [10.054117202759, 50.515922546387], [10.054943084717, 50.516319274902], [10.095832824707, 50.54638671875], [10.128610610962, 50.558052062988], [10.195554733276, 50.551940917969], [10.199165344238, 50.550827026367], [10.329442977905, 50.49055480957], [10.331944465637, 50.488609313965], [10.364721298218, 50.443885803223], [10.392775535583, 50.41194152832], [10.49333190918, 50.354721069336], [10.49694442749, 50.353607177734], [10.603054046631, 50.237777709961], [10.604442596436, 50.235275268555], [10.609998703003, 50.228607177734], [10.611944198608, 50.226661682129], [10.614999771118, 50.224716186523], [10.619165420532, 50.22388458252], [10.719444274902, 50.204719543457], [10.723331451416, 50.205551147461], [10.725831985474, 50.207496643066], [10.727220535278, 50.210273742676], [10.726943969727, 50.213333129883], [10.726664543152, 50.214721679688], [10.76861000061, 50.292221069336], [10.714998245239, 50.317497253418], [10.713333129883, 50.319442749023], [10.71249961853, 50.322219848633], [10.713333129883, 50.351387023926], [10.71527671814, 50.357498168945], [10.717222213745, 50.359992980957], [10.80944442749, 50.381660461426], [10.858888626099, 50.388885498047], [10.943332672119, 50.387214660645], [11.077499389648, 50.35277557373], [11.132776260376, 50.306663513184], [11.131942749023, 50.303604125977], [11.131942749023, 50.300552368164], [11.132776260376, 50.297492980957], [11.134721755981, 50.295555114746], [11.136943817139, 50.293609619141], [11.139444351196, 50.291664123535], [11.144998550415, 50.288330078125], [11.148611068726, 50.287216186523], [11.182777404785, 50.277770996094], [11.24361038208, 50.268882751465], [11.248055458069, 50.269439697266], [11.251388549805, 50.270553588867], [11.253610610962, 50.272499084473], [11.255554199219, 50.274719238281], [11.257221221924, 50.277496337891], [11.268054962158, 50.30305480957], [11.28111076355, 50.355270385742], [11.27777671814, 50.373603820801], [11.274442672729, 50.378326416016], [11.272220611572, 50.380271911621], [11.248609542847, 50.470832824707], [11.248609542847, 50.474159240723], [11.249443054199, 50.47721862793], [11.349721908569, 50.521659851074], [11.354166030884, 50.522216796875], [11.413887023926, 50.518608093262], [11.418609619141, 50.518051147461], [11.422222137451, 50.516662597656], [11.425277709961, 50.515274047852], [11.427221298218, 50.513053894043], [11.436388015747, 50.502220153809], [11.439443588257, 50.497497558594], [11.439165115356, 50.494163513184], [11.436109542847, 50.492492675781], [11.432777404785, 50.491386413574], [11.429443359375, 50.490272521973], [11.422498703003, 50.487777709961], [11.420555114746, 50.485549926758], [11.416666030884, 50.461936950684], [11.416666030884, 50.446105957031], [11.418054580688, 50.444442749023], [11.420555114746, 50.442497253418], [11.524166107178, 50.376937866211], [11.528610229492, 50.376663208008], [11.820833206177, 50.388885498047], [11.828609466553, 50.390548706055], [11.869165420532, 50.401107788086], [11.872499465942, 50.402221679688], [11.905277252197, 50.414993286133], [11.911109924316, 50.418327331543], [11.914443969727, 50.419441223145], [11.918333053589, 50.420272827148], [11.922777175903, 50.419998168945], [11.935832977295, 50.41805267334], [11.985277175903, 50.384162902832], [11.985553741455, 50.380828857422], [11.983331680298, 50.378608703613], [11.981388092041, 50.376388549805], [11.978610992432, 50.371109008789], [11.981943130493, 50.350830078125], [11.983888626099, 50.348609924316], [12, 50.342822918256], [12, 50.666666666667], [12, 50.833333333333], [12, 51], [12, 51.166666666667], [12, 51.333333333334], [12, 51.5], [12, 51.666666666667], [12, 51.833333333333], [12, 52], [12, 52.166666666667], [12, 52.333333333334], [12, 52.5], [12, 52.666666666667], [12, 52.833333333333], [12, 53], [12, 53.166666666667], [12, 53.333333333334], [12, 53.5], [12, 53.666666666667], [12, 53.833333333333], [12, 54], [12, 54.22610693981],
                ],
            ],
        ];
    }
}