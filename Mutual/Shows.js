var updateBtn = document.getElementsByClassName("update");
for (var i = 0; i < updateBtn.length; i++) {
  updateBtn[i].addEventListener("click", Update);
}
var Del = document.getElementsByClassName("del");
for (var j = 0; j < Del.length; j++) {
  Del[j].addEventListener("click", deleteFun);
}

function Update(e) {
  var a = e.target.parentElement.parentElement;
  var div = document.getElementById("up");

  var form = document.createElement("form");
  form.method = "POST";
  form.action = "updateRow.php";

  var sno = document.createElement("input");
  sno.name = "sno";
  sno.type = "number";
  //sno.disabled = true;
  sno.value = a.children[0].innerText;

  var Folio = document.createElement("input");
  Folio.name = "folio";
  Folio.type = "number";
  Folio.value = a.children[1].innerText;

  //div.appendChild(Folio);

  var Name = document.createElement("input");
  Name.name = "name";
  Name.type = "text";
  Name.value = a.children[2].innerText;

  var address = document.createElement("input");
  address.name = "address";
  address.type = "textarea";
  address.value = a.children[3].innerText;

  var Pincode = document.createElement("input");
  Pincode.name = "pincode";
  Pincode.type = "number";
  Pincode.value = a.children[4].innerText;

  var PhNos = document.createElement("input");
  PhNos.name = "PhNos";
  PhNos.type = "text";
  PhNos.value = a.children[5].innerText;

  var Email = document.createElement("input");
  Email.name = "Email";
  Email.type = "email";
  Email.value = a.children[6].innerText;

  var Nominee = document.createElement("input");
  Nominee.name = "Nominee";
  Nominee.type = "text";
  Nominee.value = a.children[7].innerText;

  var pan = document.createElement("input");
  pan.name = "pan";
  pan.type = "text";
  pan.value = a.children[8].innerText;

  var amc = document.createElement("input");
  amc.name = "AMC";
  amc.type = "text";
  amc.value = a.children[9].innerText;

  var type = document.createElement("input");
  type.name = "type";
  type.type = "text";
  type.value = a.children[10].innerText;

  var units = document.createElement("input");
  units.name = "Units";
  units.type = "number";
  units.value = a.children[11].innerText;

  var purchaseValue = document.createElement("input");
  purchaseValue.name = "PurchaseValue";
  purchaseValue.type = "number";
  purchaseValue.value = a.children[12].innerText;

  var currentValue = document.createElement("input");
  currentValue.name = "CurrentValue";
  currentValue.type = "number";
  currentValue.value = a.children[13].innerText;

  var sub = document.createElement("input");
  sub.type = "submit";
  sub.name = "submit";
  sub.value = "submit";

  form.appendChild(sno);
  form.appendChild(Folio);
  form.appendChild(Name);
  form.appendChild(address);
  form.appendChild(Pincode);
  form.appendChild(PhNos);
  form.appendChild(Email);
  form.appendChild(Nominee);
  form.appendChild(pan);
  form.appendChild(amc);
  form.appendChild(type);
  form.appendChild(units);
  form.appendChild(purchaseValue);
  form.appendChild(currentValue);
  form.appendChild(sub);
  div.appendChild(form);
  // var up=document.getElementById('id');
  // var name=document.createElement('input');
  // name.placeholder=a.
  // up.add
}

function deleteFun(x) {
  var b = x.target.parentElement.parentElement.innerText;
  b = b.split("\t");
  b.pop();
  console.log(b);

  var choice;
  if (confirm("Are you sure you want to delete it?") === true) {
    choice = "deleted successfully";
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "recyclebin.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(
      JSON.stringify({
        value: b,
      })
    );
  } else {
    choice = "Deletion failed";
  }
  console.log(choice);
}
