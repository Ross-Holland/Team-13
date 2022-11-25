function guitarFilter() {
    var filter;
    var row;
    var instrumentType;
    var keyProgramming;
    var txtValue;
    filter = "Electric Guitar";
    row = document.getElementsByTagName("tr");
  
    for (i = 0; i < row.length; i++) {
        instrumentType = row[i].getElementsByTagName("td")[2];
      if (instrumentType) {
        txtValue = instrumentType.textContent || instrumentType.innerText;
        if (txtValue.indexOf(filter) > -1) {
          row[i].style.display = "";
        } else {
          row[i].style.display = "none";
        }
      }
    }
  }