function loadLanguage(langCode) {
    let langFile = '/assets/languages/lang-en.json'; 
    document.body.classList.remove('br-lang', 'es-lang');
    if (langCode === 'BR') {
        langFile = '/assets/languages/lang-pt.json';
        document.body.classList.add('br-lang');
    } else if (langCode === 'ES') {
        langFile = '/assets/languages/lang-es.json'; 
        document.body.classList.add('es-lang');
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
    fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {
            const countryCode = data.country;
            loadLanguage(countryCode);
        })
        .catch(error => {
            console.error("Error fetching geolocation data:", error);
            loadLanguage('EN'); 
        });
}

getCountryCode();
