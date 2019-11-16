/**
 * Inserta en el contenedor una pagina. Render
 * @param {*} pathPage 
 * @param {*} contenedor 
 * @param {*} token 
 */
function openPage(pathPage, contenedor, token){
    $("#"+contenedor).hide();
    $("#"+contenedor).load(pathPage,null, function(response, status, xhr) {
            
        if(status == "success"){
            $("#"+contenedor).show("fade", 500);
        }
        
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#"+contenedor).html(msg + xhr.status + " " + xhr.statusText);
        }
    });    
}