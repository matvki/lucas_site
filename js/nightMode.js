// document.querySelector("#nightmode").addEventListener('click', () =>{
//     document.querySelector("#box").classList.toggle("sun");
//     document.querySelector("#box").classList.toggle("moon");
// });
// document.querySelector("#night").addEventListener('click', () =>{
//     document.querySelector("#night").classList.toggle("display");
//     document.querySelector("#day").classList.toggle("display");
// })
// document.querySelector("#day").addEventListener('click', () =>{
//     document.querySelector("#night").classList.toggle("display");
//     document.querySelector("#day").classList.toggle("display");
// })

// document.querySelector('.branding').addEventListener('click', () => {
//     document.querySelector(".branding").classList.add('clickA');
//     document.querySelector(".vues").classList.remove('clickA');
//     document.querySelector(".jaquette").classList.remove('clickA');
//     document.querySelector(".typo").classList.remove('clickA');
//     document.querySelector(".motif").classList.remove('clickA');
//     document.querySelector(".mais").classList.remove('clickA');
// })

let checkbox = document.querySelector("input[name=night]");
 checkbox.addEventListener('change', () =>{
    document.querySelector("#box").classList.toggle("sun");
    document.querySelector("#box").classList.toggle("moon");
 })
