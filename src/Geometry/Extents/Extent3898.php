<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Ukraine - 24°E to 30°E.
 * @internal
 */
class Extent3898
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [24, 47.958767245991], [24.032360076904, 47.955966949463], [24.09617805481, 47.932353973389], [24.12749671936, 47.912010192871], [24.246942520142, 47.903884887695], [24.326942443848, 47.928886413574], [24.4215259552, 47.95777130127], [24.453887939453, 47.958610534668], [24.55638885498, 47.953048706055], [24.572288513184, 47.949478149414], [24.588333129883, 47.945831298828], [24.615413665771, 47.933746337891], [24.670101165772, 47.895481109619], [24.670900344849, 47.866802215576], [24.693885803223, 47.849159240723], [24.716943740845, 47.838607788086], [24.770275115967, 47.82054901123], [24.80277633667, 47.817771911621], [24.82110786438, 47.808395385742], [24.863330841065, 47.759994506836], [24.898712158203, 47.717842102051], [24.928916931152, 47.71314239502], [24.961248397827, 47.720832824707], [24.999505996704, 47.724460601807], [25, 47.724494934082], [25.029716491699, 47.728866577148], [25.049438476562, 47.733329772949], [25.085548400879, 47.744430541992], [25.116939544678, 47.759433746338], [25.153814315796, 47.790126800537], [25.175134658814, 47.82332611084], [25.224435806275, 47.876098632813], [25.246383666992, 47.888736724854], [25.333881378174, 47.916660308838], [25.501659393311, 47.933326721191], [25.524997711182, 47.934707641602], [25.568328857422, 47.935821533203], [25.588607788086, 47.934432983398], [25.646106719971, 47.93359375], [25.78048324585, 47.936859130859], [25.817218780518, 47.955268859863], [25.838327407837, 47.96346282959], [25.922214508057, 47.974708557129], [26.037216186524, 47.983596801758], [26.102710723877, 47.981716156006], [26.11499786377, 47.98136138916], [26.158605575562, 47.985256195068], [26.193466186523, 48.001518249512], [26.272220611572, 48.076103210449], [26.31770324707, 48.176139831543], [26.468883514405, 48.217487335205], [26.507495880127, 48.213466644287], [26.53083229065, 48.208187103271], [26.567775726318, 48.22248840332], [26.634994506836, 48.257164001465], [26.637825012207, 48.273609161377], [26.651662826538, 48.300827026367], [26.702075958252, 48.339988708496], [26.808330535889, 48.333053588867], [26.981105804443, 48.357772827149], [27.23943901062, 48.368324279785], [27.454162597656, 48.439712524414], [27.519519805908, 48.46549987793], [27.547218322754, 48.468322753906], [27.763193130493, 48.449577331543], [27.866245269775, 48.400550842285], [27.88027381897, 48.381099700928], [27.890968322754, 48.364158630371], [27.912773132324, 48.348045349121], [27.932216644287, 48.337493896484], [27.955827713013, 48.32735824585], [28.014720916748, 48.316665649414], [28.074926376343, 48.311103820801], [28.093677520752, 48.291172027588], [28.086107254028, 48.242595672607], [28.213050842285, 48.206520080567], [28.23582649231, 48.206798553467], [28.259998321533, 48.220542907715], [28.290554046631, 48.236381530762], [28.347009658814, 48.242042541504], [28.370481491089, 48.221794128418], [28.367496490479, 48.19095993042], [28.388607025146, 48.163879394531], [28.436660766602, 48.14582824707], [28.501941680908, 48.134162902832], [28.557704925537, 48.161796569824], [28.64249420166, 48.153602600098], [28.737495422363, 48.138603210449], [28.807359695435, 48.125408172607], [28.828330993653, 48.109714508057], [28.879810333252, 48.010452270508], [28.882217407227, 48.005554199219], [28.900407791138, 47.988590240479], [28.961656570435, 47.946647644043], [28.982629776001, 47.936920166016], [29.016525268555, 47.9323387146], [29.043048858643, 47.93567276001], [29.0611743927, 47.951713562012], [29.073394775391, 47.976989746094], [29.103466033936, 47.986511230469], [29.144855499268, 47.983520507813], [29.175550460816, 47.954700469971], [29.257495880127, 47.766376495361], [29.19540977478, 47.609153747559], [29.160131454468, 47.581661224365], [29.135375976562, 47.549083709717], [29.14291381836, 47.511795043945], [29.190097808838, 47.439533233643], [29.22304725647, 47.448871612549], [29.24561882019, 47.45756149292], [29.299438476563, 47.422210693359], [29.35888671875, 47.378318786621], [29.380968093872, 47.356105804443], [29.380271911621, 47.329082489014], [29.413953781128, 47.291103363037], [29.478536605835, 47.297206878662], [29.490131378174, 47.327632904053], [29.501871109009, 47.344501495361], [29.567008972168, 47.337699890137], [29.590549468994, 47.310264587402], [29.599227905273, 47.279087066651], [29.572214126587, 47.142768859863], [29.592493057251, 47.023185729981], [29.574232101441, 46.947418212891], [29.737491607666, 46.890266418457], [29.867008209229, 46.861312866211], [29.944299697876, 46.818256378174], [29.971660614014, 46.741928100586], [29.965026855469, 46.570129394531], [29.91615486145, 46.558567047119], [29.899436950684, 46.53519821167], [29.928607940674, 46.505271911621], [30, 46.460959119405], [30, 46.666666666667], [30, 46.833333333333], [30, 47], [30, 47.166666666667], [30, 47.333333333333], [30, 47.5], [30, 47.666666666667], [30, 47.833333333333], [30, 48], [30, 48.166666666667], [30, 48.333333333334], [30, 48.5], [30, 48.666666666667], [30, 48.833333333333], [30, 49], [30, 49.166666666667], [30, 49.333333333334], [30, 49.5], [30, 49.666666666667], [30, 49.833333333333], [30, 50], [30, 50.166666666667], [30, 50.333333333334], [30, 50.5], [30, 50.666666666667], [30, 50.833333333333], [30, 51], [30, 51.166666666667], [30, 51.333333333334], [30, 51.48798405622], [29.983329772949, 51.486381530762], [29.91166305542, 51.472763061523], [29.881664276123, 51.459716796875], [29.834442138672, 51.441932678223], [29.762775421143, 51.440822601318], [29.738222122193, 51.457141876221], [29.718952178955, 51.491031646729], [29.675827026367, 51.499298095703], [29.6240234375, 51.490684509277], [29.409717559815, 51.402770996094], [29.353836059571, 51.37532043457], [29.342220306396, 51.373184204102], [29.31201171875, 51.387630462647], [29.249578475952, 51.502285003662], [29.241521835327, 51.540966033936], [29.181385040283, 51.618049621582], [29.163188934326, 51.627769470215], [29.118053436279, 51.636940002442], [29.083955764771, 51.637977600098], [29.05249786377, 51.631103515625], [28.83694267273, 51.550273895264], [28.810554504395, 51.534439086914], [28.79305267334, 51.516105651856], [28.766038894654, 51.481380462646], [28.769443511963, 51.448043823242], [28.757150650025, 51.415649414063], [28.666524887085, 51.446655273438], [28.652914047241, 51.464714050293], [28.637218475342, 51.509998321533], [28.632772445679, 51.543601989746], [28.628259658813, 51.564853668213], [28.490550994873, 51.581108093262], [28.468189239502, 51.577911376953], [28.433330535889, 51.566101074219], [28.319442749024, 51.589157104492], [28.256732940674, 51.659294128418], [28.215690612793, 51.655685424805], [28.182008743286, 51.637771606445], [28.157497406006, 51.609992980957], [28.138189315796, 51.58304977417], [28.109163284302, 51.569442749023], [28.079023361206, 51.564437866211], [28.006107330322, 51.562210083008], [27.983745574951, 51.565826416016], [27.955272674561, 51.574996948242], [27.925619125366, 51.591659545898], [27.89582824707, 51.613052368164], [27.865968704224, 51.621795654297], [27.832080841065, 51.609161376953], [27.813886642456, 51.592212677002], [27.814231872559, 51.568325042725], [27.816802978516, 51.533256530762], [27.747911453247, 51.4665184021], [27.681663513184, 51.493186950684], [27.709758758545, 51.550506591797], [27.724472045899, 51.581657409668], [27.687217712403, 51.601387023926], [27.597217559814, 51.615829467773], [27.51197052002, 51.628868103027], [27.453187942505, 51.602771759033], [27.416664123535, 51.59748840332], [27.282566070557, 51.59818649292], [27.199371337891, 51.675132751465], [27.204578399658, 51.717491149902], [27.202564239502, 51.751312255859], [27.169996261597, 51.76416015625], [27.080829620361, 51.771102905273], [27.019302368164, 51.768119812012], [26.97110748291, 51.752220153809], [26.948051452637, 51.748878479004], [26.926523208618, 51.750411987305], [26.894996643066, 51.755554199219], [26.820831298828, 51.772491455078], [26.772499084473, 51.785827636719], [26.722496032715, 51.802490234375], [26.672496795654, 51.814994812012], [26.642356872559, 51.820690155029], [26.608051300049, 51.821105957031], [26.571109771729, 51.818328857422], [26.530830383301, 51.813323974609], [26.498603820801, 51.811935424805], [26.457218170166, 51.812767028809], [26.439994812012, 51.823051452637], [26.435548782349, 51.856174468994], [26.364162445069, 51.85888671875], [26.338607788086, 51.857498168945], [26.296663284302, 51.853603363037], [26.207771301269, 51.858329772949], [26.175411224365, 51.862911224365], [26.144439697266, 51.87845993042], [26.026943206787, 51.910270690918], [25.818328857422, 51.935821533203], [25.770414352417, 51.938182830811], [25.733604431152, 51.927356719971], [25.685966491699, 51.922351837158], [25.598331451416, 51.918884277344], [25.562774658203, 51.919990539551], [25.546672821045, 51.922134399414], [25.439994812012, 51.922218322754], [25.352079391479, 51.928607940674], [25.312217712402, 51.939712524414], [25.269580841065, 51.953605651855], [25.240966796875, 51.959854125977], [25.173051834107, 51.959300994873], [25.093608856201, 51.94221496582], [25.051940917969, 51.93221282959], [24.991939544678, 51.911933898926], [24.897495269776, 51.900688171387], [24.740550994873, 51.889717102051], [24.700271606445, 51.893882751465], [24.394231796265, 51.884716033936], [24.314580917359, 51.82402420044], [24.306108474732, 51.803047180176], [24.297357559204, 51.764575958252], [24.283399581909, 51.741172790527], [24.070552825928, 51.624992370606], [24.04305267334, 51.610275268555], [24, 51.593607001402], [24, 51.333333333333], [24, 51.166666666667], [24, 51], [24, 50.922765408328], [24.034301757813, 50.898254394531], [24.061496734619, 50.887523651123], [24.090274810791, 50.881935119629], [24.143468856812, 50.859577178955], [24.131036758423, 50.83818435669], [24.076942443848, 50.829437255859], [24.05249786377, 50.831382751465], [24.021894454956, 50.8317527771], [24, 50.83058958954], [24, 50.752607232285], [24.014720916748, 50.739990234375], [24.072219848633, 50.695823669434], [24.107219696045, 50.633605957031], [24.108413696289, 50.625900268555], [24.111385345459, 50.566940307617], [24.00221824646, 50.414436340332], [24, 50.413448279064], [24, 50.333333333333], [24, 50.166666666667], [24, 50], [24, 49.833333333333], [24, 49.666666666667], [24, 49.5], [24, 49.333333333333], [24, 49.166666666667], [24, 49], [24, 48.833333333333], [24, 48.666666666667], [24, 48.5], [24, 48.333333333333], [24, 48.166666666667], [24, 48], [24, 47.958767245991],
                ],
            ],
            [
                [
                    [30, 46.378875732422], [29.996383666993, 46.378875732422], [29.966659545899, 46.37971496582], [29.92332649231, 46.38200378418], [29.866382598877, 46.346374511719], [29.825271606445, 46.368598937988], [29.734436035156, 46.440956115723], [29.662212371826, 46.379432678223], [29.633605957032, 46.369709014893], [29.602077484131, 46.376789093018], [29.494436264038, 46.442279815674], [29.499437332154, 46.484809875488], [29.350826263428, 46.469985961914], [29.305410385132, 46.428245544434], [29.307353973389, 46.404224395752], [29.23832321167, 46.368316650391], [29.217906951904, 46.367275238037], [29.202423095703, 46.383110046387], [29.219854354859, 46.406795501709], [29.228328704834, 46.484710693359], [29.223188400269, 46.519496917725], [29.203296661377, 46.544967651367], [29.173881530762, 46.53971862793], [29.038885116577, 46.496658325195], [28.99443435669, 46.478324890137], [28.976383209228, 46.46817779541], [28.933950424195, 46.429988861084], [28.949996948242, 46.289428710938], [29.021659851075, 46.217624664307], [29.040134429932, 46.195537567139], [28.968255996704, 46.006103515625], [28.896663665771, 45.990539550781], [28.829437255859, 45.978324890137], [28.801105499268, 45.972480773926], [28.763362884521, 45.961864471436], [28.750480651855, 45.926376342773], [28.766731262207, 45.86283493042], [28.679960250855, 45.779674530029], [28.597005844116, 45.768043518066], [28.524440765381, 45.711097717285], [28.490686416626, 45.665756225586], [28.524787902832, 45.646995544434], [28.530551910401, 45.531661987305], [28.515829086304, 45.514919281006], [28.483045578003, 45.506519317627], [28.399576187134, 45.511798858643], [28.366382598877, 45.517768859863], [28.345550537109, 45.523040771484], [28.316383361816, 45.527488708496], [28.288885116577, 45.525959014893], [28.266525268555, 45.520126342773], [28.246940612793, 45.51110458374], [28.232355117798, 45.495403289795], [28.215410232544, 45.463459014893], [28.214839935303, 45.44864654541], [28.226978302002, 45.449378967285], [28.279232025147, 45.428943634033], [28.285377502441, 45.395195007324], [28.29916381836, 45.362632751465], [28.317842483521, 45.337142944336], [28.343326568604, 45.315536499024], [28.375827789307, 45.30054473877], [28.574714660645, 45.24275970459], [28.700805664063, 45.22008895874], [28.797601699829, 45.237941741943], [28.848609924317, 45.301658630371], [28.9680519104, 45.321105957031], [29.221662521362, 45.425830841065], [29.321523666382, 45.439022064209], [29.41138458252, 45.435821533203], [29.510828018189, 45.410682678223], [29.580688476563, 45.389015197754], [29.603332519531, 45.376937866211], [29.640970230103, 45.346382141113], [29.654998779297, 45.327766418457], [29.669023513794, 45.294574737549], [29.672220230103, 45.272209167481], [29.664331436157, 45.211803436279], [29.668188095093, 45.21012878418], [29.670000527926, 45.209499158015], [29.672439527941, 45.209499158015], [29.674140527991, 45.207859157994], [29.67744052804, 45.207859157994], [29.678310527952, 45.208690157907], [29.679195528016, 45.208757158002], [29.839597764008, 45.155713773724], [30, 45.102670389447], [30, 45.333333333333], [30, 45.5], [30, 45.666666666667], [30, 45.833333333333], [30, 46], [30, 46.166666666667], [30, 46.333333333333], [30, 46.378875732422],
                ],
            ],
        ];
    }
}