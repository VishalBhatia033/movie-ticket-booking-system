function chgDate(ele){
    ele.style.backgroundColor='red';
    ele.style.border='1px solid red';
    ele.style.color='white';
    let ch=ele.children;
    for(let i=0;i<ch.length;i++){
        ch[i].style.color='white';
    }
}