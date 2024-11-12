const food_items= new Map();
function add_item(ele) {
    let add = ele.parentNode.children[0].children[1].innerHTML;
    add = parseInt(add);
    let total_food = document.getElementById('food_total').innerHTML;
    total_food = parseInt(total_food);
    let total = add + total_food;
    document.getElementById('food_total').innerHTML = total;
    let item = ele.parentNode.parentNode.children[0].innerHTML;
    let cls = ele.classList[0];
    cls = parseInt(cls);
    if (cls == 0) {
        let id=ele.id;
        id=parseInt(id);
        id=id+10;
        ele.classList.remove(ele.classList[0]);
        cls=cls+1;
        ele.className=cls;
        food_items.set(item,cls);
        document.getElementById('added_items').innerHTML += `<div  id='${id}'  style=
        'display:flex; align-item:center;justify-content:space-between;
        padding:0.1rem;'><span><i  onclick='delete_item(this)'
         style='font-size:0.9rem;padding-right:0.2rem;' 
        class="fa-regular fa-circle-xmark"></i>${item} <span>(Qt. ${cls})</span></span> 
        <span><span>Rs.</span> <span>${add}</span> </span></div>`;
    } else {
        cls=cls+1;
        let theid=ele.id;
        theid=parseInt(theid);
        theid=(theid+10);
        food_items.set(item,cls);
        document.getElementById(theid).children[0].children[1].innerHTML=`(Qt. ${cls})`;
        document.getElementById(theid).children[1].children[1].innerHTML=add*cls;
        ele.classList.remove(ele.classList[0]);
        ele.classList.add(cls);
        // document.getElementById('added_items').children[0].children[0].children[1].innerHTML=`(${cls})`;

    }
    total_payment();
}
function delete_food() {
    document.getElementById('food_total').innerHTML = 0;
    document.getElementById('added_items').innerHTML='';
    let price=document.getElementsByClassName('price');
    for(let i=0;i<price.length;i++){
        price[i].children[1].className='0';
    }
    food_items.clear();
    total_payment();
}
function delete_item(ele) {
    let food=ele.nextSibling.nodeValue.trim();
    food_items.delete(food);
    let theprice=ele.parentNode.parentNode.children[1].children[1].innerHTML;
    theprice=parseInt(theprice);
    let totalprice=document.getElementById('food_total').innerHTML;
    totalprice=parseInt(totalprice);
    document.getElementById('food_total').innerHTML=totalprice-theprice;
    let theid=ele.parentNode.parentNode.id;
    theid=parseInt(theid);
    
    theid=(theid-10);
    
    document.getElementById(theid).className='0';
    ele.parentNode.parentNode.remove();
    total_payment();
}
function total_payment(){
    let ticket=document.getElementById('ticket_amount').innerHTML;
    ticket=parseInt(ticket);
    let food=document.getElementById('food_total').innerHTML;
    food=parseInt(food);
    document.getElementById('total_amount').innerHTML=ticket+food;
    document.getElementById('total_amount_input').value=ticket+food;
}
total_payment();

