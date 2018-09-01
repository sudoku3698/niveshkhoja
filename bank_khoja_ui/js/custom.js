$(document).ready(function() {

    "use strict";



    $('#list-quo').on('show.bs.modal', function (event) {

     var button = $(event.relatedTarget); // Button that triggered the modal

       var service_type= button.data('servicetype'); // Extract info from data-* attributes

       var service_id= button.data('serviceid');

       // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).

       // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

       var modal = $(this);

       //modal.find('.modal-title').text('New message to ' + recipient);

       //modal.find('.modal-body input ').val(recipient);

       modal.find('#service_type').val(service_type);

       modal.find('#service_id').val(service_id);

    });



    $('#send-sms').on('show.bs.modal', function (event) {

     var button = $(event.relatedTarget); // Button that triggered the modal

       var service_type= button.data('servicetype'); // Extract info from data-* attributes

       var service_id= button.data('serviceid');

       // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).

       // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

       var modal = $(this);

       //modal.find('.modal-title').text('New message to ' + recipient);

       //modal.find('.modal-body input ').val(recipient);

       modal.find('#send_sms_service_type').val(service_type);

       modal.find('#send_sms_service_id').val(service_id);

    });

    $("#post_listing").click(function(){
        event.preventDefault();
        $.post(API_PATH+"add_listing", $("#add_listing").serialize(), function(data){
                if(data.status===0)
                {
                    $("#first_name").val('');
                    $("#last_name").val('');
                    $("#list_title").val('');
                    $("#list_phone").val('');
                    $("#listing_email").val('');
                    $("#list_addr").val('');
                    $("#listing_city").val('');
                    $("#service_type").val('');
                    $("#listing_description").val('');
                    alert(data.message);
                }else
                {
                    alert(data.message);
                }
        });

            
    });

    $("#post-quote").click(function(){  
     event.preventDefault();      

    $.post(API_PATH+"api/set_quotes", $("#set_quote").serialize(), function(data) {

        if(data.status==1)

        {

          $('#quote_sucess').text(data.message);

          $('#quote_sucess').css('display','block');

          $('#quote_warning').css('display','none');

          $("#get_quotes_fname").val('');

          $("#get_quotes_mobile").val('');

          $("#get_quotes_email").val('');

          $("#get_quotes_message").val('');

        }else

        {

          $('#quote_warning').text(data.message);

          $('#quote_sucess').css('display','none');

          $('#quote_warning').css('display','block');

        }

    });

   });



      $("#send-sms").click(function(){  

       event.preventDefault(); 

       $.post(API_PATH+"api/send_sms", $("#send_sms").serialize(), function(data) {

        if(data.status==1)

        {

          $('#send_sms_sucess').text(data.message);

          $('#send_sms_sucess').css('display','block');

          $('#send_sms_warning').css('display','none');

          $("#send_sms_mobile").val('');

        }else

        {

          $('#send_sms_warning').text(data.message);

          $('#send_sms_sucess').css('display','none');

          $('#send_sms_warning').css('display','block');

        }

       });

     });

    //LEFT MOBILE MENU OPEN

    $(".ts-menu-5").on('click', function() {

        $(".mob-right-nav").css('right', '0px');

    });



    //LEFT MOBILE MENU OPEN

    $(".mob-right-nav-close").on('click', function() {

        $(".mob-right-nav").css('right', '-270px');

    });



    //LEFT MOBILE MENU CLOSE

    $(".mob-close").on('click', function() {

        $(".mob-close").hide("fast");

        $(".menu").css('left', '-92px');

        $(".mob-menu").show("slow");

    });



    //mega menu

    $(".t-bb").hover(function() {

        $(".cat-menu").fadeIn(50);

    });

    $(".ts-menu").mouseleave(function() {

        $(".cat-menu").fadeOut(50);

    });



    //mega menu

    $(".sea-drop").on('click', function() {

        $(".sea-drop-1").fadeIn(100);

    });

    $(".sea-drop-1").mouseleave(function() {

        $(".sea-drop-1").fadeOut(50);

    });

    $(".dir-ho-t-sp").mouseleave(function() {

        $(".sea-drop-1").fadeOut(50);

    });



    //mega menu top menu

    $(".sea-drop-top").on('click', function() {

        $(".sea-drop-2").fadeIn(100);

    });

    $(".sea-drop-1").mouseleave(function() {

        $(".sea-drop-2").fadeOut(50);

    });

    $(".top-search").mouseleave(function() {

        $(".sea-drop-2").fadeOut(50);

    });



    //ADMIN LEFT MOBILE MENU OPEN

    $(".atab-menu").on('click', function() {

        $(".sb2-1").css("left", "0");

        $(".btn-close-menu").css("display", "inline-block");

    });



    //ADMIN LEFT MOBILE MENU CLOSE

    $(".btn-close-menu").on('click', function() {

        $(".sb2-1").css("left", "-350px");

        $(".btn-close-menu").css("display", "none");

    });



    //mega menu

    $(".t-bb").hover(function() {

        $(".cat-menu").fadeIn(50);

    });

    $(".ts-menu").mouseleave(function() {

        $(".cat-menu").fadeOut(50);

    });

    //review replay

    $(".edit-replay").on('click', function() {

        $(".hide-box").show();

    });



    //PRE LOADING

    $('#status').fadeOut();

    $('#preloader').delay(350).fadeOut('slow');

    $('body').delay(350).css({

        'overflow': 'visible'

    });



    $('.dropdown-button').dropdown({

        inDuration: 300,

        outDuration: 225,

        constrainWidth: 400, // Does not change width of dropdown to that of the activator

        hover: true, // Activate on hover

        gutter: 0, // Spacing from edge

        belowOrigin: false, // Displays dropdown below the button

        alignment: 'left', // Displays dropdown with edge aligned to the left of button

        stopPropagation: false // Stops event propagation

    });

    $('.dropdown-button2').dropdown({

        inDuration: 300,

        outDuration: 225,

        constrain_width: false, // Does not change width of dropdown to that of the activator

        hover: true, // Activate on hover

        gutter: ($('.dropdown-content').width() * 3) / 2.5 + 5, // Spacing from edge

        belowOrigin: false, // Displays dropdown below the button

        alignment: 'left' // Displays dropdown with edge aligned to the left of button

    });



    //Collapsible

    $('.collapsible').collapsible();



    //material select

    $('select').material_select();

	

    //AUTO COMPLETE CITY SELECT

      var cities;

     $.ajax({url: API_PATH+"get_cities", success: function(result){
         cities = result
         $('#select-city.autocomplete').autocomplete({

            data: cities,
    
            limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
    
            onAutocomplete: function(val) {
    
                // Callback function when value is autcompleted.
    
            },
    
            minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    
        });
        
         $('#top-select-city.autocomplete').autocomplete({

        //alert('ok')

            data: cities,
    
            limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
    
            onAutocomplete: function(val) {
    
                // Callback function when value is autcompleted.
    
            },
    
            minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    
        });
     }});


   // var cities1={"Kolhapur":null,"Port Blair":null,"Adilabad":null,"Adoni":null,"Amadalavalasa":null,"Amalapuram":null,"Anakapalle":null,"Anantapur":null,"Badepalle":null,"Banganapalle":null,"Bapatla":null,"Bellampalle":null,"Bethamcherla":null,"Bhadrachalam":null,"Bhainsa":null,"Bheemunipatnam":null,"Bhimavaram":null,"Bhongir":null,"Bobbili":null,"Bodhan":null,"Chilakaluripet":null,"Chirala":null,"Chittoor":null,"Cuddapah":null,"Devarakonda":null,"Dharmavaram":null,"Eluru":null,"Farooqnagar":null,"Gadwal":null,"Gooty":null,"Gudivada":null,"Gudur":null,"Guntakal":null,"Guntur":null,"Hanuman Junction":null,"Hindupur":null,"Hyderabad":null,"Ichchapuram":null,"Jaggaiahpet":null,"Jagtial":null,"Jammalamadugu":null,"Jangaon":null,"Kadapa":null,"Kadiri":null,"Kagaznagar":null,"Kakinada":null,"Kalyandurg":null,"Kamareddy":null,"Kandukur":null,"Karimnagar":null,"Kavali":null,"Khammam":null,"Koratla":null,"Kothagudem":null,"Kothapeta":null,"Kovvur":null,"Kurnool":null,"Kyathampalle":null,"Macherla":null,"Machilipatnam":null,"Madanapalle":null,"Mahbubnagar":null,"Mancherial":null,"Mandamarri":null,"Mandapeta":null,"Manuguru":null,"Markapur":null,"Medak":null,"Miryalaguda":null,"Mogalthur":null,"Nagari":null,"Nagarkurnool":null,"Nandyal":null,"Narasapur":null,"Narasaraopet":null,"Narayanpet":null,"Narsipatnam":null,"Nellore":null,"Nidadavole":null,"Nirmal":null,"Nizamabad":null,"Nuzvid":null,"Ongole":null,"Palacole":null,"Palasa Kasibugga":null,"Palwancha":null,"Parvathipuram":null,"Pedana":null,"Peddapuram":null,"Pithapuram":null,"Pondur":null,"Ponnur":null,"Proddatur":null,"Punganur":null,"Puttur":null,"Rajahmundry":null,"Rajam":null,"Ramachandrapuram":null,"Ramagundam":null,"Rayachoti":null,"Rayadurg":null,"Renigunta":null,"Repalle":null,"Sadasivpet":null,"Salur":null,"Samalkot":null,"Sangareddy":null,"Sattenapalle":null,"Siddipet":null,"Singapur":null,"Sircilla":null,"Srikakulam":null,"Srikalahasti":null,"Suryapet":null,"Tadepalligudem":null,"Tadpatri":null,"Tandur":null,"Tanuku":null,"Tenali":null,"Tirupati":null,"Tuni":null,"Uravakonda":null,"Venkatagiri":null,"Vicarabad":null,"Vijayawada":null,"Vinukonda":null,"Visakhapatnam":null,"Vizianagaram":null,"Wanaparthy":null,"Warangal":null,"Yellandu":null,"Yemmiganur":null,"Yerraguntla":null,"Zahirabad":null,"Rajampet":null,"Along":null,"Bomdila":null,"Itanagar":null,"Naharlagun":null,"Pasighat":null,"Abhayapuri":null,"Amguri":null,"Anandnagaar":null,"Barpeta":null,"Barpeta Road":null,"Bilasipara":null,"Bongaigaon":null,"Dhekiajuli":null,"Dhubri":null,"Dibrugarh":null,"Digboi":null,"Diphu":null,"Dispur":null,"Gauripur":null,"Goalpara":null,"Golaghat":null,"Guwahati":null,"Haflong":null,"Hailakandi":null,"Hojai":null,"Jorhat":null,"Karimganj":null,"Kokrajhar":null,"Lanka":null,"Lumding":null,"Mangaldoi":null,"Mankachar":null,"Margherita":null,"Mariani":null,"Marigaon":null,"Nagaon":null,"Nalbari":null,"North Lakhimpur":null,"Rangia":null,"Sibsagar":null,"Silapathar":null,"Silchar":null,"Tezpur":null,"Tinsukia":null,"Amarpur":null,"Araria":null,"Areraj":null,"Arrah":null,"Asarganj":null,"Aurangabad":null,"Bagaha":null,"Bahadurganj":null,"Bairgania":null,"Bakhtiarpur":null,"Banka":null,"Banmankhi Bazar":null,"Barahiya":null,"Barauli":null,"Barbigha":null,"Barh":null,"Begusarai":null,"Behea":null,"Bettiah":null,"Bhabua":null,"Bhagalpur":null,"Bihar Sharif":null,"Bikramganj":null,"Bodh Gaya":null,"Buxar":null,"Chandan Bara":null,"Chanpatia":null,"Chhapra":null,"Colgong":null,"Dalsinghsarai":null,"Darbhanga":null,"Daudnagar":null,"Dehri-on-Sone":null,"Dhaka":null,"Dighwara":null,"Dumraon":null,"Fatwah":null,"Forbesganj":null,"Gaya":null,"Gogri Jamalpur":null,"Gopalganj":null,"Hajipur":null,"Hilsa":null,"Hisua":null,"Islampur":null,"Jagdispur":null,"Jamalpur":null,"Jamui":null,"Jehanabad":null,"Jhajha":null,"Jhanjharpur":null,"Jogabani":null,"Kanti":null,"Katihar":null,"Khagaria":null,"Kharagpur":null,"Kishanganj":null,"Lakhisarai":null,"Lalganj":null,"Madhepura":null,"Madhubani":null,"Maharajganj":null,"Mahnar Bazar":null,"Makhdumpur":null,"Maner":null,"Manihari":null,"Marhaura":null,"Masaurhi":null,"Mirganj":null,"Mokameh":null,"Motihari":null,"Motipur":null,"Munger":null,"Murliganj":null,"Muzaffarpur":null,"Narkatiaganj":null,"Naugachhia":null,"Nawada":null,"Nokha":null,"Patna":null,"Piro":null,"Purnia":null,"Rafiganj":null,"Rajgir":null,"Ramnagar":null,"Raxaul Bazar":null,"Revelganj":null,"Rosera":null,"Saharsa":null,"Samastipur":null,"Sasaram":null,"Sheikhpura":null,"Sheohar":null,"Sherghati":null,"Silao":null,"Sitamarhi":null,"Siwan":null,"Sonepur":null,"Sugauli":null,"Sultanganj":null,"Supaul":null,"Warisaliganj":null,"Ahiwara":null,"Akaltara":null,"Ambagarh Chowki":null,"Ambikapur":null,"Arang":null,"Bade Bacheli":null,"Balod":null,"Baloda Bazar":null,"Bemetra":null,"Bhatapara":null,"Bilaspur":null,"Birgaon":null,"Champa":null,"Chirmiri":null,"Dalli-Rajhara":null,"Dhamtari":null,"Dipka":null,"Dongargarh":null,"Durg-Bhilai Nagar":null,"Gobranawapara":null,"Jagdalpur":null,"Janjgir":null,"Jashpurnagar":null,"Kanker":null,"Kawardha":null,"Kondagaon":null,"Korba":null,"Mahasamund":null,"Mahendragarh":null,"Mungeli":null,"Naila Janjgir":null,"Raigarh":null,"Raipur":null,"Rajnandgaon":null,"Sakti":null,"Tilda Newra":null,"Amli":null,"Silvassa":null,"Daman and Diu":null,"Asola":null,"Delhi":null,"Aldona":null,"Curchorem Cacora":null,"Madgaon":null,"Mapusa":null,"Margao":null,"Marmagao":null,"Panaji":null,"Ahmedabad":null,"Amreli":null,"Anand":null,"Ankleshwar":null,"Bharuch":null,"Bhavnagar":null,"Bhuj":null,"Cambay":null,"Dahod":null,"Deesa":null,"Dharampur":null,"Dholka":null,"Gandhinagar":null,"Godhra":null,"Himatnagar":null,"Idar":null,"Jamnagar":null,"Junagadh":null,"Kadi":null,"Kalavad":null,"Kalol":null,"Kapadvanj":null,"Karjan":null,"Keshod":null,"Khambhalia":null,"Khambhat":null,"Kheda":null,"Khedbrahma":null,"Kheralu":null,"Kodinar":null,"Lathi":null,"Limbdi":null,"Lunawada":null,"Mahesana":null,"Mahuva":null,"Manavadar":null,"Mandvi":null,"Mangrol":null,"Mansa":null,"Mehmedabad":null,"Modasa":null,"Morvi":null,"Nadiad":null,"Navsari":null,"Padra":null,"Palanpur":null,"Palitana":null,"Pardi":null,"Patan":null,"Petlad":null,"Porbandar":null,"Radhanpur":null,"Rajkot":null,"Rajpipla":null,"Rajula":null,"Ranavav":null,"Rapar":null,"Salaya":null,"Sanand":null,"Savarkundla":null,"Sidhpur":null,"Sihor":null,"Songadh":null,"Surat":null,"Talaja":null,"Thangadh":null,"Tharad":null,"Umbergaon":null,"Umreth":null,"Una":null,"Unjha":null,"Upleta":null,"Vadnagar":null,"Vadodara":null,"Valsad":null,"Vapi":null,"Veraval":null,"Vijapur":null,"Viramgam":null,"Visnagar":null,"Vyara":null,"Wadhwan":null,"Wankaner":null,"Adalaj":null,"Adityana":null,"Alang":null,"Ambaji":null,"Ambaliyasan":null,"Andada":null,"Anjar":null,"Anklav":null,"Antaliya":null,"Arambhada":null,"Atul":null,"Ballabhgarh":null,"Ambala":null,"Asankhurd":null,"Assandh":null,"Ateli":null,"Babiyal":null,"Bahadurgarh":null,"Barwala":null,"Bhiwani":null,"Charkhi Dadri":null,"Cheeka":null,"Ellenabad 2":null,"Faridabad":null,"Fatehabad":null,"Ganaur":null,"Gharaunda":null,"Gohana":null,"Gurgaon":null,"Haibat(Yamuna Nagar)":null,"Hansi":null,"Hisar":null,"Hodal":null,"Jhajjar":null,"Jind":null,"Kaithal":null,"Kalan Wali":null,"Kalka":null,"Karnal":null,"Ladwa":null,"Mandi Dabwali":null,"Narnaul":null,"Narwana":null,"Palwal":null,"Panchkula":null,"Panipat":null,"Pehowa":null,"Pinjore":null,"Rania":null,"Ratia":null,"Rewari":null,"Rohtak":null,"Safidon":null,"Samalkha":null,"Shahbad":null,"Sirsa":null,"Sohna":null,"Sonipat":null,"Taraori":null,"Thanesar":null,"Tohana":null,"Yamunanagar":null,"Arki":null,"Baddi":null,"Chamba":null,"Dalhousie":null,"Dharamsala":null,"Hamirpur":null,"Mandi":null,"Nahan":null,"Shimla":null,"Solan":null,"Sundarnagar":null,"Jammu":null,"Achabbal":null,"Akhnoor":null,"Anantnag":null,"Arnia":null,"Awantipora":null,"Bandipore":null,"Baramula":null,"Kathua":null,"Leh":null,"Punch":null,"Rajauri":null,"Sopore":null,"Srinagar":null,"Udhampur":null,"Amlabad":null,"Ara":null,"Barughutu":null,"Bokaro Steel City":null,"Chaibasa":null,"Chakradharpur":null,"Chandrapura":null,"Chatra":null,"Chirkunda":null,"Churi":null,"Daltonganj":null,"Deoghar":null,"Dhanbad":null,"Dumka":null,"Garhwa":null,"Ghatshila":null,"Giridih":null,"Godda":null,"Gomoh":null,"Gumia":null,"Gumla":null,"Hazaribag":null,"Hussainabad":null,"Jamshedpur":null,"Jamtara":null,"Jhumri Tilaiya":null,"Khunti":null,"Lohardaga":null,"Madhupur":null,"Mihijam":null,"Musabani":null,"Pakaur":null,"Patratu":null,"Phusro":null,"Ramngarh":null,"Ranchi":null,"Sahibganj":null,"Saunda":null,"Simdega":null,"Tenu Dam-cum- Kathhara":null,"Arasikere":null,"Bangalore":null,"Belgaum":null,"Bellary":null,"Chamrajnagar":null,"Chikkaballapur":null,"Chintamani":null,"Chitradurga":null,"Gulbarga":null,"Gundlupet":null,"Hassan":null,"Hospet":null,"Hubli":null,"Karkala":null,"Karwar":null,"Kolar":null,"Kota":null,"Lakshmeshwar":null,"Lingsugur":null,"Maddur":null,"Madhugiri":null,"Madikeri":null,"Magadi":null,"Mahalingpur":null,"Malavalli":null,"Malur":null,"Mandya":null,"Mangalore":null,"Manvi":null,"Mudalgi":null,"Mudbidri":null,"Muddebihal":null,"Mudhol":null,"Mulbagal":null,"Mundargi":null,"Mysore":null,"Nanjangud":null,"Pavagada":null,"Rabkavi Banhatti":null,"Raichur":null,"Ramanagaram":null,"Ramdurg":null,"Ranibennur":null,"Robertson Pet":null,"Ron":null,"Sadalgi":null,"Sagar":null,"Sakleshpur":null,"Sandur":null,"Sankeshwar":null,"Saundatti-Yellamma":null,"Savanur":null,"Sedam":null,"Shahabad":null,"Shahpur":null,"Shiggaon":null,"Shikapur":null,"Shimoga":null,"Shorapur":null,"Shrirangapattana":null,"Sidlaghatta":null,"Sindgi":null,"Sindhnur":null,"Sira":null,"Sirsi":null,"Siruguppa":null,"Srinivaspur":null,"Talikota":null,"Tarikere":null,"Tekkalakota":null,"Terdal":null,"Tiptur":null,"Tumkur":null,"Udupi":null,"Vijayapura":null,"Wadi":null,"Yadgir":null,"Adoor":null,"Akathiyoor":null,"Alappuzha":null,"Ancharakandy":null,"Aroor":null,"Ashtamichira":null,"Attingal":null,"Avinissery":null,"Chalakudy":null,"Changanassery":null,"Chendamangalam":null,"Chengannur":null,"Cherthala":null,"Cheruthazham":null,"Chittur-Thathamangalam":null,"Chockli":null,"Erattupetta":null,"Guruvayoor":null,"Irinjalakuda":null,"Kadirur":null,"Kalliasseri":null,"Kalpetta":null,"Kanhangad":null,"Kanjikkuzhi":null,"Kannur":null,"Kasaragod":null,"Kayamkulam":null,"Kochi":null,"Kodungallur":null,"Kollam":null,"Koothuparamba":null,"Kothamangalam":null,"Kottayam":null,"Kozhikode":null,"Kunnamkulam":null,"Malappuram":null,"Mattannur":null,"Mavelikkara":null,"Mavoor":null,"Muvattupuzha":null,"Nedumangad":null,"Neyyattinkara":null,"Ottappalam":null,"Palai":null,"Palakkad":null,"Panniyannur":null,"Pappinisseri":null,"Paravoor":null,"Pathanamthitta":null,"Payyannur":null,"Peringathur":null,"Perinthalmanna":null,"Perumbavoor":null,"Ponnani":null,"Punalur":null,"Quilandy":null,"Shoranur":null,"Taliparamba":null,"Thiruvalla":null,"Thiruvananthapuram":null,"Thodupuzha":null,"Thrissur":null,"Tirur":null,"Vadakara":null,"Vaikom":null,"Varkala":null,"Kavaratti":null,"Ashok Nagar":null,"Balaghat":null,"Betul":null,"Bhopal":null,"Burhanpur":null,"Chhatarpur":null,"Dabra":null,"Datia":null,"Dewas":null,"Dhar":null,"Gwalior":null,"Indore":null,"Itarsi":null,"Jabalpur":null,"Katni":null,"Kotma":null,"Lahar":null,"Lundi":null,"Maharajpur":null,"Mahidpur":null,"Maihar":null,"Malajkhand":null,"Manasa":null,"Manawar":null,"Mandideep":null,"Mandla":null,"Mandsaur":null,"Mauganj":null,"Mhow Cantonment":null,"Mhowgaon":null,"Morena":null,"Multai":null,"Murwara":null,"Nagda":null,"Nainpur":null,"Narsinghgarh":null,"Neemuch":null,"Nepanagar":null,"Niwari":null,"Nowgong":null,"Nowrozabad":null,"Pachore":null,"Pali":null,"Panagar":null,"Pandhurna":null,"Panna":null,"Pasan":null,"Pipariya":null,"Pithampur":null,"Porsa":null,"Prithvipur":null,"Raghogarh-Vijaypur":null,"Rahatgarh":null,"Raisen":null,"Rajgarh":null,"Ratlam":null,"Rau":null,"Rehli":null,"Rewa":null,"Sabalgarh":null,"Sanawad":null,"Sarangpur":null,"Sarni":null,"Satna":null,"Sausar":null,"Sehore":null,"Sendhwa":null,"Seoni":null,"Seoni-Malwa":null,"Shahdol":null,"Shajapur":null,"Shamgarh":null,"Sheopur":null,"Shivpuri":null,"Shujalpur":null,"Sidhi":null,"Sihora":null,"Singrauli":null,"Sironj":null,"Sohagpur":null,"Tarana":null,"Tikamgarh":null,"Ujhani":null,"Ujjain":null,"Umaria":null,"Vidisha":null,"Wara Seoni":null,"Ahmednagar":null,"Akola":null,"Amravati":null,"Baramati":null,"Chalisgaon":null,"Chinchani":null,"Devgarh":null,"Dhule":null,"Dombivli":null,"Durgapur":null,"Ichalkaranji":null,"Jalna":null,"Kalyan":null,"Latur":null,"Loha":null,"Lonar":null,"Lonavla":null,"Mahad":null,"Mahuli":null,"Malegaon":null,"Malkapur":null,"Manchar":null,"Mangalvedhe":null,"Mangrulpir":null,"Manjlegaon":null,"Manmad":null,"Manwath":null,"Mehkar":null,"Mhaswad":null,"Miraj":null,"Morshi":null,"Mukhed":null,"Mul":null,"Mumbai":null,"Murtijapur":null,"Nagpur":null,"Nalasopara":null,"Nanded-Waghala":null,"Nandgaon":null,"Nandura":null,"Nandurbar":null,"Narkhed":null,"Nashik":null,"Navi Mumbai":null,"Nawapur":null,"Nilanga":null,"Osmanabad":null,"Ozar":null,"Pachora":null,"Paithan":null,"Palghar":null,"Pandharkaoda":null,"Pandharpur":null,"Panvel":null,"Parbhani":null,"Parli":null,"Parola":null,"Partur":null,"Pathardi":null,"Pathri":null,"Patur":null,"Pauni":null,"Pen":null,"Phaltan":null,"Pulgaon":null,"Pune":null,"Purna":null,"Pusad":null,"Rahuri":null,"Rajura":null,"Ramtek":null,"Ratnagiri":null,"Raver":null,"Risod":null,"Sailu":null,"Sangamner":null,"Sangli":null,"Sangole":null,"Sasvad":null,"Satana":null,"Satara":null,"Savner":null,"Sawantwadi":null,"Shahade":null,"Shegaon":null,"Shendurjana":null,"Shirdi":null,"Shirpur-Warwade":null,"Shirur":null,"Shrigonda":null,"Shrirampur":null,"Sillod":null,"Sinnar":null,"Solapur":null,"Soyagaon":null,"Talegaon Dabhade":null,"Talode":null,"Tasgaon":null,"Tirora":null,"Tuljapur":null,"Tumsar":null,"Uran":null,"Uran Islampur":null,"Wadgaon Road":null,"Wai":null,"Wani":null,"Wardha":null,"Warora":null,"Warud":null,"Washim":null,"Yevla":null,"Uchgaon":null,"Udgir":null,"Umarga":null,"Umarkhed":null,"Umred":null,"Vadgaon Kasba":null,"Vaijapur":null,"Vasai":null,"Virar":null,"Vita":null,"Yavatmal":null,"Yawal":null,"Imphal":null,"Kakching":null,"Lilong":null,"Mayang Imphal":null,"Thoubal":null,"Jowai":null,"Nongstoin":null,"Shillong":null,"Tura":null,"Aizawl":null,"Champhai":null,"Lunglei":null,"Saiha":null,"Dimapur":null,"Kohima":null,"Mokokchung":null,"Tuensang":null,"Wokha":null,"Zunheboto":null,"Anandapur":null,"Anugul":null,"Asika":null,"Balangir":null,"Balasore":null,"Baleshwar":null,"Bamra":null,"Barbil":null,"Bargarh":null,"Baripada":null,"Basudebpur":null,"Belpahar":null,"Bhadrak":null,"Bhawanipatna":null,"Bhuban":null,"Bhubaneswar":null,"Biramitrapur":null,"Brahmapur":null,"Brajrajnagar":null,"Byasanagar":null,"Cuttack":null,"Debagarh":null,"Dhenkanal":null,"Gunupur":null,"Hinjilicut":null,"Jagatsinghapur":null,"Jajapur":null,"Jaleswar":null,"Jatani":null,"Jeypur":null,"Jharsuguda":null,"Joda":null,"Kantabanji":null,"Karanjia":null,"Kendrapara":null,"Kendujhar":null,"Khordha":null,"Koraput":null,"Malkangiri":null,"Nabarangapur":null,"Paradip":null,"Parlakhemundi":null,"Pattamundai":null,"Phulabani":null,"Puri":null,"Rairangpur":null,"Rajagangapur":null,"Raurkela":null,"Rayagada":null,"Sambalpur":null,"Soro":null,"Sunabeda":null,"Sundargarh":null,"Talcher":null,"Titlagarh":null,"Umarkote":null,"Karaikal":null,"Mahe":null,"Pondicherry":null,"Yanam":null,"Ahmedgarh":null,"Amritsar":null,"Barnala":null,"Batala":null,"Bathinda":null,"Bhagha Purana":null,"Budhlada":null,"Chandigarh":null,"Dasua":null,"Dhuri":null,"Dinanagar":null,"Faridkot":null,"Fazilka":null,"Firozpur":null,"Firozpur Cantt.":null,"Giddarbaha":null,"Gobindgarh":null,"Gurdaspur":null,"Hoshiarpur":null,"Jagraon":null,"Jaitu":null,"Jalalabad":null,"Jalandhar":null,"Jalandhar Cantt.":null,"Jandiala":null,"Kapurthala":null,"Karoran":null,"Kartarpur":null,"Khanna":null,"Kharar":null,"Kot Kapura":null,"Kurali":null,"Longowal":null,"Ludhiana":null,"Malerkotla":null,"Malout":null,"Maur":null,"Moga":null,"Mohali":null,"Morinda":null,"Mukerian":null,"Muktsar":null,"Nabha":null,"Nakodar":null,"Nangal":null,"Nawanshahr":null,"Pathankot":null,"Patiala":null,"Patran":null,"Patti":null,"Phagwara":null,"Phillaur":null,"Qadian":null,"Raikot":null,"Rajpura":null,"Rampura Phul":null,"Rupnagar":null,"Samana":null,"Sangrur":null,"Sirhind Fatehgarh Sahib":null,"Sujanpur":null,"Sunam":null,"Talwara":null,"Tarn Taran":null,"Urmar Tanda":null,"Zira":null,"Zirakpur":null,"Bali":null,"Banswara":null,"Ajmer":null,"Alwar":null,"Bandikui":null,"Baran":null,"Barmer":null,"Bikaner":null,"Fatehpur":null,"Jaipur":null,"Jaisalmer":null,"Jodhpur":null,"Lachhmangarh":null,"Ladnu":null,"Lakheri":null,"Lalsot":null,"Losal":null,"Makrana":null,"Malpura":null,"Mandalgarh":null,"Mandawa":null,"Merta City":null,"Mount Abu":null,"Nadbai":null,"Nagar":null,"Nagaur":null,"Nargund":null,"Nasirabad":null,"Nathdwara":null,"Navalgund":null,"Nawalgarh":null,"Neem-Ka-Thana":null,"Nelamangala":null,"Nimbahera":null,"Nipani":null,"Niwai":null,"Nohar":null,"Phalodi":null,"Phulera":null,"Pilani":null,"Pilibanga":null,"Pindwara":null,"Pipar City":null,"Prantij":null,"Pratapgarh":null,"Raisinghnagar":null,"Rajakhera":null,"Rajaldesar":null,"Rajgarh (Alwar)":null,"Rajgarh (Churu":null,"Rajsamand":null,"Ramganj Mandi":null,"Ratangarh":null,"Rawatbhata":null,"Rawatsar":null,"Reengus":null,"Sadri":null,"Sadulshahar":null,"Sagwara":null,"Sambhar":null,"Sanchore":null,"Sangaria":null,"Sardarshahar":null,"Sawai Madhopur":null,"Shahpura":null,"Sheoganj":null,"Sikar":null,"Sirohi":null,"Sojat":null,"Sri Madhopur":null,"Sujangarh":null,"Sumerpur":null,"Suratgarh":null,"Taranagar":null,"Todabhim":null,"Todaraisingh":null,"Tonk":null,"Udaipur":null,"Udaipurwati":null,"Vijainagar":null,"Gangtok":null,"Calcutta":null,"Arakkonam":null,"Arcot":null,"Aruppukkottai":null,"Bhavani":null,"Chengalpattu":null,"Chennai":null,"Chinna salem":null,"Coimbatore":null,"Coonoor":null,"Cuddalore":null,"Dharmapuri":null,"Dindigul":null,"Erode":null,"Gudalur":null,"Kanchipuram":null,"Karaikudi":null,"Karungal":null,"Karur":null,"Kollankodu":null,"Lalgudi":null,"Madurai":null,"Nagapattinam":null,"Nagercoil":null,"Namagiripettai":null,"Namakkal":null,"Nandivaram-Guduvancheri":null,"Nanjikottai":null,"Natham":null,"Nellikuppam":null,"Neyveli":null,"O' Valley":null,"Oddanchatram":null,"P.N.Patti":null,"Pacode":null,"Padmanabhapuram":null,"Palani":null,"Palladam":null,"Pallapatti":null,"Pallikonda":null,"Panagudi":null,"Panruti":null,"Paramakudi":null,"Parangipettai":null,"Pattukkottai":null,"Perambalur":null,"Peravurani":null,"Periyakulam":null,"Periyasemur":null,"Pernampattu":null,"Pollachi":null,"Polur":null,"Ponneri":null,"Pudukkottai":null,"Pudupattinam":null,"Puliyankudi":null,"Punjaipugalur":null,"Rajapalayam":null,"Ramanathapuram":null,"Rameshwaram":null,"Rasipuram":null,"Salem":null,"Sankarankoil":null,"Sankari":null,"Sathyamangalam":null,"Sattur":null,"Shenkottai":null,"Sholavandan":null,"Sholingur":null,"Sirkali":null,"Sivaganga":null,"Sivagiri":null,"Sivakasi":null,"Srivilliputhur":null,"Surandai":null,"Suriyampalayam":null,"Tenkasi":null,"Thammampatti":null,"Thanjavur":null,"Tharamangalam":null,"Tharangambadi":null,"Theni Allinagaram":null,"Thirumangalam":null,"Thirunindravur":null,"Thiruparappu":null,"Thirupuvanam":null,"Thiruthuraipoondi":null,"Thiruvallur":null,"Thiruvarur":null,"Thoothukudi":null,"Thuraiyur":null,"Tindivanam":null,"Tiruchendur":null,"Tiruchengode":null,"Tiruchirappalli":null,"Tirukalukundram":null,"Tirukkoyilur":null,"Tirunelveli":null,"Tirupathur":null,"Tiruppur":null,"Tiruttani":null,"Tiruvannamalai":null,"Tiruvethipuram":null,"Tittakudi":null,"Udhagamandalam":null,"Udumalaipettai":null,"Unnamalaikadai":null,"Usilampatti":null,"Uthamapalayam":null,"Uthiramerur":null,"Vadakkuvalliyur":null,"Vadalur":null,"Vadipatti":null,"Valparai":null,"Vandavasi":null,"Vaniyambadi":null,"Vedaranyam":null,"Vellakoil":null,"Vellore":null,"Vikramasingapuram":null,"Viluppuram":null,"Virudhachalam":null,"Virudhunagar":null,"Viswanatham":null,"Agartala":null,"Badharghat":null,"Dharmanagar":null,"Indranagar":null,"Jogendranagar":null,"Kailasahar":null,"Khowai":null,"Achhnera":null,"Adari":null,"Agra":null,"Aligarh":null,"Allahabad":null,"Amroha":null,"Azamgarh":null,"Bahraich":null,"Ballia":null,"Balrampur":null,"Banda":null,"Bareilly":null,"Chandausi":null,"Dadri":null,"Deoria":null,"Etawah":null,"Greater Noida":null,"Hardoi":null,"Jajmau":null,"Jaunpur":null,"Jhansi":null,"Kalpi":null,"Kanpur":null,"Laharpur":null,"Lakhimpur":null,"Lal Gopalganj Nindaura":null,"Lalitpur":null,"Lar":null,"Loni":null,"Lucknow":null,"Mathura":null,"Meerut":null,"Modinagar":null,"Muradnagar":null,"Nagina":null,"Najibabad":null,"Nakur":null,"Nanpara":null,"Naraura":null,"Naugawan Sadat":null,"Nautanwa":null,"Nawabganj":null,"Nehtaur":null,"NOIDA":null,"Noorpur":null,"Obra":null,"Orai":null,"Padrauna":null,"Palia Kalan":null,"Parasi":null,"Phulpur":null,"Pihani":null,"Pilibhit":null,"Pilkhuwa":null,"Powayan":null,"Pukhrayan":null,"Puranpur":null,"Purquazi":null,"Purwa":null,"Rae Bareli":null,"Rampur":null,"Rampur Maniharan":null,"Rasra":null,"Rath":null,"Renukoot":null,"Reoti":null,"Robertsganj":null,"Rudauli":null,"Rudrapur":null,"Sadabad":null,"Safipur":null,"Saharanpur":null,"Sahaspur":null,"Sahaswan":null,"Sahawar":null,"Sahjanwa":null,"Saidpur":null,"Sambhal":null,"Samdhan":null,"Samthar":null,"Sandi":null,"Sandila":null,"Sardhana":null,"Seohara":null,"Shahganj":null,"Shahjahanpur":null,"Shamli":null,"Shamsabad":null,"Sherkot":null,"Shikarpur":null,"Shikohabad":null,"Shishgarh":null,"Siana":null,"Sikanderpur":null,"Sikandra Rao":null,"Sikandrabad":null,"Sirsaganj":null,"Sitapur":null,"Soron":null,"Suar":null,"Sultanpur":null,"Tanda":null,"Tetri Bazar":null,"Thakurdwara":null,"Thana Bhawan":null,"Tilhar":null,"Tirwaganj":null,"Tulsipur":null,"Tundla":null,"Unnao":null,"Utraula":null,"Varanasi":null,"Vrindavan":null,"Warhapur":null,"Zaidpur":null,"Zamania":null,"Almora":null,"Bazpur":null,"Dehradun":null,"Haldwani":null,"Haridwar":null,"Jaspur":null,"Kashipur":null,"kichha":null,"Kotdwara":null,"Manglaur":null,"Mussoorie":null,"Nagla":null,"Nainital":null,"Pauri":null,"Pithoragarh":null,"Rishikesh":null,"Roorkee":null,"Sitarganj":null,"Tehri":null,"Muzaffarnagar":null,"Adra":null,"Alipurduar":null,"Arambagh":null,"Asansol":null,"Baharampur":null,"Bally":null,"Balurghat":null,"Bankura":null,"Barakar":null,"Barasat":null,"Bardhaman":null,"Bidhan Nagar":null,"Chinsura":null,"Contai":null,"Cooch Behar":null,"Darjeeling":null,"Haldia":null,"Howrah":null,"Jhargram":null,"Kolkata":null,"Mainaguri":null,"Mal":null,"Mathabhanga":null,"Medinipur":null,"Memari":null,"Monoharpur":null,"Murshidabad":null,"Nabadwip":null,"Naihati":null,"Panchla":null,"Pandua":null,"Paschim Punropara":null,"Purulia":null,"Raghunathpur":null,"Raiganj":null,"Rampurhat":null,"Ranaghat":null,"Sainthia":null,"Santipur":null,"Siliguri":null,"Sonamukhi":null,"Srirampore":null,"Suri":null,"Taki":null,"Tamluk":null,"Tarakeswar":null,"Chikmagalur":null,"Davanagere":null,"Dharwad":null,"Gadag":null};


	//AUTO COMPLETE SEARCH SELECT

    $('#select-search.autocomplete').autocomplete({

        data: {

            "Bank Details": 'images/menu/1.png',

            "Broker Subbroker": 'images/menu/4.png',

            "CFA Details": 'images/menu/2.png',

            "Insurance Details": 'images/menu/3.png',

            "Investment Advisors Details": 'images/menu/5.png',

            "Loan Details": 'images/menu/6.png',

            "Mutual Fund Distributor": 'images/menu/6.png',

            "Post Office Details": 'images/menu/7.png',

			"Research Analyst Details": 'images/menu/1.png',

        },

        limit: 8, // The max amount of results that can be shown at once. Default: Infinity.

        onAutocomplete: function(val) {

            // Callback function when value is autcompleted.

        },

        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.

    });	

	

    //AUTO COMPLETE CITY SELECT

   



	//AUTO COMPLETE SEARCH SELECT

    $('#top-select-search.autocomplete').autocomplete({

        data: {

            "Bank Details": 'images/menu/1.png',

            "Broker Subbroker": 'images/menu/4.png',

            "CFA Details": 'images/menu/2.png',

            "Insurance Details": 'images/menu/3.png',

            "Investment Advisors Details": 'images/menu/5.png',

            "Loan Details": 'images/menu/6.png',

            "Mutual Fund Distributor": 'images/menu/6.png',

            "Post Office Details": 'images/menu/7.png',

            "Research Analyst Details": 'images/menu/1.png',

        },

        limit: 8, // The max amount of results that can be shown at once. Default: Infinity.

        onAutocomplete: function(val) {

            // Callback function when value is autcompleted.

        },

        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.

    });		



    //HOME PAGE FIXED MENU

    $(window).scroll(function() {



        if ($(this).scrollTop() > 450) {

            $('.hom-top-menu').fadeIn();

            $('.cat-menu').hide();

        } else {

            $('.hom-top-menu').fadeOut();

        }

    });

});



