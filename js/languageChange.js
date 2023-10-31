addLangBtnClickListener('en_btn', 'en');
addLangBtnClickListener('pl_btn', 'pl');


let lang_open = false;

function addLangBtnClickListener(id, language) {
    document.getElementById(id).addEventListener('click', function() {
        if (!lang_open) {
            document.getElementById('en_btn').style.display = 'flex';
            document.getElementById('pl_btn').style.display = 'flex';
            lang_open = true;
        } else {
            changeLanguage(language, this);
            setActiveButton(this);
            lang_open = false;
            // console.log('add click',id, language);
        }
    });
}

function changeLanguage(lang, el) {
    // console.log("Change language fun.",el.id, el, lang);
    el.classList.toggle('active');
    set_session(lang);
}

function set_session(lang){
    const uri = "/server/languageChange_f.php";
    const xmlhttp = new XMLHttpRequest();
    const fd = new FormData();

    xmlhttp.open('POST', uri, true);

    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            location.reload();
        }
    }
    fd.append('set_session', '1');
    fd.append('lang', lang);

    xmlhttp.send(fd);
}

// Function to set the active button and store its ID in localStorage
function setActiveButton(el) {
    let buttonId = el.id;

    el.style.display = 'flex';

    // Determine the corresponding button in the other pair
    const buttonMappings = {
        'pl_btn': 'en_btn',
        'en_btn': 'pl_btn'
    };

    let otherButtonId = buttonMappings[buttonId];

    // Add 'active' class to the corresponding button in the other pair
    let otherButton = document.getElementById(otherButtonId);
    if (otherButton) {
        otherButton.style.display = 'none';
    }

    // Store the active button ID in localStorage
    localStorage.setItem('activeButton', buttonId);
}

// Check if there is a stored active button ID and apply 'active' class
let storedButtonId = localStorage.getItem('activeButton');

// Set default button ID here if nothing in local storage
if (storedButtonId === 'null') {
    storedButtonId = 'en_btn';
}

if (storedButtonId) {
    let activeButton = document.getElementById(storedButtonId);
    if (activeButton) {
        setActiveButton(activeButton); // Set the active button based on the stored ID
    }
} else {
    // If there's no stored active button ID, set a default active button here
    let defaultActiveButton = document.getElementById('en_btn'); // Change 'en_btn' to your default button ID
    setActiveButton(defaultActiveButton);
}





