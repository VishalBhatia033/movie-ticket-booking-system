let details = {
  State: "",
};
let flg = false;
function selectState() {
  if (flg == false) {
    document.getElementById("location_container").style.display = "flex";
    flg = true;
  } else {
    document.getElementById("location_container").style.display = "none";
    flg = false;
  }
}
function stateVal(data) {
  details.State = data.innerHTML;
  document.getElementById("location_container").style.display = "none";
  flg = false;
  document.getElementById("state").innerHTML = details.State;
}

// function setLanguage(dta) {
//   let lang = document.getElementsByClassName("movie_language");
//   for (let i = 0; i < lang.length; i++) {
//     if (lang[i].innerHTML !== dta.innerHTML) {
//       lang[i].parentNode.parentNode.style.display = "none";
//     }else{
//       lang[i].parentNode.parentNode.style.display = "block";
//     }
//   }
// }
