let checkbox = document.querySelector("input[name=night]");
checkbox.addEventListener('change', () => {
    document.querySelector("#box").classList.toggle("sun");
    document.querySelector("#box").classList.toggle("moon");
})
checkbox.addEventListener('change', () => {
    if ((document.querySelector('#formNight').classList.contains('display')) === true) {
        document.querySelector("#formNight").classList.remove("display");
        document.querySelector("#formDay").classList.add("display");
    } else {
        document.querySelector("#formNight").classList.add("display");
        document.querySelector("#formDay").classList.remove("display");
    }
})