<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Europe-FSU/Ukraine - 22.5°E to 25.5°E.
 * @internal
 */
class Extent3907
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [25.5, 51.922171116813], [25.439994812012, 51.922218322754], [25.352079391479, 51.928607940674], [25.312217712402, 51.939712524414], [25.269580841065, 51.953605651855], [25.240966796875, 51.959854125977], [25.173051834107, 51.959300994873], [25.093608856201, 51.94221496582], [25.051940917969, 51.93221282959], [24.991939544678, 51.911933898926], [24.897495269776, 51.900688171387], [24.740550994873, 51.889717102051], [24.700271606445, 51.893882751465], [24.394231796265, 51.884716033936], [24.314580917359, 51.82402420044], [24.306108474732, 51.803047180176], [24.297357559204, 51.764575958252], [24.283399581909, 51.741172790527], [24.070552825928, 51.624992370606], [24.04305267334, 51.610275268555], [23.998191833496, 51.592906951904], [23.963466644287, 51.585548400879], [23.938398361206, 51.596103668213], [23.922912597656, 51.619850158691], [23.901592254639, 51.634159088135], [23.751314163208, 51.651794433594], [23.649995803833, 51.636173248291], [23.613292694092, 51.606727600098], [23.627775192261, 51.57971572876], [23.64107131958, 51.523498535156], [23.604633331299, 51.527694702148], [23.614086151123, 51.498626708984], [23.643634796143, 51.485012054443], [23.692771911621, 51.402351379395], [23.681245803833, 51.369297027588], [23.683883666992, 51.288604736328], [23.731937408447, 51.214714050293], [23.756664276123, 51.199432373047], [23.811107635498, 51.168884277344], [23.904996871948, 51.068054199219], [23.931665420532, 50.994071960449], [23.965133666992, 50.95040512085], [23.988327026367, 50.931106567383], [24.034301757813, 50.898254394531], [24.061496734619, 50.887523651123], [24.090274810791, 50.881935119629], [24.143468856812, 50.859577178955], [24.131036758423, 50.83818435669], [24.076942443848, 50.829437255859], [24.05249786377, 50.831382751465], [24.021894454956, 50.8317527771], [23.980966567993, 50.829578399658], [23.958396911621, 50.815200805664], [23.954385757447, 50.791702270508], [24.014720916748, 50.739990234375], [24.072219848633, 50.695823669434], [24.107219696045, 50.633605957031], [24.108413696289, 50.625900268555], [24.111385345459, 50.566940307617], [24.00221824646, 50.414436340332], [23.98318862915, 50.405960083008], [23.929439544678, 50.403602600098], [23.881496429443, 50.405410766602], [23.846942901611, 50.40665435791], [23.814441680908, 50.405822753906], [23.791942596436, 50.402488708496], [23.755832672119, 50.394439697266], [23.717590332031, 50.383838653565], [23.697111129761, 50.370113372803], [23.684175491333, 50.333698272705], [23.591106414795, 50.269157409668], [23.568885803223, 50.255828857422], [23.540275573731, 50.242778778076], [23.496105194092, 50.220825195313], [23.378330230713, 50.149719238281], [23.342823028565, 50.127490997315], [23.324440002441, 50.115272521973], [23.303607940674, 50.100830078125], [23.228189468384, 50.046661376953], [23.146106719971, 49.983047485352], [23.110828399658, 49.95499420166], [22.945413589478, 49.814994812012], [22.779998779297, 49.674995422363], [22.717216491699, 49.604438781738], [22.686067581177, 49.577095031738], [22.678466796875, 49.569438934326], [22.656869888306, 49.529853820801], [22.694438934326, 49.450828552246], [22.732788085938, 49.397209167481], [22.75881767273, 49.28589630127], [22.726661682129, 49.217765808106], [22.703813552857, 49.169887542725], [22.778053283692, 49.150543212891], [22.85277557373, 49.105827331543], [22.876522064209, 49.087421417236], [22.86350440979, 49.049831390381], [22.886074066162, 49.002914428711], [22.863050460815, 49.003047943115], [22.737773895264, 49.047218322754], [22.594146728516, 49.091533660889], [22.568470001221, 49.087909698486], [22.558052062988, 49.079437255859], [22.551662445068, 49.039436340332], [22.534858703613, 48.994853973389], [22.5, 48.973304594648], [22.5, 48.730703191615], [22.5, 48.488101788582], [22.5, 48.245500385548], [22.574718475342, 48.187210083008], [22.597774505615, 48.14582824707], [22.605239868164, 48.116477966309], [22.625719070435, 48.100345611572], [22.647035598755, 48.094314575195], [22.679786682129, 48.094993591309], [22.737773895264, 48.114440917969], [22.790273666382, 48.11665725708], [22.846542358399, 48.083160400391], [22.883224487305, 48.040481567383], [22.85916519165, 47.99388885498], [22.894804000855, 47.954540252686], [22.896110534668, 47.953887939453], [22.929996490479, 47.960548400879], [23.04333114624, 47.993049621582], [23.087774276734, 48.013469696045], [23.10221862793, 48.034297943115], [23.112495422363, 48.062770843506], [23.125621795654, 48.089366912842], [23.15235710144, 48.105690002441], [23.174163818359, 48.108325958252], [23.260692596436, 48.090129852295], [23.279165267944, 48.075275421143], [23.299095153809, 48.044857025147], [23.356105804444, 48.021102905273], [23.410274505615, 48.000549316406], [23.502983093262, 47.982460021973], [23.514266967773, 47.989337921143], [23.566097259522, 47.999992370605], [23.823886871338, 47.966941833496], [23.969718933105, 47.961387634277], [24.032360076904, 47.955966949463], [24.09617805481, 47.932353973389], [24.12749671936, 47.912010192871], [24.246942520142, 47.903884887695], [24.326942443848, 47.928886413574], [24.4215259552, 47.95777130127], [24.453887939453, 47.958610534668], [24.55638885498, 47.953048706055], [24.572288513184, 47.949478149414], [24.588333129883, 47.945831298828], [24.615413665771, 47.933746337891], [24.670101165772, 47.895481109619], [24.670900344849, 47.866802215576], [24.693885803223, 47.849159240723], [24.716943740845, 47.838607788086], [24.770275115967, 47.82054901123], [24.80277633667, 47.817771911621], [24.82110786438, 47.808395385742], [24.863330841065, 47.759994506836], [24.898712158203, 47.717842102051], [24.928916931152, 47.71314239502], [24.961248397827, 47.720832824707], [24.999505996704, 47.724460601807], [25, 47.724494934082], [25.029716491699, 47.728866577148], [25.049438476562, 47.733329772949], [25.085548400879, 47.744430541992], [25.116939544678, 47.759433746338], [25.153814315796, 47.790126800537], [25.175134658814, 47.82332611084], [25.224435806275, 47.876098632813], [25.246383666992, 47.888736724854], [25.333881378174, 47.916660308838], [25.5, 47.933161883545], [25.5, 48.265579319651], [25.5, 48.597996755756], [25.5, 48.930414191862], [25.5, 49.262831627968], [25.5, 49.595249064073], [25.5, 49.927666500179], [25.5, 50.260083936285], [25.5, 50.59250137239], [25.5, 50.924918808496], [25.5, 51.257336244602], [25.5, 51.589753680707], [25.5, 51.922171116813],
                ],
            ],
        ];
    }
}
