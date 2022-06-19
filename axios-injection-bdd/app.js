let tableau = [] ;

axios.get("familles.json")
.then(response => response)
.then(data=> { 
    console.log(data.data)
    let dataTotal = data.data;
    for(let i=0; i<dataTotal.length; i++) {
        parag.innerText += dataTotal[i].famille+'\n';
    }
    for(let i=0; i<dataTotal.length; i++) {
        tableau.push(dataTotal[i].famille);
    }

    var formData = new FormData();

    formData.append('famille', tableau);

    axios.post("bdd.php",formData).then(response => console.log(response.data));

}); 
