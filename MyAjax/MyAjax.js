
function get_chart(id,md,ym){
    $.ajax({
        url: "MyAjax/MyAjax.php",
        data: {
            "mode":md,
            "ym":ym
        },
        type:"post",
        DataType:"json",
        
        success: function(res){
            console.log(res);
            var myChart = echarts.init(document.getElementById(id));
            myChart.setOption(res);
        },
        error: function(){
            alert("錯誤!!!");
        }
    });
}

function select_raw(id,mode){
    
}