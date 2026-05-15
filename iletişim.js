
function nativeJsKontrol() {
    const form = document.getElementById('iletisimFormu');
    const ad = form.ad_soyad.value;
    const mail = form.eposta.value;

    if (ad === "" || mail === "") {
        alert("Native JS: Lütfen zorunlu alanları doldurun!");
    } else {
        alert("Native JS: Denetim başarılı!");
    }
}


const { createApp } = Vue;
createApp({
    data() {
        return {
            ad_soyad: '', eposta: '', konu: '', cinsiyet: '', mesaj: ''
        }
    },
    methods: {
        vueKontrol() {
            if (!this.ad_soyad || !this.eposta || !this.mesaj) {
                alert("Vue.js: Form eksik!");
            } else {
                alert("Vue.js: Denetim Başarılı! Sunucuya gönderiliyor...");
                document.getElementById('iletisimFormu').submit(); 
            }
        }
    }
}).mount('#app');