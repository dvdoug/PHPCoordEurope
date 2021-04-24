<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Ukraine - 34.5°E to 37.5°E.
 * @internal
 */
class Extent3912
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [37.5, 50.385009832215], [37.461936950684, 50.436168670654], [37.418601989746, 50.438041687012], [37.322631835938, 50.428745269775], [37.292495727539, 50.412212371826], [37.27082824707, 50.393882751465], [37.24568939209, 50.379852294922], [37.216934204102, 50.36971282959], [37.130546569824, 50.348327636719], [37.059230804444, 50.337905883789], [37.016799926758, 50.346935272217], [36.975959777832, 50.349155426026], [36.891799926758, 50.337352752685], [36.810272216797, 50.314155578613], [36.717491149903, 50.274711608887], [36.693462371826, 50.262493133545], [36.669990539551, 50.243606567383], [36.651447296143, 50.219436645508], [36.608463287354, 50.213047027588], [36.578464508057, 50.217350006104], [36.554054260254, 50.230995178223], [36.559886932373, 50.269367218018], [36.477210998535, 50.301383972168], [36.419990539551, 50.31388092041], [36.375129699707, 50.295825958252], [36.353744506836, 50.287216186523], [36.327079772949, 50.280826568604], [36.300132751465, 50.283603668213], [36.279159545898, 50.294441223145], [36.215827941894, 50.354995727539], [36.199573516846, 50.3733253479], [36.18839263916, 50.398323059082], [36.148460388184, 50.422283172607], [36.091934204102, 50.431106567383], [36.059432983398, 50.434989929199], [36.007774353028, 50.439155578613], [35.97859954834, 50.438323974609], [35.927490234375, 50.435821533203], [35.894157409668, 50.433326721191], [35.858051300049, 50.429714202881], [35.827632904053, 50.423049926758], [35.743186950684, 50.385272979736], [35.693092346192, 50.347412109375], [35.681381225586, 50.346935272217], [35.644714355469, 50.354164123535], [35.597900390625, 50.373603820801], [35.458282470703, 50.488067626953], [35.441055297852, 50.511970520019], [35.399314880371, 50.641590118408], [35.48607635498, 50.67862701416], [35.460865020752, 50.763072967529], [35.357791900635, 50.928581237793], [35.305770874024, 50.960334777832], [35.309661865234, 50.982551574707], [35.344947814941, 51.006439208984], [35.370502471924, 51.02135848999], [35.368831634522, 51.042129516602], [35.293544769287, 51.059925079346], [35.244094848633, 51.050910949707], [35.222145080567, 51.048416137695], [35.195060729981, 51.048274993896], [35.165748596192, 51.058555603027], [35.150749206543, 51.073703765869], [35.119636535645, 51.151763916016], [35.12491607666, 51.178573608399], [35.119010925293, 51.199264526367], [35.076446533203, 51.220649719238], [34.974990844727, 51.223602294922], [34.94429397583, 51.21603012085], [34.920269012451, 51.197906494141], [34.827217102051, 51.178047180176], [34.80110168457, 51.173606872559], [34.766662597657, 51.171379089355], [34.734992980957, 51.172492980957], [34.708602905274, 51.174163818359], [34.672351837158, 51.178462982178], [34.55054473877, 51.233329772949], [34.5, 51.243987588822], [34.5, 50.923907572388], [34.5, 50.603827555953], [34.5, 50.283747539519], [34.5, 49.963667523085], [34.5, 49.64358750665], [34.5, 49.323507490216], [34.5, 49.003427473781], [34.5, 48.683347457347], [34.5, 48.363267440913], [34.5, 48.043187424478], [34.5, 47.723107408044], [34.5, 47.403027391609], [34.5, 47.082947375175], [34.5, 46.762867358741], [34.5, 46.442787342306], [34.5, 46.122707325872], [34.5, 45.802627309438], [34.5, 45.482547293003], [34.5, 45.162467276569], [34.5, 44.842387260134], [34.5, 44.5223072437], [34.5, 44.202227227266], [34.5, 43.882147210831], [34.5, 43.562067194397], [34.5, 43.241987177962], [34.75173613325, 43.290379172472], [35.0034722665, 43.338771166981], [35.25520839975, 43.387163161491], [35.506944533, 43.435555156], [35.829100033509, 43.435025656002], [36.151255534017, 43.434496156004], [36.182918533999, 43.527811156003], [36.231762533984, 43.668438156004], [36.242034534012, 43.694632156011], [36.264897911073, 43.739855167013], [36.346424534007, 43.901112157], [36.44174003401, 44.107659656993], [36.537055534012, 44.314207156985], [36.56455153401, 44.373352157016], [36.601851188596, 44.436325678461], [36.693883534004, 44.591705157003], [36.653690534004, 44.73615715701], [36.639918533997, 44.796936157991], [36.625870533984, 44.871370157984], [36.614821534, 44.931101158017], [36.614394534004, 44.93359415801], [36.607888534018, 44.982904157992], [36.60778653401, 44.983603157986], [36.607158534002, 44.985720158007], [36.602010534003, 44.996387158006], [36.587779534013, 45.029152158011], [36.583089533994, 45.040219157991], [36.581785533999, 45.043195158014], [36.571723534001, 45.065392157985], [36.568429534005, 45.072450158019], [36.558338533988, 45.093407158005], [36.555222533996, 45.10121015801], [36.554297534017, 45.103260158014], [36.549063534003, 45.115338157989], [36.548098533984, 45.117411158], [36.546760533999, 45.120090158014], [36.535840534001, 45.138417158005], [36.532800534005, 45.142471158001], [36.531458534012, 45.14434815801], [36.526004533987, 45.151727157987], [36.523346534013, 45.153958158002], [36.516856533984, 45.159155157983], [36.504586534014, 45.195587157989], [36.504658534003, 45.195759157982], [36.505360534003, 45.197689158018], [36.505531533994, 45.197752157989], [36.535012533984, 45.207241158011], [36.54674653401, 45.208863158017], [36.554780534009, 45.209709157994], [36.557045534014, 45.209909158004], [36.559905534001, 45.210383158015], [36.565344533997, 45.21118915799], [36.567318534005, 45.211594158019], [36.579900534012, 45.21370515799], [36.595316533993, 45.217144158003], [36.598699534011, 45.21815115799], [36.607900534004, 45.220598158008], [36.608732533991, 45.220958157987], [36.619415533983, 45.225197158001], [36.620849534004, 45.225862158005], [36.620968534007, 45.225988157985], [36.621181534005, 45.226280157984], [36.621450533997, 45.226698158], [36.622529534009, 45.22816615801], [36.623211534008, 45.229201158013], [36.625716533988, 45.233494158018], [36.629496534019, 45.238912158012], [36.636885534015, 45.251119158009], [36.639651534008, 45.255101158017], [36.645391533984, 45.261352157999], [36.640924534019, 45.263022157986], [36.633577533991, 45.265235158004], [36.633105533983, 45.265390158001], [36.624090534011, 45.268999158004], [36.603465533988, 45.277383158], [36.599555534007, 45.279353158001], [36.597776533999, 45.280292158007], [36.591715534006, 45.285440158006], [36.589774533986, 45.287863158015], [36.588442534013, 45.289435158001], [36.583660534005, 45.296398158002], [36.575384533991, 45.309226157995], [36.576817534009, 45.310408158017], [36.588300534002, 45.316218158015], [36.592602533987, 45.318212157986], [36.594549534019, 45.319216158004], [36.600749534016, 45.321663157985], [36.605356533987, 45.323277158013], [36.61307153401, 45.326904158013], [36.617887534008, 45.328870158006], [36.622126533984, 45.332229158015], [36.622583534001, 45.332562158018], [36.623199533985, 45.332977157991], [36.630678534004, 45.338150158001], [36.635495534004, 45.341221158018], [36.638531533992, 45.342060158019], [36.638966534004, 45.342370158015], [36.646498534012, 45.347353157997], [36.646913533985, 45.347736157984], [36.648504534007, 45.349259157987], [36.650756533987, 45.351235157999], [36.653786534001, 45.354840157994], [36.667437534001, 45.360728157991], [36.669112533997, 45.361428157987], [36.671836533985, 45.363717158001], [36.67869453401, 45.370184157987], [36.682871534017, 45.373068157983], [36.685985534005, 45.376571158006], [36.686137533997, 45.376753158018], [36.688234534017, 45.380076157996], [36.688444534008, 45.380524157995], [36.691043534018, 45.385539158001], [36.692902533993, 45.391380157982], [36.693303534014, 45.394168158018], [36.694200534014, 45.399119158014], [36.694200534014, 45.399409158009], [36.694016533998, 45.402636157989], [36.694119534008, 45.40867315801], [36.694102982833, 45.408911780059], [36.693811534016, 45.41319715801], [36.693717533985, 45.413824158015], [36.69288153399, 45.42054915801], [36.692340534, 45.423073157988], [36.689899533994, 45.431217158011], [36.690608534007, 45.434456158014], [36.691152534003, 45.438298158014], [36.692207534006, 45.444691158007], [36.692824533993, 45.449322157987], [36.692899533987, 45.450144157993], [36.692899533987, 45.462876157988], [36.692009534001, 45.470733157984], [36.691918534013, 45.472377157995], [36.692133534014, 45.478035158], [36.692144533998, 45.478215158009], [36.692183533998, 45.513207157983], [36.690800534001, 45.566377157999], [36.690800534001, 45.573723157988], [36.691579533999, 45.657202158011], [36.691172534004, 45.708326157993], [36.690456534015, 45.753976157987], [36.682421534014, 45.892987158989], [36.686683533997, 45.962910159008], [36.691072533999, 46.030392158983], [36.691328534004, 46.034080158987], [36.697940534005, 46.034283159002], [36.757498534006, 46.036653158984], [36.865363534009, 46.04043015901], [36.950136534008, 46.043677158991], [37.013256533995, 46.071015158984], [37.067689534998, 46.094697158998], [37.088599535006, 46.103824158998], [37.113842534984, 46.114740158989], [37.140082535003, 46.126109158988], [37.153497535, 46.137300158983], [37.188696534997, 46.166731158988], [37.189729534996, 46.167635159002], [37.199411535013, 46.194821159003], [37.206587535012, 46.214835159013], [37.207838535018, 46.218303159007], [37.209097535001, 46.221753159004], [37.212702534996, 46.231569159016], [37.216874534993, 46.243662158983], [37.218057535018, 46.247136158988], [37.219522534985, 46.251489158996], [37.219525534991, 46.251496159009], [37.223097534997, 46.262584158993], [37.223568535003, 46.264065158991], [37.226817534988, 46.274026158983], [37.230953534991, 46.287885159007], [37.239111535003, 46.315616159007], [37.241229534988, 46.323736158984], [37.245655534987, 46.341316159001], [37.25119553499, 46.365375158989], [37.258660534982, 46.401489158984], [37.263307534993, 46.424665158999], [37.263417535017, 46.425329159001], [37.267705535012, 46.444944158994], [37.268228535005, 46.447745159018], [37.26833753499, 46.448341159001], [37.271700535007, 46.465330159007], [37.272278534993, 46.468826159017], [37.271352535012, 46.48082515899], [37.270884535013, 46.492734159015], [37.269760534989, 46.515882159014], [37.296697534999, 46.548082158982], [37.397393037085, 46.665031315245], [37.422250535002, 46.693901158992], [37.445936534985, 46.720701159001], [37.457109534983, 46.732945158996], [37.457973534994, 46.733883158999], [37.481391534988, 46.758581159017], [37.489029535012, 46.766371158996], [37.5, 46.777372048368], [37.5, 47.105339119627], [37.5, 47.433306190886], [37.5, 47.761273262145], [37.5, 48.089240333403], [37.5, 48.417207404662], [37.5, 48.745174475921], [37.5, 49.07314154718], [37.5, 49.401108618439], [37.5, 49.729075689697], [37.5, 50.057042760956], [37.5, 50.385009832215],
                ],
            ],
        ];
    }
}