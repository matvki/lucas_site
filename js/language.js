let lang = document.querySelector("input[name=language]");
lang.addEventListener('change', () => {
    if ((document.querySelector('#dayE').classList.contains('language')) === true) {
        document.querySelector("#dayE").classList.remove("language");
        document.querySelector("#nightE").classList.remove("language");
        document.querySelector("#luluE").classList.remove("language");
        document.querySelector("#dayF").classList.add("language");
        document.querySelector("#nightF").classList.add("language");
        document.querySelector("#luluF").classList.add("language");
    } else {
        document.querySelector("#dayF").classList.remove("language");
        document.querySelector("#nightF").classList.remove("language");
        document.querySelector("#luluF").classList.remove("language");
        document.querySelector("#dayE").classList.add("language");
        document.querySelector("#nightE").classList.add("language");
        document.querySelector("#luluE").classList.add("language");
    }
})