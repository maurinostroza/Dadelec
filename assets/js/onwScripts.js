$(window).load(function() {

    $.fn.cargarProductosMarca();
});



$.fn.cargarProductosMarca = function () {
	$.ajax({  
            url: 'cargarProductosMarca.php',  
            success: function(data) {  
                $('#DivDinamico').html(data);  
            }  
        });       
}


function PruebaScript(num){    
     $.ajax({  
            url: 'filtrarProductos.php?idCategoria='+num,  
            success: function(data) {  
                $('#DivDinamico').html(data);  
            }  
        });         
}

function EliminarProducto(id){    
    if (confirm('¿Está seguro de eliminar este producto?')) {

        $.ajax({  
            url: 'deleteProduct.php?idProducto='+id,  
            success: function(data) {  
                alert('Producto Eliminado');
                location.reload();
            }  
        });

    } else {
    // Do nothing!
    }
}

function PruebaGraba(number){    
    if(number==1) {
        window.location="../operations.html"
    }else{
        alert('Ocurrió un problema');
        window.location="addProduct.php"
    }
}

