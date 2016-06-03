
function colorCode(){
    var node = document.getElementsByClassName("codebg");
    //alert(node.length)
    alert(node[0].innerHTML);
    var list = node[0].innerHTML.split(/\n/);

    var patArray = new Array(
        /(\d+)/g,
        /\s(int)\s/g
    );
    var pattern = /(\d+)/g
    var keyword = /\s(int)\s/g
    var array = new Array();
    var index = 0; 
    for(i = 0; i < list.length; i++){

        var found = false;
        for(k=0; k<patArray.length && !found; k++){
            var match = list[i].match(patArray[k]);
            if(match !== null){
                array[index] = list[i].replace(patArray[k], "<span>$1</span>");
                index++;
                found = true;
            }
        }
        if(!found){
            array[index] = list[i];
            index++;
        }
    }

    for(i=0; i< array.length; i++){
        alert(array[i]);
    }

    //var list = node[0].innerHTML.trim().split(/\s+/);
    /*
    var str = "";
    for(i = 0; i < list.length; i++){
        var kw = /(\w+)/
        var number = "/(\d+)/"
        var match = list[i].match(kw)
        if(match !== null){
            if(match.length == 2){
                alert(match[1]);
            }
        }
        else if(list[i].match(number) !== null){
            if(match.length == 2){
                alert(match[1]);
            }
        }
    }
    alert(str);
    */
}
