
var revarr = document.getElementById("revArr");
var bubS = document.getElementById("bubbleSort");
var insertionsort = document.getElementById("insertS");
var binSearch = document.getElementById("binSearch");
var linSearch = document.getElementById("linSearch");

revarr.addEventListener("click",function(e){
    e.preventDefault();
    var arr = document.getElementById("rev").value;
    var array = arr.split(",");
    
    console.log(array);
    let revarray=[];
    for(var i=array.length-1; i>=0; i--){
        console.log(array[i]);
        revarray.push(array[i]);
    }
    
    document.getElementById("reverse").innerHTML=revarray;
    

});

bubS.addEventListener("click", function(e){
    e.preventDefault();
    var arr = document.getElementById("bub").value;
    var array = arr.split(",");
    for (var i = 0; i < arr.length; i++) {

       
        for (var j = 0; j < (array.length - i - 1); j++) {

          if (array[j] > array[j + 1]) {

            
            var temp = array[j]
            array[j] = array[j + 1]
            array[j + 1] = temp
          }
        }
      }
      
      console.log(array);
      document.getElementById("sort1").innerHTML = array;
});

insertionsort.addEventListener("click", function(e){
    e.preventDefault();
    var arr = document.getElementById("insertionsort").value;
    var array = arr.split(",");

    for (let i = 0; i < array.length; i++) {
        let lowest = i
        for (let j = i + 1; j < array.length; j++) {
          if (array[j] < array[lowest]) {
            lowest = j
          }
        }
        if (lowest !== i) {
         
          [array[i], array[lowest]] = [array[lowest], array[i]]
        }
      }
      document.getElementById("sort2").innerHTML = array;
    
});

binSearch.addEventListener("click",function(e){
    e.preventDefault();
    var arr = document.getElementById("binary").value;
    var array = arr.split(",");
    let start=0, end=array.length-1;
    let x=document.getElementById("x").value;
         
    let flag=0;
    while (start<=end){
        let mid=Math.floor((start + end)/2);
  
        if (array[mid]===x){
            flag=1;
            document.getElementById("search").innerHTML =`The value is present at index ${mid}`;
            break;
        }

        else if (array[mid] < x)
             start = mid + 1;

        else
             end = mid - 1;
    }
    if(flag==0){
        document.getElementById("search").innerHTML =`The value is not present in the array`;
    }
    return true;
  
});

linSearch.addEventListener("click",function(e){
    e.preventDefault();
    var arr = document.getElementById("binary").value;
    var array = arr.split(",");
    let x=document.getElementById("x").value;
    let flag=0;
    for(let i=0;i<array.length;i++){
      if(array[i]==x){
        flag=1;
        document.getElementById("search").innerHTML =`The value is present at index ${i}`;
        break;
      }
    }
    if(flag===0){
      document.getElementById("search").innerHTML =`The value is not present in the array`;
    }
});