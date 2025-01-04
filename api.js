function send_msg(){
    if(document.getElementById('name').value=="" ||
       document.getElementById('email').value=="" ||
       document.getElementById('msg').value==""){
        alert('Debe completar los campos');
        return;
        }
    var fd = new FormData();
    fd.append('name', document.getElementById('name').value);
    fd.append('email', document.getElementById('email').value);
    fd.append('msg', document.getElementById('msg').value);

    var request = new XMLHttpRequest();
    request.open('POST','api/api_sv_msg.php');
    request.onload = function(){
        console.log(request);
        alert("Mensaje enviado correctamente")
    }
    request.send(fd);
    
}