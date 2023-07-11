var obj = document.getElementById('div');
obj.innerText = "mohamed ibrahim zayed";



var arr = ['red', 'green', 'blue', 'purple'];

var num = 0;
obj.onclick = function() {



    this.style.color = arr[Math.round(Math.random() * 10) % arr.length];

    num++;
    num %= arr.length;


}


// obj.onselect = function() {
//     this.style.backgroundColor = 'red';

// }
// for (let i = 0; i < 10; i++) {
//     console.log(Math.round(Math.random() * 10) % arr.length);
// }