function display_links(classname) {
  let links = document.getElementsByClassName(classname);
  let value = window.getComputedStyle(links[0]).getPropertyValue("display");
  if (value == "block") {
    for (let i = 0; i < links.length; i++) {
      links[i].style.display = "none";
    }
  } else {
    for (let i = 0; i < links.length; i++) {
      links[i].style.display = "block";
    }
  }
}
function cngBng(num) {
  let links = document.getElementsByClassName("filterBtns");
  let value = window
    .getComputedStyle(links[num])
    .getPropertyValue("background-color");
  if (value == "rgba(0, 0, 0, 0)") {
    links[num].style.backgroundColor = "red";
    links[num].style.color = "white";
    links[num].style.border = "1px solid black";
  } else {
    links[num].style.backgroundColor = "rgba(0, 0, 0, 0)";
    links[num].style.color = "red";
    links[num].style.border = "1px solid grey";
  }
}
function clrall(start, end) {
  let links = document.getElementsByClassName("filterBtns");
  for (let i = start; i <= end; i++) {
    links[i].style.backgroundColor = "rgba(0, 0, 0, 0)";
    links[i].style.color = "red";
    links[i].style.border = "1px solid grey";
  }
}

function chgTheme(lgo) {
  let c = lgo.classList;
  let r = "";
  for (let i = 0; i < c.length; i++) {
    if (c[i] == "fa-sun") {
      r = "fa-sun";
    }
  }
  if (r == "fa-sun") {
    lgo.classList.remove("fa-sun");
    lgo.classList.add("fa-moon");
    let main_body = document.getElementsByClassName("dark_theame");
    document.getElementById("nav").style.backgroundColor = "#f5f5f5";
    document.getElementById("logo").src = "project_images/logolight.png";
    let other = document.getElementsByClassName("container_dark");
    let text = document.getElementsByClassName("text_light");
    document.getElementById("banner").style.backgroundImage =
      "url(project_images/b14.jpg)";
    for (let i = 0; i < text.length; i++) {
      text[i].style.color = "black";
    }
    for (let i = 0; i < other.length; i++) {
      other[i].style.backgroundColor = "white";
    }
    let footer = document.getElementsByTagName("footer");
    for (let i = 0; i < main_body.length; i++) {
      main_body[i].style.backgroundColor = "#f5f5f5";
      footer[0].style.backgroundColor = "rgb(51, 51, 56)";
    }
    document.getElementsByTagName('hr')[0].style.border="1px solid #cfcece";
  } else {
    lgo.classList.remove("fa-moon");
    lgo.classList.add("fa-sun");
    let main_body = document.getElementsByClassName("dark_theame");
    document.getElementById("nav").style.backgroundColor = "rgb(0, 0, 0)";
    document.getElementById("logo").src = "project_images/logo2.png";
    let other = document.getElementsByClassName("container_dark");
    let text = document.getElementsByClassName("text_light");
    document.getElementById("banner").style.backgroundImage =
      "url(project_images/banner.jpg)";
    for (let i = 0; i < text.length; i++) {
      text[i].style.color = "white";
    }
    for (let i = 0; i < other.length; i++) {
      other[i].style.backgroundColor = "rgb(30, 30, 30)";
    }
    let footer = document.getElementsByTagName("footer");
    for (let i = 0; i < main_body.length; i++) {
      main_body[i].style.backgroundColor = "black";
      footer[0].style.backgroundColor = "black";
    }
    document.getElementsByTagName('hr')[0].style.border="1px solid rgb(103, 102, 102)";
  }
}

function rotateLogo(data) {
  let val = window
    .getComputedStyle(data.children[0])
    .getPropertyValue("transform");
  console.log(val);
  if (val == "matrix(-1, 0, 0, -1, 0, 0)") {
    data.children[0].style.transform = "rotate(360deg)";
    data.children[0].style.paddingLeft = "0";
    data.children[0].style.paddingRight = "0.7rem";
  } else {
    data.children[0].style.transform = "rotate(180deg)";
    data.children[0].style.paddingLeft = "0.7rem";
    data.children[0].style.paddingRight = "0";
  }
}
