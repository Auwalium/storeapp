<?php
session_start();

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Staff Documentation</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('../includes/header_admin.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('../includes/registry_sidebar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       <div class="page-wrapper" style='background-color:white;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id="page_head">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">STAFF DOCUMENTATION</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"><a href="" style="color:crimson; font-weight:bold;" >Welcome <?php echo $_SESSION['username']; ?></a></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style='background-color:white;padding-left:3%;'>
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row" >
                    <!-- Column -->
<div class="col-md-6 col-lg-8 col-xlg-3" id="form_content">
   <div class="card" id='form'>
                        
                        
                         <form action="" method="POST" enctype="multipart/form-data">
	          
	
	<div class='table_responsive'>
	<?php
    
        include('../includes/dbconnect.php');
    $fid 		= $_SESSION['fileNo'];         
 $sql = "SELECT * from staff where fileNo =  '$fid' ";
    
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $sid	 	= $row['id'];
  	
  	}
  	?> 
	
	<form action="residential.php" method="POST">
	
    <div class="container">           
    
    <header>
    <h5 align="center"> STAFF RESIDENTIAL DETAILS </h5>
    </header>
    <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Abia"){
    var optionArray = ["|","aba North|Aba North","aba South|Aba South","Arochukwu|Arochukwu","bende|Bende","isiala ngwa south|Isiala Ngwa South","ikwuano|Ikwuano","isiala|Isiala","ngwa north|Ngwa North","isukwuato|Isukwuato","ukwa west|Ukwa West",,"ukwa east|Ukwa East","umuahia|Umuahia","umuahia south|Umuahia South"];
  } else if(s1.value == "Adamawa"){
    var optionArray = ["|","demsa|Demsa","fufore|Fufore","ganye|Ganye","girei|Girei","gombi|Gombi","jada|Jada","yola north|Yola North","lamurde|Lamurde","madagali|Madagali","maiha|Maiha","mayo-belwa|Mayo-Belwa","michika|Michika","mubi south|Mubi South","numna|Numna","shelleng|Shelleng","song|Song","toungo|Toungo","jimeta|Jimeta","yola south|Yola South","hung|Hung"];
  } else if(s1.value == "Anambra"){
    var optionArray = ["|","aguata|Aguata","anambra|Anambra","anambra west|Anambra West","anaocha|Anaocha","awka south|Awka South","awka north|Awka North","ogbaru|Ogbaru","onitsha south|Onitsha South","onitsha north|Onitsha North","orumba north|Orumba North","orumba south|Orumba South","oyi|Oyi"];
  }else if(s1.value == "Akwa-Ibom"){
    var optionArray = ["|","abak|Abak","eastern Obolo|Eastern Obolo","eket|Eket","essien udim|Essien Udim","etimekpo|Etimekpo","etinan|Etinan","ibeno|Ibeno","ibesikpo asutan|Ibesikpo Asutan"," ibiono ibom|Ibiono Ibom","ika|Ika","ikono|Ikono","ikot abasi|Ikot Abasi","ikot ekpene|Ikot Ekpene","ini|Ini","Itu|Itu","Mbo|Mbo","mkpat enin|Mkpat Enin","nsit ibom|Nsit Ibom","nsit ubium|Nsit Ubium","obot akara|Obot Akara","okobo|Okobo","onna|Onna","orukanam|Orukanam","oron|Oron","udung uko|Udung Uko","ukanafun|Ukanafun","esit eket|Esit Eket","uruan|Uruan","urue offoung|Urue Offoung","oruko ete|Oruko Ete","uyo|Uyo"];
  }else if(s1.value == "Bauchi"){
    var optionArray = ["|","alkaleri|Alkaleri","bauchi|Bauchi","bogoro|Bogoro","darazo|Darazo","dass|Dass","gamawa|Gamawa","ganjuwa|Ganjuwa","giade|Giade"," jama`are|Jama`are","katagum|Katagum","kirfi|Kirfi","misau|Misau","ningi|Ningi","hira|Hira","tafawa balewa|Tafawa Balewa","itas gadau|Itas Gadau","toro|Toro","warji|Warji","zaki|Zaki","dambam|Dambam"];
  }else if(s1.value == "Bayelsa"){
    var optionArray = ["|","brass|Brass","ekeremor|Ekeremor","kolok/opokuma|Kolok/Opokuma","nembe|Nembe","ogbia|Ogbia","sagbama|Sagbama","southern ijaw|Southern Ijaw","yenagoa|Yenagoa","membe|Membe"];
  }else if(s1.value == "Benue"){
    var optionArray = ["|","ador|Ador","agatu|Agatu","apa|Apa","buruku|Buruku","gboko|Gboko","guma|Guma","gwer east|Gwer east","gwer west|Gwer west","kastina-ala|Kastina-ala","konshisha|Konshisha","kwande|Kwande","logo|Logo","makurdi|Makurdi","obi|Obi","ogbadibo|Ogbadibo","ohimini|Ohimini","oju|Oju","okpokwu|Okpokwu","oturkpo|Oturkpo","tarka|Tarka","ukum|Ukum","vandekya|Vandekya"];
  }else if(s1.value == "Borno"){
    var optionArray = ["|","abadan|Abadan","askira/uba|Askira/Uba","bama|Bama","bayo|Bayo","biu|Biu","chibok|Chibok","damboa|Damboa","dikwagubio|Dikwagubio","guzamala|Guzamala","gwoza|Gwoza","hawul|Hawul","jere|Jere","kaga|Kaga","kalka/balge|Kalka/Balge","konduga|Konduga","kukawa|Kukawa","kwaya-ku|Kwaya-ku","mafa|Mafa","magumeri|Magumeri","maiduguri|Maiduguri","marte|Marte","mobbar|Mobbar","monguno|Monguno","ngala|Ngala","nganzai|Nganzai","shani|Shani"];
  }else if(s1.value == "Cross-River"){
    var optionArray = ["|","abi|Abi","akampa|Akampa","akpabuyo|Akpabuyo","bakassi|Bakassi","bekwara|Bekwara","biase|Biase","boki|Boki","calabar south|Calabar south","etung|Etung","ikom|Ikom","obanliku|Obanliku","obubra|Obubra","obudu|Obudu","odukpani|Odukpani","ogoja|Ogoja","ugep north|Ugep north","yala|Yala","yarkur|Yarkur"];
  }else if(s1.value == "Delta"){
    var optionArray = ["|","aniocha south|Aniocha south","anioha|Anioha","bomadi|Bomadi","burutu|Burutu","ethiope west|Ethiope west","ethiope east|Ethiope east","ika south|Ika south","ika north east|Ika north east","isoko south|Isoko south","isoko north|Isoko north","ndokwa east|Ndokwa east","ndokwa west|Ndokwa west","okpe|Okpe","oshimili north|Oshimili north","oshimili south|Oshimili south","patani|Patani","sapele|Sapele","udu|Udu","ughelli south|Ughelli south","ughelli north|Ughelli north","ukwuani|Ukwuani","uviwie|Uviwie","warri central|Warri central","warri north|Warri north","warri south|Warri south"];
  }else if(s1.value == "Ebonyi"){
    var optionArray = ["|","abakaliki|Abakaliki","afikpo south|Afikpo south","afikpo north|Afikpo north","ebonyi|Ebonyi","ezza|Ezza","ezza south|Ezza south","ikwo|Ikwo","ishielu|Ishielu","ivo|Ivo","isoko north|Isoko north","ndokwa east|Ndokwa east","ndokwa west|Ndokwa west","okpe|Okpe","ohaozara|Ohaozara","ohaukwu|Ohaukwu","onicha|Onicha","izzi|Izzi"];
  }else if(s1.value == "Edo"){
    var optionArray = ["|","akoko-Edo|Akoko-Edo","egor|Egor","essann east|Essann east","Esan south east|Esan south east","esan central|Esan central","esan west|Esan west","etsako central|Etsako central","etsako east|Etsako east","etsako|Etsako","orhionwon|Orhionwon","ivia north|Ivia north","ovia south west|Ovia south west","owan west|Owan west","owan south|Owan south","uhunwonde|Uhunwonde"];
  }else if(s1.value == "Ekiti"){
    var optionArray = ["|","ado ekiti|Ado Ekiti","effon alaiye|Effon Alaiye","ekiti south west|Ekiti south west","ekiti west|Ekiti west","ekiti east|Ekiti east","emure/ise|Emure/ise","orun|Orun","ido|Ido","osi|Osi","ijero|Ijero","ikere|Ikere","ikole|Ikole","ilejemeje|Ilejemeje","irepodun|Irepodun","ise/orun|Ise/Orun","moba|Moba","oye|Oye","aiyekire|Aiyekire"];
  }else if(s1.value == "Enugu"){
    var optionArray = ["|","awgu|Awgu","aninri|Aninri","enugu east|enugu east","enugu south|Enugu south","enugu north|Enugu north","ezeagu|Ezeagu","igbo eze north|Igbo Eze north","igbi etiti|Igbi etiti","Nsukka|Nsukka","oji river|Oji river","undenu|Undenu","uzo uwani|Uzo Uwani","udi|Udi"];
  }else if(s1.value == "Gombe"){
    var optionArray = ["|","akko|Akko","Balanga|balanga","billiri|Billiri","dukku|Dukku","dunakaye|Dunakaye","gombe|Gombe","kaltungo|Kaltungo","kwami|Kwami","nafada/bajoga|Nafada/Bajoga","shomgom|Shomgom","yamaltu/deba|Yamaltu/Deba"];
  }else if(s1.value == "Imo"){
    var optionArray = ["|","aboh-mbaise|Aboh-mbaise","ahiazu-mbaise|Ahiazu-Mbaise","ehime-mbaino|Ehime-Mbaino","ezinhite|Ezinhite","ideato north|Ideato North","ideato south|Ideato south","ihitte/uboma|Ihitte/Uboma","ikeduru|Ikeduru","isiala|Isiala","isu|Isu","mbaitoli|Mbaitoli","ngor okpala|Ngor Okpala","Njaba|Njaba","nwangele|Nwangele","nkwere|Nkwere","Obowo|Obowo","aguta|Aguta","ohaji egbema|Ohaji Egbema","Okigwe|Okigwe","onuimo|Onuimo","orlu|Orlu","orsu|Orsu","oru west|Oru west","oru|Oru","owerri|Owerri","owerri north|Owerri North","owerri south|Owerri south"];
  }else if(s1.value == "Jigawa"){
    var optionArray = ["|","auyo|Auyo","babura|Babura","birnin- kudu|Birnin- Kudu","birniwa|Birniwa","buji|Buji","dute|Dute","garki|Garki","gagarawa|Gagarawa","gumel|Gumel","guri|Guri","gwaram|Gwaram","gwiwa|Gwiwa","hadeji|Hadeji","jahun|Jahun","kafin-hausa|Kafin-Hausa","kaugama|Kaugama","kazaure|Kazaure","kirikisamma|Kirikisamma","birnin-magaji|Birnin-magaji","maigatari|Maigatari","malamaduri|Malamaduri","miga|Miga","ringim|Ringim","roni|Roni","sule tankarka|Sule Tankarka","taura|Taura","yankwasi|Yankwasi"];
  }else if(s1.value == "Kaduna"){
    var optionArray = ["|","birnin gwari|Birnin Gwari","chikun|Chikun","giwa|Giwa","kajuru|Kajuru","igabi|Igabi","ikara|Ikara","jaba|Jaba","jema`a|Jema`a","kachia|Kachia","kaduna north|Kaduna North","kagarko|Kagarko","kauru|Kauru","kabau|Kabau","kudan|Kudan","lere|Lere","makarfi|Makarfi","sabon-gari|Sabon-gari","sanga|Sanga","soba|Soba","zangon-kataf|Zangon-Kataf","zaria|Zaria"];
  }else if(s1.value == "FCT"){
    var optionArray = ["|","abaji|Abaji","abuja municipal|Abuja Municipal","bwari|Bwari","gwagwalada|Gwagwalada","kuje|Kuje","kwali|Kwali"];
  }else if(s1.value == "Kaduna"){
    var optionArray = ["|","birnin gwari|Birnin Gwari","chikun|Chikun","giwa|Giwa","kajuru|Kajuru","igabi|Igabi","ikara|Ikara","jaba|Jaba","jema`a|Jema`a","kachia|Kachia","kaduna north|Kaduna North","kagarko|Kagarko","kauru|Kauru","kabau|Kabau","kudan|Kudan","lere|Lere","makarfi|Makarfi","sabon-gari|Sabon-gari","sanga|Sanga","soba|Soba","zangon-kataf|Zangon-Kataf","zaria|Zaria"];
  }else if(s1.value == "Kano"){
    var optionArray = ["|","ajigi|Ajigi","albasu|Albasu","bagwai|Bagwai","bebeji|Bebeji","bichi|Bichi","bunkure|Bunkure","dala|Dala","dambatta|Dambatta","dawakin kudu|Dawakin Kudu","dawakin tofa|Dawakin tofa","doguwa|Doguwa","fagge|Fagge","gabasawa|Gabasawa","garko|Garko","garun mallam|Garun mallam","Gaya|Gaya","gezawa|Gezawa","gwale|Gwale","gwarzo|Gwarzo","kano|Kano","karay|Karay","kibiya|Kibiya","kiru|Kiru","kumbtso|Kumbtso","kunch|Kunch","kura|Kura","maidobi|Maidobi","makoda|Makoda","minjibir|Minjibir","nassarawa|Nassarawa","rano|Rano","rimin gado|Rimin gado","rogo|Rogo","shanono|Shanono","sumaila|Sumaila","takai|Takai","tarauni|Tarauni","tofa|Tofa","tsanyawa|Tsanyawa","tudunwada|Tudunwada","ungogo|Ungogo","warawa|Warawa","wudil|Wudil"];
  }else if(s1.value == "Katsina"){
    var optionArray = ["|","bakori|Bakori","batagarawa|Batagarawa","batsari|Batsari","baure|Baure","bindawa|Bindawa","charanchi|Charanchi","dan- musa|Dan- Musa","dandume|Dandume","danja|Danja","daura|Daura","dutsi|Dutsi","dutsin `ma|Dutsin `ma","faskar|Faskar","funtua|Funtua","ingawa|Ingawa","jibiya|Jibiya","kafur|Kafur","kaita|Kaita","kankara|Kankara","kankiya|Kankiya","katsina|Katsina"," furfi| Furfi","kusada|Kusada","mai aduwa|Mai aduwa","malumfashi|Malumfashi","mani|Mani","mash|Mash","musawa|Musawa","rimi|Rimi","sabuwa|Sabuwa","safana|Safana","sandamu|Sandamu","zango|Zango"];
  }else if(s1.value == "Kebbi"){
    var optionArray = ["|","aliero|Aliero","arewa dandi|Arewa Dandi","argungu|Argungu","augie|Augie","bagudo|Bagudo","birnin kebbi|Birnin Kebbi","bunza|Bunza","dandi|Dandi","danko|Danko","fakai|Fakai","gwandu|Gwandu","jeda|Jeda","kalgo|Kalgo","koko-besse|Koko-besse","maiyaama|Maiyaama","ngaski|Ngaski","sakaba|Sakaba","shanga|Shanga","suru|Suru","wasugu|Wasugu","yauri|Yauri","zuru|Zuru"];
  }else if(s1.value == "Kogi"){
    var optionArray = ["|","adavi|Adavi","ajaokuta|Ajaokuta","ankpa|Ankpa","bassa|Bassa","dekina|Dekina","yagba east|Yagba east","ibaji|Ibaji","idah|Idah","igalamela|Igalamela","ijumu|Ijumu","kabba bunu|Kabba bunu","kogi|Kogi","mopa muro|Mopa muro","ofu|Ofu","ogori magongo|Ogori magongo","okehi|Okehi","okene|Okene","olamaboro|Olamaboro","omala|Omala","yagba west|Yagba west"];
  }else if(s1.value == "Kwara"){
    var optionArray = ["|","asa|Asa","baruten|Baruten","ede|Ede","ekiti|Ekiti","ifelodun|Ifelodun","ilorin south|Ilorin south","ilorin west|Ilorin west","ilorin east|Ilorin east","irepodun|Irepodun","isin|Isin","kaiama|Kaiama","moro|Moro","offa|Offa","oke ero|Oke ero","oyun|Oyun","pategi|Pategi"];
  }else if(s1.value == "Lagos"){
    var optionArray = ["|","agege|Agege","alimosho ifelodun|Alimosho Ifelodun","alimosho|Alimosho","amuwo-odofin|Amuwo-Odofin","apapa|Apapa","badagry|Badagry","epe|Epe","eti-Osa|Eti-Osa","ibeju- lekki|Ibeju- Lekki","ifako/ijaye|Ifako/Ijaye","ikeja|Ikeja","ikorodu|Ikorodu","kosofe|Kosofe","lagos island|Lagos Island","lagos mainland|Lagos Mainland","mushin|Mushin","ojo|Ojo","oshodi -isolo|Oshodi -Isolo","shomolu|Shomolu","surulere|Surulere"];
  }else if(s1.value == "Nasarawa"){
    var optionArray = ["|","akwanga|Akwanga","awe|Awe","doma|Doma","karu|Karu","keana|Keana","keffi|Keffi","kokona|Kokona","lafia|Lafia","nassarawa|Nassarawa","nassarawa/eggon|Nassarawa/Eggon","obi|Obi","toto|Toto","wamba|Wamba"];
  }else if(s1.value == "Niger"){
    var optionArray = ["|","agaie|Agaie","agwara|Agwara","bida|Bida","borgu|Borgu","bosso|Bosso","chanchanga|Chanchanga","edati|Edati","gbako|Gbako","gurara|Gurara","kitcha|Kitcha","kontagora|Kontagora","lapai|Lapai","lavun|Lavun","magama|Magama","mariga|Mariga","mokwa|Mokwa","moshegu|Moshegu","muya|Muya","paiko|Paiko","rafi|Rafi","shiroro|Shiroro","suleja|Suleja","tawa-wushishi|Tawa-Wushishi"];
  }else if(s1.value == "Ogun"){
    var optionArray = ["|","abeokuta south|Abeokuta south","abeokuta north|Abeokuta north","ado-odo/otta|Ado-odo/otta","agbado south|Agbado south","agbado north|Agbado north","ewekoro|Ewekoro","idarapo|Idarapo","ifo|Ifo","ijebu east|Ijebu east","ijebu north|Ijebu north","ikenne|Ikenne","ilugun alaro|Ilugun Alaro","imeko afon|Imeko afon","ipokia|Ipokia","obafemi/owode|Obafemi/owode","odeda|Odeda","odogbolu|Odogbolu","ogun waterside|Ogun waterside","sagamu|Sagamu"];
  }else if(s1.value == "Ondo"){
    var optionArray = ["|","akoko north|Akoko north","akoko north east|Akoko north east","akoko south east|Akoko south east","akoko south|Akoko south","akure north|Akure north","akure|Akure","idanre|Idanre","ifedore|Ifedore","ese odo|Ese odo","ilaje|Ilaje","ilaje oke-igbo|Ilaje oke-igbo","irele|Irele","odigbo|Odigbo","okitipupa|Okitipupa","ondo|Ondo","ondo east|Ondo east","ose|Ose","owo|Owo"];
  }else if(s1.value == "Osun"){
    var optionArray = ["|","atakumosa west|Atakumosa west","atakumosa east|Atakumosa east","ayeda-ade|Ayeda-ade","ayedire|Ayedire","bolawaduro|Bolawaduro","boripe|Boripe","ede|Ede","ede north|Ede north","egbedore|Egbedore","ejigbo|Ejigbo","ife north|Ife north","ife central|Ife central","ife south|Ife south","ife east|Ife east","ifedayo|Ifedayo","ifelodun|Ifelodun","ilesha west|Ilesha west","Ila- orangun|Ila- orangun","ilesah east|Ilesah east","irepodun|Irepodun","irewole|Irewole","isokan|Isokan","iwo|Iwo","obokun|Obokun","odo-otin|Odo-otin","ola oluwa|Ola oluwa","olorunda|Olorunda","oriade|Oriade","orolu|Orolu","osogbo|Osogbo"];
  }else if(s1.value == "Oyo"){
    var optionArray = ["|","afijio|Afijio","akinyele|Akinyele","attba|Attba","atigbo|Atigbo","egbeda|Egbeda","ibadan north east|Ibadan north east","ibadan central|Ibadan central","ibadan south east|Ibadan south east","ibadan west|Ibadan west","ibarapa east|Ibarapa east","ibarapa north|Ibarapa north","ido|Ido","ifedapo|Ifedapo","ifeloju|Ifeloju","irepo|Irepo","iseyin|Iseyin","itesiwaju|Itesiwaju","iwajowa|Iwajowa","iwajowa olorunshogo|Iwajowa olorunshogo","kajola|Kajola","lagelu|Lagelu","ogbomosho north|Ogbomosho north","ogbomosho south|Ogbomosho south","ogo oluwa|Ogo oluwa","oluyole|Oluyole","ona ara|Ona ara","ore lope|Ore lope","orire|Orire","oyo east|Oyo east","oyo west|Oyo west","saki east|Saki east","saki west|Saki west","surulere|Surulere"];
  }else if(s1.value == "Plateau"){
    var optionArray = ["|","barkin/ladi|Barkin/ladi","bassa|Bassa","bokkos|Bokkos","jos north|Jos north","jos east|Jos east","jos south|Jos south","kanam|Kanam","jema`a|Jema`a","riyom|Riyom","langtang north|Langtang north","langtang south|Langtang south","mangu|Mangu","mikang|Mikang","pankshin|Pankshin","qua`an pan|Qua`an pan","shendam|Shendam"];
  }else if(s1.value == "Rivers"){
    var optionArray = ["|","abua/odial|Abua/Odial","ahoada west|Ahoada west","akuku toru|Akuku toru","andoni|Andoni","asari toru|Asari toru","bonny|Bonny","degema|Degema","eleme|Eleme","emohua|Emohua","etche|Etche","gokana|Gokana","ikwerre|Ikwerre","oyigbo|Oyigbo","khana|Khana","obio/akpor|Obio/Akpor","ogba east /edoni|Ogba east /Edoni","ogu/bolo|Ogu/bolo","okrika|Okrika","omumma|Omumma","opobo/nkoro|Opobo/Nkoro","portharcourt|Portharcourt","tai|Tai"];
  }else if(s1.value == "Sokoto"){
    var optionArray = ["|","binji|Binji","bodinga|Bodinga","dange/shuni|Dange/shuni","gada|Gada","goronyo|Goronyo","gudu|Gudu","gwadabawa|Gwadabawa","illella|Illella","kebbe|Kebbe","kware|Kware","rabah|Rabah","sabon -birni|Sabon -Birni","shagari|Shagari","silame|Silame","sokoto south|Sokoto south","sokoto north|Sokoto north","tambuwal|Tambuwal","tangaza|Tangaza","tureta|Tureta","wamakko|Wamakko","wurno|Wurno","yabo|Yabo"];
  }else if(s1.value == "Taraba"){
    var optionArray = ["|","akdo -kola|Akdo -kola","bali|Bali","donga|Donga","gashaka|Gashaka","gassol|Gassol","ibi|Ibi","jalingo|Jalingo","k/lamido|K/Lamido","kurmi|Kurmi","lan|lan","sardauna|Sardauna","tarum|Tarum","ussa|Ussa","wukari|Wukari","yorro|Yorro","zing|Zing"];
  }else if(s1.value == "Yobe"){
    var optionArray = ["|","borsari|Borsari","damaturu|Damaturu","fika|Fika","fune|Fune","geidam|Geidam","gogaram|Gogaram","gujba|Gujba","gulani|Gulani","jakusko|Jakusko","karasuwa|Karasuwa","machina|Machina","nagere|Nagere","nguru|Nguru","potiskum|Potiskum","tarmua|Tarmua","yunusari|Yunusari","yusufari|Yusufari","gashua|Gashua"];
  }else if(s1.value == "Zamfara"){
    var optionArray = ["|","anka|Anka","bukkuyum|Bukkuyum","dungudu|Dungudu","chafe|Chafe","gummi|Gummi","gusau|Gusau","isa|Isa","kaura/namoda|Kaura/Namoda","mradun|Mradun","maru|Maru","shinkafi|Shinkafi","talata/mafara|Talata/Mafara","zumi|Zumi"];
  }

  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
