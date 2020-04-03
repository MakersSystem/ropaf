function calc()
{
  var n1 = parseFloat(document.getElementById('hombres').value);
  var n2 = parseFloat(document.getElementById('mujeres').value);

  document.getElementById('total').value = n1+n2;
}

function calcdir()
{
  var n1 = parseFloat(document.getElementById('hombresdir').value);
  var n2 = parseFloat(document.getElementById('mujeresdir').value);

  document.getElementById('totaldir').value = n1+n2;
}

function calc2()
{
  var n3 = parseFloat(document.getElementById('sochombres').value);
  var n4 = parseFloat(document.getElementById('socmujeres').value);

  document.getElementById('soctotal').value = n4+n3;
}
