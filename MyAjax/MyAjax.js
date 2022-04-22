
function get_chart(id,md){
    $.ajax({
        url: "MyAjax/MyAjax.php",
        data: {
            "mode":md
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