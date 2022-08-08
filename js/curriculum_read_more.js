function read_more(n){
    var mst_field = 0;
    if(n === 1){
        /*read more in master field */
        console.log("mst field");
        mst_field = 1;
        var regu_rows = document.getElementsByClassName("ms_field");
        var current_shown = document.getElementsByClassName("shown");
    }
    else if( n === 2){
        /*read more in phd field */
        console.log("phd field");
        var regu_rows = document.getElementsByClassName("phd_field");
        var current_shown = document.getElementsByClassName("phdshown");
    }

    if( current_shown.length > 3)
    {
        while(current_shown.length > 3)
        {
            var cur_len = current_shown.length;
            var replacestr = "";
            if(mst_field){
                replacestr = " shown";
            }
            else{
                replacestr = " phdshown";
            }
            current_shown[cur_len-1].className = current_shown[cur_len-1].className.replace(replacestr, "");

        }
    }
    else if(current_shown.length <= 3 && regu_rows.length > 3){
        /*if only show top-3 and there are others, need to show thw whole rows*/
        var add_str = "";
        if(mst_field){
            add_str = " shown";
        }
        else{
            add_str = " phdshown";
        }
        for(var j = 3; j < regu_rows.length ; j++){
            regu_rows[j].className += add_str;
        }
    }
}




function showing_more(table_id, row_name){
    //console.log(table_id);
    //console.log(row_name);
    
    var whole_rows = document.getElementById(table_id).getElementsByClassName(row_name);
    var current_shown = document.getElementById(table_id).getElementsByClassName("shown");
   
    if( current_shown.length > 3)
    {
        while(current_shown.length > 3)
        {
            var cur_len = current_shown.length;
            current_shown[cur_len-1].className = current_shown[cur_len-1].className.replace(" shown", "");
        }
    }
    else if(current_shown.length <= 3 && whole_rows.length > 3){
        /*if only show top-3 and there are others, need to show thw whole rows*/
        for(var j = 3; j < whole_rows.length ; j++){
            whole_rows[j].className += " shown";
        }
    }
}


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