<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Georgia - onshore.
 * @internal
 */
class Extent3251
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [40.518592834473, 43.511657714844], [40.488883972168, 43.517768859863], [40.352699279785, 43.559432983398], [40.324432373047, 43.569709777832], [40.294715881348, 43.576095581055], [40.253387451172, 43.58251953125], [40.211376190186, 43.584716796875], [40.169986724854, 43.581241607666], [40.126655578613, 43.572219848633], [40.098461151123, 43.562351226807], [40.081237792969, 43.550968170166], [40.021102905274, 43.444152832031], [40.009162902832, 43.411933898926], [40.002967834473, 43.379264831543], [40.002766536996, 43.377831156032], [40.001199536969, 43.359882156003], [39.999930536964, 43.347991156023], [39.995952861748, 43.329737883243], [40.031234323808, 43.323189572205], [40.082858082399, 43.308547715248], [40.171469373513, 43.278183776227], [40.194370155179, 43.251513317275], [40.21061231136, 43.225935347088], [40.213309204627, 43.222254864783], [40.215708801138, 43.219504284668], [40.218200565495, 43.217009403448], [40.306935374915, 43.133501696061], [40.309871375993, 43.130924791337], [40.312950079547, 43.128556035975], [40.31623223018, 43.126336111032], [40.319703772163, 43.124274503628], [40.323349845131, 43.122380022877], [40.327154847628, 43.120660762492], [40.331102503713, 43.11912406645], [40.335175932355, 43.117776497846], [40.340452484908, 43.116358557143], [40.641077174956, 43.04504169627], [40.644247417915, 43.044345249717], [40.648582915365, 43.043584113452], [40.652973017866, 43.043029817243], [40.658053900472, 43.042653921716], [40.719287490076, 43.040181588092], [40.785419047094, 43.030811399324], [40.808046323005, 43.025159535302], [40.815311853656, 43.021769098938], [40.820867507919, 43.017040209195], [40.849814346587, 42.978336876455], [40.853173579484, 42.974412697354], [40.882063526727, 42.944757772319], [40.8856449193, 42.941493724522], [40.888692113532, 42.93910999434], [40.891943435535, 42.93687389454], [40.895384960801, 42.934794981584], [40.899001956663, 42.932882138729], [40.902778945302, 42.931143538311], [40.906699769847, 42.929586607071], [40.910747663266, 42.928217994662], [40.914905319786, 42.927043545472], [40.919154968517, 42.926068273872], [40.92347844899, 42.925296343], [40.927857288291, 42.924731047151], [40.932272779462, 42.92437479787], [40.936706060863, 42.924229113775], [40.941924414204, 42.92433170399], [40.967898050312, 42.925768730336], [40.970737829912, 42.925970239838], [40.975111285389, 42.926455257007], [40.979427229497, 42.927147921861], [40.983667226108, 42.92804527356], [40.988746956433, 42.929425572586], [41.011835470018, 42.904504797028], [41.018807497205, 42.88082921054], [41.032478620948, 42.835809863359], [41.034155108739, 42.831581453125], [41.035727320483, 42.828543163222], [41.037566752909, 42.825583084323], [41.039665493824, 42.822713880146], [41.042014525195, 42.819947823437], [41.044852925491, 42.817061145052], [41.106030562979, 42.759846502038], [41.108346707743, 42.757791842613], [41.111377236293, 42.755402737036], [41.114611690157, 42.753160826746], [41.118036216778, 42.751075693162], [41.121636155949, 42.74915624624], [41.125396102518, 42.747410686639], [41.129299972179, 42.745846470928], [41.133331070063, 42.74447027996], [41.137472161853, 42.743287990567], [41.141705547112, 42.742304650666], [41.146013134529, 42.741524457897], [41.150376518759, 42.740950741876], [41.154777058552, 42.740585950125], [41.159195955835, 42.740431637751], [41.163614335426, 42.740488460906], [41.168013325062, 42.740756174055], [41.172374135387, 42.741233631068], [41.177397058647, 42.742057736759], [41.20705653578, 42.7480378859], [41.210882778419, 42.748561770169], [41.346528371265, 42.712154430173], [41.385392393405, 42.699168152293], [41.392270836754, 42.695351722421], [41.39834872527, 42.689168561076], [41.408699216899, 42.6741780725], [41.4204890409, 42.653486316756], [41.435230931725, 42.613569156333], [41.457822010842, 42.544883254074], [41.45824655415, 42.521333481672], [41.458396240396, 42.518637625995], [41.461780757416, 42.484000282322], [41.462333695193, 42.480344128029], [41.470112615098, 42.445356852138], [41.481597179643, 42.397572138034], [41.482714794199, 42.393925338042], [41.48398589217, 42.390818360573], [41.485529299509, 42.387775502709], [41.487338368107, 42.384809784963], [41.489405316079, 42.381933895488], [41.49147455688, 42.379437304258], [41.532419462301, 42.333069314474], [41.568007575692, 42.259593248799], [41.580730541656, 42.212494670209], [41.588746119035, 42.17491661398], [41.586208159842, 42.152225542408], [41.586020217246, 42.148627091634], [41.586156705953, 42.145398701551], [41.586579007976, 42.142179948462], [41.587385902452, 42.13862133594], [41.593755360461, 42.11645144396], [41.594540942647, 42.114019753681], [41.595804232105, 42.11091211037], [41.597897138126, 42.106917494183], [41.696115230719, 41.948306843093], [41.708249732136, 41.882624424122], [41.709504581512, 41.843806793264], [41.708073813982, 41.826567594307], [41.668747735496, 41.746054633976], [41.631766814216, 41.703417511574], [41.607932236099, 41.685973718428], [41.587715743042, 41.679421720437], [41.582933760589, 41.677632104397], [41.579246597243, 41.67597923855], [41.575717561392, 41.674148353163], [41.572361784783, 41.672147304454], [41.569193651672, 41.669984678369], [41.566226736983, 41.667669753527], [41.56347374803, 41.665212461169], [41.560946470067, 41.662623342329], [41.558490564219, 41.659700381966], [41.48118159714, 41.557462512848], [41.478728365971, 41.554782555094], [41.476380560631, 41.552060850889], [41.474023282131, 41.549111888023], [41.472086517222, 41.546510241604], [41.468211672563, 41.541425877996], [41.531558990479, 41.523876190185], [41.569152832031, 41.518043518067], [41.724708557129, 41.492492675781], [41.759719848633, 41.468597412109], [41.830127716065, 41.430126190186], [41.883041381836, 41.458320617676], [41.910129547119, 41.488250732422], [41.958461761475, 41.516799926758], [41.979438781738, 41.518043518067], [42.097770690918, 41.507499694824], [42.174713134766, 41.507499694824], [42.280132293701, 41.489570617676], [42.311935424805, 41.476661682129], [42.366935729981, 41.460273742676], [42.455268859864, 41.434707641602], [42.472213745117, 41.433326721192], [42.48332977295, 41.438331604004], [42.557907104492, 41.501796722412], [42.590938568115, 41.578754425049], [42.604160308838, 41.584720611572], [42.651664733887, 41.592765808106], [42.681388854981, 41.594718933106], [42.831020355225, 41.582416534424], [42.892768859863, 41.506942749024], [43.016105651856, 41.393325805664], [43.03971862793, 41.374160766602], [43.12638092041, 41.319999694824], [43.233596801758, 41.190269470215], [43.349708557129, 41.201934814453], [43.378463745117, 41.20166015625], [43.429992675781, 41.183460235596], [43.455478668213, 41.168041229248], [43.474365234375, 41.137977600098], [43.46076965332, 41.11296081543], [43.54638671875, 41.134994506836], [43.570133209229, 41.135547637939], [43.599708557129, 41.12971496582], [43.637496948242, 41.123046875], [43.734428405762, 41.11360168457], [43.756244659424, 41.11262512207], [43.791374206543, 41.118667602539], [43.833606719971, 41.145545959473], [43.856517791748, 41.160125732422], [43.892486572266, 41.165405273438], [43.99275970459, 41.16414642334], [44.122764587403, 41.181930541992], [44.144706726074, 41.184989929199], [44.172698974609, 41.19686126709], [44.248870849609, 41.223594665527], [44.340545654297, 41.212493896484], [44.429992675781, 41.19221496582], [44.484153747559, 41.187759399414], [44.566234588623, 41.185264587402], [44.72859954834, 41.212211608887], [44.824714660645, 41.212493896484], [44.848876953125, 41.213050842285], [44.86971282959, 41.216648101807], [44.97859954834, 41.270263671875], [45.022941589356, 41.297050476074], [45.051383972168, 41.316375732422], [45.141372680664, 41.376655578613], [45.186103820801, 41.404983520508], [45.260967254639, 41.449295043945], [45.285404205323, 41.457210540772], [45.306655883789, 41.461097717285], [45.341587066651, 41.460964202881], [45.611106872559, 41.381927490234], [45.716926574707, 41.348594665528], [45.71297454834, 41.311790466309], [45.711170196533, 41.287216186524], [45.748046875, 41.260276794434], [45.804569244385, 41.230400085449], [45.850822448731, 41.212768554688], [45.86971282959, 41.206092834473], [45.895545959473, 41.197486877441], [45.922492980957, 41.189155578614], [45.966102600098, 41.179153442383], [45.996940612793, 41.173606872559], [46.039573669434, 41.170272827149], [46.062202453614, 41.171928405762], [46.091522216797, 41.178874969482], [46.135612487793, 41.202556610107], [46.239990234375, 41.204708099365], [46.274013519287, 41.178318023682], [46.294158935547, 41.16276550293], [46.340827941895, 41.129989624023], [46.35971069336, 41.116935729981], [46.378318786621, 41.104156494141], [46.492763519287, 41.05179977417], [46.514713287354, 41.048042297363], [46.6224899292, 41.100547790527], [46.666652679443, 41.150543212891], [46.697204589844, 41.211654663086], [46.710815429688, 41.258323669434], [46.689636230469, 41.317348480225], [46.62109375, 41.36499786377], [46.593322753906, 41.379432678223], [46.553039550782, 41.386932373047], [46.502632141114, 41.396240234375], [46.331932067871, 41.483463287354], [46.233329772949, 41.598594665527], [46.216102600098, 41.624984741211], [46.19609451294, 41.677490234375], [46.194427490235, 41.698043823242], [46.198043823242, 41.724990844727], [46.209709167481, 41.746650695801], [46.230461120606, 41.762470245361], [46.256378173828, 41.764572143555], [46.29082107544, 41.757774353027], [46.324783325195, 41.756450653076], [46.350547790528, 41.773315429688], [46.414707183838, 41.831798553467], [46.435825347901, 41.861797332764], [46.451751708984, 41.89705657959], [46.446380615235, 41.904426574707], [46.42582321167, 41.922630310059], [46.400119781494, 41.938041687012], [46.239223480225, 42.000965118408], [46.054153442383, 42.024993896484], [45.986930847168, 42.028602600098], [45.821027755738, 42.114295959473], [45.655124664307, 42.199989318848], [45.637973785401, 42.220191955566], [45.650684356689, 42.251937866211], [45.689712524414, 42.319152832031], [45.707496643067, 42.356101989746], [45.757629394531, 42.465259552002], [45.760276794434, 42.477912902832], [45.750827789307, 42.487758636475], [45.727626800537, 42.504852294922], [45.700538635254, 42.516105651856], [45.576095581055, 42.546096801758], [45.552772521973, 42.550262451172], [45.526931762695, 42.550819396973], [45.488185882569, 42.547634124756], [45.43221282959, 42.537490844727], [45.36763381958, 42.527210235596], [45.342208862305, 42.540679931641], [45.333606719971, 42.558738708496], [45.319431304932, 42.578048706055], [45.241935729981, 42.650825500488], [45.212211608887, 42.67610168457], [45.16512298584, 42.703327178955], [45.143043518066, 42.708599090576], [45.120269775391, 42.706939697266], [45.09147644043, 42.697422027588], [45.066165924073, 42.69352722168], [45.04582977295, 42.696090698242], [45.009990692139, 42.7145652771], [44.974292755127, 42.736938476563], [44.954986572266, 42.75040435791], [44.931095123291, 42.76110458374], [44.893741607666, 42.761665344238], [44.859573364258, 42.746788024903], [44.808326721192, 42.665267944336], [44.765548706055, 42.670539855957], [44.750961303711, 42.692909240723], [44.705268859863, 42.727210998535], [44.67818069458, 42.741790771484], [44.648880004883, 42.748596191406], [44.638259887696, 42.748809814453], [44.629432678223, 42.752220153809], [44.593879699707, 42.758323669434], [44.558048248291, 42.759716033936], [44.527206420899, 42.756652832031], [44.499717712403, 42.750831604004], [44.369430541992, 42.708045959473], [44.241096496582, 42.655956268311], [44.223182678223, 42.63846206665], [44.19520187378, 42.627052307129], [43.911933898926, 42.583320617676], [43.777278900146, 42.604015350342], [43.73966217041, 42.649570465088], [43.762771606446, 42.673049926758], [43.806098937989, 42.702209472656], [43.83394241333, 42.729225158691], [43.829154968262, 42.749366760254], [43.756385803223, 42.775825500488], [43.70471572876, 42.780815124512], [43.67082977295, 42.79109954834], [43.641170501709, 42.809989929199], [43.621517181397, 42.833183288574], [43.597763061524, 42.846515655518], [43.560546875, 42.860824584961], [43.532493591309, 42.868316650391], [43.447204589844, 42.889152526856], [43.392890930176, 42.900123596191], [43.377761840821, 42.900535583496], [43.207218170166, 42.934017181396], [43.183868408203, 42.944427490234], [43.139293670655, 42.966789245606], [43.010471343994, 43.063667297363], [42.948867797852, 43.121650695801], [42.855197906494, 43.177761077881], [42.769439697266, 43.185821533203], [42.694988250733, 43.180263519287], [42.669986724854, 43.159286499024], [42.645820617676, 43.144714355469], [42.61943435669, 43.145408630371], [42.532970428467, 43.181930541992], [42.483879089356, 43.219429016113], [42.460266113281, 43.229984283447], [42.424156188965, 43.238460540771], [42.379848480225, 43.239013671875], [42.363883972168, 43.237487792969], [42.270820617676, 43.23804473877], [42.189022064209, 43.236377716065], [42.169151306153, 43.23095703125], [42.11117553711, 43.197280883789], [42.03109741211, 43.187484741211], [41.814291000366, 43.204496383667], [41.597484588623, 43.221508026123], [41.564994812012, 43.232200622559], [41.435546875, 43.296096801758], [41.213607788086, 43.378875732422], [41.193046569824, 43.384719848633], [41.16805267334, 43.387214660645], [41.126796722412, 43.38415145874], [41.068878173828, 43.372905731201], [41.040962219239, 43.376098632813], [41.014015197754, 43.390682220459], [40.961097717285, 43.423606872559], [40.89026260376, 43.465400695801], [40.863883972168, 43.477210998535], [40.834159851074, 43.483329772949], [40.810821533203, 43.486930847168], [40.743740081787, 43.506935119629], [40.718879699707, 43.51957321167], [40.69596862793, 43.543014526367], [40.680404663086, 43.546241760254], [40.64310836792, 43.543880462647], [40.608184814453, 43.528602600098], [40.577209472657, 43.512287139893], [40.54305267334, 43.508605957031], [40.518592834473, 43.511657714844],
                ],
            ],
        ];
    }
}