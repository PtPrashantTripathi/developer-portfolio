<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>श्री गणेश app by @ptprashanttripathi</title>

	<link rel="stylesheet" href="https://unpkg.com/papercss@1.4.0/dist/paper.min.css">

	<style>

		body {

		

		            background-image: url(assets/image/ganesha.jpeg);

		

		            background-repeat: no-repeat;

		

		            background-position: center;

		

					background-attachment: fixed;

		

		        }     

		

		        .card {

		

		            text-align: center;

		

		            width: 90%;

		

		            background-color: rgba(255, 255, 255, 0.6);

		

		            margin-top: 50px;

		

		        }        

		

		        footer {

		

		            text-align: center;

		

		            position: fixed;

		

		            bottom: 0;

		

		        }

	</style>

</head>

<body>

	<div class="container">

		<div class="row flex-center">

			<main class="card" id="card">

				<div class="card-header"><b style="color:red;">|| श्री गणेश प्रश्नावली यंत्र ||</b>

				</div>

				<div class="card-body center" id="newQuoteSection">

					<div class="row flex-center child-borders" id="ank" onclick="getQuote()"></div>

				</div>	<span class="card-footer" id="footer">अपने मन मे प्रश्न को रख कर भगवान श्रीगणेश का स्मरण करते हुए प्रश्नावली चक्र पर से एक अंक का चयन कीजिये,उस अंक के फलादेश को ही अपने अपने प्रश्न का उत्तर समझें।</span>

			</main>

		</div>

	</div>

	<div class="row flex-bottom flex-center">

		<footer>

			<p>A project by <a href="https://ptprashanttripathi.github.io/">@PtPrashantTripathi</a>

			</p>

		</footer>

	</div>

	<script>

		// Quotes

		

		        let quotes = [

		

		                "'आप जब भी समय मिले राम नाम का जप करें। आपकी मनोकामना अवश्य पूरी होगी।'",

		

		                "'आप जो कार्य करना चाह रहे हैं, उसमें हानि होने की संभावना है। कोई दूसरा कार्य करने के बारे में विचार करें। गाय को चारा खिलाएं।'",

		

		                "'आपकी चिंता दूर होने का समय आ गया है। कष्ट मिटेंगे और सफलता मिलेगी। आप रोज पीपल की पूजा करें।'",

		

		                "'आपको लाभ प्राप्त होगा। परिवार में वृद्धि होगी। सुख संपत्ति प्राप्त होने के योग भी बन रहे हैं। आप कुल देवता की पूजा करें।'",

		

		                "'आप शनिदेव की आराधना करें। व्यापारिक यात्रा पर जाना पड़े तो घबराएं नहीं। लाभ ही होगा।'",

		

		                "'रोज सुबह भगवान श्रीगणेश की पूजा करें। महीने के अंत तक आपकी सभी मनोकामनाएं पूरी हो जाएंगी।'",

		

		                "'पैसों की तंगी शीघ्र ही दूर होगी। परिवार में वृद्धि होगी। स्त्री से धन प्राप्त होगा।'",

		

		                "'आपको धन और संतान दोनों की प्राप्ति के योग बन रहे हैं। शनिवार को शनिदेव की पूजा करने से आपको लाभ होगा।'",

		

		                "'आपकी ग्रह दिशा अनुकूल चल रही है। जो वस्तु आपसे दूर चली गई है वह पुन: प्राप्त होगी।'",

		

		                "'शीघ्र ही आपको कोई प्रसन्नता का समाचार मिलने वाला है। आपकी मनोकामना भी पूरी होगी। प्रतिदिन पूजन करें।'",

		

		                "'यदि आपको व्यापार में हानि हो रही है तो कोई दूसरा व्यापार करें। पीपल पर रोज जल चढ़ाएं। सफलता मिलेगी।'",

		

		                "'राज्य की ओर से लाभ मिलेगा। पूर्व दिशा आपके लिए शुभ है। इस दिशा में यात्रा का योग बन सकता है। मान-सम्मान प्राप्त होगा।'",

		

		                "'कुछ ही दिनों बाद आपका श्रेष्ठ समय आने वाला है। कपड़े का व्यवसाय करेंगे तो बेहतर रहेगा। सब कुछ अनुकूल रहेगा।'",

		

		                "'जो इच्छा आपके मन में है वह पूरी होगी। राज्य की ओर से लाभ प्राप्ति का योग बन रहा है। मित्र या भाई से मिलाप होगा।'",

		

		                "'आपके सपने में स्वयं को गांव जाता देंखे तो शुभ समाचार मिलेगा। पुत्र से लाभ मिलेगा। धन प्राप्ति के योग भी बन रहे हैं।'",

		

		                "'आप देवी मां पूजा करें। मां ही सपने में आकर आपका मार्गदर्शन करेंगी। सफलता मिलेगी।'",

		

		                "'आपको अच्छा समय आ गया है। चिंता दूर होगी। धन एवं सुख प्राप्त होगा।'",

		

		                "'यात्रा पर जा सकते हैं। यात्रा मंगल, सुखद व लाभकारी रहेगी। कुलदेवी का पूजन करें।'",

		

		                "'आपके समस्या दूर होने में अभी करीब डेढ़ साल का समय शेष है। जो कार्य करें माता-पिता से पूछकर करें। कुल देवता व ब्राह्मण की सेवा करें।'",

		

		                "'शनिवार को शनिदेव का पूजन करें। गुम हुई वस्तु मिल जाएगी। धन संबंधी समस्या भी दूर हो जाएगी।'",

		

		                "'आप जो भी कार्य करेंगे उसमें सफलता मिलेगी। विदेश यात्रा के योग भी बन रहे हैं। आप श्रीगणेश का पूजन करें।'",

		

		                "'यदि आपके घर में क्लेश रहता है तो रोज भगवान की पूजा करें तथा माता-पिता की सेवा करें। आपको शांति का अनुभव होगा।'",

		

		                "'आपकी समस्याएं शीघ्र ही दूर होंगी। आप सिर्फ आपके काम में मन लगाएं और भगवान शंकर की पूजा करें।'",

		

		                "'आपके ग्रह अनुकूल नहीं है इसलिए आप रोज नवग्रहों की पूजा करें। इससे आपकी समस्याएं कम होंगी और लाभ मिलेगा।'",

		

		                "'पैसों की तंगी के कारण आपके घर में क्लेश हो रहा है। कुछ दिनों बाद आपकी यह समस्या दूर जाएगी। आप मां लक्ष्मी का पूजन रोज करें।'",

		

		                "'यदि आपके मन में नकारात्मक विचार आ रहे हैं तो उनका त्याग करें और घर में भगवान सत्यनारायण का कथा करवाएं। लाभ मिलेगा।'",

		

		                "'आप जो कार्य इस समय कर रहे हैं वह आपके लिए बेहतर नहीं है इसलिए किसी दूसरे कार्य के बारे में विचार करें। कुलदेवता का पूजन करें।'",

		

		                "'आप पीपल के वृक्ष की पूजा करें व दीपक लगाएं। आपके घर में तनाव नहीं होगा और धन लाभ भी होगा।'",

		

		                "'आप प्रतिदिन भगवान विष्णु, शंकर व ब्रह्मा की पूजा करें। इससे आपको मनचाही सफलता मिलेगी और घर में सुख-शांति रहेगी।'",

		

		                "'रविवार का व्रत एवं सूर्य पूजा करने से लाभ मिलेगा। व्यापार या नौकरी में थोड़ी सावधानी बरतें। आपको सफलता मिलेगी।'",

		

		                "'आपको व्यापार में लाभ होगा। घर में खुशहाली का माहौल रहेगा और सबकुछ भी ठीक रहेगा। आप छोटे बच्चों को मिठाई बांटें।'",

		

		                "'आप व्यर्थ की चिंता कर रहे हैं। सब कुछ ठीक हो रहा है। आपकी चिंता दूर होगी। गाय को चारा खिलाएं।'",

		

		                "'माता-पिता की सेवा करें, ब्राह्मण को भोजन कराएं व भगवान श्रीराम की पूजा करें। आपकी हर अभिलाषा पूरी होगी।'",

		

		                "'मनोकामनाएं पूरी होंगी। धन-धान्य एवं परिवार में वृद्धि होगी। कुत्ते को तेल चुपड़ी रोटी खिलाएं।'",

		

		                "'परिस्थितियां आपके अनुकूल नहीं है। जो भी करें सोच-समझ कर और अपने बुजुर्गो की राय लेकर ही करें। आप भगवान दत्तात्रेय का पूजन करें।'",

		

		                "'आप रोज भगवान श्रीगणेश को दुर्वा चढ़ाएं और पूजन करें। आपकी हर मुश्किल दूर हो जाएंगी। धैर्य बनाएं रखें।'",

		

		                "'आप जो कार्य कर रहे हैं वह जारी रखें। आगे जाकर आपको इसी में लाभ प्राप्त होगा। भगवान विष्णु का पूजन करें।'",

		

		                "'लगातार धन हानि से चिंता हो रही है तो घबराइए मत। कुछ ही दिनों में आपके लिए अनुकूल समय आने वाला है। मंगलवार को हनुमानजी को सिंदूर अर्पित करें।'",

		

		                "'आप भगवान सत्यनारायण की कथा करवाएं तभी आपके कष्टों का निवारण संभव है। आपको सफलता भी मिलेगी।'",

		

		                "'आपके लिए हनुमानजी का पूजन करना श्रेष्ठ रहेगा। खेती और व्यापार में लाभ होगा तथा हर क्षेत्र में सफलता मिलेगी।'",

		

		                "'आपको धन की प्राप्ति होगी। कुटुंब में वृद्धि होगी एवं चिंताएं दूर होंगी। कुलदेवी का पूजन करें।'",

		

		                "'आपको शीघ्र सफलता मिलने वाली है। माता-पिता व मित्रों का सहयोग मिलेगा। खर्च कम करें और गरीबों का दान करें।'",

		

		                "'रुका हुआ कार्य पूरा होगा। धन संबंधी समस्याएं दूर होंगी। मित्रों का सहयोग मिलेगा। सोच-समझकर फैसला लें। श्रीकृष्ण को माखन-मिश्री का भोग लगाएं।'",

		

		                "'धार्मिक कार्यों में मन लगाएं तथा प्रतिदिन पूजा करें। इससे आपको लाभ होगा और बिगड़ते काम बन जाएंगे।'",

		

		                "'धैर्य बनाएं रखें। बेकार की चिंता में समय न गवाएं। आपको मनोवांछित फल की प्राप्ति होगी। ईश्वर का चिंतन करें।'",

		

		                "'धार्मिक यात्रा पर जाना पड़ सकता है। इसमें लाभ मिलने की संभावना है। रोज गायत्री मंत्र का जप करें।'",

		

		                "'प्रतिदिन सूर्य को अध्र्य दें और पूजन करें। आपको शत्रुओं का भय नहीं सताएगा। आपकी मनोकामना पूरी होगी।'",

		

		                "'आप जो कार्य कर रहे  हैं वही करते रहें। पुराने मित्रों से मुलाकात होगी जो आपके लिए फायदेमंद रहेगी। पीपल को रोज जल चढ़ाएं।'",

		

		                "'अगर आपकी समस्या आर्थिक है तो आप रोज श्रीसूक्त का पाठ करें और लक्ष्मीजी का पूजा करें। आपकी समस्या दूर होगी।'",

		

		                "'आपका हक आपको जरुर मिलेगा। आप घबराएं नहीं बस मन लगाकर अपना काम करें। रोज पूजा अवश्य करें।'",

		

		                "'आप जो व्यापार करना चाहते हैं उसी में सफलता मिलेगी। पैसों के लिए कोई गलत कार्य न करें। आप रोज जरुरतमंद लोगों को दान-पुण्य करें।'",

		

		                "'एक महीने के अंदर ही आपकी मुसीबतें कम हो जाएंगी और सफलता मिलने लगेगी। आप कन्याओं को भोजन कराएं।'",

		

		                "'यदि आप विदेश जाने के बारे में सोच रहे हैं तो अवश्य जाएं। इसी में आपको सफलता मिलेगी। आप श्रीगणेश का आराधना करें।'",

		

		                "'आप जो भी कार्य करें किसी से पुछ कर करें अन्यथा हानि हो सकती है। विपरीत परिस्थिति से घबराएं नहीं। सफलता अवश्य मिलेगी।'",

		

		                "'आप मंदिर में रोज दीपक जलाएं, इससे आपको लाभ मिलेगा और मनोकामना पूरी होगी।'",

		

		                "'परिजनों की बीमारी के कारण चिंतित हैं तो रोज महामृत्युंजय मंत्र का जप करें। कुछ ही दिनों में आपकी यह समस्या दूर हो जाएगी।'",

		

		                "'आपके लिए समय अनुकूल नहीं है। अपने कार्य पर ध्यान दें। प्रमोशन के लिए रोज गाय को रोटी खिलाएं।'",

		

		                "'आपके भाग्य में धन-संपत्ति आदि सभी सुविधाएं हैं। थोड़ा धैर्य रखें व भगवान में आस्था रखकर लक्ष्मीजी को नारियल चढ़ाएं।'",

		

		                "'जो आप सोच रहे हैं वह काम जरुर पूरा होगा लेकिन इसमें किसी का सहयोग लेना पड़ सकता है। आप शनिदेव की उपासना करें।'",

		

		                "'आप अपने परिजनों से मनमुटाव न रखें तो ही आपको सफलता मिलेगी। रोज हनुमानजी के मंदिर में चौमुखी दीपक लगाएं।'",

		

		                "'यदि आप अपने करियर को लेकर चिंतित हैं तो श्रीगणेश की पूजा करने से आपको लाभ मिलेगा।'",

		

		                "'आप रोज शिवजी के मंदिर में जाकर एक लोटा जल चढ़ाएं और दीपक लगाएं। आपके रुके हुए काम हो जाएंगे।'",

		

		                "'आप जिस कार्य के बारे में जानना चाहते हैं वह शुभ नहीं है उसके बारे में सोचना बंद कर दें। नवग्रह की पूजा करने से आपको सफलता मिलेगी।'",

		

		                "'आप रोज आटे की गोलियां बनाकर मछलियों को खिलाएं। आपकी हर समस्या का निदान स्वत: ही हो जाएगा।'"

		

		            ]

		

		            // Get random quote and display 

		

		        function getQuote() {

		

		            var randomNumber = Math.floor(Math.random() * quotes.length);

		

		            document.getElementById('newQuoteSection').innerHTML = quotes[randomNumber];

		

		            document.getElementById('card').style.margin = "200px 0 0 0";

		

		            document.getElementById('footer').innerHTML = '<b style="color:red">|| धन्यवाद  ||</b>';

		

		        }

		

				for (var a = [1,2,3,4,5,6,7,8,9], i = a.length; i--; ) {

		

		        	var random = a.splice(Math.floor(Math.random() * (i + 1)), 1)[0];

		

		        	document.getElementById("ank").innerHTML +='<span class="col-4 col" style="background-color:">' + random + '</span>';

		

		    	}

	</script>

</body>

</html>