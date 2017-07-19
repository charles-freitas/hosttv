<script language="JavaScript">
// Função para montar a String do Relógio
function showTimer() {
   var time = new Date();

   // Obtendo a Data
   var dia = time.getDate();
   var mes = time.getMonth()+1;
   var ano = time.getYear()+1900;

   //Obtendo a Hora
   var hora    = time.getHours();
   var minuto  = time.getMinutes();
   var segundo = time.getSeconds();

   // Colocando os valores da data com dois dígitos (00)
   if (dia<10) dia = "0" + dia;
   if (mes<10) mes = "0" + mes;

   // Colocando os valores da hora com dois dígitos (00)
   if (hora<10)    hora   = "0" + hora;
   if (minuto<10)  minuto = "0" + minuto;
   if (segundo<10) segundo = "0" + segundo;

   var strRelogio = dia + "/" + mes + "/" + ano + "<br/>" +
                    hora + ":" + minuto + ":" + segundo;

   document.getElementById("timer").innerHTML = strRelogio;
}

// Função que executa showTime() a cada segundo
function initTimer() {
   // O metodo nativo setInterval executa uma determinada funcao em um determinado tempo
   setInterval(showTimer,1000);
}
</script>
