   
        function calcula_densidad(){
        var T=88;
        //var radio= 6378e3;
        //var volumen= (4/3)*Math.PI*radio*radio*radio;
        //var densidad= masa/volumen;
        var W=(2*Math.PI)/T;
        var d=document.getElementById("resultadoA");
        d.innerHTML=W+' rad/seg';
        }
    
