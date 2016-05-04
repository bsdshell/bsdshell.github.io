var clip = function(el) {
    'use strict';
  var range = document.createRange();
  range.selectNodeContents(el);
  var sel = window.getSelection();
  sel.removeAllRanges();
  sel.addRange(range);
  //alert(sel);
  try{
      document.execCommand('copy');
  }catch(err){
      alert('Please press Ctrl/Cmd+C to copy');
  }
};
