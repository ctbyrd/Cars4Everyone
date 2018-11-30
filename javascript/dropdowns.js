/*
 * Used for interactions with the dropdowns
 */
var sortbyvalue = "";
var orderbyvalue = "";

function SortByDropdownChange(Element) {
  sortbyvalue = Element.value;
  console.log(sortbyvalue);
}

function OrderByDropdownChange(Element) {
  orderbyvalue = Element.value;
  console.log(orderbyvalue);
}
