window.onload = function(e){
  var doden = document.querySelector('#doden'),
      gewond = document.querySelector('#gewonden'),
      dakloos = document.querySelector('#dakloos'),
      alleen = document.querySelector('#alleen');

  function countNumbers(id,offset){
    var interval = offset/100;
    var count = 0;
    setInterval(function(){
      if (offset > count) {
        count = count +interval;
        id.innerHTML = count;
      }
    },50);
  }
  countNumbers(doden,80000);
  countNumbers(gewond,160000);
  countNumbers(dakloos,46000);
  countNumbers(alleen,960000);
}
