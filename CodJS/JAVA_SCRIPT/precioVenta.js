let prod = "",
  vv = 0,
  igv = 0,
  pv = 0;

prod = prompt("Ingrese el producto: ");
vv = parseFloat(prompt("Ingrese el precio de venta de " + prod + ": "));
igv = vv * 0.19;
pv = vv + igv;
/*
document.write("El igv de " + prod + " es: " + igv + "<br/>");
document.write("El precio de venta de " + prod + " es: " + pv + "<br/>");
*/
//ALT+96 = ACENTOS GRAVES
document.write(`<pre>
                Valor de Venta: ${vv}
                IGV:                 ${igv}
                Precio de Venta:     ${pv}
                </pre>`);

console.log(
  `Valor de Venta\t:${vv}\nIGV\t\t\t\t:${igv}\nPrecio de Venta\t:${pv}`
);
