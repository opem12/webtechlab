function getDataFromForm() {
  const firstName = document.getElementById("fname").value;
  const lastName = document.getElementById("lname").value;

  runAjax(firstName, lastName);
}

function runAjax(fname, lname) {
  const xhr = new XMLHttpRequest();


  const url = `./ajax.php?firstname=${fname}&lastname=${lname}`;

  xhr.open("GET", url, true);

  xhr.onload = function () {
    if (xhr.status === 200) {

      if (typeof xhr.responseText === "string") {
        document.getElementById("responseString").textContent = xhr.responseText;
      }
{
      }
      
    }
  };

  xhr.send();
}