</script>	

    <div class='table_responsive'>
<div style='background-color:green;text-align:center;color:white;'>
    <?php
     $fid 		= $_SESSION['username'];
   
    error_reporting();   
    $country = $_POST['country'];
    $State = $_POST['state'];
    $LGA = $_POST['LGA'];
    $StreetArea = $_POST['street'];
	$staffID = $_POST['staffID'];

    if (isset($_POST['submit'])){
		$_SESSION['staffID'] = htmlentities($_POST['staffID']);
        $_SESSION['country'] = htmlentities($_POST['country']);
        $_SESSION['State'] = htmlentities($_POST['state']);
        $_SESSION['LGA'] = htmlentities($_POST['LGA']);
        $_SESSION['StreetArea'] = htmlentities($_POST['street']);
         $sql = "INSERT into residentialcontact (country, state, LGA, street, staffID)
         values ('$country', '$State', '$LGA', '$StreetArea', '$staffID') ";

         if (mysqli_query($con, $sql)){

          echo "<p class='btn-lg btn-success'>Residential Address Successfully Created";
      ?>

            <script>

            setTimeout(function(){
            window.location.href = 'staff_marriage.php';
            }, 2000);

            </script>
          </p>
      <?php
           
         } else {
            echo "Something Went Wrong";
         }
         
    }