function scrollNav() {

    $('.v3-list-ql-inn a').click(function() {

        //Toggle Class

        $(".active-list").removeClass("active-list");

        $(this).closest('li').addClass("active-list");

        var theClass = $(this).attr("class");

        $('.' + theClass).parent('li').addClass('active-list');

        //Animate

        $('html, body').stop().animate({

            scrollTop: $($(this).attr('href')).offset().top - 130

        }, 400);

        return false;

    });

    $('.scrollTop a').scrollTop();

}

scrollNav();



function get_city_id(city_id,check_box_id)

   {

     var data={};

     data.city_check_id=1;

     data.city_id=city_id;

     console.log(data);

     $(document).ready(function(){

        $.ajax({

          type: "POST",

          url: API_PATH+"add_city_filter",

          data: data,

          success: function(success){



            console.log(success)

            window.location.href=API_PATH+"search-list";

          }

        });

     });

   } 



   function get_cat_id(cat_id,check_box_id)

   {

      // alert(cat_id+'--->'+check_box_id)

        var data={};

        data.cat_check_id=document.getElementById(check_box_id).checked?1:0;

        data.cat_id=cat_id;

        //console.log(data)

     

     $(document).ready(function(){

        $.ajax({

          type: "POST",

          url: API_PATH+"add_cat_filter",

          data: data,

          success: function(success){



            console.log(success)

            window.location.href=API_PATH+"search-list";

          }

        });

     });

   } 



