$(document).ready(function(){
    $("#btnReg").click(function(){
                       window.location.href = "./registrarion.php";
    });
    $("#btcRegCancel").click(function(){
                       window.location.href = "./index.php";
    });
    $("#getDateFromDb").click(function(){
        
        //alert($("#betweenDate").val().toString());
        //alert(123);
        $("#titleForReport").append("<p>Оборотная ведомость за период с "+$("#betweenDate").val().toString()+" до "+$("#toDate").val().toString()+"</p>");
        $.post('./query.php',
        {'getDateFromDb':'1','between':$("#betweenDate").val(),to:$("#toDate").val()},
        function (res) { 
            var d = JSON.parse(res);
            console.log(d.mass);
            var title=["Кол-во человек","Льгота","Период","начисления","сумма льготы","оплочено","супсидия","скидка","всего начислено","входящее сальдо","исходящее сальдо"];
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
                    if (j<=4||j==6||j==8||j==9||j>=19) continue;
                    if (j==7)
                    {
                        if (d.mass[i][j] == " ")
                        {
                            $("#tableTr"+i).append('<td>Нет льготы</td>');
                            continue;
                        }
                        else{
                            $("#tableTr"+i).append('<td>Есть льготы</td>');
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
        window.location.href = "./index.php";
        
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