?>
</div>
</div>
    <hr>
	<input type="hidden" class="form-control" name="staffID" value ="<?php echo $_SESSION['fileNo']; ?>"required><br>
    <b>Country</b>
    <select name="country" class="form-control">
    <option value="No Selection" class="form-control" name="country" required>Click to Select</option>
    <option value="Nigeria" class="form-control" name="country" value "Nigeria"required>Nigeria</option>
    <option value="Others" class="form-control" name="country" value "Others" required>Others</option>
    </select>
    <br/>
    <b>State of Residence :</b>
       <select id="State" class="form-control" name="state" onchange="populate(this.id,'LGA')">
  <option value=""></option>
  <option value="Abia" name="State">Abia</option>
  <option value="Adamawa" name="State">Adamawa</option>
  <option value="Anambra" name="State">Anambra</option>
  <option value="Akwa-Ibom" name="State">Akwa-Ibom</option>
  <option value="Bauchi" name="State">Bauchi</option>
  <option value="Bayelsa" name="State">Bayelsa</option>
  <option value="Benue" name="State">Benue</option>
  <option value="Borno" name="State">Borno</option>
  <option value="Cross-River" name="State">Cross-River</option>
  <option value="Delta" name="State">Delta</option>
  <option value="Ebonyi" name="State">Ebonyi</option>
  <option value="Edo" name="State">Edo</option>
  <option value="Ekiti" name="State">Ekiti</option>
  <option value="Enugu" name="State">Enugu</option>
  <option value="Gombe" name="State">Gombe</option>
  <option value="Imo" name="State">Imo</option>
  <option value="Jigawa" name="State">Jigawa</option>
  <option value="Kaduna" name="State">Kaduna</option>
  <option value="FCT" name="State">FCT</option>
  <option value="Kano" name="State">Katsina</option>
  <option value="Kebbi" name="State">Kogi</option>
  <option value="Kwara" name="State">Kwara</option>
  <option value="Lagos" name="State">Lagos</option>
  <option value="Nasarawa" name="State">Nasarawa</option>
  <option value="Niger" name="State">Niger</option>
  <option value="Ogun" name="State">Ogun</option>
  <option value="Ondo" name="State">Ondo</option>
  <option value="Osun" name="State">Osun</option>
  <option value="Oyo" name="State">Oyo</option>
  <option value="Plateau" name="State">Plateau</option>
  <option value="Rivers" name="State">Rivers</option>
  <option value="Sokoto" name="State">Sokoto</option>
  <option value="Taraba" name="State">Taraba</option>
  <option value="Yobe" name="State">Yobe</option>
  <option value="Zamfara" name="State">Zamfara</option>
</select>
<br/>
<b>Select Local Govt:</b>
<select id="LGA" class="form-control" name="LGA"></select>
<br>

    <label for="resdAddress"> Residential Address:</label><textarea class="form-control" rows="3" name="street"></textarea>

    
	

	<hr>
		
	<div>
		<input type="submit" class="btn btn-info" name="submit" value="Save">
	</div>   
                            
                        </div>
                    </div>
                   
                     
                    <!-- Column -->
                                </div>
                                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
