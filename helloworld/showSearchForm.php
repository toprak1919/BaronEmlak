<!-- 
 this is a partial page
 purpose is to show a search form under the top menu
 even though the file extension is .php, all of the code on this page is html
 -->
 <script>
var TipObject = {
  "Arazi": {
    "Lefkoşa": ["Alayköy","Balıkesir","Beyköy","Cihangir","Çağlayan","Çukurova","Değirmenlik","Demirhan","Dilekkaya","Dumlupınar","Düzova","Gaziköy","Gelibolu","Göçmenköy","Gökhan","Gönyeli","Gürpınar","Hamiitköy","Haspolat","Kalavaç","Kanlıköy","Kırklar","Kızılbaş","Köşklüçiftlik","Kumsal","Küçük Kaymaklı","Lefkoşa Surlariçi","Marmara","Meriç","Metehan","Minareliköy","Ortaköy","Sanayi Bölgesi","Taşkınköy","Türkeli","Yeniceköy","Yenikent","Yenişehir","Yılmazköy"],
    "Girne": ["Ağırdağ","Akçiçek","Akdeniz","Alagadi","Alsancak","Arapköy","Aşağı Girne","Bahçeli","Bellapais","Beşpamak","Boğaz","Çamlıbel","Çatalköy","Dağyolu","Dikmen","Doğanköy","Edremit","Esentepe","Girne Merkez","Göçeri","Hisarköy","Ilgaz","İncesu","Karaağaç","Karakum","Karaoğlanoğlu","Karmi","Karşıyaka","Kayalar","Kılıçarslar","Koruçam","Kozan","Kömürcü","Küçük Erenköy","Lapta","Malatya","Ozanköy","Pınarbaşı","Sadrazamnköy","Şirinevler","Taşkent","Tepebaşı","Türk Mahallesi","Yeşiltepe","Yukarı Girne","Zeytinlik"],
    "Mağusa": ["Akdoğan","Akova","Alaniçi","Aslanköy","Aygün","Baykal","Beyarmudu","Çanakkale","Dörtyol","Geçitkale","Gönendere","Gülseren","Güvercinlik","İnönü","Kaleiçi","Karakol","Korkuteli","Kurudere","Kuzucuk","Mağusa Merkez","Maraş","Mormenekşe","Mutluyaka","Paşaköy","Pınarlı","Sakarya","Salamis","Serdarlı",
"Tatlısu","Turunçlu","Tuzla","Ulukışla","Vadili","Yeni Boğaziçi","Yıldırım"], 
     "Güzelyurt": ["Aşağı Bostancı","Cengizköy","Güzelyurt Merkez","Kalkanlı","Yayla","Yukarı Bostancı","Zümrütköy"],
    "Lefke": ["Doğancı","Gaziveren","Gemikonağı","Lefke Merkez","Yedidalga","Yeşil Irmak","Yeşilyurt"],
    "İskele": ["Ağıllar","Altınova","Ardahan","Avtepe","Aygün","Bafra","Bahçeler","Balalan","Boğaziçi","Boğaz","Boğaztepe-Monarga","Boltaşlı","Büyükkonuk","Çayırova","Derince","Dipkarpaz","Ergazi","Esenköy","İskele Merkez","Kale Burnu","Kalecik","Kantara","Kaplıca","Kumyalı","Kurtuluş","Kuruova","Kuzucuk","Long Beach","Mehmetçik","Mersinlik","Ötüken","Pamuklu","Sınırüstü","Sipahi","Taşlıca","Topçuköy","Turnalar","Tuzluca","Yarköy","Yedikonuk","Yeni Erenköy","Yeşilköy","Ziyamet"]    
  },
  "Konut": {
    "Lefkoşa": ["Alayköy","Balıkesir","Beyköy","Cihangir","Çağlayan","Çukurova","Değirmenlik","Demirhan","Dilekkaya","Dumlupınar","Düzova","Gaziköy","Gelibolu","Göçmenköy","Gökhan","Gönyeli","Gürpınar","Hamiitköy","Haspolat","Kalavaç","Kanlıköy","Kırklar","Kızılbaş","Köşklüçiftlik","Kumsal","Küçük Kaymaklı","Lefkoşa Surlariçi","Marmara","Meriç","Metehan","Minareliköy","Ortaköy","Sanayi Bölgesi","Taşkınköy","Türkeli","Yeniceköy","Yenikent","Yenişehir","Yılmazköy"],
        "Girne": ["Ağırdağ","Akçiçek","Akdeniz","Alagadi","Alsancak","Arapköy","Aşağı Girne","Bahçeli","Bellapais","Beşpamak","Boğaz","Çamlıbel","Çatalköy","Dağyolu","Dikmen","Doğanköy","Edremit","Esentepe","Girne Merkez","Göçeri","Hisarköy","Ilgaz","İncesu","Karaağaç","Karakum","Karaoğlanoğlu","Karmi","Karşıyaka","Kayalar","Kılıçarslar","Koruçam","Kozan","Kömürcü","Küçük Erenköy","Lapta","Malatya","Ozanköy","Pınarbaşı","Sadrazamnköy","Şirinevler","Taşkent","Tepebaşı","Türk Mahallesi","Yeşiltepe","Yukarı Girne","Zeytinlik"],
    "Mağusa": ["Akdoğan","Akova","Alaniçi","Aslanköy","Aygün","Baykal","Beyarmudu","Çanakkale","Dörtyol","Geçitkale","Gönendere","Gülseren","Güvercinlik","İnönü","Kaleiçi","Karakol","Korkuteli","Kurudere","Kuzucuk","Mağusa Merkez","Maraş","Mormenekşe","Mutluyaka","Paşaköy","Pınarlı","Sakarya","Salamis","Serdarlı",
"Tatlısu","Turunçlu","Tuzla","Ulukışla","Vadili","Yeni Boğaziçi","Yıldırım"], 
     "Güzelyurt": ["Aşağı Bostancı","Cengizköy","Güzelyurt Merkez","Kalkanlı","Yayla","Yukarı Bostancı","Zümrütköy"],
    "Lefke": ["Doğancı","Gaziveren","Gemikonağı","Lefke Merkez","Yedidalga","Yeşil Irmak","Yeşilyurt"],
    "İskele": ["Ağıllar","Altınova","Ardahan","Avtepe","Aygün","Bafra","Bahçeler","Balalan","Boğaziçi","Boğaz","Boğaztepe-Monarga","Boltaşlı","Büyükkonuk","Çayırova","Derince","Dipkarpaz","Ergazi","Esenköy","İskele Merkez","Kale Burnu","Kalecik","Kantara","Kaplıca","Kumyalı","Kurtuluş","Kuruova","Kuzucuk","Long Beach","Mehmetçik","Mersinlik","Ötüken","Pamuklu","Sınırüstü","Sipahi","Taşlıca","Topçuköy","Turnalar","Tuzluca","Yarköy","Yedikonuk","Yeni Erenköy","Yeşilköy","Ziyamet"]    
  }
}
window.onload = function() {
  var TipSel = document.getElementById("Tip");
  var ŞehirSel = document.getElementById("Şehir");
  var chapterSel = document.getElementById("chapter");
  for (var x in TipObject) {
    TipSel.options[TipSel.options.length] = new Option(x, x);
  }
  TipSel.onchange = function() {
    //empty Chapters- and Şehirs- dropdowns
    chapterSel.length = 1;
    ŞehirSel.length = 1;
    //display correct values
    for (var y in TipObject[this.value]) {
      ŞehirSel.options[ŞehirSel.options.length] = new Option(y, y);
    }
  }
  ŞehirSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = TipObject[TipSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
 <div class="form-container">
<form name="form1" id="form1" action="searchrecipe.php">
Emlak: <select name="Tip" id="Tip">
    <option value="" name="Tip">Select Tip</option>
  </select>
  <br><br>
Şehir: <select name="Şehir" id="Şehir">
    <option value="" name="Şehir">Please select Tip first</option>
  </select>
  <br><br>
Bölge: <select name="Bölge" id="chapter">
    <option value="" name="Bölge">Please select Şehir first</option>
  </select>
  <br><br>
 <button type="submit">Ara</button>  
</form>



<h2>Emlak Ara</h2>
<p>Kapsamlı bir aramayla istediğiniz çeşit emlağı kolaylıkla bulun!</p>

</div>

