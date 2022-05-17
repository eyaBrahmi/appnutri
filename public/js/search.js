var form = document.getElementById('search-form');
form.addEventListener('submit', function(e){
    e.preventDefault();
    var  token = document.querySelector('meta[name="csrf-token"]').content;
    
    var url = this.getAttribute('action');
    var q = document.getElementById('q').value;

    fetch(url, {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        methode: 'post',
        body: JSON.stringify({
            q:q
        })
    }).then(response => {
        response.json().then(data =>{
         
var aliment = document.getElementById('aliment');
aliment.innerHTML = '';

            Object.entries(data[0][1].forEach(element => {
                aliment.innerHTML += '<h1>${element.nom_aliment}</h1>  <p>${element.content}</p>'
                
            }))
    })
    
        
    }) .catch(error => {
        console.log(error)
    })

    
})