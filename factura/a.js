
function validar(){
    var num_inventa, descripcion, marca, modelo,  color, num_serie, estado, num_factura, fecha_adquisicio,  nom_provedor,
    imp_unit, pro_adqui, uni_adm, nom_resguar, fuen_finan, expresion;

    num_inventa = document.getElementById("num_inventa").value;
    descripcion = document.getElementById("descripcion").value;
    marca = document.getElementById("marca").value;
    modelo = document.getElementById("modelo").value;
    color = document.getElementById("color").value;
    num_serie = document.getElementById("num_serie").value;
    estado = document.getElementById("estado").value;
    num_factura = document.getElementById("num_factura").value;
    fecha_adquisicio = document.getElementById("fecha_adquisicio").value;
    nom_provedor = document.getElementById("nom_provedor").value;
    imp_unit = document.getElementById("imp_unit").value;
    pro_adqui = document.getElementById("pro_adqui").value;
    uni_adm = document.getElementById("uni_adm").value;
    nom_resguar = document.getElementById("nom_resguar").value;
    fuen_finan = document.getElementById("fuen_finan").value;
    


    if(num_inventa === ""){
        alert("El campo esta vacio");
        return false;

    }
    
    

}