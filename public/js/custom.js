$("body").on("submit",".s_f_ajax",function(e){e.preventDefault();var t=$(this),a=t.data("url");return $.ajax({method:"POST",dataType:"json",url:a,data:new FormData(this),cache:!1,contentType:!1,beforeSend:function(){},processData:!1,success:function(e){e=e,t.trigger("reset"),alert(e.message)},error:function(e,t,a){}}),!1});