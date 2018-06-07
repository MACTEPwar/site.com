$(document).ready(function(){
    $("#printReport").click(function(){
        pr = document.getElementById('tableReport').outerHTML;  
        pr2 = document.getElementById('headerUser').outerHTML;  
        pr3 = document.getElementById('titleForReport').outerHTML; 
        pr4 = document.getElementById('newLgota').outerHTML; 
        newWin=window.open('','printWindow','Toolbar=0,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0'); 
        newWin.document.open();
        newWin.document.write('<html><head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><link href="./css/style.css" rel="stylesheet"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"></head><body onafterprint="window.close();"><div class="container"><div class="row"><div class="col">'+pr2+'</div><div class="col">'+pr3+'</div></div><div class="row">'+pr4+'</div><div class="row">'+pr+'</div></div><script>$(document).ready(function(){window.print();});</script></body></html>'); 
        
        newWin.document.close(); 
        
    });
    $("#btnReg").click(function(){
                       window.location.href = "./registrarion.php";
    });
    $("#btcRegCancel").click(function(){
                       window.location.href = "./vedomost.php";
    });
    $("#getDateFromDb").click(function(){
        remuveChild("tableReport");
        $("#tableReport").append('<thead class="thead-inverse" id="tThr"></thead>');
        remuveChild("titleForReport");
        remuveChild("newLgota");
        //alert($("#betweenDate").val().toString());
        //alert(123);
        $("#titleForReport").append("<p>Оборотная ведомость за период с "+$("#betweenDate").val().toString()+" до "+$("#toDate").val().toString()+"</p>");
        $.post('./query.php',
        {'getDateFromDb':'1','between':$("#betweenDate").val(),to:$("#toDate").val()},
        function (res) { 
            var d = JSON.parse(res);
            console.log(d.mass);
            var title=["Период","Постоянные начисления","Сумма льготы","Оплочено","Субсидия","Всего начислено","Долг на начало периода","Долг на конец периода","Количестов человек"];
            $("#tThr").append("<tr id='tt0'>");
            title.forEach(function(item, i, arr){
                $("#tThr").append("<th>"+item+"</th>");
            });
            $("#tThr").append("</tr>");
            for (var i=0;i<d.mass.length;i++)
            {
                $("#tableReport").append('<tr id=tableTr'+i+'></tr>');
                for(var j=0;j<d.mass[i].length;j++)
                {
                    if (j<=6||j==8||j==9||j==12||j==19||j==20||j==21||j>=23) continue;
                    if (j==7)
                    {
                        if (d.mass[i][j] == " ")
                        {
                            $("#newLgota").append("Нет льготы");
                            continue;
                        }
                        else{
                            $("#newLgota").append(d.mass[i][j]);
                            continue;
                        }
                    }
                    $("#tableTr"+i).append('<td>'+d.mass[i][j]+'</td>');
                }
            }
        });
    });
    $("#logOut").click(function(){
        deleteCookie("PHPSESSID");
        window.location.href = "./vedomost.php";
        
    });
    $('#regForm').on('submit', function(e) {
        //regFirstname
        //regName
        //regPatronymic
        //lsOne
        //lsTwo
        //passOne
        //passTwo
        //regEmail
        //regPhone
        //regAddress
        if ($("#regFirstname").val() == "" || $("#regName").val() == "" || $("#regPatronymic").val() == "" || $("#lsOne").val() == "" || $("#passOne").val() == "" || $("#regEmail").val() == "" || $("#regPhone").val() == "" || $("#regAddress").val() == "") 
        {
            alert("Заполните все поля");
            //$("#lsTwo").style.borderColor = "#ccc";
            //$("#lsTwo").css('border-color','red');
            return false;
        }
        if ($("#lsOne").val() != $("#lsTwo").val())
        {
            alert("Проверьте правильность ввода лицевого счета");
            
            return false;
        }
        if ($("#passOne").val() != $("#passTwo").val())
        {
            alert("Проверьте правильность ввода пароля");
            return false;
        }
    });
    
    $("#lsTwo").on('input',function(){
        if ($("#lsTwo").val() != $("#lsOne").val())
        {
            $("#lsTwo").css('border-color','red');
            $("#lsTwo").css('background-color','#ffcccc');
            
            
        }
        else{
            $("#lsTwo").css('border-color','green');
            $("#lsTwo").css('background-color','rgb(207, 255, 208)');
        }
    });
    $("#regFirstname").on('input',function(){
        if(valid("regFirstname",/[а-яА-Я]{1,}/)){
            $("#regFirstname").removeClass("classDenied");
            $("#regFirstname").addClass("classAccept");
        }
        else{
            $("#regFirstname").removeClass("classAccept");
            $("#regFirstname").addClass("classDenied");
        }
    });
    $("#regName").on('input',function(){
        if(valid("regName",/[а-яА-Я]{1,}/)){
            $("#regName").removeClass("classDenied");
            $("#regName").addClass("classAccept");
        }
        else{
            $("#regName").removeClass("classAccept");
            $("#regName").addClass("classDenied");
        }
    });
    $("#regPatronymic").on('input',function(){
        if(valid("regPatronymic",/[а-яА-Я]{1,}/)){
            $("#regPatronymic").removeClass("classDenied");
            $("#regPatronymic").addClass("classAccept");
        }
        else{
            $("#regPatronymic").removeClass("classAccept");
            $("#regPatronymic").addClass("classDenied");
        }
    });
    $("#lsOne").on('input',function(){
        if(valid("lsOne",/[0-9]{4,16}/)){
            $("#lsOne").removeClass("classDenied");
            $("#lsOne").addClass("classAccept");
        }
        else{
            $("#lsOne").removeClass("classAccept");
            $("#lsOne").addClass("classDenied");
        }
    });
    $("#regEmail").on('input',function(){
        if(valid("regEmail",/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/gm)){
            $("#regEmail").removeClass("classDenied");
            $("#regEmail").addClass("classAccept");
        }
        else{
            $("#regEmail").removeClass("classAccept");
            $("#regEmail").addClass("classDenied");
        }
    });
});

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
function deleteCookie(name) {
  setCookie(name, "", {
    expires: -1
  })
}
function setCookie(name, value, options) {
  options = options || {};

  var expires = options.expires;

  if (typeof expires == "number" && expires) {
    var d = new Date();
    d.setTime(d.getTime() + expires * 1000);
    expires = options.expires = d;
  }
  if (expires && expires.toUTCString) {
    options.expires = expires.toUTCString();
  }

  value = encodeURIComponent(value);

  var updatedCookie = name + "=" + value;

  for (var propName in options) {
    updatedCookie += "; " + propName;
    var propValue = options[propName];
    if (propValue !== true) {
      updatedCookie += "=" + propValue;
    }
  }

  document.cookie = updatedCookie;
}
function valid(id,mask){
    var reg = mask;
    if ($("#"+id).val().length == 0) return false;
    var arr = reg.exec($("#"+id).val());
    if (arr == null) return false;
    var a = arr[0];
    if (a.length == 0) return false;
    if (a.length == $("#"+id).val().length)
    return true;
    else return false;
}
function remuveChild(child){
    var myNode = document.getElementById(child);
    while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    }
}