$(document).ready(function(){



   



  //$("#dir-hli").html('');

   // $("#top-select-city").val(localStorage.getItem("city"));

  //  $("#top-select-search").val(localStorage.getItem("service"));

   // $("#select-city").val(localStorage.getItem("city"));

   // $("#select-search").val(localStorage.getItem("service"));

   //  data={};

   //  data.city=localStorage.getItem("city");

   //  data.service=localStorage.getItem("service");

   // $(document).ready(function(){

   //     $.ajax({

    //      type: "POST",

   //       url: API_PATH+"get_services",

   //       data: data,

   //       success: function(success){



             //$("#dir-hli").html(success);

    //      }

   //     });

   // });

 });



function find_top_services()

{

     $('#dir-hli').focus();

    data={};

    data.city=$("#top-select-city").val();

    data.service=$("#top-select-search").val();

    

    localStorage.setItem("city", data.city);

    localStorage.setItem("service", data.service);

    $("#top-select-city").val(data.city);

    $("#top-select-search").val(data.service);

    $(document).ready(function(){

        $.ajax({

          type: "POST",

          url: API_PATH+"get_service_list",

          data: data,

          success: function(success){



             $("#service_list").html(success);

             url = "list.html";

             $( location ).attr("href", url);

          }

        });

    });

}



