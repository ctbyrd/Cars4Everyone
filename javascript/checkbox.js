/*
 * Creates what checkboxs have been selected.
 */
var valueschecked = {};
  function hasBeenCheck(checkboxElement) {
    if (checkboxElement.checked) {
      if (checkboxElement.name in valueschecked) {
        valueschecked[checkboxElement.name].push(checkboxElement.value);
      } else {
        valueschecked[checkboxElement.name] = [checkboxElement.value];
      }
      // value = valueschecked[checkboxElement.name];
      // alert ("Value " + checkboxElement.value +
      //        "\nClass " + checkboxElement.name + "is checked.\n");
      console.log(checkboxElement.value + " has been added.\n" + valueschecked);
    }
    else {
      if (valueschecked[checkboxElement.name].length == 1){
         delete valueschecked[checkboxElement.name];
      }
      else{
        console.log("Array Before: " + valueschecked[checkboxElement.name] + "\n");
        for(var i = 0; i < valueschecked[checkboxElement.name].length; i++){
          console.log(i + ": " + valueschecked[checkboxElement.name][i] +"\n");
          console.log()
          if (valueschecked[checkboxElement.name][i] === checkboxElement.value) {
            console.log("Removing NOW: " + valueschecked[checkboxElement.name][i] + "\n")
            valueschecked[checkboxElement.name].splice(i, 1);
          }
        }
        //alert (checkboxElement + "is unchecked.");
      }
      console.log(checkboxElement.value + " has been remove.\n" + valueschecked[checkboxElement.name]);
  }
};
