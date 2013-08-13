<?php

require '../../Slim/Slim.php';

$app = new Slim();

$app->get('/documents', 'getDocuments');

$app->run();

/*
Array
(
    [limit] => 100
    [q] => {"endpoint": baltimore, "status": "open"}
    [skip] => 0
    [_apikey] => i0h95kvp3dyx14hvw9bl								// 
    [callback] => jQuery17209444936546909065_1376344768549
    [_] => 1376344768844
)


$boundary = array();
$boundary[] = (object) array("boundary" => array(-76.57475551671982,39.32890972670375,-76.5615863172544,39.33902199126728), 'name' => 'Arcadia');
$boundary[] = (object) array("boundary" => array(-76.64250893368751,39.3051257852024,-76.63266438553426,39.31034482466768), 'name' => 'Druid Heights');
$boundary = (object) array("boundary" => array(-76.57475551671982,39.32890972670375,-76.5615863172544,39.33902199126728), 'name' => 'Arcadia');
$data['boundaries'] = array($boundary) ;
$service = (object) array('service_name' => 'Pothole', 'service_code' => '4e39a3abd3e2c20ed8000016');
$data['services'] = array( $service );
*/
function getDocuments() {
$data = array('_id' => 'baltimore');
$boundary = (object) array("boundary" => array(-76.57475551671982,39.32890972670375,-76.5615863172544,39.33902199126728), 'name' => 'Arcadia');

$boundaries = array();
$services = array();
//$boundaries[] = (object) array("boundary" => array(-76.57475551671982,39.32890972670375,-76.5615863172544,39.33902199126728), 'name' => 'Arcadia');
//$boundaries[] = (object) array("boundary" => array(-76.64250893368751,39.3051257852024,-76.63266438553426,39.31034482466768), 'name' => 'Druid Heights');

//$service = (object) array('service_name' => 'Pothole', 'service_code' => '4e39a3abd3e2c20ed8000016');
$boundaries[] = (object) array("boundary" => array(-76.57475551672,39.328909726704,-76.561586317254,39.339021991267), "name" => "Arcadia");
$boundaries[] = (object) array("boundary" => array(-76.642508933688,39.305125785202,-76.632664385534,39.310344824668), "name" => "Druid Heights");
$boundaries[] = (object) array("boundary" => array(-76.660871146731,39.297598173727,-76.647736690811,39.305227794875), "name" => "Bridgeview/Greenlawn");
$boundaries[] = (object) array("boundary" => array(-76.587069657824,39.276307919981,-76.566544444707,39.286616059748), "name" => "Canton");
$boundaries[] = (object) array("boundary" => array(-76.643850972285,39.25423891306,-76.625215922341,39.269221517249), "name" => "Westport");
$boundaries[] = (object) array("boundary" => array(-76.569653232519,39.290191749161,-76.562655593769,39.297063189112), "name" => "Baltimore Highlands");
$boundaries[] = (object) array("boundary" => array(-76.582019396118,39.289943289083,-76.569261265778,39.294884350301), "name" => "Patterson Park Neighborhood");
$boundaries[] = (object) array("boundary" => array(-76.594998485535,39.304289259212,-76.582666707028,39.312654724333), "name" => "Broadway East");
$boundaries[] = (object) array("boundary" => array(-76.589308920527,39.289416737658,-76.584559690577,39.2943052398), "name" => "Butcher's Hill");
$boundaries[] = (object) array("boundary" => array(-76.597731987413,39.213242590158,-76.586087000248,39.233776420165), "name" => "Curtis Bay");
$boundaries[] = (object) array("boundary" => array(-76.623856395997,39.287463714006,-76.604757739851,39.295145224819), "name" => "Downtown");
$boundaries[] = (object) array("boundary" => array(-76.600746116955,39.278862102046,-76.586688444031,39.289261801259), "name" => "Fells Point");
$boundaries[] = (object) array("boundary" => array(-76.693961905046,39.26809146552,-76.671580768927,39.288172997378), "name" => "Irvington");
$boundaries[] = (object) array("boundary" => array(-76.616291513978,39.32832495648,-76.609431830182,39.332669945687), "name" => "Oakenshawe");
$boundaries[] = (object) array("boundary" => array(-76.619238827417,39.278904698542,-76.612721427648,39.284370731184), "name" => "Otterbein");
$boundaries[] = (object) array("boundary" => array(-76.62753713091,39.281256649773,-76.623302350327,39.286210496507), "name" => "Ridgely's Delight");
$boundaries[] = (object) array("boundary" => array(-76.648154582124,39.298734829556,-76.634498532362,39.310009260068), "name" => "Sandtown-Winchester");
$boundaries[] = (object) array("boundary" => array(-76.66982948256,39.299255253868,-76.660663967976,39.304361618761), "name" => "Winchester");
$boundaries[] = (object) array("boundary" => array(-76.623582833834,39.284077700706,-76.613322682062,39.287752621851), "name" => "Downtown West");
$boundaries[] = (object) array("boundary" => array(-76.613528793025,39.323358563499,-76.609405961538,39.328491053588), "name" => "Abell");
$boundaries[] = (object) array("boundary" => array(-76.689403984424,39.284129770179,-76.672501444085,39.293949737476), "name" => "Allendale");
$boundaries[] = (object) array("boundary" => array(-76.615388827847,39.31122619848,-76.609455383546,39.318120149347), "name" => "Barclay");
$boundaries[] = (object) array("boundary" => array(-76.60947572526,39.318120149347,-76.59788405588,39.328606999833), "name" => "Better Waverly");
$boundaries[] = (object) array("boundary" => array(-76.617831772339,39.221345507854,-76.593407124587,39.24089275329), "name" => "Brooklyn");
$boundaries[] = (object) array("boundary" => array(-76.621801665232,39.306097034825,-76.613449437848,39.314288300216), "name" => "Charles North");
$boundaries[] = (object) array("boundary" => array(-76.572823944551,39.250525517855,-76.536271663997,39.291778112016), "name" => "Canton Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.59493896342,39.314241976252,-76.574588297216,39.32802261455), "name" => "Clifton Park");
$boundaries[] = (object) array("boundary" => array(-76.663863745309,39.303405999984,-76.650991000304,39.309647234829), "name" => "Coppin Heights/Ash-Co-East");
$boundaries[] = (object) array("boundary" => array(-76.652700110808,39.305069741146,-76.647888337541,39.309838559838), "name" => "Easterwood");
$boundaries[] = (object) array("boundary" => array(-76.61102834181,39.224510232468,-76.558577213509,39.251603679763), "name" => "Fairfield Area");
$boundaries[] = (object) array("boundary" => array(-76.563217067243,39.313980389158,-76.529708141203,39.343463498654), "name" => "Frankford");
$boundaries[] = (object) array("boundary" => array(-76.647195585408,39.286804465777,-76.638119321349,39.293191409739), "name" => "Franklin Square");
$boundaries[] = (object) array("boundary" => array(-76.614953498856,39.305900478965,-76.608461211062,39.311438745219), "name" => "Greenmount West");
$boundaries[] = (object) array("boundary" => array(-76.672286265275,39.274022378743,-76.660813047746,39.280930357204), "name" => "Gwynns Falls");
$boundaries[] = (object) array("boundary" => array(-76.64448901029,39.321931488242,-76.625394868058,39.337894926965), "name" => "Hampden");
$boundaries[] = (object) array("boundary" => array(-76.647515497864,39.2929304729,-76.631356171147,39.29918239463), "name" => "Harlem Park");
$boundaries[] = (object) array("boundary" => array(-76.573178478537,39.286396131524,-76.562414263128,39.290441993637), "name" => "Highlandtown");
$boundaries[] = (object) array("boundary" => array(-76.543312543876,39.255245314832,-76.529790341619,39.27252745525), "name" => "Holabird Industrial Park");
$boundaries[] = (object) array("boundary" => array(-76.608691228549,39.287031571401,-76.599443130714,39.294742849508), "name" => "Jonestown");
$boundaries[] = (object) array("boundary" => array(-76.609879569325,39.36685972116,-76.597136798176,39.371999911196), "name" => "Lake Walker");
$boundaries[] = (object) array("boundary" => array(-76.603942750535,39.284882943909,-76.598321493427,39.288708019364), "name" => "Little Italy");
$boundaries[] = (object) array("boundary" => array(-76.609226051072,39.261078890899,-76.577497022833,39.276238003791), "name" => "Locust Point Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.635739909359,39.298980298216,-76.620306317499,39.31047335295), "name" => "Madison Park");
$boundaries[] = (object) array("boundary" => array(-76.621015676782,39.299588606987,-76.611259195279,39.309236252642), "name" => "Mid-Town Belvedere");
$boundaries[] = (object) array("boundary" => array(-76.656265909277,39.29275747013,-76.647195585408,39.302606999834), "name" => "Midtown-Edmondson");
$boundaries[] = (object) array("boundary" => array(-76.661243545584,39.309337852358,-76.646263801431,39.319405642829), "name" => "Mondawmin");
$boundaries[] = (object) array("boundary" => array(-76.621570673293,39.294526595723,-76.610632752599,39.301750221276), "name" => "Mount Vernon");
$boundaries[] = (object) array("boundary" => array(-76.649766432887,39.361423973431,-76.627950689266,39.371997878485), "name" => "North Roland Park/Poplar Hill");
$boundaries[] = (object) array("boundary" => array(-76.584706852203,39.285961712852,-76.572952818752,39.292224297051), "name" => "Patterson Park");
$boundaries[] = (object) array("boundary" => array(-76.584926891914,39.29188952319,-76.581878470083,39.295630923804), "name" => "Patterson Place");
$boundaries[] = (object) array("boundary" => array(-76.711276186514,39.345651673309,-76.691853676133,39.361327499937), "name" => "Reisterstown Station");
$boundaries[] = (object) array("boundary" => array(-76.627754714731,39.313016586006,-76.619441376943,39.326523654514), "name" => "Remington");
$boundaries[] = (object) array("boundary" => array(-76.612337977242,39.267797446717,-76.597414443428,39.277626540453), "name" => "Riverside");
$boundaries[] = (object) array("boundary" => array(-76.617031164753,39.267548999785,-76.61149545502,39.274824113278), "name" => "South Baltimore");
$boundaries[] = (object) array("boundary" => array(-76.645161723928,39.285243520639,-76.637966455729,39.28830600033), "name" => "Union Square");
$boundaries[] = (object) array("boundary" => array(-76.59371091736,39.28561901439,-76.584323341249,39.290549157489), "name" => "Upper Fells Point");
$boundaries[] = (object) array("boundary" => array(-76.638800586202,39.295366366083,-76.62335592816,39.307476034956), "name" => "Upton");
$boundaries[] = (object) array("boundary" => array(-76.674422566,39.308834115699,-76.661183748799,39.314439795257), "name" => "Walbrook");
$boundaries[] = (object) array("boundary" => array(-76.599687115243,39.287353164117,-76.589090727298,39.29411265884), "name" => "Washington Hill");
$boundaries[] = (object) array("boundary" => array(-76.609513720289,39.328302898048,-76.603596539516,39.336389178964), "name" => "Waverly");
$boundaries[] = (object) array("boundary" => array(-76.635271558875,39.35302572404,-76.623644843183,39.362224018274), "name" => "Wyndhurst");
$boundaries[] = (object) array("boundary" => array(-76.688610432845,39.34418409087,-76.675853915967,39.35247268704), "name" => "Arlington");
$boundaries[] = (object) array("boundary" => array(-76.678799440159,39.322189347209,-76.664192000182,39.336618848441), "name" => "Ashburton");
$boundaries[] = (object) array("boundary" => array(-76.629062807109,39.283084026905,-76.626129217529,39.287145100485), "name" => "Barre Circle");
$boundaries[] = (object) array("boundary" => array(-76.711158348083,39.269393767571,-76.691785656004,39.281426026468), "name" => "Beechfield");
$boundaries[] = (object) array("boundary" => array(-76.572054262749,39.327731274626,-76.564505349987,39.333308516645), "name" => "Belair-Parkside");
$boundaries[] = (object) array("boundary" => array(-76.626182650815,39.366035105422,-76.617353331886,39.371999677861), "name" => "Bellona-Gittings");
$boundaries[] = (object) array("boundary" => array(-76.584041986057,39.304746684748,-76.572958561597,39.314322454461), "name" => "Berea");
$boundaries[] = (object) array("boundary" => array(-76.573234417102,39.335789104783,-76.565098994978,39.342807761353), "name" => "Beverly Hills");
$boundaries[] = (object) array("boundary" => array(-76.585491490657,39.302309346578,-76.572816286782,39.305125599535), "name" => "Biddle Street");
$boundaries[] = (object) array("boundary" => array(-76.634040042611,39.30317101203,-76.620149176216,39.310972795218), "name" => "Bolton Hill");
$boundaries[] = (object) array("boundary" => array(-76.653776003975,39.2856506125,-76.646849691913,39.288163395557), "name" => "Boyd-Booth");
$boundaries[] = (object) array("boundary" => array(-76.567145664436,39.281530714168,-76.562101509238,39.286872614461), "name" => "Brewers Hill");
$boundaries[] = (object) array("boundary" => array(-76.543626338326,39.272100256663,-76.531161347602,39.277441105014), "name" => "Broening Manor");
$boundaries[] = (object) array("boundary" => array(-76.664677276218,39.315166628501,-76.655793796906,39.322189347209), "name" => "Burleith-Leighton");
$boundaries[] = (object) array("boundary" => array(-76.684241604528,39.326360323062,-76.675467498993,39.3355910809), "name" => "Callaway-Garrison");
$boundaries[] = (object) array("boundary" => array(-76.64780727424,39.265537917998,-76.620617115183,39.280556416779), "name" => "Carroll - Camden Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.672713663502,39.279625527743,-76.659031523278,39.294195994642), "name" => "Carroll-South Hilton");
$boundaries[] = (object) array("boundary" => array(-76.654160893357,39.277777748154,-76.644289999827,39.287377516387), "name" => "Carrollton Ridge");
$boundaries[] = (object) array("boundary" => array(-76.618341063235,39.366945504384,-76.609768561502,39.371999916548), "name" => "Cedarcroft");
$boundaries[] = (object) array("boundary" => array(-76.543983679548,39.341475579627,-76.52969282614,39.3556165427), "name" => "Cedmont");
$boundaries[] = (object) array("boundary" => array(-76.655185277358,39.271155816749,-76.636749107454,39.28167956576), "name" => "Carroll Park");
$boundaries[] = (object) array("boundary" => array(-76.537485421279,39.317323890567,-76.529715513287,39.336165994694), "name" => "Cedonia");
$boundaries[] = (object) array("boundary" => array(-76.680186122494,39.332638000796,-76.661670605682,39.352315000051), "name" => "Central Park Heights");
$boundaries[] = (object) array("boundary" => array(-76.644416679444,39.237491265228,-76.614886138273,39.260694087732), "name" => "Cherry Hill");
$boundaries[] = (object) array("boundary" => array(-76.695116131747,39.361444548931,-76.664301015368,39.371986894474), "name" => "Cheswolde");
$boundaries[] = (object) array("boundary" => array(-76.609951184728,39.359855729983,-76.59845420365,39.365699421291), "name" => "Chinquapin Park");
$boundaries[] = (object) array("boundary" => array(-76.662216475151,39.340782705713,-76.646220573527,39.360616271139), "name" => "Coldspring");
$boundaries[] = (object) array("boundary" => array(-76.607038054118,39.316654094282,-76.584571067648,39.328317702876), "name" => "Coldstream Homestead Montebello");
$boundaries[] = (object) array("boundary" => array(-76.687112191194,39.320318559473,-76.6799769892,39.325833548244), "name" => "Concerned Citizens Of Forest Park");
$boundaries[] = (object) array("boundary" => array(-76.71129366997,39.357358958776,-76.686543207927,39.371971618689), "name" => "Cross Country");
$boundaries[] = (object) array("boundary" => array(-76.650279008322,39.343379107471,-76.640274969517,39.361423973431), "name" => "Cross Keys");
$boundaries[] = (object) array("boundary" => array(-76.669374860877,39.343879878362,-76.658844814879,39.351043534089), "name" => "Cylburn");
$boundaries[] = (object) array("boundary" => array(-76.597835405681,39.314143084968,-76.589974151508,39.31712143222), "name" => "Darley Park");
$boundaries[] = (object) array("boundary" => array(-76.711221835144,39.31028185447,-76.702981010821,39.320931031282), "name" => "Dickeyville");
$boundaries[] = (object) array("boundary" => array(-76.684745784134,39.335017172922,-76.673887742823,39.341293224168), "name" => "Dolfield");
$boundaries[] = (object) array("boundary" => array(-76.69135371094,39.327387901197,-76.682354226466,39.335869654666), "name" => "Dorchester");
$boundaries[] = (object) array("boundary" => array(-76.657580308395,39.315633495662,-76.629258842955,39.330973599211), "name" => "Druid Hill Park");
$boundaries[] = (object) array("boundary" => array(-76.600071708518,39.292527175392,-76.589461928887,39.298563717603), "name" => "Dunbar-Broadway");
$boundaries[] = (object) array("boundary" => array(-76.673579619578,39.327306999751,-76.664192000182,39.334915062039), "name" => "East Arlington");
$boundaries[] = (object) array("boundary" => array(-76.609504130332,39.311405149733,-76.594998485535,39.318356337429), "name" => "East Baltimore Midway");
$boundaries[] = (object) array("boundary" => array(-76.531633480491,39.287957887316,-76.529764182704,39.292771398262), "name" => "Eastwood");
$boundaries[] = (object) array("boundary" => array(-76.687560303671,39.293576695002,-76.679763310557,39.302974910552), "name" => "Edmondson Village");
$boundaries[] = (object) array("boundary" => array(-76.606818713579,39.328299702561,-76.588395173512,39.340068802494), "name" => "Ednor Gardens-Lakeside");
$boundaries[] = (object) array("boundary" => array(-76.576652029836,39.294633064928,-76.567063637569,39.299430332159), "name" => "Ellwood Park/Monument");
$boundaries[] = (object) array("boundary" => array(-76.631320049722,39.344559124573,-76.626384359853,39.348652847668), "name" => "Evergreen");
$boundaries[] = (object) array("boundary" => array(-76.68528362723,39.305851658586,-76.672425476218,39.31191671996), "name" => "Fairmont");
$boundaries[] = (object) array("boundary" => array(-76.711405320341,39.358195311949,-76.699786398172,39.371911838911), "name" => "Fallstaff");
$boundaries[] = (object) array("boundary" => array(-76.615767249096,39.274694863598,-76.606286723517,39.280876523602), "name" => "Federal Hill");
$boundaries[] = (object) array("boundary" => array(-76.682656090846,39.320250137257,-76.671464556741,39.327387901197), "name" => "Forest Park");
$boundaries[] = (object) array("boundary" => array(-76.699915683158,39.320318458127,-76.689582879304,39.32656074697), "name" => "Forest Park Golf Course");
$boundaries[] = (object) array("boundary" => array(-76.711210073081,39.299357769749,-76.686387038224,39.312525085014), "name" => "Franklintown");
$boundaries[] = (object) array("boundary" => array(-76.670590999801,39.294178798692,-76.664904146367,39.30134639672), "name" => "Franklintown Road");
$boundaries[] = (object) array("boundary" => array(-76.681933929293,39.313914708569,-76.676502178168,39.322276762327), "name" => "Garwyn Oaks");
$boundaries[] = (object) array("boundary" => array(-76.599511755257,39.298200325462,-76.594122602515,39.304289259212), "name" => "Gay Street");
$boundaries[] = (object) array("boundary" => array(-76.705161235059,39.348794038663,-76.676895561774,39.362347549929), "name" => "Glen");
$boundaries[] = (object) array("boundary" => array(-76.600287283299,39.356193286309,-76.593001531541,39.37199915332), "name" => "Glen Oaks");
$boundaries[] = (object) array("boundary" => array(-76.561580367777,39.342355849661,-76.534736925415,39.356624720609), "name" => "Glenham-Belhar");
$boundaries[] = (object) array("boundary" => array(-76.540639037634,39.269705463337,-76.529769559286,39.288032432705), "name" => "Graceland Park");
$boundaries[] = (object) array("boundary" => array(-76.558686999428,39.280861693916,-76.546686000222,39.291814797758), "name" => "Greektown");
$boundaries[] = (object) array("boundary" => array(-76.609469156492,39.305864664952,-76.603763990639,39.311704746528), "name" => "Greenmount Cemetery");
$boundaries[] = (object) array("boundary" => array(-76.665120197629,39.332049193656,-76.656228505974,39.340961522809), "name" => "Greenspring");
$boundaries[] = (object) array("boundary" => array(-76.709906033848,39.33443938287,-76.694163802521,39.345651673309), "name" => "Grove Park");
$boundaries[] = (object) array("boundary" => array(-76.626384359853,39.33093452214,-76.609449540753,39.345489005284), "name" => "Guilford");
$boundaries[] = (object) array("boundary" => array(-76.698949992618,39.294053396769,-76.66982948256,39.313134938992), "name" => "Gwynns Falls/Leakin Park");
$boundaries[] = (object) array("boundary" => array(-76.678604043888,39.31406612622,-76.659877153097,39.324180357473), "name" => "Hanlon-Longwood");
$boundaries[] = (object) array("boundary" => array(-76.575723907467,39.350108451166,-76.549372984373,39.371992860515), "name" => "Hamilton Hills");
$boundaries[] = (object) array("boundary" => array(-76.613208403995,39.317990587567,-76.609436751557,39.323455954756), "name" => "Harwood");
$boundaries[] = (object) array("boundary" => array(-76.63237713951,39.293453327235,-76.624032031057,39.299594648636), "name" => "Heritage Crossing");
$boundaries[] = (object) array("boundary" => array(-76.579512777214,39.324862044934,-76.565963456508,39.337018453944), "name" => "Herring Run Park");
$boundaries[] = (object) array("boundary" => array(-76.63815023851,39.285577666011,-76.627757067034,39.289012569246), "name" => "Hollins Market");
$boundaries[] = (object) array("boundary" => array(-76.711243664044,39.319300450504,-76.689344275421,39.340382584976), "name" => "Howard Park");
$boundaries[] = (object) array("boundary" => array(-76.61362404093,39.274017978367,-76.598092559032,39.288278842068), "name" => "Inner Harbor");
$boundaries[] = (object) array("boundary" => array(-76.625980738301,39.323088855966,-76.617529008909,39.336466321047), "name" => "Johns Hopkins Homewood");
$boundaries[] = (object) array("boundary" => array(-76.612102454061,39.30119875701,-76.599366555857,39.306310484924), "name" => "Johnston Square");
$boundaries[] = (object) array("boundary" => array(-76.618063264854,39.364612679369,-76.609879569325,39.36821327999), "name" => "Lake Evesham");
$boundaries[] = (object) array("boundary" => array(-76.669830999988,39.350528572048,-76.659610888553,39.356213249172), "name" => "Levindale");
$boundaries[] = (object) array("boundary" => array(-76.629585221841,39.345020377425,-76.614889999669,39.353763748629), "name" => "Loyola/Notre Dame");
$boundaries[] = (object) array("boundary" => array(-76.682995414093,39.336618848441,-76.669417025442,39.342244111476), "name" => "Lucille Park");
$boundaries[] = (object) array("boundary" => array(-76.581109668575,39.298902363009,-76.572648910781,39.302507000741), "name" => "Madison-Eastend");
$boundaries[] = (object) array("boundary" => array(-76.585127516866,39.294424501301,-76.576347316065,39.299088522562), "name" => "McElderry Park");
$boundaries[] = (object) array("boundary" => array(-76.647559140472,39.33486043562,-76.637377114089,39.345404914247), "name" => "Medfield");
$boundaries[] = (object) array("boundary" => array(-76.552085017705,39.276110649978,-76.543010829758,39.281448472211), "name" => "Medford");
$boundaries[] = (object) array("boundary" => array(-76.594524713965,39.298358954485,-76.585127514267,39.304651734644), "name" => "Middle East");
$boundaries[] = (object) array("boundary" => array(-76.589319691472,39.327033444309,-76.57475551672,39.34046093032), "name" => "Montebello");
$boundaries[] = (object) array("boundary" => array(-76.667181046903,39.255582114965,-76.643850972285,39.271380456731), "name" => "Morrell Park");
$boundaries[] = (object) array("boundary" => array(-76.665243839162,39.294419278018,-76.659395190627,39.300426138498), "name" => "Mosher");
$boundaries[] = (object) array("boundary" => array(-76.604100667419,39.30393222368,-76.594524713965,39.312138567998), "name" => "Oliver");
$boundaries[] = (object) array("boundary" => array(-76.646541321664,39.308659242143,-76.636969578506,39.315938733942), "name" => "Penn North");
$boundaries[] = (object) array("boundary" => array(-76.638371663231,39.288562233548,-76.627431614838,39.293585837536), "name" => "Poppleton");
$boundaries[] = (object) array("boundary" => array(-76.615170020483,39.347145556518,-76.609625643309,39.351943919067), "name" => "Radnor-Winston");
$boundaries[] = (object) array("boundary" => array(-76.643498474781,39.310295244254,-76.623110018982,39.317171021845), "name" => "Reservoir Hill");
$boundaries[] = (object) array("boundary" => array(-76.609645208739,39.34556163734,-76.603945752542,39.347918400184), "name" => "Richnor Springs");
$boundaries[] = (object) array("boundary" => array(-76.646229494673,39.335292930947,-76.623771727935,39.36241694729), "name" => "Roland Park");
$boundaries[] = (object) array("boundary" => array(-76.615749140454,39.358337151356,-76.6099204007,39.365169110177), "name" => "Rosebank");
$boundaries[] = (object) array("boundary" => array(-76.674137709549,39.299632828999,-76.66603856099,39.308936202627), "name" => "Rosemont");
$boundaries[] = (object) array("boundary" => array(-76.663320898527,39.293206515453,-76.65317310114,39.295608157185), "name" => "Rosemont Homeowners/Tenants");
$boundaries[] = (object) array("boundary" => array(-76.663690836065,39.281381079302,-76.650296937778,39.290267739617), "name" => "Shipley Hill");
$boundaries[] = (object) array("boundary" => array(-76.567788825442,39.331104847178,-76.545564774708,39.352186011188), "name" => "Waltherson");
$boundaries[] = (object) array("boundary" => array(-76.639531854905,39.275536270126,-76.623319971032,39.285997178706), "name" => "Washington Village/Pigtown");
$boundaries[] = (object) array("boundary" => array(-76.658415346477,39.329605999928,-76.642076947363,39.345240544285), "name" => "Woodberry");
$boundaries[] = (object) array("boundary" => array(-76.590765683498,39.29405946894,-76.58484050145,39.298722480991), "name" => "CARE");
$boundaries[] = (object) array("boundary" => array(-76.620081706792,39.317752655241,-76.612853021235,39.332573033097), "name" => "Charles Village");
$boundaries[] = (object) array("boundary" => array(-76.619722195314,39.314129245476,-76.615157777182,39.317899196384), "name" => "Old Goucher");
$boundaries[] = (object) array("boundary" => array(-76.594106105894,39.337682452353,-76.586193855151,39.346037363936), "name" => "Hillen");
$boundaries[] = (object) array("boundary" => array(-76.640217679971,39.337382316602,-76.63407035047,39.343524499233), "name" => "Hoes Heights");
$boundaries[] = (object) array("boundary" => array(-76.628953910604,39.35323260343,-76.609860521686,39.366672458192), "name" => "Homeland");
$boundaries[] = (object) array("boundary" => array(-76.553838665317,39.287121516759,-76.532720148538,39.296199542518), "name" => "Hopkins Bayview");
$boundaries[] = (object) array("boundary" => array(-76.705010202277,39.292309914644,-76.692364179826,39.301933953422), "name" => "Hunting Ridge");
$boundaries[] = (object) array("boundary" => array(-76.594901074306,39.366027798958,-76.582009925135,39.371998834296), "name" => "Idlewood");
$boundaries[] = (object) array("boundary" => array(-76.643788356339,39.309236252642,-76.61952218632,39.331961320078), "name" => "Jones Falls Area");
$boundaries[] = (object) array("boundary" => array(-76.617284818495,39.344301805643,-76.609506908792,39.348124499783), "name" => "Kernewood");
$boundaries[] = (object) array("boundary" => array(-76.635433351232,39.341328420302,-76.625671655486,39.345020377425), "name" => "Keswick");
$boundaries[] = (object) array("boundary" => array(-76.563078713544,39.290441993637,-76.547965788112,39.300952913686), "name" => "Kresson");
$boundaries[] = (object) array("boundary" => array(-76.660121846438,39.248726386824,-76.637230632932,39.260506000136), "name" => "Lakeland");
$boundaries[] = (object) array("boundary" => array(-76.6834861614,39.341670640236,-76.677178669056,39.34621184123), "name" => "Langston Hughes");
$boundaries[] = (object) array("boundary" => array(-76.581757511536,39.337018453944,-76.563320543319,39.353901209924), "name" => "Lauraville");
$boundaries[] = (object) array("boundary" => array(-76.6638218734,39.318520966414,-76.652491409922,39.325390452807), "name" => "Liberty Square");
$boundaries[] = (object) array("boundary" => array(-76.589647572465,39.354417720505,-76.573437761083,39.371996378947), "name" => "Loch Raven");
$boundaries[] = (object) array("boundary" => array(-76.584627112257,39.324953113427,-76.575148052068,39.332276151583), "name" => "Mayfield");
$boundaries[] = (object) array("boundary" => array(-76.662051957551,39.2744995233,-76.652347434052,39.284832237837), "name" => "Millhill");
$boundaries[] = (object) array("boundary" => array(-76.585352804337,39.298722468815,-76.580883301812,39.302507000793), "name" => "Milton-Montford");
$boundaries[] = (object) array("boundary" => array(-76.569128860645,39.335706346114,-76.560355454551,39.344500682753), "name" => "Moravia-Walther");
$boundaries[] = (object) array("boundary" => array(-76.581936389751,39.345154665405,-76.57628890177,39.350427018963), "name" => "Morgan Park");
$boundaries[] = (object) array("boundary" => array(-76.588019275797,39.338634944531,-76.573050449599,39.354954981401), "name" => "Morgan State University");
$boundaries[] = (object) array("boundary" => array(-76.646437333707,39.27917979433,-76.637792087562,39.285577666011), "name" => "New Southwest/Mount Clare");
$boundaries[] = (object) array("boundary" => array(-76.685514809811,39.308794023346,-76.674101071035,39.314138888999), "name" => "Mount Holly");
$boundaries[] = (object) array("boundary" => array(-76.681656735586,39.355010897664,-76.649984109387,39.371992425257), "name" => "Mount Washington");
$boundaries[] = (object) array("boundary" => array(-76.599852528885,39.340666799024,-76.589554646444,39.355415749599), "name" => "New Northwood");
$boundaries[] = (object) array("boundary" => array(-76.67091563158,39.303473296565,-76.660724146909,39.309238975595), "name" => "Northwest Community Action");
$boundaries[] = (object) array("boundary" => array(-76.607448256904,39.294703337813,-76.599141047328,39.301690137265), "name" => "Oldtown");
$boundaries[] = (object) array("boundary" => array(-76.567958432993,39.296284968312,-76.550506111291,39.308271171781), "name" => "Orangeville");
$boundaries[] = (object) array("boundary" => array(-76.573129780975,39.299222217781,-76.561360408787,39.314573043148), "name" => "Orangeville Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.600194186635,39.333994984884,-76.59337745135,39.344989128022), "name" => "Original Northwood");
$boundaries[] = (object) array("boundary" => array(-76.540947196988,39.355539551652,-76.529683581768,39.36954602124), "name" => "Overlea");
$boundaries[] = (object) array("boundary" => array(-76.665380000351,39.321934413628,-76.653998969163,39.33550409774), "name" => "Park Circle");
$boundaries[] = (object) array("boundary" => array(-76.667756033169,39.340326009933,-76.657149701841,39.345078879323), "name" => "Parklane");
$boundaries[] = (object) array("boundary" => array(-76.562206243457,39.31864233254,-76.552032007147,39.325823728848), "name" => "Parkside");
$boundaries[] = (object) array("boundary" => array(-76.652491409922,39.31313907382,-76.643498474781,39.320216540858), "name" => "Parkview/Woodbrook");
$boundaries[] = (object) array("boundary" => array(-76.609577671058,39.336048203871,-76.599838209089,39.34373233369), "name" => "Pen Lucy");
$boundaries[] = (object) array("boundary" => array(-76.611292385455,39.292553288916,-76.605529907732,39.301386948273), "name" => "Penn-Fallsway");
$boundaries[] = (object) array("boundary" => array(-76.669744331638,39.287705999795,-76.646942282212,39.294468134787), "name" => "Penrose/Fayette Street Outreach");
$boundaries[] = (object) array("boundary" => array(-76.59858324776,39.286396271271,-76.594551173748,39.289182562606), "name" => "Perkins Homes");
$boundaries[] = (object) array("boundary" => array(-76.590669752633,39.348635203925,-76.576277063233,39.355595546795), "name" => "Perring Loch");
$boundaries[] = (object) array("boundary" => array(-76.684540357285,39.349003443655,-76.667458778558,39.35705489207), "name" => "Pimlico Good Neighbors");
$boundaries[] = (object) array("boundary" => array(-76.614943857537,39.255918979621,-76.599269010572,39.267933000351), "name" => "Port Covington");
$boundaries[] = (object) array("boundary" => array(-76.557200946943,39.28102817817,-76.529730346616,39.322585421728), "name" => "Pulaski Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.594219809487,39.359785657307,-76.585473708195,39.366996483758), "name" => "Ramblewood");
$boundaries[] = (object) array("boundary" => array(-76.694149620138,39.293295835299,-76.685935950347,39.300171322921), "name" => "Rognel Heights");
$boundaries[] = (object) array("boundary" => array(-76.544860322901,39.351161644762,-76.529779587299,39.360164781977), "name" => "Rosemont East");
$boundaries[] = (object) array("boundary" => array(-76.65283210805,39.360616271139,-76.646229494673,39.37199347947), "name" => "Sabina-Mattfeldt");
$boundaries[] = (object) array("boundary" => array(-76.679376846662,39.27129807808,-76.671506603617,39.277106001501), "name" => "Saint Agnes");
$boundaries[] = (object) array("boundary" => array(-76.533214228387,39.257456096438,-76.529796844172,39.263969347498), "name" => "Saint Helena");
$boundaries[] = (object) array("boundary" => array(-76.680811935426,39.281096663555,-76.672121963867,39.289774788332), "name" => "Saint Josephs");
$boundaries[] = (object) array("boundary" => array(-76.648409911404,39.264640922319,-76.638571239397,39.270866302449), "name" => "Saint Paul");
$boundaries[] = (object) array("boundary" => array(-76.627659824529,39.294640060973,-76.621265438094,39.300654788579), "name" => "Seton Hill");
$boundaries[] = (object) array("boundary" => array(-76.620617115183,39.274605465008,-76.615394169804,39.279594205586), "name" => "Sharp-Leadenhall");
$boundaries[] = (object) array("boundary" => array(-76.597742931941,39.312138567998,-76.582135541984,39.314476815851), "name" => "South Clifton Park");
$boundaries[] = (object) array("boundary" => array(-76.621881947559,39.259744230396,-76.614574139599,39.27537732969), "name" => "Spring Garden Industrial Area");
$boundaries[] = (object) array("boundary" => array(-76.625322780507,39.274849804137,-76.618962160224,39.285452200752), "name" => "Stadium Area");
$boundaries[] = (object) array("boundary" => array(-76.709568320362,39.281318600821,-76.69385883756,39.292934918371), "name" => "Ten Hills");
$boundaries[] = (object) array("boundary" => array(-76.634186796891,39.361859608082,-76.62495611398,39.371998917397), "name" => "The Orchards");
$boundaries[] = (object) array("boundary" => array(-76.673887742823,39.331553999992,-76.663096299263,39.339738068353), "name" => "Towanda-Grantley");
$boundaries[] = (object) array("boundary" => array(-76.625888693979,39.332666817994,-76.617958575439,39.34199568875), "name" => "Tuscany-Canterbury");
$boundaries[] = (object) array("boundary" => array(-76.628072016643,39.286037490884,-76.622170810876,39.294829635278), "name" => "University Of Maryland");
$boundaries[] = (object) array("boundary" => array(-76.69794539623,39.285274369002,-76.688794956151,39.293447302863), "name" => "Uplands");
$boundaries[] = (object) array("boundary" => array(-76.684741994473,39.257472473034,-76.664453682493,39.274022378743), "name" => "Violetville");
$boundaries[] = (object) array("boundary" => array(-76.69764349368,39.335596887676,-76.682995414093,39.343415031156), "name" => "West Arlington");
$boundaries[] = (object) array("boundary" => array(-76.704660868363,39.312293583906,-76.685247108417,39.324464213592), "name" => "West Forest Park");
$boundaries[] = (object) array("boundary" => array(-76.711196521265,39.291560415433,-76.694647906627,39.303306748306), "name" => "West Hills");
$boundaries[] = (object) array("boundary" => array(-76.558604236324,39.35350291718,-76.542968197012,39.365427267655), "name" => "Westfield");
$boundaries[] = (object) array("boundary" => array(-76.7111807912,39.27783718853,-76.698049717272,39.292250252539), "name" => "Westgate");
$boundaries[] = (object) array("boundary" => array(-76.609599977467,39.341031716763,-76.599698049839,39.345523235706), "name" => "Wilson Park");
$boundaries[] = (object) array("boundary" => array(-76.692137078626,39.312772648391,-76.681131048253,39.32142675683), "name" => "Windsor Hills");
$boundaries[] = (object) array("boundary" => array(-76.609795913735,39.347028962583,-76.602733606393,39.352784693508), "name" => "Winston-Govans");
$boundaries[] = (object) array("boundary" => array(-76.596265536106,39.354006981907,-76.588475935236,39.360809207836), "name" => "Woodbourne Heights");
$boundaries[] = (object) array("boundary" => array(-76.609885390209,39.35190775539,-76.602313773298,39.355492964441), "name" => "Woodbourne-McCabe");
$boundaries[] = (object) array("boundary" => array(-76.69685671927,39.341293224168,-76.682303981439,39.35049301016), "name" => "Woodmere");
$boundaries[] = (object) array("boundary" => array(-76.628291550553,39.326248239341,-76.623136505742,39.336893309644), "name" => "Wyman Park");
$boundaries[] = (object) array("boundary" => array(-76.695761863291,39.271818935144,-76.683442757255,39.281455442997), "name" => "Yale Heights");
$boundaries[] = (object) array("boundary" => array(-76.675538482022,39.291789411982,-76.672625140147,39.294053396769), "name" => "Lower Edmondson Village");
$boundaries[] = (object) array("boundary" => array(-76.671506603617,39.265637787141,-76.647473055038,39.276967216533), "name" => "Wilhelm Park");
$boundaries[] = (object) array("boundary" => array(-76.680091256449,39.293789749817,-76.672713663502,39.299647797737), "name" => "Edgewood");
$boundaries[] = (object) array("boundary" => array(-76.609920118196,39.364603090121,-76.599383389431,39.367133615234), "name" => "Evesham Park");
$boundaries[] = (object) array("boundary" => array(-76.609960973602,39.35858138379,-76.60133482852,39.364205122261), "name" => "Belvedere");
$boundaries[] = (object) array("boundary" => array(-76.609599831506,39.343971837149,-76.603843247786,39.346158015237), "name" => "Wrenlane");
$boundaries[] = (object) array("boundary" => array(-76.612577045832,39.351710676888,-76.609760009457,39.354355682284), "name" => "York-Homeland");
$boundaries[] = (object) array("boundary" => array(-76.579283273048,39.313377488012,-76.555697974731,39.329922189547), "name" => "Belair-Edison");
$boundaries[] = (object) array("boundary" => array(-76.582135541984,39.314226674517,-76.572962203178,39.316800155659), "name" => "Four By Four");
$services[] = (object) array("service_name" => "Pothole", "service_code" => "4e39a3abd3e2c20ed8000016");
$services[] = (object) array("service_name" => "Street Light Out", "service_code" => "4e39a3abd3e2c20ed800001a");
$services[] = (object) array("service_name" => "Dirty Alley or Street", "service_code" => "4e39a3aad3e2c20ed800000a");
$services[] = (object) array("service_name" => "Trash, High Grass, or Weeds", "service_code" => "4f2c58a5d3e2c21c28000001");
$services[] = (object) array("service_name" => "Parking Complaint", "service_code" => "4e5cc7fa21ecf3213900003a");
$services[] = (object) array("service_name" => "Graffiti Removal", "service_code" => "4e39a3aad3e2c20ed800000c");
$services[] = (object) array("service_name" => "Other", "service_code" => "4e39a3abd3e2c20ed8000029");
$services[] = (object) array("service_name" => "Dead Animal Pickup", "service_code" => "4e39a3abd3e2c20ed8000026");
$services[] = (object) array("service_name" => "Abandoned Vehicle", "service_code" => "4e39a3abd3e2c20ed800001d");
$services[] = (object) array("service_name" => "Park Cleaning or Mowing", "service_code" => "4e39a3aad3e2c20ed800000e");
$services[] = (object) array("service_name" => "Traffic Signal Repair", "service_code" => "4e39a3abd3e2c20ed8000023");
$services[] = (object) array("service_name" => "Flooded Street", "service_code" => "4e39a3abd3e2c20ed8000019");
$services[] = (object) array("service_name" => "Damaged Sidewalk", "service_code" => "4e39a3abd3e2c20ed8000013");
$services[] = (object) array("service_name" => "Downed Tree or Limb", "service_code" => "4e39a3abd3e2c20ed8000014");
$services[] = (object) array("service_name" => "Water Leak (Exterior)", "service_code" => "4e39a3abd3e2c20ed800001b");
$services[] = (object) array("service_name" => "City Employee Complaint", "service_code" => "4e39a3aad3e2c20ed8000007");
$services[] = (object) array("service_name" => "Sign Missing or Damaged", "service_code" => "4e39a3abd3e2c20ed8000021");
$services[] = (object) array("service_name" => "City Employee Praise", "service_code" => "4e4edcac21ecf30e5000000f");
$services[] = (object) array("service_name" => "Aggressive Animal", "service_code" => "4e39a3abd3e2c20ed8000025");
$services[] = (object) array("service_name" => "Storm Drain or Inlet", "service_code" => "4e39a3abd3e2c20ed8000017");
$services[] = (object) array("service_name" => "Food Facility Complaint", "service_code" => "4e39a3abd3e2c20ed8000027");


$data['boundaries'] = $boundaries ;
$data['services'] = $services ;

echo $_GET['callback'].'('.json_encode( array( $data) ) . ')';
//echo json_encode( array( $data) ) ;
//	$sql = "select * FROM wine ORDER BY name";
//	try {
//		$db = getConnection();
//		$stmt = $db->query($sql);  
//		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
//		$db = null;
//		echo '{"wine": ' . json_encode($wines) . '}';
//	} catch(PDOException $e) {
//		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
//	}
}


function getConnection() {
	$dbhost="127.0.0.1";
	$dbuser="cellar";
	$dbpass="cellar";
	$dbname="cellar";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>