function find_services()

{

   //alert('ok')

    $('#dir-hli').focus();

    data={};

    data.city=$("#top-select-city").val();

    data.service=$("#top-select-search").val();

    

    localStorage.setItem("city", data.city);

    localStorage.setItem("service", data.service);

    $("#top-select-city").val(data.city);

    $("#top-select-search").val(data.service);

    $(document).ready(function(){

        $.ajax({

          type: "POST",

          url: API_PATH+"get_services",

          data: data,

          success: function(success){



             $("#dir-hli").html(success);

          }

        });

    });

}



function find_primary_services()

{

   //alert('ok')

    $('#dir-hli').focus();

    data={};

    data.city=$("#select-city").val();

    data.service=$("#select-search").val();

    

    localStorage.setItem("city", data.city);

    localStorage.setItem("service", data.service);

    $("#top-select-city").val(data.city);

    $("#top-select-search").val(data.service);

    $(document).ready(function(){

        $.ajax({

          type: "POST",

          url: API_PATH+"get_services",

          data: data,

          success: function(success){



             $("#dir-hli").html(success);

          }

        });

    });

}





function get_list()

{

    var data={};

    data.city="";

    data.service="";

    data.city=localStorage.getItem("city");

    data.service=localStorage.getItem("service");

    $(document).ready(function(){

        $("#service_list").html('');

        $.ajax({

          type: "POST",

          url: API_PATH+"get_service_list",

          data: data,

          success: function(success){

             $("#service_list").html(success)

                console.log(success)

             //$("#dir-hli").html(success);

          }

        });

    });

}



