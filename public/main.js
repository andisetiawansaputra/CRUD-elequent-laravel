function drop(id){
    element = document.getElementById(id).classList.toggle("show");  
  }
$(".dosen").click(function() {
    var change = document.getElementById("namadosen");  
    change.innerHTML = $(this).val();  
    drop('selectdosen');
});  