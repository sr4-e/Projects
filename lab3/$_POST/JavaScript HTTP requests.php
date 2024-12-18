<!DOCTYPE html>
<html>
<script>
function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_JS.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=SAMR");
}
</script>
<body>

<button onclick="myfunction()">Click me!</button>

<h1 id="demo"></h1>

</body>
</html>