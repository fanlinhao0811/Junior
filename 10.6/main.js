/**
 * Created by lenovo on 2017/10/6.
 */
var oNav = document.getElementById("nav");
var aLi = oNav.getElementsByTagName("li");
var oContent = document.getElementById("content");
var aDiv = oContent.getElementsByTagName("div");
for(var i=0; i<aLi.length; i++){
    aLi[i].index = i;//��ÿ��li�����Զ������ԣ�����ס��ʱ��i��ֵ
    //�൱��:
    //aLi[0].index = 0;
    //aLi[1].index = 1;
    //aLi[2].index = 2;
    aLi[i].onclick = function(){
        for(var i=0; i<aLi.length; i++){
            aLi[i].className = "";
            aDiv[i].className = "";
        }
        this.className = "selected";//class������
        aDiv[this.index].className = "selected";
    };
}