
// const name = 'Marvel Wilson';

//Get div element with class name
console.log(_indexArr)
console.log(Obj)
console.log(_ObjArr)

const textArea = document.querySelector('.preview')

let color = [
    'red',
    'blue',
    'yellow',
    'green',
    'purple',
    'pink',
]; //color varable

let indexPosition_ = 0;

const main = () => {
   textArea.style=`color:${color[indexPosition_]}`
   ++indexPosition_
   if (indexPosition_ >= (color.length-1)) {
    indexPosition_ = 0
   }
   console.log(textArea)
} //main execution function

textArea.addEventListener('click', main) //Event handler



// arithmetic operators

// + - * / %

//assignment operators

// = 

// condition operators

// == === != !

// logical operator

// && ||

// increment operators

//  ++ =+ +=

//Decrement operators

// -- =- -=

