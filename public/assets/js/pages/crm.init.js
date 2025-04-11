"use strict";var options={series:[{data:[430,470,540,580,690]}],chart:{type:"bar",height:230,toolbar:{show:!1}},colors:["#3F51B5"],plotOptions:{bar:{borderRadius:0,borderRadiusApplication:"end",horizontal:!0,barHeight:"45%",columnWidth:"80%"}},dataLabels:{enabled:!1},xaxis:{categories:["USA","Canada","UK","Australia","Japan"],labels:{formatter:function(e){return e+"k"}}}},options=((chart=new ApexCharts(document.querySelector("#Revenue_Target"),options)).render(),{chart:{height:262,type:"donut"},plotOptions:{pie:{donut:{size:"75%"}}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},series:[30,20,15,15,20],legend:{show:!0,position:"bottom",horizontalAlign:"center",verticalAlign:"middle",floating:!1,fontSize:"12px",offsetX:0,offsetY:-0},labels:["Closed Won","Objection","Offer","Qualify Lead","Created"],colors:["rgba(64, 82, 236, .9)","rgba(58, 218, 255, .9)","rgba(147, 113, 240, .9)","rgba(0, 0, 0, .9)","rgba(216, 220, 229, .5)"],responsive:[{breakpoint:600,options:{plotOptions:{donut:{customScale:.2}},chart:{height:120},legend:{show:!1}}}],tooltip:{y:{formatter:function(e){return e+" %"}}}}),dash_spark_1=((chart=new ApexCharts(document.querySelector("#Lead_Conversion"),options)).render(),{chart:{type:"area",height:25,sparkline:{enabled:!0}},stroke:{curve:"straight",width:1},fill:{opacity:1,gradient:{shade:"#00c3bf",type:"vertical",shadeIntensity:.9,inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[0,80,90],colorStops:[]}},series:[{data:[0,0,0,2,0,0,0,0,0,10,0,0,0,5,0,0,0,0,5,0,0,0,0,0,0,0,2,0,0,0,0,0,10,0,0,0,5,0,0,0,0,5,0,0,0,0]}],yaxis:{min:0},colors:["#00c3bf"]}),dash_spark_2=(new ApexCharts(document.querySelector("#dash_spark_1"),dash_spark_1).render(),{chart:{type:"area",height:25,sparkline:{enabled:!0}},stroke:{curve:"straight",width:1},fill:{opacity:1,gradient:{shade:"#2766ec",type:"vertical",shadeIntensity:.89,inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[0,80,90],colorStops:[]}},series:[{data:[0,0,0,0,0,3,0,0,0,5,0,0,0,0,10,0,0,0,0,2,0,0,0,0,0,0,0,3,0,0,0,5,0,0,0,0,10,0,0,0,0,2,0,0]}],yaxis:{min:0},colors:["#2766ec"]}),chart=(new ApexCharts(document.querySelector("#dash_spark_2"),dash_spark_2).render(),{series:[{name:"2024",data:[2.7,2.2,1.3,2.5,1,2.5,1.2,1.2,2.7,1,3.6,2.1]},{name:"2023",data:[-2.3,-1.9,-1,-2.1,-1.3,-2.2,-1.1,-2.3,-2.8,-1.1,-2.5,-1.5]}],chart:{toolbar:{show:!1},type:"bar",fontFamily:"inherit",foreColor:"#adb0bb",height:230,stacked:!0,offsetX:-15},colors:["var(--bs-warning)","var(--bs-info)"],plotOptions:{bar:{horizontal:!1,barHeight:"80%",columnWidth:"20%",borderRadius:[0],borderRadiusApplication:"end",borderRadiusWhenStacked:"all"}},dataLabels:{enabled:!1},legend:{show:!1},grid:{show:!0,strokeDashArray:3,padding:{top:0,bottom:0,right:0},borderColor:"rgba(0,0,0,0.05)",xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}}},yaxis:{min:-5,max:5},yaxis:{tickAMaterialy:4},xaxis:{axisBorder:{show:!1},axisTicks:{show:!1},categories:["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"]}});(chart=new ApexCharts(document.querySelector("#Vendors"),chart)).render();