
//Tinary operators

//  console.log(1=='1')
//  console.log()
//  3==('1' || '2')?console.log(true):console.log(false)

//  if (condition) {
    
//  }else{

//  }

// color.map(e=>{
//     console.log(e)
// }); // map

// console.log('')

// color.filter(e =>{
//     console.log(e)
// })


// console.log('')


// for (let i = color.length-1; i >= 0; i--) {
//     const element = color[i];
//     console.log(element)
    
// }

// username = 'user name';

// let newu = username.split(' ')

// reassign = '';
// for (let i = 0; i < newu.length; i++) {
//     const element = newu[i];
//     reassign +=  element
    
// }
// console.log(reassign)

// console.log(color)


// let anchor =document.createElement('a')
// anchor.innerText='Home page'
// anchor.setAttribute('class', 'text-w')
// anchor.href = '#'
// let b = document.querySelector('.preview')
// let body = document.querySelector('body')

// // document.body.appendChild(anchor);
// b.appendChild(anchor)

// body.innerHTML += "Add This Text"
// console.log(anchor)


// let anchor  = document.createElement('a')
// let pre  = document.querySelector('.preview')

// anchor.innerText = 'Home Page';

// anchor.href="#"
// pre.appendChild(anchor)


div = document.createElement('div')
div.setAttribute('class','chatbox')

mainMsg = document.createElement('div')
mainMsg.setAttribute('class','main-chatbox')

div.appendChild(mainMsg)

container = document.createElement('div')
container.setAttribute('class','row')

input = document.createElement('input')
input.type = 'text'
input.placeholder = 'Enter message'

submit = document.createElement('input')
submit.type='submit'
submit.value='Send'

form = document.createElement('form')
form.id='messageForm'
form.method='POST'


container.appendChild(input)
container.appendChild(submit)

form.appendChild(container)
div.appendChild(form)

document.body.appendChild(div)


// var li;
let msgArr_ = JSON.parse(localStorage.getItem('messages'))?JSON.parse(localStorage.getItem('messages')):[];
form.onsubmit = (e)=>{
    e.preventDefault()
   const msg = e.target[0];
   
   if (msg.value !='clear') {
    // alert('helo')
   li = document.createElement('li')
   li.innerText = msg.value;
   mainMsg.appendChild(li)
   msgArr_.push(msg.value)
   msg.value=''
   localStorage.setItem('messages', JSON.stringify(msgArr_))
   }else if (msg.value=='clear') {
    localStorage.removeItem('messages')
    msg.value=''
   }
}

//Onload event listener
window.onload = () =>{
    msgArr_.map((e)=>{
        li = document.createElement('li')
        li.innerText = e;
        mainMsg.appendChild(li)
    })
}



