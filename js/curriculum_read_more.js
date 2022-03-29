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