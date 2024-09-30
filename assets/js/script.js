function loadLanguage(langCode) {
    let langFile = 'assets/languages/lang-en.json'; 

    if (langCode === 'BR') {
        langFile = 'assets/languages/lang-pt.json'; 
    } else if (langCode === 'ES') {
        langFile = 'assets/languages/lang-es.json'; 
    }
    fetch(langFile)
        .then(response => response.json())
        .then(data => {
            applyTranslations(data); 
        })
        .catch(error => {
            console.error("Error loading language file:", error);
        });
}

function applyTranslations(translations) {
    const elements = document.querySelectorAll('[data-i18n]');

    elements.forEach(element => {
        const key = element.getAttribute('data-i18n');

        if (translations[key]) {
            element.innerText = translations[key];
        }
    });
}
function getCountryCode() {
    fetch('http://www.geoplugin.net/json.gp')
        .then(response => response.json())
        .then(data => {
            const countryCode = data.geoplugin_countryCode;
            loadLanguage(countryCode);
        })
        .catch(error => {
            console.error("Error fetching geolocation data:", error);
            loadLanguage('EN'); 
        });
}

getCountryCode();
