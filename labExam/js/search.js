function search() {
    let query = document.getElementById('searchInput').value;
    let xhttp = new XMLHttpRequest();
  
    xhttp.open('POST', 'search.php', true);
  
  
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('searchResults').innerHTML = this.responseText;
        }
    }
  
    xhttp.send('query=' + query);
  }