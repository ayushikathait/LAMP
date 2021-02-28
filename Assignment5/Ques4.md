/*A javascript function to that extracts all the links from a webpage.*/


var x = document.querySelectorAll("a");
var myarray = []

/*Here we are finding all of the “a” elements on the page (a elements are links) and assigning them to the variable x. Then we create an array variable, but leave it empty for now.*/

for (var i=0; i<x.length; i++){
var nametext = x[i].textContent;
var cleantext = nametext.replace(/\s+/g, ' ').trim();
var cleanlink = x[i].href;
myarray.push([cleantext,cleanlink]);
};

/*We then loop over all the “a” elements in x, and for each element, we try to find the text content of the element and the link. For the text content, we replace the white space with single spaces and trim the text, as there may be large swathes of white space that would make our table unreadable.*/


function make_table() {
    var table = '<table><thead><th>Name</th><th>Links</th></thead><tbody>';
   for (var i=0; i<myarray.length; i++) {
            table += '<tr><td>'+ myarray[i][0] + '</td><td>'+myarray[i][1]+'</td></tr>';
    };
 
    var w = window.open("");
w.document.write(table); 
}
make_table()

