
var table, directions, headers;

window.onload =  init;

function init (){    
    table = document.getElementById('table'); 
    headers = table.querySelectorAll('th');
    directions = Array.from(headers).map(function sortByDefault(index){
        return "asc";
    });  
    
    //Loop over the headers
    [].forEach.call(headers, function(header, index){
        header.addEventListener('click', function(){
            sortTable(index);
        });
    });
}

function sortTable(column){
    var  type, table, headers, rows, switching, i, x, y, shouldSwitch, currentDir, switchcount = 0;   
    table = document.getElementById('table'); 
    headers = table.querySelectorAll('th');    
    type = headers[column].getAttribute('data-type');
    switching = true;
    currentDir = directions[column];
    while(switching){
        switching = false;
        rows = table.rows;
        //Loop through all table row (except the firt, wich contain table headers)
        for(i = 1; i < rows.length-1; i++){
            shouldSwitch = false;
            x = rows[i].getElementsByTagName('td')[column];
            y = rows[i+1].getElementsByTagName('td')[column];

            switch (type) {
                case 'string':
                    x =  x.innerHTML.toLowerCase();
                    y =  y.innerHTML.toLowerCase();
                    break;
                case 'number':                      
                    x =  parseFloat(x.innerHTML)
                    y =  parseFloat(y.innerHTML);                                       
                    break;                
                default:
                    x = x.innerHTML.toString();
                    y = y.innerHTML.toString();
                    break;
            }    
            if(currentDir == 'asc'){    
                if(x > y){
                    shouldSwitch = true;
                    break;
                }          
            }
            else if(currentDir == "desc"){     
                if(x < y){
                    shouldSwitch = true;
                    break;
                }          
            }  
        }
        if(shouldSwitch){
            rows[i].parentNode.insertBefore(rows[i+1], rows[i]);
            switching = true;
            switchcount++;            
        }
        else{
            if(switchcount == 0 && currentDir == "asc"){
                currentDir = "desc";
                switching = true;
            }
        }
    }
    if(directions[column] == "asc"){directions[column] = "desc";}
    else{directions[column] = "asc";}
}


