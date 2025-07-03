<table border=1 font=14>
<?php
for ($linha = 0; $linha <= 10; $linha++)
{
print "<tr>";
for ($coluna = 0; $coluna <=10; $coluna ++)
{
print "<td> $linha,$coluna</td>";
}
print "</tr>";
}
?>