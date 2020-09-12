function changeColor(){
        var x=["red","green","yellow","white","grey", "orange","pink","purple","lightcoral","crimson", "hotpink", "peachpuff","lavender",
              "violet","darkviolet","springgreen","aqua","wheat","tan","peru","azure","honeydew","aliceblue","silver", "bisque" , "powderblue",
              "turquoise", "aquamarine", "lime","magenta", "tomato", "lightsalmon", "indianred" ,"chartreuse","cornflowerblue"];
        var len=x.length;
        var num=0;
        var id=0;
        var color="";
        for(var i=0;i<=11;i++)
        {
          num=Math.floor(Math.random()*len)
          id="#"+i;
          color=x[num];
          $(id).css("color",color);
        }
}
setInterval(changeColor , 800);
      