//get_list();



function list_details(table,id)

{

  localStorage.setItem("selected_table", table);

  localStorage.setItem("selected_table_id", id);

   $(document).ready(function(){

      url = "listing-details.html";

      $( location ).attr("href", url);

    });

}



//run_list_details();

function run_list_details()

{

  selected_table=localStorage.getItem("selected_table");

  selected_table_id=localStorage.getItem("selected_table_id");

  if(selected_table!=="" && selected_table_id!=="")

  {

      var data={};

      data.selected_table=selected_table;

      data.id=selected_table_id

    $(document).ready(function(){

        $.ajax({

            type:"POST",

            url:API_PATH+"get_list_detail",

            data:data,

            success: function(success){

              service_details=success;

              if(selected_table=='bank_details')

              {

                 $("#title_name").html(service_details.BANK_NAME);

                 $("#title_address").html(service_details.BANK_ADDRESS);

                 $("#title_branch").html(service_details.BANK_BRANCH);

                 $("#title_email").html(service_details.BANK_EMAIL_ID);

                 $("#title_contact").html(service_details.BANK_CONTACT);   

                 $("#title_contact_person").html(service_details.BANK_EMAIL_ID);

              }

              if(selected_table=='investment_advisors_details')

              {

                 $("#title_name").html(service_details.INVESTMENT_ADVISORS_ABOUT);

                 $("#title_address").html(service_details.INVESTMENT_ADVISORS_ADDRESS);

                 $("#title_branch").html(service_details.INVESTMENT_ADVISORS_ADDRESS);

                 $("#title_email").html(service_details.INVESTMENT_ADVISORS_EMAIL_ID);

                 $("#title_contact").html(service_details.INVESTMENT_ADVISORS_CONTACT);   

                 $("#title_contact_person").html(service_details.INVESTMENT_ADVISORS_EMAIL_ID);

              }



              if(selected_table=='broker_subbroker')

              {

                 $("#title_name").html(service_details.BROKER_ABOUT);

                 $("#title_address").html(service_details.BROKER_ADDRESS);

                 $("#title_branch").html(service_details.BROKER_ADDRESS);

                 $("#title_email").html(service_details.BROKER_EMAIL_ID);

                 $("#title_contact").html(service_details.BROKER_CONTACT);   

                 $("#title_contact_person").html(service_details.BROKER_CONTACT_PERSON);

              }

                

              

              

              localStorage.setItem("list_detail_data", JSON.stringify(success));

            }

        })

      });

  }

}

  