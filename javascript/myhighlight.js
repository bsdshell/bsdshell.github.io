
function colorCode(){
    var node = document.getElementsByClassName("codebg");
    alert("cool");
    alert(node.length)
    alert(node[0].innerHTML);
    var list = node[0].innerHTML.trim().split(/\s+/);

    var str = "";
    for(i = 0; i < list.length; i++){
        //str += list[i].replace(/(\w+)/, "<span class='kw'>$1</span>");
        var match = list[i].match(/(\w+)/)
        if(match === null){ 
            alert("null stuff");
        }else{
            if(match.length == 1){
                alert(match[0]);
            }
            else if(match.length == 2){
                alert(match[1]);
            }
        }

    }
    alert(str);
}
