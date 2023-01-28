function show(table_id, row_name){
    var whole_rows = document.getElementById(table_id).getElementsByClassName(row_name);
    var current_shown = document.getElementById(table_id).getElementsByClassName("shown");
    
    console.log(whole_rows.length);
    console.log(current_shown.length);

    if( current_shown.length > 3){
        while(current_shown.length > 3){
            var cur_len = current_shown.length;
            current_shown[cur_len-1].className = current_shown[cur_len-1].className.replace(" shown", "");
        }
    }
    else if(current_shown.length <= 3 && whole_rows.length > 3){
        /*if only show top-3 and there are others, need to show thw whole rows*/
        for(var j = 3; j < whole_rows.length ; j++){
            whole_rows[j].classList.toggle("shown");
        }
    }
}

/*var master_more_btn = document.getElementById("master-more-btn");
var master_block = document.getElementById("regu_block1");
var mobile_nav_arrow_downs = document.getElementsByClassName("mobile-nav-arrow-down");

master_more_btn.addEventListener("click", function (){
    mobile_nav_arrow_downs[0].classList.toggle("show_more");
    show(master_block[0], "regulation_rows");
});*/
/*
const regu1_whole_rows = document.getElementById("regu_block1").getElementsByClassName("regulation_rows");
const regu2_whole_rows = document.getElementById("regu_block2").getElementsByClassName("regulation_rows");
*/
//console.log(regu_row_mst.length);

/*if(regu1_whole_rows.length > 0){
    for(var i = 0; i < 3; i++){
        regu1_whole_rows[i].className += " shown";   
    }
}
if(regu2_whole_rows.length > 0){
    for(var i = 0; i < 3; i++){
        regu2_whole_rows[i].className += " shown";   
    }
}*/